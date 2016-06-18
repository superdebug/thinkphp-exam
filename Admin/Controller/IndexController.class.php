<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
	//加载后台模板首页
    public function index(){
        $this->display();
    }

    //加载后台模板head.html
    public function head(){
        $this->display();
    }

    //加载后台模板left.html
    public function left(){
        $this->display();
    }

	//加载后台模板rigth.html
    public function right(){
        $this->display();
    }    
}