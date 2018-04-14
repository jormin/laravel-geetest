<?php
    Route::get('geetest', ['as'=>'geetest','uses'=>'Jormin\Geetest\Controllers\GeetestController@captcha', 'middleware' => 'web']);
