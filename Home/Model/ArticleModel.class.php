<?php
namespace Home\Model;
use Think\Model\RelationModel;

class ArticleModel extends RelationModel {

    //以下要实现关联关系，即要将Article表进行与Type表进行关联，关联的关系为一对多关系，关联的外键为typeid,关联的相关字段是typename
    protected $_link = array(
        'Type' => array(   //这里的Type命名可以任意
            'mapping_type'  => self::BELONGS_TO,  //一对多关系
            'class_name'    => 'Type',    //要关联的模型类名(即表名)
            'foreign_key'   => 'typeid', //关联的外键名称
            'as_fields'     => 'typename',  //要取得关联表的相关字段
    ),
    );

}