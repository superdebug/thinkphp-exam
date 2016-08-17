<?php
namespace Home\Controller;
use Think\Controller;
class ListController extends Controller {
    public function index(){

        //初始化导航列表页
        $type = D('type');
        $types = $type->select();
        $this->assign('types',$types);

        $typeid = I('typeid');
        $condition_typeid['typeid']=$typeid;

        //最新文章
        $article = D('article');
        $condition['new'] = 1;
        $res=$article->where($condition)->select();
        $this->assign('res',$res);

        //分页信息开始
        $count = $article->where($condition_typeid)->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(2)
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $articles = $article->where($condition_typeid)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('articles',$articles);

        $this->display('list');
    }
}