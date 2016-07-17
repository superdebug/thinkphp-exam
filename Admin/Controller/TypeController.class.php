<?php
namespace Admin\Controller;
use Think\Controller;

class TypeController extends BaseController
{
	//加载栏目列表
	public function showlist()
	{
		$typename=D('type'); //实例化表type
		//$res=$typename->select();  由于使用了下面的list进行分页，因此res可以不用了
		//$this->assign('res',$res);
		//分页信息开始
		//$typename = M('type'); // 实例化type对象 由于上面已经实例化过，因此不需要在这里实例化
		$count = $typename->count();// 查询满足要求的总记录数
		$Page  = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(2)
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$show  = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $typename->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}

	//添加栏目方法
	public function tianjia(){
		if (IS_POST) { //判断是通过表单提交过来的
			$data['typename'] = I('typename');
			$type = D('type'); //实例化type表
			if ($type->create($data)) {
			if ($type->add($data)) {
				$this->success('栏目添加成功', U('showlist'), 1); //如果跳转成功，出提示，并跳转到showlist
			} else {
				$this->error('添加栏目失败！');
		} }else {
			$this->error($type->getError());
		}
		return;
	}
	$this->display();

    } 


    //修改栏目方法
    public function xiugai()
	{
		if (IS_POST) {  //如果是从表单提交过来的，需要单独做判断
			$data['typename'] = I('typename');
			$data['id'] = I('typeid');
			$type = D('type'); //实例化type表
			if ($type->create($data)) { //进行验证，如果通过验证进行操作
				if ($type->save()) {
					$this->success('栏目修改成功', U('showlist'), 1); //如果跳转成功，出提示，并跳转到showlist
				} else {
					$this->error('栏目修改失败！');
				}
			} else {
				$this->error($type->getError());
			}
			return;
		}

			$typename = I('typename'); //接收参数
			$typeid = I('id');
			$this->assign('typename', $typename); //将参数赋值到模板
			$this->assign('typeid', $typeid);
			$this->display();
		}

	public function  shanchu(){
		$typeid = I('id');
		$type=D('type');
		if($type->delete($typeid)){ //如果删除成功
			$this->success('删除成功',U('showlist'),3);

		}else{
			$this->error('删除失败');
		}
	}

}