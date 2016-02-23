<?php
namespace Home\Model;
use Think\Model\RelationModel;

class UserInfoModel extends RelationModel {

    protected $_link = array(
        'Weibo' => array(
            'mapping_type'  => self::HAS_MANY,
            'class_name'    => 'TotalWeibo',
            'foreign_key'   => 'userid',
            'parent_key'    => 'userid',
            'mapping_name'  => 'weibos',
            'mapping_order' => 'time desc',
        ),
    );
	
    public function search($str)
    {
        $data['username'] =array("like",array("%$str%"));
        $arr = $this->where($data)->select();
        return $arr;
    }

    public function searchByid($id)
    {
        if(isset($id))
        {
            $data['userid'] = $id;
            $arr = null;
            $arr['user'] = $this->where($data)->find();
            $arr['weibos'] = $this->relationGet(true);
            return $arr ;            
        }
        else
            return false;
    }
    
}

