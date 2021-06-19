<?php

namespace App\Http\Controllers;

use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Http\Request;

class SMSController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        //
        $to = $request->phone;
        // Nexmo::message()->send([
        //     'to' => $to,
        //     'from' => 'artcha',
        //     'text' => 'this link, https://7b09eafe80ea.ngrok.io <<<<<<<< '
        // ]);

        return response()->json($data);
    }
}
