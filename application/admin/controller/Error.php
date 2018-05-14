<?php
/**
 * 当请求的控制器不存在时
 * Created by PhpStorm.
 * User: liuyutao
 * Date: 2018/4/12
 * Time: 16:04
 */

namespace app\admin\controller;


class Error  //空控制器
{
    //当请求的方法不存在时，直接请求empty方法
    public function _empty(){
//        header("location:www.baidu.com");
             echo "<h1>404</h1>";
    }
}