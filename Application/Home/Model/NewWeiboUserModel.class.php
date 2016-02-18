<?php
namespace Home\Model;
use Think\Model;

class NewWeiboUserModel extends Model {

	//存在的问题,命名规范和实际表名有冲突故使用trueTableName
	protected $trueTableName = "user_info";
	
	// 使用get方法,方便在URL上查看
	public function search()
	{
		$key =  $_GET['str'];
		$data['username'] =array("like",array("%$key%"));
		$arr = $this->where($data)->select();
		// 调试时可使用下面这句限制输出
		// $arr = $this->where($data)->limit(5)->select();
		return $arr;
	}

	public function search2()
	{
		/*用于精确匹配*/

		if (isset($_GET['id'])) {
			# code...
			$key = $_GET['id'];
			$data['userid'] = $key;
			$arr = $this->where($data)->select();
			return $arr;
		}
		return False;
	}
	
}
?>	