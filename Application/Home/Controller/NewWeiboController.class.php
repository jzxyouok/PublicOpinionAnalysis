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

        $arr = $weiboModel->analysisTotal();
        $this->assign('hours',json_encode($arr[0]));
        $this->assign('weeks',json_encode($arr[1]));

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
            $this->assign('weibos', $arr_cont);
            // var_dump($arr_user);
            // var_dump($arr_cont);
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
	
	$analysisModel = D('TotalWeibo');
        $analysis = $analysisModel->analysisPerson($_GET['id']);
	//var_dump($analysis);
        $this->assign('hours',json_encode($analysis[0]));
        $this->assign('weeks',json_encode($analysis[1]));
	$this->assign('username',json_encode($arr['username']));
        $this->assign('user',$arr);
        // var_dump($arr);
        $this->assign('weibos',$arr['weibos']);

        $this->display();  
    }

    public function detail(){
        $contentModel = D('TotalWeibo');
        $arr = $contentModel->relation(true)->find($_GET['id']);
        $arr = array("1"=>$arr);
        $this->assign('weibos',$arr);
    	$this->display();   
    }
    
    public function analysisPerson()
    {
        $m1 = D('TotalWeibo');
        $arr = $m1->analysisPerson($_GET['id']);
        
        $this->assign('hours',json_encode($arr[0]));
        $this->assign('weeks',json_encode($arr[1]));
        $this->display('public:test');
    }
    public function analysisTotal()
    {
        $m1 = D('TotalWeibo');
        $arr = $m1->analysisTotal();
        $this->assign('hours',json_encode($arr[0]));
        $this->assign('weeks',json_encode($arr[1]));
        $this->display('public:test');
    }
 
}
