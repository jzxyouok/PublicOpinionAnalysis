<?php
namespace Home\Model;
use Think\Model\RelationModel;

class TFloorModel extends RelationModel {

	protected $tablename = "t_floor";

	protected $_link = array(
		'TArticle' => array(
		    'mapping_type'  => self::BELONGS_TO,
		    'class_name'    => 'TArticle',
		    'foreign_key'   => 'id',
		    'mapping_name'  => 'TArticle',
		    'mapping_fields'=>'theme',
		    'as_fields'		=>'theme',//直接把题目搜出
		    )
	);

	public function Search_Person()//获取到具体人的发的所有信息（回复，发帖（根据idx），有theme
	{
		$ky =  $_POST['str'];
		$data['author'] =$ky;
		$arr = $this->where($data)->relation('TArticle')->limit()->select();
		return $arr;
	}
}
