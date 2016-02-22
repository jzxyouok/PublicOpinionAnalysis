<?php
namespace Home\Model;
use Think\Model\RelationModel;

class TotalWeiboModel extends RelationModel {

    protected $_link = array(
        'User'  =>  array(
            'mapping_type'  => self::BELONGS_TO,
            'class_name' => 'TotalWeibo',
            'foreign_key'   => 'userid',
            'parent_key'    => 'userid',
            'mapping_name' => 'user',
        ),
    );
}
