<?php
/**
 * Created by PhpStorm.
 * User: liuyutao
 * Date: 2018/4/3
 * Time: 16:08
 */

namespace app\index\model;


use think\Db;
use think\Model;
//数据模型
class Conf extends Model
{   //对应表
    protected $table='bk_conf';
    //查询配置信息
    public function getAll(){
        $conf=db('bk_conf')->select();
        return $conf;
    }
}