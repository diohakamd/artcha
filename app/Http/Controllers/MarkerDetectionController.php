<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MarkerDetectionController extends Controller
{
    //
    public function index($num){

        $decrypted = Crypt::decryptString($num);
        // echo $decrypted;
        // exit();

        return view('artcha.markerDetection',['num'=>$decrypted]);
    }
}
