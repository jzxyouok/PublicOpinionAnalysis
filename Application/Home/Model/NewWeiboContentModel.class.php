<?php
namespace Home\Model;
use Think\Model\RelationModel;

class NewWeiboContentModel extends RelationModel {

	protected $trueTableName = "total_weibo";

	public function search()
	{
		if(isset($_GET['str'])) $ky = $_GET['str'];

		$data['content'] =array("like",array("%$ky%"));
		$arr = $this->where($data)->select();

		// 调试时可使用下面这句限制输出
		// $arr = $this->where($data)->limit(5)->select();

		//以下最好用关系模型来写。。可参考TFloorModel  之前因为各种原因没写出来
		//讲微博表中的userid关联到用户表中的username

		$m1 = new \Home\Model\NewWeiboUserModel();

		foreach ($arr as $key => $value) {

			$name = array('userid' => $value['userid']);

			$arr2 = $m1->where($name)->select();

			$arr[$key]['uname']=$arr2[0]['username'];
		}
		 

		return $arr;
	}

	public function search2($userid)
	{
		/*用于精确搜索*/
		if (isset($userid)) {
			$data['userid'] = $userid;
			$arr = $this->where($data)->select();
			return $arr;
		}

	}
	
	//用于detail
	public function search3($ky = 1)
	{
		
		if(isset($_GET['id'])) $ky = $_GET['id'];

		$data['id'] = $ky;
		$arr = $this->where($data)->select();

		$m1 = new \Home\Model\NewWeiboUserModel();

		foreach ($arr as $key => $value) {

			$name = array('userid' =>$value['userid']);

			 $arr2 = $m1->where($name)->select();

			 $arr[$key]['uname']=$arr2[0]['username'];

		}
		
		return $arr;
	}
}
