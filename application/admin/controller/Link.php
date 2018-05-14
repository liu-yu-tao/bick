<?php
/**
 * 友情链接管理
 * Created by PhpStorm.
 * User: liuyutao
 * Date: 2018/4/12
 * Time: 15:58
 */

namespace app\admin\controller;


class Link extends Common
{
    /**
     * @return 链接地址
     */
    public function lst(){

        $a=new \app\admin\model\Link();
        $arr=$a->getSel();
        $this->assign("arr",$arr);

        return view();
    }

    /**
     * @return 添加数据
     */
    public function add(){
        if ($this->request->isPost()){
        $title=input("post.title");
        $url=input("post.url");
        $desc=input("post.desc");
        $a=new \app\admin\model\Link();
        $a->getAdd($title,$url,$desc);
        $this->success("加好了，滚吧！","lst");
        }
        else if ($this->request->isGet()){
            return view();
        }
    }

    /**
     * @return 修改数据
     */
    public function edit(){
        if ($this->request->isPost()){
            $id=input("id");
            $title=input("post.title");
            $url=input("post.url");
            $desc=input("post.desc");
            $a=new \app\admin\model\Link();
            $a->getUpdate($title,$url,$desc,$id);
            $this->success("修改成功！","lst");

        }
        else if ($this->request->isGet()){
            $id=input("id");
            $a=new \app\admin\model\Link();
            $edit=$a->getEdit($id);
//            dump($edit);
            $this->assign("edit",$edit);
        }
        return view();
    }

    /**
     * 删除数据
     */
    public function del(){
        $id=input("id");
        $del=new \app\admin\model\Link();
        $del->getDel($id);
        $this->success("删除成功！","lst");
    }
}