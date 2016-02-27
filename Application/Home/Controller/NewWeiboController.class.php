<?php
namespace Home\Controller;
use Think\Model\RelationModel;

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
        $this->assign('user', $aWhatEverUser);
	$weiboModel = D("TotalWeibo");
        $totalWeiboWithUser =  $weiboModel->relation(true)->find();
        $this->assign('weibo', $totalWeiboWithUser);
        $this->display();
    }

    public function _empty($name){

        $this->display('public:header');
        echo '该方法为空';
    }

    public function search(){
        if(isset($_GET['type']))
        {
            $type = $_GET['type'];
            $arr_user = null; $arr_cont = null;

            if ($type == 'both' || $type == 'id') {
                $userModel = D('UserInfo'); 
                $arr_user = $userModel->search($_GET['str']);
            }
            if ($type == 'both' || $type == 'cont') {
                $contentModel = D('TotalWeibo');
                $arr_cont = $contentModel->search($_GET['str']);
            }
            $this->assign('data', $arr_user); 
            $this->assign('weibo', $arr_cont);

            $this->display();            
        }
        else
        {
            $this->display('public:header'); 
        }

    }

    public function personal(){
        $userModel = D('UserInfo'); 
        $arr = $userModel->relation(true)->find($_GET['id']);

        $this->assign('vo',$arr['user']);
        $this->assign('weibo',$arr['weibos']);

        $this->display();  
    }

    public function detail(){
        $contentModel = D('TotalWeibo');
        $arr = $contentModel->relation(true)->find($_GET['id']);
        $this->assign('weibo',$arr);
    	$this->display();   
    }

    /*
    暂时用不到,先给注释掉
    public function getFans()
    {
        //get id  
        $ids = $_GET['id'];
        //echo $ids;
        $n = split(';', $ids);

        $m1 = new \Home\Model\NewWeiboUserModel();

        $data['name'] =array('in' , $n);

        $arr = $m1->where($data)->select();

        $this->assign('data',$arr);

        $content = $this->fetch('NewWeibo:searchperson');
        $this->assign('content',$content);
        $this->display('public:header');
    }

    
    public function analysis_1()
    {
        $m1 = D('TotalWeibo');
        $arr = $m1->analysis_1($_GET['id']);
        
        $this->assign('hours',json_encode($arr[0]));
        $this->assign('weeks',json_encode($arr[1]));
        $this->display('public:test');
    }
    public function analysis_2()
    {
        $m1 = D('TotalWeibo');
        $arr = $m1->analysis_2();
        $this->assign('hours',json_encode($arr[0]));
        $this->assign('weeks',json_encode($arr[1]));
        $this->display('public:test');
    }
    */
}
