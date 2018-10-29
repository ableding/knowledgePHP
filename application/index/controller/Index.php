<?php

namespace app\index\controller;

use \think\Request;

class Index
{
    public function index()
    {
        $data = array(
            'greeting' => 'Hello',
            'obj'      => 'World',
        );
        $code = 200;
        $msg = 'ok';
        return json_encode(['data'    => $data,
                            'code'    => $code,
                            'message' => $msg
        ]);
        //don't use the command 'json',or it will not be able to open and instead of download on IE
    }

    public function getStatus()
    {
        $request = Request::instance();
        echo "Request Method: " . $request->method() . '<br/>';
        echo "Ip Address: " . $request->ip() . '<br/>';
        echo 'Request Parameter: ';
        dump($request ->param())    ;
        echo '请求参数(仅含name): ';
        dump($request ->only(['name']));
        echo'请求参数(排除name): ';
        dump($request ->except(['name']));
    }


}

