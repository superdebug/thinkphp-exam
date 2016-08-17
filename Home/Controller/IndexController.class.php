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

        //最新文章
        $article = D('article');
        $condition['new'] = 1;
        $res=$article->where($condition)->select();
        $this->assign('res',$res);

        //分页信息开始
        $count = $article->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(2)
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $articles = $article->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('articles',$articles);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display();

    }
}