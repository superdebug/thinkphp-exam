<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //$this->show('前台页面');
        //实例化对象 并查询
        //var_dump(D('type')->select());

        //初始化导航列表页
        $type = D('type');
        $types = $type->select();
        $this->assign('types',$types);
        $this->display();

    }
}