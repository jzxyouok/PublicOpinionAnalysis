<?php
namespace Home\Model;
use Think\Model;

class NewWeiboAnalysisPersonModel extends Model {

	/*
	参数说明
	接受userid
	精确匹配
	处理并得到结果
	*/
	protected $trueTableName = "total_weibo";

	public function analysis()//获取到具体人的发的所有信息（回复，发帖（根据idx），有theme
	{
		$userid = $_GET["userid"];
		$data["userid"] = $userid;
		$data["_logic"] = "AND";

		$week = array('Mon' => 1, "Tue" => 2, "Wed" => 3, "Thu" => 4, "Fri" => 5, "Sat" => 5, "Sun" => 7);
        $weekNumber = array();

        foreach ($week as $key => $value) {
            $data["time"] = array("like",array("%$key%"));
            $arr = $this->where($data)->select();
            $weekNumber[$key] = count($arr);
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
