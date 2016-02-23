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

            'as_fields' =>'username',
            
        ),
    );

    public function search($str)
    {
    	$data['content'] =array("like",array("%$str%"));
    	$arr = $this->relation(true)->where($data)->select();
    	return $arr;
    }

    public function searchByid($id)
    {
        if(isset($id))
        {
            $data['id'] = $id;
            $arr = $this->relation(true)->where($data)->select();
            return $arr;
        }
        else
            return false;
    }

    public function analysis_2()//获取到具体人的发的所有信息（回复，发帖（根据idx），有theme
    {
        $week = array('Mon' => 0, "Tue" => 1, "Wed" => 2, "Thu" => 3, "Fri" => 4, "Sat" => 5, "Sun" => 6);
        $weekNumber = array();
        foreach ($week as $key => $value) {
            $data["time"] = array("like",array("%$key%"));
            $arr = $this->where($data)->select();
            $weekNumber[$value] = count($arr);
        }        
        $dayNumber = array();        
        for ($i=0; $i < 10; $i++) { 
            $data["time"] = array("like",array("%0$i:__:__ %"));
            $arr = $this->where($data)->select();
            $dayNumber[$i] = count($arr);
        }
        for ($i=10; $i < 24; $i++) { 
            $data["time"] = array("like",array("%$i:__:__ %"));
            $arr = $this->where($data)->select();
            $dayNumber[$i] = count($arr);
        }
        $arr = array($dayNumber,$weekNumber);
        return $arr;
    }

    public function analysis_1($userid)//获取到具体人的发的所有信息（回复，发帖（根据idx），有theme
    {
        $data["userid"] = $userid;
        $data["_logic"] = "AND";
        $week = array('Mon' => 0, "Tue" => 1, "Wed" => 2, "Thu" => 3, "Fri" => 4, "Sat" => 5, "Sun" => 6);
        $weekNumber = array();
        foreach ($week as $key => $value) {
            $data["time"] = array("like",array("%$key%"));
            $arr = $this->where($data)->select();
            $weekNumber[$value] = count($arr);
        }        
        $dayNumber = array();        
        for ($i=0; $i < 10; $i++) { 
            $data["time"] = array("like",array("%0$i:__:__ %"));
            $arr = $this->where($data)->select();
            $dayNumber[$i] = count($arr);
        }
        for ($i=10; $i < 24; $i++) { 
            $data["time"] = array("like",array("%$i:__:__ %"));
            $arr = $this->where($data)->select();
            $dayNumber[$i] = count($arr);
        }
        $arr = array($dayNumber,$weekNumber);
        return $arr;
    }

}
