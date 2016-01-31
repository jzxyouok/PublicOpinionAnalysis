<?php
namespace Home\Model;
use Think\Model;

class WeiboUserModel extends Model {

	protected $tablename = "weibo_user";
	// protected $_link = array(
 //         '关联1'  =>  array(
 //             '关联属性1' => '定义',
 //             '关联属性N' => '定义',
 //         )
 //    );
	public function search()
	{
		$ky =  $_POST['str'];

		$data['uname'] =array("like",array("%$ky%"));
		$arr = $this->where($data)->select();
		return $arr;
	}

	public function search2()
	{
		/*用于精确匹配*/
		$ky = $_GET['id'];
		$data['id'] = $ky;
		$arr = $this->where($data)->select();
		return $arr;
	}
	
}
?>	