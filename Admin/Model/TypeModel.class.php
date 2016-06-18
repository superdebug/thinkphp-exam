<?php
namespace Admin\Model;
use Think\Model;

class TypeModel extends Model {
	//对模型type进行验证
   protected $_validate = array(
       array('typename','require','栏目名称必须填写'), //默认情况下用正则进行验证
	    );
}