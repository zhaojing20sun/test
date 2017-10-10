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
use Com\Wechat;


class IndexController extends Controller{
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
      $this->display();
    }
    public function new_login(){
      $this->display();
    }
    public function bangdingweixin(){
  //  p($_SERVER);exit;
     // echo $_SESSION['uid'];exit;
                           // var_dump($arr);exit;

        $re=M('weixin')->where(array('userid'=>$_GET['id']))->find();
         $config=array(
           'appId'=>$re['appid'],
           'token'=>$re['token'],
           'encodingAESKey'=>$re['key']
            );

      $wechat = new Wechat($config);
 if($re['bangding']!='1'){
   M('weixin')->where(array('userid'=>$_GET['id']))->setField('bangding','1');
     $wechat->serve();
 }
    
  
     $postObj=$wechat->my_getMessage();

  //返回回复数据

          if($postObj!=false)
          {
              $fromUsername = $postObj->FromUserName;
                //接收消息方ID
                  $toUsername = $postObj->ToUserName;
             //消息类型
                  $form_MsgType = $postObj->MsgType;
                  
                //事件消息
                  if($form_MsgType=="event")
                  {
                    //获取事件类型
                    $form_Event = $postObj->Event;
                    //订阅事件
                    if($form_Event=="subscribe")
                    {
                      //回复消息
                      // $arr=array()
                    $msg=M('weixink')->where(array('userid'=>$_GET['id'],'type'=>1,'order'=>1))->find();
                        if($msg['style']=='0'){
                             //$arr['type']='text';
                           $wechat->reply(htmlspecialchars_decode($msg['content']));
                        }elseif($msg['style']=='1'){
                             $re=M('weixink')->where(array('userid'=>$_GET['id'],'type'=>1,'style'=>1))->select();
                            foreach ($re as $key => $value) {
                              
                               $date[$key]=array(
                               'title'=>$value['title'],
                               'description'=>$value['title'],
                               'picurl'=>'http://'.$_SERVER['SERVER_NAME'].'/'.$value['content'],
                               'url'=>$value['url']
                                );
                                
                            }
                        
                            $arr=array(
                                'type'=>'news',
                                'articles'=>$date
                                );
                           // var_dump($arr);exit;
                            $wechat->reply($arr);
                        }
                            
                    }
                  //文字消息
                  }elseif($form_MsgType=='text')
                  {
                  
                         $form_Content = trim($postObj->Content);
                         if(!empty($form_Content))
                         {

                            //关键词自动回复
                            //$res=M('weixinkey')->where(array('userid'=>1,'order'=>1))->find();
                            if($res)
                            {
                                      /* if($msg['style']=='0')
                                          {
                                            $wechat->reply(htmlspecialchars_decode($msg['content']));
                                          }elseif($msg['style']=='1')
                                          {
                                                 $re=M('weixink')->where(array('type'=>2,'style'=>1))->select();
                                                foreach ($re as $key => $value) 
                                                {
                                                   $date[$key]=array(
                                                   'title'=>$value['title'],
                                                   'description'=>$value['title'],
                                                   'picurl'=>'http://'.$_SERVER['SERVER_NAME'].'/'.$value['content'],
                                                   'url'=>$value['url']
                                                    );
                                                }
                                                $arr=array(
                                                    'type'=>'news',
                                                    'articles'=>$date
                                                    );
                                                $wechat->reply($arr);
                                         }*/
                            }else
                            {
                                       //用户发来的消息自动回复
                                         $msg=M('weixink')->where(array('userid'=>$_GET['id'],'type'=>2,'order'=>1))->find();
                                          if($msg['style']=='0')
                                          {
                                            $wechat->reply(htmlspecialchars_decode($msg['content']));
                                          }elseif($msg['style']=='1')
                                          {
                                                 $re=M('weixink')->where(array('userid'=>$_GET['id'],'type'=>2,'style'=>1))->select();
                                                foreach ($re as $key => $value) 
                                                {
                                                   $date[$key]=array(
                                                   'title'=>$value['title'],
                                                   'description'=>$value['title'],
                                                   'picurl'=>'http://'.$_SERVER['SERVER_NAME'].'/'.$value['content'],
                                                   'url'=>$value['url']
                                                    );
                                                }
                                                $arr=array(
                                                    'type'=>'news',
                                                    'articles'=>$date
                                                    );
                                                $wechat->reply($arr);
                                         }
                            }
                        
                         }
          
                 }
      }
    
        
    }
    public function detail(){

        $this->display();
    }
    public function company(){
         $this->filed=M("company_filed")->select();
        //var_dump($this->filed);exit;
        $this->company=M('company')->select();
        $this->display();
    }
    public function register_save(){
      $date=array(
      'username'=>I('username'),
      'password'=>I('password'),
      'email'=>I('email')
        );
      M('member')->add($date);
      redirect(U('index'));
    }
    public function login(){
      $this->display();
       //p($_POST);
     //  $re=M('member')->where(array('username'=>I('username'),'password'=>I('password')))->find();
      /* $id=M('weixin')->where(array('userid'=>$re['id']))->find();
       if($id){
        session('uid',$id['id']);
       }*/
       //session('uid',$re['id']);
       //session('username',$re['username']);
       //redirect(U('index'));
    }
    public function login_save(){
     // p($_POST);exit;
       $re=M('member')->where(array('username'=>I('username'),'password'=>I('password')))->find();
       $id=M('weixin')->where(array('userid'=>$re['id']))->find();
       session('uid',$re['id']);
       session('username',$re['username']);
       
         redirect(U('Member/index'));
       
      
    }
    public function check_login(){
        if (!IS_AJAX) {
           E('页面不存在！');
        } 
        $re=M('member')->where(array('username'=>I('username'),'password'=>I('password')))->find();
        if($re){
           $this->ajaxReturn($re['id']);
         }else{
           $this->ajaxReturn('cuo');
         }
       
    }
    public function logout(){
       unset($_SESSION['username']);
       unset($_SESSION['uid']);
       redirect(U('index'));
    }
}
