<?php
namespace Home\Controller;
use Think\Controller;
class WeiboController extends Controller {
    public function index(){
       //$m = D("weibo_user");

        // $m = new \Home\Model\WeiboUserModel();

        // $arr = $m->search();
        // var_dump($arr);
        $m1 = new \Home\Model\WeiboUserModel();
        $arr1 =$m1->query("select * from weibo_user order by fansCount DESC limit 1");
        $this->assign("data",$arr1);

        $m2 = new \Home\Model\WeiboContentModel();

        // $arr2 =$m2->query("select * from weibo_content order by praiseCount DESC limit 1");

        $arr2 = $m2->search3();//第一条。。
        $this->assign("weibo",$arr2);

       	$content = $this->fetch('weibo:index');  //->fetch('Admin:index'
		$this->assign("content",$content);
		$this->display("public:tpl");
    }
    public function _empty($name){

        $this->display("public:tpl");
        echo "该方法为空";
    }

    public function search(){

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
    		$m1 = new \Home\Model\WeiboUserModel();
    		$arr1 = $m1->search();
    		$this->assign("data",$arr1);
    		$content = $this->fetch('weibo:searchperson');
    		$this->assign("content",$content);
    		//var_dump($arr1);
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
    		
    	//$this->assign("arr",$arr1);
    	
    	//$content = $this->fetch('weibo:search');  //->fetch('Admin:index'
		$this->assign("content",$content);
    	$this->display("public:tpl");


    }

    public function personal(){
        $m1 = new \Home\Model\WeiboUserModel();
        $arr1 = $m1->search2();    

        $this->assign("data",$arr1);

        $m2 = new \Home\Model\WeiboContentModel();
        $arr2 = $m2->search2($arr1[0]['name']);
        //var_dump($arr2);
        $this->assign("weibo",$arr2);
        $content = $this->fetch('weibo:personal');  //->fetch('Admin:index'
		$this->assign("content",$content);
    	$this->display("public:tpl");       
    }

	public function detail(){
        //接收contentid,在comment中按照contentid查找
        $m = new \Home\Model\WeiboContentModel();
        $arr = $m->search3();

        $this->assign("weibo",$arr);

        var_dump($arr);

        //echo "</br> this is comment </br></br>";
        $m3 = new \Home\Model\WeiboCommentModel();
        $arr3 = $m3->search2();
        //var_dump($arr3);
        $this->assign("comment",$arr3);

        $content = $this->fetch('weibo:detail');  //->fetch('Admin:index'
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