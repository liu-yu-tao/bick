<?php
/**
 * Created by PhpStorm.
 * User: liuyutao
 * Date: 2018/4/12
 * Time: 16:39
 */

namespace app\admin\model;


use think\Model;

class Auth_group extends Model
{
    /**
     *  根据用户组id查询权限id
     */
    public function getRules($gid){
        $rules=db("bk_auth_group")
            ->where("id",$gid)
            ->value("rules");
        return $rules;
    }

    public function lst(){
        $arr=db("bk_auth_group")
            ->select();
        return $arr;
    }

    public function getSelect(){
        $arr=db("bk_auth_rule")
            ->select();
        return $arr;
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