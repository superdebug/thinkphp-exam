<?php
namespace Admin\Controller;
use Think\Controller;

class BaseController extends Controller
{
	public function __construct(){ //创建构造方法
		parent::__construct(); //继承父类方法
		$this->checklogin(); //在执行方法前进行验证是否为合法的管理员

	}

	public function checklogin(){
		if(!$_SESSION['admin']){
			$this->error('请先登录！',U('Login/login'));
		}else{
			//在此处给session赋值admin可以将全局的session赋值给admin
			$admin=session('admin');
			$this->assign('admin',$admin['user']);  //提取用户名信息到模板变量
			$this->assign('admin_id',$admin['id']);  //提取id信息
			//var_dump($_SESSION['admin']);
			//var_dump($admin);
		}

	}
}