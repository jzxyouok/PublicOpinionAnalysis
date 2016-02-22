<?php
namespace Home\Controller;

class NewWeiboController extends BaseController {
    /**
     * 微博首页方法
     *
     * 页面显示内容
     * [...]（根据文档、需求填写）
     *
     * @TemplateCall
     * default
     *
     * @TemplateReturns
     * user: 一个...的用户信息
     * weibo: 带有用户信息的全部微博数据
     */
    public function index(){

        $aWhatEverUser = D('UserInfo')->find();
        $this->assign("user", $aWhatEverUser);
        $totalWeiboWithUser = D('TotalWeibo')->relation(true)->select();
        $this->assign("weibo", $totalWeiboWithUser);
        $this->display();
    }

    public function _empty($name){

        $this->display("public:tpl");
        echo "该方法为空";
    }

    public function search(){

    	$type = $_GET['type'];
    	if($type == "3")
    	{
            // 同时搜索人与内容
    		$m1 = new \Home\Model\NewWeiboUserModel();
    		$arr1 = $m1->search();
    		$this->assign("data",$arr1);
    		// var_dump($arr1);

    		$m2 = new \Home\Model\TotalWeiboModel();
    		$arr2 = $m2->search();
    		var_dump($arr2);
    		$this->assign("weibo",$arr2);
    		$content = $this->fetch('newWeibo:both');

    		$this->assign("content",$content);
    	}

    	if ($type == "1")
    	{
            // 仅搜索人
    		$m1 = new \Home\Model\NewWeiboUserModel();
    		$arr1 = $m1->search();
    		$this->assign("data",$arr1);
    		$content = $this->fetch('newWeibo:searchperson');
    		$this->assign("content",$content);
    		// var_dump($arr1);
    	}
    		
    	if ($type == "2")
    	{
            // 仅搜索内容
    		$m2 = new \Home\Model\TotalWeiboModel();
    		$arr2 = $m2->search();
    		$this->assign("weibo", $arr2);
    		$content = $this->fetch('newWeibo:content');
    		// var_dump($arr2);
    		$this->assign("content",$content);
    	}
    		
		$this->assign("content",$content);
    	$this->display("public:tpl");
    }

    public function personal(){
        $m1 = new \Home\Model\NewWeiboUserModel();
        $arr1 = $m1->search2();
        // print_r($arr1);
        $this->assign("data",$arr1);

        $m2 = new \Home\Model\TotalWeiboModel();
        $arr2 = $m2->find($arr1[0]['userid']);
        //var_dump($arr2);
        $this->assign("weibo",$arr2);
        $content = $this->fetch('NewWeibo:personal');

		$this->assign("content",$content);
    	$this->display("public:tpl");       
    }

	public function detail(){
        //接收contentid,在comment中按照contentid查找
        $m = new \Home\Model\TotalWeiboModel();
        $arr = $m->search3();

        $this->assign("weibo",$arr);

        $content = $this->fetch('NewWeibo:detail');  //->fetch('Admin:index'
		$this->assign("content",$content);
    	$this->display("public:tpl");   
    }

    /*
    暂时用不到,先给注释掉
    public function getFans()
    {
        //get id  
        $ids = $_GET['id'];
        //echo $ids;
        $n = split(";", $ids);

        $m1 = new \Home\Model\NewWeiboUserModel();

        $data['name'] =array('in' , $n);

        $arr = $m1->where($data)->select();

        $this->assign('data',$arr);

        $content = $this->fetch('NewWeibo:searchperson');
        $this->assign('content',$content);
        $this->display("public:tpl");
    }

    */
    public function analysis_1()
    {
        $m1 = new \Home\Model\NewWeiboAnalysisPersonModel();
        $arr = $m1->analysis();
        
        $this->assign('hours',json_encode($arr[0]));
        $this->assign('weeks',json_encode($arr[1]));
        $this->display("public:test");
    }
    public function analysis_2()
    {
        $m1 = new \Home\Model\NewWeiboAnalysisTotalModel();
        $arr = $m1->analysis();
        $this->assign('hours',json_encode($arr[0]));
        $this->assign('weeks',json_encode($arr[1]));
        $this->display("public:test");
    }
}