<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;

class BroadcastSms extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function Send()
    {
        $AT = new AfricasTalking('sandbox', '20c16062337b23c37b20c89d63851a525cbbfc7b38c5e4bb8a84098d9c378480');
        $sms      = $AT->sms();
        $result   = $sms->send([
            'to'      => '255757221600',
            'message' => 'Bruno Hapa!',


        ]);
        dd($result);
    }
}
