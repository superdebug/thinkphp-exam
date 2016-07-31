<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends BaseController {
    public function tianjia(){
        if(IS_POST){
            $data['title'] = I('title');
            $data['author'] = I("author");
            $data['hot'] = I('hot');
            $data['new'] = I('new');
            $data['typeid'] = I('typeid');
            $data['desc'] = I('desc');
            $data['time'] = time();
            //图片上传代码
            if($_FILES['pic']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   = 3145728 ;// 设置附件上传大小
                $upload->exts      = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath='./'; //设置上传文件路径
                $upload->savePath  =  './Public/Uploads/'; // 设置附件上传目录 确保该路径及目录必须存在
                $info   =   $upload->uploadOne($_FILES['pic']); //数据表对应的字段
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else {// 上传成功 获取上传文件信息
                    $data['pic'] = $info['savepath'].$info['savename'];
                }
            }
            $article = D('article');
            if($article->create($data)){
                if($article->add()){
                    $this->success('文章添加成功',U('showlist'));
                }else{
                    $this->error('文章添加失败！');
                }
            }else{
                $this->error($article->getError());
            }
            return;
        }
        //获取所有栏目分类有信息并赋值给模板变量
        $type = D('type');
        $res=$type->select();
        $this->assign('res',$res);
        $this->display();
    }

    public function xiugai(){

        $this->display();
    }

    public function showlist(){

        $article= D ('article');
        //分页开始
        $count = $article->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(2)
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $article->limit($Page->firstRow.','.$Page->listRows)->relation(true)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }


}