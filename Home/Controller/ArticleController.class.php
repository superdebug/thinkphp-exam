<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index(){
        //初始化导航列表页
        $type = D('type');
        $types = $type->select();
        $this->assign('types',$types);

        //最新文章
        $article = D('article');
        $condition['new'] = 1;
        $res=$article->where($condition)->select();
        $this->assign('res',$res);

        //接收传递的文章页
        $resart=$article->relation(true)->find(I('id')); //relation(true) 表示使用关联模型
        $this->assign('resart',$resart);


        $this->display('article');

    }
}