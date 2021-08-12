<?php

namespace App\Http\Controllers;

use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class SMSController extends Controller
{
    public function index(Request $request)
    {
        // $num = '2,4,7';
        $num = $request->num[0] . ',' . $request->num[1] . ',' . $request->num[2];
        $numEncrypt = Crypt::encryptString($num);
        $baseURL = url('/');
        $to = $request->phone;
        // $link = $baseURL . '/detect/' . $numEncrypt;
        $link = 'https://artcha.herokuapp.com/detect/' . $numEncrypt;
        // $link = 'https://4ae1c4c60275.ngrok.io/detect/'.$numEncrypt;
        // Nexmo::message()->send([
        //     'to' => $to,
        //     'from' => 'ARTCHA',
        //     'text' => 'Scan the marker using this link >>> ' . $link . '  <<< '
        // ]);
        $basic  = new \Vonage\Client\Credentials\Basic("1f659da8", "sQiQJfxfYhYhN13p");
        $client = new \Vonage\Client($basic);
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS($to, 'ARTCHA', 'Scan the marker using this link >>> ' . $link . '  <<< ')
        );
        return response()->json($request->phone);
    }
}
