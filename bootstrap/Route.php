<?php
/**
 * Created by PhpStorm.
 * User: luron
 * Date: 2018/3/14
 * Time: 下午11:12
 */

class Route{
    public static function get($request_url,$fn)
    {
//        echo $request_url;
        $realUrl = $_SERVER['REQUEST_URI'];
//        echo str_replace('/hgpreach/index.php','',$realUrl);
        if($request_url == str_replace('/hgpreach/index.php','',$realUrl)){
            $fn();
            exit;
        }
    }
}