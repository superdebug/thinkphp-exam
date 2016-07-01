<?php
namespace Home\Controller;
use Think\Controller;
class CeshiController extends Controller {
    public function index(){
        $typename = D('type');
        $count=$typename->count();
        $page= new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(2)
        $show = $page->show();
        $list = $typename->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();

    }
}