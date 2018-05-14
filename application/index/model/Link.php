<?php
/**
 * Created by PhpStorm.
 * User: liuyutao
 * Date: 2018/4/6
 * Time: 15:07
 */

namespace app\index\model;


use think\Model;

class Link extends Model
{
    public function index(){
        $arr=db('bk_link')
            ->field('title,url,desc')
            ->select();
        return $arr;
    }
}