<?php
namespace Admin\Model;
use Think\Model;

class ArticleModel extends Model {

    protected  $_validate=array(
            array('title','require','请填写文章标题'),
           // array('title','unique','该文章已存在'),
            //array('password','require','密码不能为空'),
        );


}