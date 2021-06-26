<?php

namespace App\Http\Controllers;

use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class SMSController extends Controller
{
    public function index(Request $request)
    {

        $num = $request->num[0] . ',' . $request->num[1] . ',' . $request->num[2];

        $numEncrypt = Crypt::encryptString($num);

        $to = $request->phone;
        // Nexmo::message()->send([
        //     'to' => $to,
        //     'from' => 'ARTCHA',
        //     'text' => 'Scan the Image using this link >>> https://7b09eafe80ea.ngrok.io <<< '
        // ]);

        return response()->json($numEncrypt);
    }
}
