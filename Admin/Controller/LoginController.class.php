<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	//加载后台模板首页
    public function login()
    {
        if (IS_POST) {
            $user = I('user');
            $password = I('password');
            $captcha = I('captcha');

            $verify = new \Think\Verify();
            if (!$verify->check($captcha)) { //如果验证码验证通过，执行下面代码
                $this->error('验证失败');
                return;
            }

            if (D('admin')->checklogin($user, $password)) { //验证用户名和密码
                $this->success('登录成功', U('Index/index'), 2);
            } else {
                $this->error('登录失败');
            }
            return;
        }
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

    //退出方法
    public function logout(){
        //清空session

        session('[destory]');
        $this->success('成功退出系统',U('login',1));

    }

}