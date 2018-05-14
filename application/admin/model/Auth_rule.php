<?php
/**
 * Created by PhpStorm.
 * User: liuyutao
 * Date: 2018/4/12
 * Time: 16:46
 */

namespace app\admin\model;


use think\Model;

class Auth_rule extends Model
{
    /**
     * @param $rule   1,9,
     */
    public function getUrl($rule){
        $urlArr=db("bk_auth_rule")
            ->where("id","in",$rule)
            ->column("name");
        return $urlArr;
    }


    public function getRuleTree(){
        $all=db("bk_auth_rule")->select();
        $arr=$this->getRule($all,0);
        return $arr;
    }


    public function getRule($arr,$pid){
        static $array=array();
        foreach ($arr as $k=>$v){
            if ($v["pid"]==$pid){
                $array[]=$v;
                //递归调用
                $this->getRule($arr,$v["id"]);
            }
        }
        return $array;
    }

    public function add($title,$name){
        $id=db("bk_auth_rule")
            ->insertGetId(["title"=>$title,"name"=>$name]);
        return $id;
    }

    public function getEdit($id){
        $arr=db("bk_auth_rule")
            ->where("id",$id)
            ->find();
        return $arr;
    }

    public function edit($id,$name,$title){
        db("bk_auth_rule")
            ->where("id=$id")
            ->update(["title"=>$title,"name"=>$name]);
    }

    public function getDel($id){
        db("bk_auth_rule")
            ->where("id=$id")
            ->delete();
    }
}