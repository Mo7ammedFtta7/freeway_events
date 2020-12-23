<?php
namespace Amarousepay\Laravelgateway\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Config;
    use Illuminate\Support\Facades\Http;
    use Illuminate\Support\Str;
    use \Amarousepay\Laravelgateway\Laravelgateway as laraClass;

    class AmarousePayController extends Controller {

        public function index(request $request)
        {
          //  dd($request->all());
           return view('laravelgateway::payment');
        }

        public function pay(Request $request)
        {
            
            // $validator=$request->validate([
            //     'PAN' => 'required|numeric|digits_between:13,19',
            //     'IPIN' => 'required|numeric|digits:4',
            //     'ExpMon' => 'required|numeric|digits:2',
            //     'ExpYear' => 'required|numeric|digits:2',
            // ]);

            $input=$request->all();
            $uuid=(string) Str::uuid();
            //$IPIN=$uuid.$input['IPIN'];
            $IPIN="8080";

            $encryptedIPIN=laraClass::encrypt($IPIN);
            dd($encryptedIPIN);
            $res=laraClass::doTransaction($encryptedIPIN);
            dd($res);
            // $rsa = new RSA();
            // dd($rsa);
           // Config::set('app',"ssss");
            //dd(Config::get('laravelgateway.IMEI'));

            //  if (!$validator->fails())
            // {
               // dd(laraClass::encrypt('ssssssssssssssss'));
               
                return response()->json($encryptedIPIN);
            //} 
        //    else
        //     return $validator->errors();
        }


    }