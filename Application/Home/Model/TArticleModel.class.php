<?php
namespace Home\Model;
use Think\Model\RelationModel;

class TArticleModel extends RelationModel {

	protected $tablename = "t_article";

	protected $_link = array(
			'TFloor' => array(
			    'mapping_type'  => self::HAS_MANY,
			    'class_name'    => 'TFloor',
			    'foreign_key'   => 'articleId',
			    'mapping_name'  => 'TFloor',
			),
		);

	public function Search_Theme()//模糊匹配，获取包括他的所有楼层（可能会慢。。）
	{
		$ky =  $_GET['str'];
		$data['theme'] =array("like",array("%$ky%"));
		//$arr = $this->where($data)->relation('TFloor')->limit(3)->select();
		$arr = $this->where($data)->relation('TFloor')->select();
		return $arr;
	}

}
?>	