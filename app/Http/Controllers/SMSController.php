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
        // $link = 'https://artcha.herokuapp.com/detect/' . $numEncrypt;
        $link = 'https://a89c6efa216b.ngrok.io /detect/'.$numEncrypt;
        Nexmo::message()->send([
            'to' => $to,
            'from' => 'ARTCHA',
            'text' => 'Scan the marker using this link >>> ' . $link . '  <<< '
        ]);
        return response()->json($request->phone);
    }
}
