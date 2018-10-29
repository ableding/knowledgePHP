<?php
namespace app\api\controller;
use \think\Request;

class action
{
    public function getStatus()
    {
        $request = Request::instance();
        echo "Request Method: " . $request->method() . '<br/>';
        echo "Ip Address: " . $request->ip() . '<br/>';

    }
}