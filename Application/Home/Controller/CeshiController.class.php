<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;

use Think\Controller;
/*use Vendor\Weixin\Wechat;*/



class CeshiController extends Controller{
 /*public function _initialize()  
    {  
        if(!isset($_SESSION['uid'])||$_SESSION['uid']=="")
        {
               redirect(U('login'));  
        }
        //$this->member=M('member')->where(array('id'=>$_SESSION['uid']))->find();
    }*/
    /**
     * 微信消息接口入口
     * 所有发送到微信的消息都会推送到该操作
     * 所以，微信公众平台后台填写的api地址则为该操作的访问地址
     */
    public function index(){
         $column = new \Think\Model\MongoModel('column');  //这里传不传如表名都没关系
        
      
$re=$column->where(array('pid'=>0))->find();
//var_dump($re['_id']);exit;
   
     $re1= $column->where(array('pid'=>$re['_id']))->find();

 
   var_dump($re1);
    }










  
}
