<?php
/**
 * Created by PhpStorm.
 * User: liuyutao
 * Date: 2018/4/18
 * Time: 14:00
 */

namespace app\admin\controller;


use app\admin\model\Auth_rule;

class Authrule extends Common
{
    /**
     * 显示权限列表
     */
    public function lst(){
        $a=new Auth_rule();
        $arr=$a->getRuleTree();
//        dump($arr);
        $this->assign("arr",$arr);
        return view();
    }

    /**
     * 显示权限添加
     */
    public function add(){
        if ($this->request->isGet()){
        $a=new Auth_rule();
        $arr=$a->getRuleTree();
//        dump($arr);
        $this->assign("arr",$arr);

        }
        else if ($this->request->isPost()){
            $title=input("post.title");
            $name=input("post.name");
            $i=new Auth_rule();
            $id=$i->add($title,$name);
            $this->success("加好了，滚吧！","lst");
        }
        return view();
    }
    public function edit(){
        if ($this->request->isGet()){
            $id=input("id");
            $a=new Auth_rule();
            $edit=$a->getEdit($id);
            $arr=$a->getRuleTree();
            $this->assign("arr",$arr);
//            dump($edit);
            $this->assign("edit",$edit);
        }
        else if ($this->request->isPost()){
        $id=input("id");
        $title=input("post.title");
        $name=input("post.name");
        $a=new Auth_rule();
        $a->edit($id,$name,$title);
        $this->success("修改成功！","lst");

        }
        return view();
    }
    /**
     * 删除数据
     */
    public function del(){
        $id=input("id");
        $del=new Auth_rule();
        $del->getDel($id);
        $this->success("删除成功！","lst");
    }



}