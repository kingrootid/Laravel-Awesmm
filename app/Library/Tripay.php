<?php

namespace App\Library;

use Illuminate\Support\Facades\Auth;

class Tripay
{
    protected $api_PKey = '';
    protected $api_Key = '';
    protected $api_URL = '';
    protected $api_Merchant = '';

    public function __construct()
    {
        $this->api_PKey = config('configApp.tripay.api_private');
        $this->api_Key = config('configApp.tripay.api_key');
        $this->api_Merchant = config('configApp.tripay.merchant_code');
        $this->api_URL = config('configApp.tripay.api_url');
    }

    private function curl_get($path, $payload = null)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => $this->api_URL . $path . ($payload ? '?' . http_build_query($payload) : ''),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer ' . $this->api_Key, 'Content-Type: application/json'],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4,
        ));

        $response = curl_exec($curl);
        if (curl_errno($curl) != 0 && empty($response)) {
            $result = false;
        }
        $result = json_decode($response, TRUE);

        curl_close($curl);

        return $result;
    }

    private function curl_post($path, $payload)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => $this->api_URL . $path,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer ' . $this->api_Key],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($payload),
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);
        $result = json_decode($response, TRUE);
        curl_close($curl);

        return $result;
    }
    public function createSignature($payload)
    {
        $privateKey = $this->api_PKey;
        $merchantCode = $this->api_Merchant;
        $merchantRef = $payload['merchant_ref'];
        $amount = $payload['amount'];
        return hash_hmac('sha256', $merchantCode . $merchantRef . $amount, $privateKey);
    }
    public function getPaymentChannel()
    {
        $data = $this->curl_get('/merchant/payment-channel');
        return $data;
    }
    public function calculatorFee($code, $amount)
    {
        $data = $this->curl_get('/merchant/fee-calculator/', ['code' => $code, 'amount' => $amount]);
        return $data;
    }
    public function getPaymentChannelDetail($code)
    {
        $data = $this->curl_get('/merchant/payment-channel', ['code' => $code]);
        return $data;
    }
    public function createOpenPayment($payload)
    {
        $data = $this->curl_post('/open-payment/create', $payload);
        return $data;
    }

    public function createCreatePayment($payload)
    {
        $user = Auth::user();
        $newPayload = [
            'method'            => $payload['method'], // IMPORTANT, dont fill by `getMethod()`!, for more code method you can check here https://tripay.co.id/developer
            'merchant_ref'      => $payload['merchant_ref'],
            'amount'            => $payload['amount'],
            'customer_name'     => $user['name'],
            'customer_email'    => $user['email'],
            'customer_phone'    => $user['phone'],
            'order_items'       => [
                [
                    'sku'         => $payload['merchant_ref'],
                    'name'        => 'DEPOSIT #' . $payload['merchant_ref'],
                    'price'       => $payload['amount'],
                    'quantity'    => 1,
                ]
            ],
            'callback_url'      => url('callback/tripay'),
            'return_url'        => url('redirect/tripay'),
            'expired_time'      => (time() + (24 * 60 * 60)), // 24 jam
            'signature'         => $this->createSignature([
                'merchant_ref' => $payload['merchant_ref'],
                'amount' => $payload['amount'],
            ])
        ]; // set your payload, with more examples https://tripay.co.id/developer
        $data = $this->curl_post('/transaction/create', $newPayload);
        return $data;
    }
}
