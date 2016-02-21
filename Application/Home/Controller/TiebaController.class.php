<?php
namespace Home\Controller;
use Think\Controller;
class TiebaController extends Controller {

    public function _empty($name){

        $this->display("public:tpl");
        echo "该方法为空";
    }

}