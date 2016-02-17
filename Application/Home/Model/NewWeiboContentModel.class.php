<?php
namespace Home\Model;
use Think\Model\RelationModel;

class NewWeiboContentModel extends RelationModel {

	protected $trueTableName = "total_weibo";

	 // protected $_link = array(
  //        'WeiboUser'  =>  array(
  //            'mapping_type' => self::BELONGS_TO,
  //            'foreign_key' => 'name',
  //            'class_name' => 'WeiboUser',
  //            'mapping_name'=>'weibo_user',
  //             'mapping_fields'=>'uname',
  //             'as_fields'=>'uname',
  //        )
  //   );

	public function search()
	{
		if(isset($_GET['str'])) $ky = $_GET['str'];

		$data['content'] =array("like",array("%$ky%"));
		$arr = $this->where($data)->select();
		
		$m1 = new \Home\Model\NewWeiboUserModel();

		foreach ($arr as $key => $value) {

			$name = array('userid' => $value['userid']);

			$arr2 = $m1->where($name)->select();

			$arr[$key]['uname']=$arr2[0]['username'];
		}
		 

		return $arr;
	}

	public function search2($name)
	{
		/*用于精确搜索*/
		$data['name'] = $name;
		$arr = $this->where($data)->select();
		return $arr;
	}
	
	//用于detail
	public function search3($ky = 1)	//再改。。的确是
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
