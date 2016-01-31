<?php
namespace Home\Model;
use Think\Model;

class WeiboCommentModel extends Model {

	protected $tablename = "weibo_comment";
	
	public function search()
	{
		$ky =  $_GET['id'];

		$data['id'] = $ky;
		$arr = $this->where($data)->select();
		return $arr;
	}

	public function search2()
	{
		$ky =  $_GET['id'];
		$data['Belong_to'] = $ky;
		$arr = $this->where($data)->select();
		
		$m1 = new \Home\Model\WeiboUserModel();

		foreach ($arr as $key => $value) {

			$name = array('name' =>$value['name']);

			 $arr2 = $m1->where($name)->select();

			 $arr[$key]['uname']=$arr2[0]['uname'];
			 $arr[$key]['uid']=$arr2[0]['id'];

		}
		return $arr;
	}

}
?>	