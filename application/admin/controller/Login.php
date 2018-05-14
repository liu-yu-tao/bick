<?php
/**
 * Created by PhpStorm.
 * User: liuyutao
 * Date: 2018/4/11
 * Time: 14:06
 */

namespace app\admin\controller;


use app\admin\model\Admin;
use app\admin\model\Auth_group;
use app\admin\model\Auth_group_access;
use app\admin\model\Auth_rule;
use think\Controller;

class Login extends Controller
{
    public function index(){
//        $this->view->engine->layout(false);
        return view("login");
    }
    public function checklogin(){
        //验证验证码是否正确
        $cap=input("post.captcha");

        //验证码正确
        if (captcha_check($cap)){
            $admin=new Admin();
            $arr=$admin->check();
            if ($arr){
//                session_start();
                session("users",$arr);//存入session

                //登录用户的id
                $uid=$arr["id"];
                //查询用户组id
                $group=new Auth_group_access();
                $groupid=$group->groupId($uid);
                //获取用户组权限id
                $rule=new Auth_group();
                $rules=$rule->getRules($groupid);
                //获取对应权限名
                $url=new Auth_rule();
                $urlArr=$url->getUrl($rules);
//                dump($urlArr);

                session("urlArr",$urlArr);


                $this->success("登陆成功","index/index");
            }
            else{
                $this->error("登陆失败");
            }
        }
        else{
            $this->error("验证码错了");
        }


    }
    public function outlogin(){
        // 删除 session.users
//        unset($_SESSION["user"]);
        session("users",null);
        $this->redirect('index');
    }
}