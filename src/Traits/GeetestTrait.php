<?php

namespace Jormin\Geetest\Traits;

use Jormin\Geetest\Facades\Geetest;

trait GeetestTrait
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function captcha()
    {
        $user_id = 'test';
        $status = Geetest::preProcess(['user_id'=>$user_id]);
        session()->put('gtserver',$status);
        session()->put('user_id',$user_id);
        echo Geetest::getResponseStr();
    }
}
