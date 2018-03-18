<?php
/**
 * Created by PhpStorm.
 * User: luron
 * Date: 2018/3/14
 * Time: 下午11:05
 */

//echo 123;

//var_dump($_SERVER['REQUEST_URI']);
require_once __DIR__ . '/bootstrap/Route.php';
require_once __DIR__ . '/app/Model/PdoMysql.php';
require_once __DIR__ . '/app/Model/DB.php';


Route::get('/lr/test',function(){
//    $res = DB::select('select * from decision_info');
//    var_dump($res);

//    var_dump($_POST);
   $ascID =  DB::insert('decision_info',$_POST);
    echo json_encode(['status'=>1,'msg'=>'提交成功']);
    exit;

});


//Route::controller('');