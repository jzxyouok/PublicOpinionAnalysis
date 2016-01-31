<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        $content = $this->fetch('index:index');  //->fetch('Admin:index'
		$this->assign("content",$content);
		$this->display("public:tpl");
    }
    public function search()
    {
    	echo "开发中";
    }
}