<?php
/**
 * Created by PhpStorm.
 * User: liuyutao
 * Date: 2018/4/5
 * Time: 13:49
 */

namespace app\index\controller;


class Imglist extends Common
{
    public function index($cateid){
        $cate=new \app\index\model\Article();
        $cateid=$cate->getCteid($cateid);
//        print_r($cateid);
        $this->assign('cateid',$cateid);
        return $this->fetch('imglist');
    }
}