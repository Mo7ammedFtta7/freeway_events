<?php

namespace Amarousepay\Laravelgateway;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Laravelgateway
{
    public static function getPublicKey()
    {
        $PublicKey = Cache::get('AmarousePayPublickey', function () {
            $response = Http::withHeaders(
                ['Accept' => 'application/json']
            )->post("https://pay.amarouse.com:23666/api/login", [
                "IMEI"=>"123456789",
                "channelId"=>"3",
                "serviceId"=>"30012",
                "smartUserName"=>"hyevent",
                "smartUserPassword"=>"RWWnzGMaAWy136MouVEY+ToA5jCNG0h7eY3H0IN3/WvD2CGIyP3DEX8uRXENPJc6OQXBa7ma4Qylg+zZKSe/e6CrHkw9CcpZG1ABGuTlxo26UYBqRz3aYMa1i9dhNLQNgKbRSEGMD7QmRJO3UerHinrbMWvtslq/lsyuK2iZaBQ="
            ]);
            return $response->json()['PublicKey'];
        });
        Cache::set('AmarousePayPublickey', $PublicKey );
        return $PublicKey;
    }

    public static function encrypt($data)
    {
        // $rsa = new Crypt_RSA();
        // $rsa->loadKey($this->getPublicKey());
        // $rsa->setEncryptionMode(2);
        // $output = $rsa->encrypt($data);
        // return base64_encode($output);
       // dd(Config::get( 'app.cipher' ) );
       $key="MFwwDQYJKoZIhvcNAQEBBQADSwAwSAJBANx4gKYSMv3CrWWsxdPfxDxFvl+Is/0kc1dvMI1yNWDXI3AgdI4127KMUOv7gmwZ6SnRsHX/KAM0IPRe0+Sa0vMCAwEAAQ==";
       //$plaintext = "message to be encrypted";
        $ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
        $iv = openssl_random_pseudo_bytes($ivlen);
        $ciphertext_raw = openssl_encrypt($data, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
        $hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
        $ciphertext = base64_encode( $iv.$hmac.$ciphertext_raw );
      dd($ciphertext);
        
        return $ciphertext;
    }

    public static function doPay($IPIN,$uuid,$pan,$expYear,$expMonth,$amount)
    {

    }

    public static function doTransaction($IPIN,$uuid,$pan,$expYear,$expMonth,$amount)
    {
        //dd($expYear.$expMonth);
            $response = Http::withHeaders(
                ['Accept' => 'application/json']
            )->post("https://pay.amarouse.com:23666/api/processService", [
                "IMEI"=>"123456789",
                "channelId"=>"3",
                "serviceId"=>"70111",
                "paymentMethodId"=>"6",
                "customerId"=>"34865154",
                "PAN"=>$pan,
                "expDate"=>$expYear.$expMonth,
                "amount"=>$amount,
                "internetPin"=>$IPIN,
                "tranUID"=>$uuid,
                "date"=>Carbon::now()->format('dmyhhmmss')
                ]);
           return $response->json();
       // });
      // return "ss";
    }
}