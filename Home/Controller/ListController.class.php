<?php
namespace Home\Controller;
use Think\Controller;
class ListController extends Controller {
    public function index(){
        
        //初始化导航列表页
        $type = D('type');
        $types = $type->select();
        $this->assign('types',$types);

        $this->display('list');
    }
}