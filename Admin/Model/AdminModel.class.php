<?php
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model {

    public  function checklogin($user,$password)
    {
        $condition['user'] = $user;
        $condition['password'] = md5($password);
        if ($admin = $this->where($condition)->find()) {
            //如果验证成功，保存session标识并跳转
            session('admin', $admin);
            return true;
        } else {
            return false;
        }
    }
    protected  $_validate=array(
            array('user','require','请填写管理员名称'),
            array('password','require','密码不能为空'),
        );


}