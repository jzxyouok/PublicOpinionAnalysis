<?php
namespace Home\Controller;
use Think\Controller;
class TiebaController extends Controller {
    public function index(){
    	
   /*    $m1 = new \Home\Model\TArticleModel();
       $m2 = new \Home\Model\TFloorModel();

       //$arr = $m1->Search_Theme();

       $arr = $m1->Search_Theme();

       var_dump($arr);

       $arr = $m2->Search_Person();

       var_dump($arr);
	    $this->assign("content",$content);
		$this->display("public:tpl");*/
       // echo "this is index";
       $this->display("public:tpl");
    }

    public function _empty($name){

        $this->display("public:tpl");
        echo "<h1>正在开发中</h1>";
    }

    public function search()
    {
/*    	$content = $this->fetch('Baidu:search');
    	var_dump($content);
    	echo "</br>";*/
    	$type = $_POST['type'];
    	if($type == "3")
    	{
    		$m1 = new \Home\Model\WeiboUserModel();
    		$arr1 = $m1->search();
    		$this->assign("data",$arr1);
    		//var_dump($arr1);

    		$m2 = new \Home\Model\WeiboContentModel();
    		$arr2 = $m2->search();
    		//var_dump($arr2);
    		$this->assign("weibo",$arr2);
    		$content = $this->fetch('weibo:both');

    		$this->assign("content",$content);
    	}

    	if ($type == "1")
    	{
    		$m1 = new \Home\Model\TFloorModel();
    		$arr1 = $m1->Search_Person();
    		$this->assign("data",$arr1);
    		$content = $this->fetch('tieba:testsearch');
    		$this->assign("content",$arr1);
    		var_dump($arr1);
    	}
    		
    	if ($type == "2")
    	{
    		$m2 = new \Home\Model\WeiboContentModel();
    		$arr2 = $m2->search();
    		//var_dump($arr2);
    		$this->assign("weibo", $arr2);
    		$content = $this->fetch('weibo:content');
    		//var_dump($arr2);
    		$this->assign("content",$content);
    	}
        $this->assign('content',$content);
        $this->display("public:tpl");
    }

    public function theme(){
        $m1 = new \Home\Model\WeiboUserModel();
        $arr1 = $m1->search2();    

        $this->assign("data",$arr1);

        $m2 = new \Home\Model\WeiboContentModel();
        $arr2 = $m2->search2($arr1[0]['name']);
        //var_dump($arr2);
        $this->assign("weibo",$arr2);
        $content = $this->fetch('tieba:floor');  //->fetch('Admin:index'
        $this->assign("content",$content);
        $this->display("public:tpl");       
    }

    public function detail(){
 
        $data = array("author"=>1,"time"=>2);
        $theme = "algorithm";
        
        
        $this->assign('data',$data);
        $this->assign('Theme',$theme);
        $content = $this->fetch('Tieba:testsearch'); 
        $this->assign("content",$content);
        $this->display("public:tpl");   

    }

    public function getFans()
    {
        //get id  
        $ids = $_GET['id'];
        //echo $ids;
        $n = split(";", $ids);

        $m1 = new \Home\Model\WeiboUserModel();

        $data['name'] =array('in' , $n);

        $arr = $m1->where($data)->select();

        $this->assign('data',$arr);

        $content = $this->fetch('Weibo:searchperson');
        $this->assign('content',$content);
        $this->display("public:tpl");

    }
}