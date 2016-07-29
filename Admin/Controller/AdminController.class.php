<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends BaseController {
    public function admin_edit(){
        if(IS_POST){
            $data['user'] = I('user');
            $data['password']=md5(I('password'));
            $data['id'] = I('id');

            $admin = D('admin');
            if($admin->create($data)){ //如果没有问题 执行修改操作
                if($admin->save()){ //如果修改好了
                    $this->success('管理员修改成功',U('admin_edit'));
                }else{
                    $this->error('管理员修改失败');
                }

            }else{
                $this->error($admin->getError());
            }
            
        }
        $this->display('xiugai');
    }
}