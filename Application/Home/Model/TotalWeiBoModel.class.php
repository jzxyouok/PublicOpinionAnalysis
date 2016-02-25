<?php
namespace Home\Model;
use Think\Model\RelationModel;

class TotalWeiboModel extends RelationModel {

    protected $_link = array(
        'User'  =>  array(
            'mapping_type'  => self::BELONGS_TO,
            'class_name' => 'UserInfo',
            'foreign_key'   => 'userid',
            'parent_key'    => 'userid',
            'mapping_name' => 'user',
        ),
    );

    public function search($str)
    {
    	$data['content'] =array('like',array("%$str%"));
    	$arr = $this->relation(true)->where($data)->select();
    	return $arr;
    }

}
