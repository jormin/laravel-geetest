<?php

return [

    /*
	|--------------------------------------------------------------------------
	| Config Width
	|--------------------------------------------------------------------------
	|
	| Here you can config width of button.
	|
	| Options: ['px', '%', 'em', 'rem', 'pt']
	|
	*/

    'width' => '300px',

    /*
	|--------------------------------------------------------------------------
	| Config Language
	|--------------------------------------------------------------------------
	|
	| Here you can config your local language.
	|
	| Options: ['zh-cn', 'en', 'zh-tw', 'ja', 'ko', 'th']
	|
	*/

    'lang' => 'zh-cn',

    /*
	|--------------------------------------------------------------------------
	| Config Product
	|--------------------------------------------------------------------------
	|
	| Here you can config your product.
	|
	| Options: ['popup', 'float']
	|
	*/

    'product' => 'popup',

    /*
    |--------------------------------------------------------------------------
    | Config Geetest Id
    |--------------------------------------------------------------------------
    |
    | Here you can config your geetest id from https://account.geetest.com.
    |
    */

    'geetest_id' => env('GEETEST_ID'),

    /*
    |--------------------------------------------------------------------------
    | Config Geetest Key
    |--------------------------------------------------------------------------
    |
    | Here you can config your geetest key from https://account.geetest.com.
    |
    */

    'geetest_key' => env('GEETEST_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Config Client Fail Alert Text
    |--------------------------------------------------------------------------
    |
    | Here you can config the alert text when it failed in client.
    |
    */

    'client_fail_alert' => '请完成验证码',

    /*
    |--------------------------------------------------------------------------
    | Config Server Fail Alert
    |--------------------------------------------------------------------------
    |
    | Here you can config the alert text when it failed in server (two factor validation).
    |
    */

    'server_fail_alert' => '验证码校验失败',

];
