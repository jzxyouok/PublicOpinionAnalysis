<?php
namespace Home\Model;
use Think\Model\RelationModel;

class UserInfoModel extends RelationModel {

    protected $_link = array(
        'Weibo' => array(
            'mapping_type'  => self::HAS_MANY,
            'class_name'    => 'TotalWeiBo',
            'foreign_key'   => 'userid',
            'parent_key'    => 'userid',
            'mapping_name'  => 'weibos',
            'mapping_order' => 'time desc',
        ),
    );
	
}

