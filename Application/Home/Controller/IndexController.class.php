<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	$this->display();
    }
    public function search()
    {
    	echo "开发中";
    }
}
