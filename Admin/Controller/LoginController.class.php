<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	//加载后台模板首页
    public function login()
    {
        $this->display();
    }


    public function code(){

        ob_clean();
        $Verify = new \Think\Verify();
        $Verify->fontSize = 20;
        $Verify->length   = 3;
        $Verify->useNoise = false;
        $Verify->entry();
    }

}