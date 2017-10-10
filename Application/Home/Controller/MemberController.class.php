<?php
namespace Home\Controller;
use Think\Controller;
use Com\Wechat;
use Com\Utils\HttpCurl;
class MemberController extends Controller{
public function _initialize()  
    {  
        if(!isset($_SESSION['username'])||$_SESSION['username']=="")
        {
               redirect(U('Index/index'));  
        }
    /*    $this->member=M('member')->where(array('id'=>$_SESSION['uid']))->find();
         $menu=M('weixinmenu')->where(array('userid'=>$_SESSION['uid'],'pid'=>0))->order("orderid asc")->select();
           if(!$menu){
             $re=M('weixinmenu')->where(array('userid'=>0,'pid'=>0))->select();
             foreach ($re as $key => $value) {
                  $date=array(
                  'pid'=>$value['pid'],
                  'type'=>$value['type'],
                  'orderid'=>$value['orderid'],
                  'userid'=>$_SESSION['uid'],
                  'title'=>$value['title']
                    );
                  $id=M('weixinmenu')->add($date);
                   $re1=M('weixinmenu')->where(array('userid'=>0,'pid'=>$value['id']))->select();
                   foreach ($re1 as $key1 => $value1) {
                        $date=array(
                  'pid'=>$id,
                  'type'=>$value1['type'],
                  'url'=>$value1['url'],
                  'orderid'=>$value1['orderid'],
                  'userid'=>$_SESSION['uid'],
                  'title'=>$value1['title']
                    );
                  M('weixinmenu')->add($date);
                   }
             }
            // $this->menu=M('weixinmenu')->where(array('userid'=>$_SESSION['uid'],'pid'=>0))->order("orderid asc")->select();
           }*/
    }
     
       public function index(){
       	$this->open='1';
       	$this->active='index';
       	$this->display();
       }
       public function profile(){
       	$this->open='1';
         $this->active="profile";
       	 $this->display();
       }
         public function newpm(){
         	$this->open='1';
         $this->active="newpm";
       	 $this->display();
       }
        public function alipay(){
        	$this->open='1';
         $this->active="alipay";
       	 $this->display();
       }
        public function set_bangding(){
          $this->weixin=M('weixin')->where(array('userid'=>$_SESSION['uid']))->find();
          $this->server="http://".$_SERVER['SERVER_NAME'];
        	$this->open='3';
         $this->active="set_bangding";
       	 $this->display();
       }

       public function easy_column_delete(){

        M('weixin_easy_column')->where(array('id'=>I('id')))->delete();
        redirect($_SERVER['HTTP_REFERER']);
       }


       public function easy_delete(){
           @unlink('./'.M('weixin_easy')->where(array('id'=>I('id')))->getField('logo'));
        M('weixin_easy')->where(array('id'=>I('id')))->delete();
        redirect($_SERVER['HTTP_REFERER']);
       }


         public function wx_bangding_save(){
    $date=array(
         'wxid'=>I('wxid'),
         'wxname'=>I('wxname'),
         'url'=>I('url'),
         'token'=>I('token'),
         'userid'=>$_SESSION['uid'],
         'appid'=>I('appid'),
         'appsecret'=>I('appsecret'),
         'key'=>I('key')
          );
       if(I('userid')){
 M('weixin')->where(array('userid'=>I('userid')))->save($date);
      
       }else{
        M('weixin')->add($date);
       }
       
         redirect(U('set_bangding'));
   }
       public function set_reply(){
        // $this->weixin=M('weixin')->where(array('userid'=>$_SESSION['uid'],'type'=>1))->find();
            $this->image=M('weixink')->where(array('userid'=>$_SESSION['uid'],'order'=>1,'type'=>1))->find();
            $this->image_arr=M('weixink')->where(array('userid'=>$_SESSION['uid'],'type'=>1,'order'=>array('neq',1)))->select();
        	$this->open='3';
         $this->active="set_reply";
       	 $this->display();
       }
            public function set_zidong_save(){
      //p($_POST);exit;
      if(I('style')==0){
         $re= M('weixink')->where(array('userid'=>$_SESSION['uid'],'style'=>1,'type'=>2))->select();
         foreach ($re as $key => $value) {
           @unlink($value['content']);
                M('weixink')->where(array('id'=>$value['id']))->delete();
         }
         $re=M('weixink')->where(array('userid'=>$_SESSION['uid'],'style'=>0,'type'=>2))->find();
            $date=array(
           'style'=>'0',
           'content'=>I('content'),
           'userid'=>$_SESSION['uid'],
           'order'=>1,
           'type'=>2
          );
         if(!$re){
        
         M('weixink')->add($date);
       }else{
          M('weixink')->where(array('style'=>0,'type'=>2))->save($date);
       }
        
      }else{
//p($_POST);var_dump($_FILES);exit;
         M('weixink')->where(array('userid'=>$_SESSION['uid'],'style'=>0,'type'=>2))->delete();
         


        if($_FILES['id_photos']['name']!=''){
      $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['id_photos']['savepath'].$reArr['id_photos']['savename'];
             }     
     if(I('id')){
           $re=M('weixink')->where(array('id'=>I('id')))->find();
           if($_FILES['id_photos']['name']!=''){
              @unlink('./'.$re['content']);
           }else{
               $path=$re['content'];
           }
           

           $date=array(
         'title'=>I('title'),
         'url'=>I('url'),
         'style'=>1,
         'userid'=>$_SESSION['uid'],
         'order'=>I('order'),
         'content'=>$path ,
           'type'=>2
        );
           M('weixink')->where(array('id'=>I('id')))->save($date);
     }else{
      
                 $date=array(
         'title'=>I('title'),
         'url'=>I('url'),
         'style'=>1,
         'userid'=>$_SESSION['uid'],
         'order'=>I('order'),
         'content'=>$path ,
           'type'=>2
        );
                 M('weixink')->add($date);
     }
       
                 
                 }
                 redirect(U('set_zidong'));
    }
         public function set_reply_save(){
      //p($_POST);exit;
      if(I('style')==0){
         $re= M('weixink')->where(array('userid'=>$_SESSION['uid'],'style'=>1,'type'=>1))->select();
         foreach ($re as $key => $value) {
           @unlink($value['content']);
                M('weixink')->where(array('id'=>$value['id']))->delete();
         }
         $re=M('weixink')->where(array('userid'=>$_SESSION['uid'],'style'=>0,'type'=>1))->find();
            $date=array(
           'style'=>'0',
           'content'=>I('content'),
           'userid'=>$_SESSION['uid'],
           'order'=>1,
           'type'=>1
          );
         if(!$re){
        
         M('weixink')->add($date);
       }else{
          M('weixink')->where(array('style'=>0,'type'=>1))->save($date);
       }
        
      }else{
//p($_POST);var_dump($_FILES);exit;
         M('weixink')->where(array('userid'=>$_SESSION['uid'],'style'=>0,'type'=>1))->delete();
         


        if($_FILES['id_photos']['name']!=''){
      $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['id_photos']['savepath'].$reArr['id_photos']['savename'];
             }     
     if(I('id')){
           $re=M('weixink')->where(array('id'=>I('id')))->find();
           if($_FILES['id_photos']['name']!=''){
              @unlink('./'.$re['content']);
           }else{
               $path=$re['content'];
           }
           

           $date=array(
         'title'=>I('title'),
         'url'=>I('url'),
         'style'=>1,
         'userid'=>$_SESSION['uid'],
         'order'=>I('order'),
         'content'=>$path ,
           'type'=>1
        );
           M('weixink')->where(array('id'=>I('id')))->save($date);
     }else{
      
                 $date=array(
         'title'=>I('title'),
         'url'=>I('url'),
         'style'=>1,
         'userid'=>$_SESSION['uid'],
         'order'=>I('order'),
         'content'=>$path ,
           'type'=>1
        );
                 M('weixink')->add($date);
     }
       
                 
                 }
                 redirect(U('set_reply'));
    }
        public function set_guanjian(){
           $count=count(M('weixinkey')->where(array('userid'=>$_SESSION['uid']))->group('title')->select());
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->keyword=M('weixinkey')->where(array('userid'=>$_SESSION['uid']))->group('title')->select();
        	$this->open='3';
         $this->active="set_guanjian";
       	 $this->display();
       }
         public function set_guanjian_add(){
           $this->weixin=M('weixinkey')->where(array('userid'=>$_SESSION['uid'],'order'=>1))->find();
            $this->image_arr=M('weixinkey')->where(array('userid'=>$_SESSION['uid'] ,'title'=>$this->weixin['title'],'order'=>array('neq',1)))->select();
            $this->open='3';
         $this->active="set_guanjian";
         $this->display();
       }
        public function set_guanjian_save(){
 //p($_POST);var_dump($_FILES);exit;
        if(I('style')==0){
         if(!I('id')){
         $date=array(
           'style'=>'0',
           'content'=>I('content'),
           'userid'=>$_SESSION['uid'],
           'order'=>1,
           'title'=>I('title')
          );
         $re=M('weixinkey')->add($date);
         redirect(U('set_guanjian_add'));
       }else{

         $date=array(
           'style'=>'0',
           'content'=>I('content'),
           'userid'=>1,
           'order'=>1,
           'title'=>I('title'),
           'url'=>'',
           'image_name'=>''
          );
         $arr=M('weixinkey')->where(array('id'=>I('id')))->find();
         @unlink('./'.$arr['content']);
         $re=M('weixinkey')->where(array('title'=>$arr['title'],'id'=>array('neq',I('id'))))->select();
         foreach ($re as $key => $value) {
           @unlink('./'.$value['content']);
           M('weixinkey')->where(array('id'=>$value['id']))->delete();
         }
          M('weixinkey')->where(array('id'=>I('id')))->save($date);
        redirect(U('set_guanjian_add'));
       }
        
      }else{
  // p($_POST);var_dump($_FILES);exit;


      $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['id_photos']['savepath'].$reArr['id_photos']['savename'];
    if(I('id')!='' && I('order')!=''){
      $re=M('weixinkey')->where(array('id'=>I('id'),'order'=>I('order')))->find();
       $prevtitle=$re['title'];
      if($re){
        if($_FILES['id_photos']['name']!=''){
          @unlink('./'.M('weixinkey')->where(array('id'=>I('id')))->getField('content'));

        }else{
          $path=$re['content'];
        }
          
            
           $date=array(
         'image_name'=>I('image_name'),
         'url'=>I('url'),
         'style'=>1,
         'userid'=>1,
         'order'=>I('order'),
         'content'=>$path,
          'title'=>I('title')
        );  
        M('weixinkey')->where(array('id'=>I('id')))->save($date); 
        $res=M('weixinkey')->where(array('title'=>$prevtitle))->select();
         foreach ($res as $key => $value) {
          M('weixinkey')->where(array('id'=>$value['id']))->setField('title',I('title'));
         }
         redirect(U('set_guanjian_add'));
       }else{
          $date=array(
            'title'=>I('title'),
         'image_name'=>I('image_name'),
         'url'=>I('url'),
         'style'=>1,
         'userid'=>1,
         'order'=>I('order'),
         'content'=>$path
        );  
           M('weixinkey')->add($date);
            $re=M('weixinkey')->where(array('id'=>I('id')))->find();
           
           M('weixinkey')->where(array('id'=>I('id')))->setField(array('keyss'=>$keyss));
           $res=M('weixinkey')->where(array('title'=>$re['title']))->select();
           foreach ($res as $key1 => $value1) {
              M('weixinkey')->where(array('id'=>$value1['id']))->setField('title',I('title'));
           }

            redirect(U('set_guanjian_add',array('id'=>$re['id'])));
       }
        
     }else{
    // P($_POST); var_dump($_FILES); exit;
     if($_FILES['id_photos']['name']=='' && I('id')==''){
      //P($_POST);exit;
               $date=array(
         'style'=>1,
         'title'=>I('title'),
         'userid'=>$_SESSION['uid'],
         'order'=>1
        );
                 $re=M('weixinkey')->add($date);
                 redirect(U('set_guanjian_add',array('id'=>$re)));
     }elseif($_FILES['id_photos']['name']==''){

         $date=array(
         
         
         'style'=>1,
         'title'=>I('title'),
         'userid'=>1
         
        
        );
         $title=M('weixinkey')->where(array('id'=>I('id')))->getField('title');
         $re=M('weixinkey')->where(array('title'=>$title))->select();
         foreach ($re as $key => $value) {
          M('weixinkey')->where(array('id'=>$value['id']))->setField('title',I('title'));
         }
                 M('weixinkey')->where(array('id'=>I('id')))->save($date);
                 redirect(U('set_guanjian_add'));
     }else{
            $date=array(
              'image_name'=>I('image_name'),
              'url'=>I('url'),
              'style'=>I('style'),
              'userid'=>$_SESSION['uid'],
              'title'=>I('title'),
              'order'=>I('order'),
              'content'=>$path
              );
            $re=M('weixinkey')->add($date);
            redirect(U('set_guanjian_add'));
     }
     
              
     }
       
                 
                 }
                 
    }
      public function set_guanjian_passed(){
        $status=I('status')?'0':'1';
        M('weixinkey')->where(array('id'=>I('id')))->setField("passed",$status);
        redirect($_SERVER['HTTP_REFERER']);
    }
     public function set_guanjian_alldelete(){
      //P($_POST);exit;
        $re=M('weixinkey')->where(array('id'=>I('id')))->find();
          $res= M('weixinkey')->where(array('title'=>$re['title']))->select();
        foreach ($res as $key => $value) {
           @unlink('./'.$value['content']);
            M('weixinkey')->where(array('id'=>$value['id']))->delete();
        }
           
    
        redirect($_SERVER['HTTP_REFERER']);
    }
        public function set_zidong(){
             $this->image=M('weixink')->where(array('userid'=>$_SESSION['uid'],'order'=>1,'type'=>2))->find();
            $this->image_arr=M('weixink')->where(array('userid'=>$_SESSION['uid'],'type'=>2,'order'=>array('neq',1)))->select();
        	$this->open='3';
         $this->active="set_zidong";
       	 $this->display();
       }
         public function set_menu(){
           $this->menu=M('weixinmenu')->where(array('userid'=>$_SESSION['uid'],'pid'=>0))->order("orderid asc")->select();
      
            $this->weixin=M('weixinmenu')->where(array('id'=>I('id')))->find();
            $this->image_arr=M('weixinmenu')->where(array('pid'=>I('id')))->select();
        	$this->open='3';
         $this->active="set_menu";
       	 $this->display();
       }
       public function set_man_add(){
       // M('weixin')->where(array('userid'=>$_SESSION['uid']))->setField('next_openid','');
       // M('weixin_man')->where("id>0")->delete();
             $re=M('weixin')->where(array('userid'=>$_SESSION['uid']))->find();
             if(time()-$re['token_time']>7200){
               $access_token= gettoken($re['appid'],$re['appsecret']);
               $date=array(
                'access_token'=>$access_token,
                'token_time'=>time()
                );
               M('weixin')->where(array('userid'=>$_SESSION['uid']))->save($date);
             }else{
              $access_token=$re['access_token'];
             }
             $next_openid=M('weixin')->where(array('userid'=>$_SESSION['uid']))->getField('next_openid');
            // $re=M('weixin')->where(array('id'=>$_SESSION['uid']))->find();
            // var_dump($re);exit;
             if($next_openid){
              $next=$next_openid;
             }else{
              $next='';
             }
             $httpget=new HttpCurl();
             $url="https://api.weixin.qq.com/cgi-bin/user/get?access_token=".$access_token."&next_openid=".$next;

             $list=$httpget->get($url);
           
             $list=json_decode($list,true);
               //p($list);exit;
             $count=$list['count'];
              if($list['next_openid']){
               /* echo $_SESSION['uid'];
                echo $list['next_openid'];
                exit;*/
                 M('weixin')->where(array('userid'=>$_SESSION['uid']))->setField('next_openid',$list['next_openid']);
              }
            
            //var_dump($re);exit;
            $openid_arr= $list['data']['openid'];
          //var_dump($openid_arr[0]);exit;
             for ($i=0; $i <$count ; $i++) { 
              //echo $openid_arr[$i];
                $url="https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$list['access_token']."&openid=".$openid_arr[$i]."&lang=zh_CN";
                $man_list=$httpget->get($url);
                $man=json_decode($man_list);
                $id=M('weixin_man')->where(array('openid'=>$man->openid))->find();
                 $date=array(
                 'userid'=>$_SESSION['uid'],
                 'openid'=>$man->openid,
                 'nickname'=>$man->nickname,
                 'sex'=>$man->sex,
                 'city'=>$man->city,
                 'country'=>$man->country,
                 'province'=>$man->province,
                 'headimgurl'=>$man->headimgurl,
                 'subscribe_time'=>$man->subscribe_time,
                 'remark'=>$man->remark,
                 'groupid'=>$man->groupid,
                 'tagid_list'=>$man->tagid_list
                  );
                if(!$id){
                   
                M('weixin_man')->add($date);
                }else{
M('weixin_man')->where(array('openid'=>$man->openid))->save($date);
                }
              
             }
             redirect(U('set_man'));
       }
        public function set_man(){
            $count=M('weixin_man')->where(array('userid'=>$_SESSION['uid'],'linshi'=>'0'))->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           
         $this->man=M('weixin_man')->where(array('userid'=>$_SESSION['uid'],'linshi'=>'0'))->order('subscribe_time desc')->limit($limit)->select();
          $this->open='3';
         $this->active="set_man";
         $this->display();
       }
        public function delete_menu(){
         @unlink('./'.M('weixinmenu')->where(array('id'=>I('id')))->getField('content'));
         $re=M('weixinmenu')->where(array('id'=>I('id')))->delete();
          $this->ajaxReturn($re);
   }
     public function set_menu_delete(){
        $re=M('weixinmenu')->where(array('id'=>I('id')))->find();
      
        
            @unlink('./'.$re['content']);
            M('weixinmenu')->where(array('id'=>$re['id']))->delete();
    
        redirect($_SERVER['HTTP_REFERER']);
    }
        public function add_menu(){
        if(I('id')=='0'){
 $date=array(
       'pid'=>0,
       'title'=>I('title'),
       'orderid'=>I('orderid'),
       'userid'=>$_SESSION['uid']
        );
        }else{
           $date=array(
          'pid'=>I('id'),
         'title'=>I('title'),
         'orderid'=>I('orderid'),
          'userid'=>$_SESSION['uid']
        );
        }
     
       M('weixinmenu')->add($date);
       redirect($_SERVER['HTTP_REFERER']);
    }
       public function change_menu(){
    //  p($_POST);exit;
      $date=array(
       'title'=>I('title'),
       'orderid'=>I('orderid')
        );
       M('weixinmenu')->where(array('id'=>I('id')))->save($date);
       redirect($_SERVER['HTTP_REFERER']);
    }
      public function set_menu_image(){
               if (!IS_AJAX) {
           E('页面不存在！');
        } 
            $re=M('weixinmenu')->where(array('id'=>I('id'),'style'=>1))->find();
            $this->ajaxReturn($re);
    }
    public function formatting(){
               if (!IS_AJAX) {
           E('页面不存在！');
        } 
            $re=M('weixin')->where(array('userid'=>$_SESSION['uid']))->setField('bangding','0');
            $this->ajaxReturn($re);
    }
        public function set_menu_save()
    {
    //P($_POST);var_dump($_FILES);exit;
              if(I('style')=='0')
              {
         
                @unlink(M('weixinmenu')->where(array('id'=>I('id')))->getField('content'));
                $re=M('weixinmenu')->where(array('pid'=>I('id')))->select();
                foreach ($re as $key => $value) {
                  @unlink('./'.$value['content']);
                  M('weixinmenu')->where(array('id'=>$value['id']))->delete();
                }
                M('weixinmenu')->where(array('id'=>I('id')))->setField('style','0');
                M('weixinmenu')->where(array('id'=>I('id')))->setField('url','');
                M('weixinmenu')->where(array('id'=>I('id')))->setField('image_name','');
                  M('weixinmenu')->where(array('id'=>I('id')))->setField('content',I('content1'));
              }elseif(I('style')=='1')
              {   
                //P($_POST);var_dump($_FILES);exit;
                $upload=new \Think\Upload();
                   $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
                 $upload->replace   = true;
                $reArr=$upload->upload();
                 $path="Uploads/".$reArr['id_photos']['savepath'].$reArr['id_photos']['savename'];
                     

                if(I('order')!=1 && !M('weixinmenu')->where(array('id'=>I('id'),'order'=>I('order')))->count())
                {
                     $title=M('weixinmenu')->where(array('id'=>I('id')))->getField('title');
                           $date=array(
                            'title'=>$title,
                            'pid'=>I('id'),
                'image_name'=>I('image_name'),
                'url'=>I('url'),
                'style'=>I('style'),
                'order'=>I('order'),
                'content'=>$path,
                'type'=>1,
                'userid'=>$_SESSION['uid']
                  );
                           M("weixinmenu")->add($date);
                }else
                {     
                    $re=M('weixinmenu')->where(array('id'=>I('id')))->find();
                    if($_FILES['id_photos']['name']!=''){
                      @unlink(M('weixinmenu')->where(array('id'=>I('id')))->getField('content'));
                    }else{
                      $path=$re['content'];
                    }
                  
                  if(I('order')==1)
                  {
                    
               
                     $date=array(
                    'image_name'=>I('image_name'),
                    'url'=>I('url'),
                    'style'=>I('style'),
                    'order'=>I('order'),
                    'content'=>$path,
                    'userid'=>$_SESSION['uid']
                      );
                     M('weixinmenu')->where(array('id'=>I('id')))->save($date);
                   }else{
                      $pid=M('weixinmenu')->where(array('id'=>I('id')))->getField('pid');
                      $id=M('weixinmenu')->where(array('id'=>$pid,'order'=>1))->getField('id');
                       $date=array(
                    'image_name'=>I('image_name'),
                    'url'=>I('url'),
                    'style'=>I('style'),
                    'order'=>I('order'),
                    'content'=>$path,
                    'userid'=>1
                      );
                     M('weixinmenu')->where(array('id'=>I('id')))->save($date);
                     redirect(U('set_menu',array('id'=>$id)));
                   }
                  
                }
                  
              }else{
                 @unlink(M('weixinmenu')->where(array('id'=>I('id')))->getField('content'));
                   $re=M('weixinmenu')->where(array('pid'=>I('id')))->select();
                foreach ($re as $key => $value) {
                  @unlink('./'.$value['content']);
                  M('weixinmenu')->where(array('id'=>$value['id']))->delete();
                }
                  M('weixinmenu')->where(array('id'=>I('id')))->setField('url','');
                M('weixinmenu')->where(array('id'=>I('id')))->setField('image_name','');
                $date=array(
                 'style'=>I('style'),
                 'content'=>I('content')
                  );
                M('weixinmenu')->where(array('id'=>I('id')))->save($date);
              }
              redirect(U('set_menu',array('id'=>I('id'))));
      }
         public function custom_menu(){
        	$this->open='3';
         $this->active="custom_menu";
       	 $this->display();
       }
          public function open_image1(){
               if (!IS_AJAX) {
           E('页面不存在！');
        } 
            $re=M('weixink')->where(array('userid'=>I('userid'),'order'=>I('order'),'type'=>1))->find();
            $this->ajaxReturn($re);
    }
           public function open_image(){
               if (!IS_AJAX) {
           E('页面不存在！');
        } 
            $re=M('weixink')->where(array('userid'=>I('userid'),'order'=>I('order'),'type'=>2))->find();
            $this->ajaxReturn($re);
    }
     public function set_guanjian_image(){
               if (!IS_AJAX) {
           E('页面不存在！');
        } 
            $re=M('weixinkey')->where(array('userid'=>$_SESSION['uid'],'order'=>I('order'),'title'=>I('title')))->find();
            $this->ajaxReturn($re);
    }
       public function set_menu_start(){
        //echo '1';exit;
     $re=M('weixinmenu')->where(array('userid'=>$_SESSION['uid'],'pid'=>0))->order("orderid asc")->select();
        $xmlhead='{ "button":['    ;
        $xmlfoot='] }';
        $xmlbody='';
        foreach($re as $key=>$value)
        {    
           //$allcount=count($re);
          /*//判断类型
             $style=M('weixinmenu')->where(array('id'=>$value['id']))->getField('style');*/
             $child=M('weixinmenu')->where(array('pid'=>$value['id']))->select();
             $count=count($child);
             //如果没子菜单
             if($count==0)
             {
                 //判断类型
                 $style=$value['style'];
                 if($style=='2'){
                  $type='view';
                  $key1='url';
                  $url=$value['content'];
                 }else{
                  $type='click';
                  $key1='key';
                  $url="menu_id".$value['id'];
                 }
                 if($re[$key+1]['id']){
                  $xmlbody.='{"type":"'.$type.'","name":"'.$value['title'].'","'.$key1.'":"'.$url.'"},';
                 }else{
                $xmlbody.='{"type":"'.$type.'","name":"'.$value['title'].'","'.$key1.'":"'.$url.'"}';
                 }
                 
             }else
             {
                 $childhead='{"name":"'.$value['title'].'","sub_button":[';
                 if($re[$key+1]['id']){
                  $childfoot='] },';
                 }else{
                    $childfoot='] }';
                 }
                 
                 $childbody='';
                    foreach ($child as $k => $v) 
                    {
                         $style1=$v['style'];
                          if($style1=='2'){
                                $type='view';
                                  $key2='url';
                                  $url=$v['content'];
                               }else{
                                $type='click';
                                  $key2='key';
                                  $url="menu_id".$v['id'];
                               }
                               if($child[$k+1]['id']){
                                $childbody.='{"type":"'.$type.'","name":"'.$v['title'].'","'.$key2.'":"'.$url.'"},'; 
                               }else{
                                $childbody.='{"type":"'.$type.'","name":"'.$v['title'].'","'.$key2.'":"'.$url.'"}'; 
                               }
                           
                    } 
                    $xmlbody.=$childhead.$childbody.$childfoot; 
             }
        }
          $xml=$xmlhead.$xmlbody.$xmlfoot;
    //echo $xml;exit;
          $weixin=M('weixin')->where(array('userid'=>$_SESSION['uid']))->find();
      //var_dump(time()-$weixin['token_time']);exit;
          if(time()-$weixin['token_time']>7200 or $weixin['token_time']==''){

               $token=gettoken($weixin['appid'],$weixin['appsecret']);
               $date=array(
                'access_token'=>$token,
                'token_time'=>time()
                );
                M('weixin')->where(array('userid'=>$_SESSION['uid']))->save($date);  
                 //var_dump($weixin);  
          }else{
            $token=$weixin['access_token'];
          }
          $config=array(
            'appId'=>$weixin['appid'],
            'appSecret'=>$weixin['appsecret'],
            'access_token'=>$token
            );
          $wechat=new wechat($config);
         // $wechat->delete_menu();
         $rev= $wechat->create_menu($xml);
         //var_dump($rev);exit;
         $res=$rev[1];
       /*  //$res=$rev[1];  //返回状态对象
         var_dump($res);
         echo $res->errcode; //返回状态值
       echo $res->errmsg; //返回信息
       exit;*/
          //var_dump($fanhui);
         if($res->errcode==0 && strtolower($res->errmsg)=='ok'){
          redirect(U('set_menu'));
         }
  
     }
         public function set_menu_stop(){
     /* $re="menu_id%s";
      echo sprintf($re,20);
      echo "1";exit;*/
       $weixin=M('weixin')->where(array('userid'=>$_SESSION['uid']))->find();

          if(time()-$weixin['token_time']>7200){
               $token=gettoken($weixin['appid'],$weixin['appsecret']);
               $date=array(
                'access_token'=>$token,
                'token_time'=>time()
                );
                M('weixin')->where(array('userid'=>$_SESSION['uid']))->save($date);    
          }else{
            $token=$weixin['access_token'];
          }
          $config=array(
            'appId'=>$weixin['appid'],
            'appSecret'=>$weixin['appsecret'],
            'access_token'=>$token
            );
          $wechat=new wechat($config);
          $rev=$wechat->delete_menu();
            $res=$rev[1];
        /* $res=$rev[1];  返回状态对象
         var_dump($res);
         echo $res->errcode; 返回状态值*/
        // echo $res->errmsg; //返回信息
          //var_dump($fanhui);
         if($res->errcode==0 && strtolower($res->errmsg)=='ok'){
          redirect(U('set_menu'));
         }

     }
     public function lanmu(){
        $count=M('weixin_article_column')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 15);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_article_column')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->select();
      $this->open='5';
      $this->active='article';
      $this->display();
     }
      public function article(){
        $where=array('userid'=>$_SESSION['uid']);
        if($_GET['title']){
          $where=array_merge($where,array('title'=>array('like','%'.$_GET['title'].'%')));
        }
        $count=M('weixin_article')->where($where)->count();
           $page = new \Think\Page($count, 15);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_article')->where($where)->limit($limit)->order('addtime desc')->select();

      $this->open='5';
      $this->active='article';
      $this->display();
     }
        public function dongtai(){
          $where=array('userid'=>$_SESSION['uid']);
          if($_GET['title']){
            if(is_numeric($_GET['title'])){
          $where=array_merge($where,array('id'=>$_GET['title']));
            }else{
              $where=array_merge($where,array('content'=>array('like','%'.$_GET['title'].'%')));
            }
            $count=M('weixin_release')->where($where)->group('wid')->count();
           $page = new \Think\Page($count, 15);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_release')->where($where)->limit($limit)->group('wid')->order('addtime desc')->select();
          }elseif($_GET['nickname']){
              $re=M('weixin_man')->where(array('userid'=>$_SESSION['uid'],'nickname'=>array('like','%'.$_GET['nickname'].'%')))->order('id asc')->select();
                 $arr=array();
                  $news=M('weixin_mydata')->where(array('userid'=>$_SESSION['uid'],'nickname'=>array('like','%'.$_GET['nickname'].'%')))->order('id asc')->select();
                  $count=count($news);
                  //echo $count;
                  foreach ($news as $key1 => $value1) {
                   array_push($arr,$value1['wid']);
                  }
                  foreach ($re as $key => $value) {
                    if(!in_array($value['id'], $arr)){
                      array_push($arr,$value['id']);
                    }
                  }
                 if($arr){
                  $where=array_merge($where,array('wid'=>array('in',$arr)));
                }else{
                  $where=array_merge($where,array('wid'=>array('lt',1)));
                }
            $count=M('weixin_release')->where($where)->group('wid')->count();
           $page = new \Think\Page($count, 15);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_release')->where($where)->limit($limit)->group('wid')->order('addtime desc')->select();
          }elseif($_GET['content']){
            
            $this->message=M('weixin_release_message')->where(array('type'=>1,'content'=>array('like','%'.$_GET['content'].'%')))->select();
            $count=M('weixin_release')->where($where)->group('wid')->count();
           $page = new \Think\Page($count, 15);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_release')->where($where)->limit($limit)->group('wid')->order('addtime desc')->select();
          }else{
            $re=M('weixin_release')->where($where)->group('wid')->order('addtime desc')->select();
            $arr=array();
            foreach ($re as $key => $value) {
             $arr[$key]=$value['wid'];
            }
            $count=count($arr);
           $page = new \Think\Page($count, 15);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_release')->where($where)->limit($limit)->order('addtime desc')->group('wid')->select();
          }
        
//var_dump($this->com);exit;
      $this->open='5';
      $this->active='dongtai';
      $this->display();
     }
          public function dongtai_list(){
        $count=M('weixin_release')->where(array('wid'=>I('wid')))->count();
           $page = new \Think\Page($count, 15);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_release')->where(array('wid'=>I('wid')))->limit($limit)->order('addtime desc')->select();

      $this->open='5';
      $this->active='dongtai';
      $this->display();
     }
        public function dongtai_jubao(){
        $count=M('weixin_release_jubao')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 15);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_release_jubao')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->order('addtime desc')->select();

      $this->open='5';
      $this->active='dongtai';
      $this->display();
     }
          public function dongtai_message_list(){
        $count=M('weixin_release_message')->where(array('aid'=>I('id')))->count();
           $page = new \Think\Page($count, 15);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_release_message')->where(array('aid'=>I('id')))->limit($limit)->order('addtime desc')->select();

      $this->open='5';
      $this->active='dongtai';
      $this->display();
     }
        public function article_reply(){
        $count=M('weixin_article_message')->where(array('aid'=>I('id')))->count();
           $page = new \Think\Page($count, 15);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_article_message')->where(array('aid'=>I('id')))->limit($limit)->order('addtime asc')->select();
            //$this->com['title']=M('weixin_article')->where(array('id'=>I('id')))->getField('title');
      $this->open='5';
      $this->active='article';
      $this->display();
     }
     public function baoliao_list(){
        $count=M('weixin_baoliao')->where(array('userid'=>$_SESSION['uid'],'dele'=>array('neq',1)))->count();
           $page = new \Think\Page($count, 15);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_baoliao')->where(array('userid'=>$_SESSION['uid'],'dele'=>array('neq',1)))->limit($limit)->order('addtime desc')->select();
      $this->open='5';
      $this->active='article';
      $this->display();
     }
       public function affiche(){
         $count=M('weixin_affiche')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 15);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->affiche=M('weixin_affiche')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->order('addtime desc')->select();
        $this->open='5';
      $this->active='affiche';
      $this->display();
      }
     public function show(){
       $count=M('weixin_show')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_show')->where(array('userid'=>$_SESSION['uid']))->order('ordera desc')->limit($limit)->select();
 $this->open='5';
      $this->active='show';
      $this->display();
      }
       public function my_goods(){
       $count=M('weixin_product')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_product')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->select();
 $this->open='2';
      $this->active='my_goods';
      $this->display();
      }
       public function video(){
       $count=M('weixin_video')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_video')->where(array('userid'=>$_SESSION['uid']))->order('ordera desc')->limit($limit)->select();
         $this->open='5';
      $this->active='video';
      $this->display();
      }
        public function broadcast(){
       $count=M('weixin_broadcast')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_broadcast')->where(array('userid'=>$_SESSION['uid']))->order('ordera desc')->limit($limit)->select();
         $this->open='5';
      $this->active='broadcast';
      $this->display();
      }
         public function education(){
       $count=M('weixin_education')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_education')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->select();
         $this->open='8';
      $this->active='education';
      $this->display();
      }
        public function invest(){
       $count=M('weixin_invest')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_invest')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->select();
         $this->open='10';
      $this->active='invest';
      $this->display();
      }
          public function medicine(){
       $count=M('weixin_medicine')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_medicine')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->select();
         $this->open='9';
      $this->active='medicine';
      $this->display();
      }
      public function show_column_add_save(){
         $date=array(
          'title'=>I('title'),
          'userid'=>$_SESSION['uid']
          );
         M('weixin_show_column')->add($date);
         redirect(U('show_lanmu'));
      }
       public function product_column_add_save(){
         $upload=new \Think\Upload();
                   $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
                 $upload->replace   = true;
                $reArr=$upload->upload();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                     
         $date=array(
          'logo'=>$path,
          'title'=>I('title'),
          'userid'=>$_SESSION['uid'],
          'pid'=>I('pid')
          );
         M('weixin_product_column')->add($date);
         redirect(U('product_lanmu'));
      }
       public function video_column_add_save(){
         $date=array(
          'title'=>I('title'),
          'userid'=>$_SESSION['uid']
          );
         M('weixin_video_column')->add($date);
         redirect(U('video_column'));
      }
        public function broadcast_column_add_save(){
         $date=array(
          'title'=>I('title'),
          'userid'=>$_SESSION['uid']
          );
         M('weixin_broadcast_column')->add($date);
         redirect(U('broadcast_column'));
      }
        public function education_column_add_save(){
         $date=array(
          'title'=>I('title'),
          'userid'=>$_SESSION['uid']
          );
         M('weixin_education_column')->add($date);
         redirect(U('education_column'));
      }
       public function invest_column_add_save(){
         $date=array(
          'title'=>I('title'),
          'userid'=>$_SESSION['uid'],
          'pid'=>I('pid')
          );
         M('weixin_invest_column')->add($date);
         redirect(U('invest_column'));
      }
        public function easy_column_add_save(){
         $date=array(
          'title'=>I('title'),
          'userid'=>$_SESSION['uid']
          );
         M('weixin_easy_column')->add($date);
         redirect(U('easy_column'));
      }
        public function medicine_column_add_save(){
         $date=array(
          'title'=>I('title'),
          'userid'=>$_SESSION['uid']
          );
         M('weixin_medicine_column')->add($date);
         redirect(U('medicine_column'));
      }
       public function show_column_change_save(){
         $date=array(
          'title'=>I('title')
          );
         M('weixin_show_column')->where(array('id'=>I('id')))->save($date);
         redirect(U('show_lanmu'));
      }
        public function product_column_change_save(){
          if($_FILES['logo']['name']!=''){
          @unlink('./'.M('weixin_product_column')->where(array('id'=>I('id')))->getField('logo'));
           $upload=new \Think\Upload();
                   $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
                 $upload->replace   = true;
                $reArr=$upload->upload();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
              }else{
                 $path=M('weixin_product_column')->where(array('id'=>I('id')))->getField('logo');
              }     
         $date=array(
          'logo'=>$path,
          'title'=>I('title'),
          'pid'=>I('pid')
          );
         M('weixin_product_column')->where(array('id'=>I('id')))->save($date);
         redirect(U('product_lanmu'));
      }
        public function video_column_change_save(){
         $date=array(
          'title'=>I('title')
          );
         M('weixin_video_column')->where(array('id'=>I('id')))->save($date);
         redirect(U('video_column'));
      }
       public function broadcast_column_change_save(){
         $date=array(
          'title'=>I('title')
          );
         M('weixin_broadcast_column')->where(array('id'=>I('id')))->save($date);
         redirect(U('broadcast_column'));
      }
       public function education_column_change_save(){
         $date=array(
          'title'=>I('title')
          );
         M('weixin_education_column')->where(array('id'=>I('id')))->save($date);
         redirect(U('education_column'));
      }
      public function invest_column_change_save(){
         $date=array(
          'title'=>I('title'),
          'pid'=>I('pid')
          );
         M('weixin_invest_column')->where(array('id'=>I('id')))->save($date);
         redirect(U('invest_column'));
      }
        public function easy_column_change_save(){
         $date=array(
          'title'=>I('title')
          );
         M('weixin_easy_column')->where(array('id'=>I('id')))->save($date);
         redirect(U('easy_column'));
      }
        public function medicine_column_change_save(){
         $date=array(
          'title'=>I('title')
          );
         M('weixin_medicine_column')->where(array('id'=>I('id')))->save($date);
         redirect(U('medicine_column'));
      }
        public function show_column_add(){
        $this->column=M('weixin_show_column')->where(array('userid'=>$_SESSION['uid'],'pid'=>0))->select();

         $this->open='5';
      $this->active='show';
      $this->display();
      }
       public function product_column_add(){
        $this->column=M('weixin_product_column')->where(array('userid'=>$_SESSION['uid'],'pid'=>0))->select();

         $this->open='2';
      $this->active='product_lanmu';
      $this->display();
      }
        public function show_column_change(){
        $this->column=M('weixin_show_column')->where(array('userid'=>$_SESSION['uid'],'pid'=>0))->select();
        $this->show=M('weixin_show_column')->where(array('id'=>I('id')))->find();
         $this->open='5';
      $this->active='show';
      $this->display();
      }
         public function product_column_change(){
        $this->column=M('weixin_product_column')->where(array('userid'=>$_SESSION['uid'],'pid'=>0))->select();
        $this->show=M('weixin_product_column')->where(array('id'=>I('id')))->find();

         $this->open='2';
      $this->active='product_lanmu';
      $this->display();
      }
         public function video_column_change(){
       
        $this->show=M('weixin_video_column')->where(array('id'=>I('id')))->find();
         $this->open='5';
      $this->active='video';
      $this->display();
      }
         public function broadcast_column_change(){
       
        $this->show=M('weixin_broadcast_column')->where(array('id'=>I('id')))->find();
         $this->open='5';
      $this->active='broadcast';
      $this->display();
      }
           public function education_column_change(){
       
        $this->show=M('weixin_education_column')->where(array('id'=>I('id')))->find();
         $this->open='8';
      $this->active='education_column';
      $this->display();
      }
         public function invest_column_change(){
       
        $this->show=M('weixin_invest_column')->where(array('id'=>I('id')))->find();
         $this->open='10';
      $this->active='invest_column';
      $this->display();
      }
        public function easy_column_change(){
       
        $this->show=M('weixin_easy_column')->where(array('id'=>I('id')))->find();
         $this->open='5';
      $this->active='easy_column';
      $this->display();
      }
           public function medicine_column_change(){
       
        $this->show=M('weixin_medicine_column')->where(array('id'=>I('id')))->find();
         $this->open='9';
      $this->active='medicine_column';
      $this->display();
      }
      public function show_lanmu(){
         $count=M('weixin_show_column')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
         //  $this->com=M('weixin_show')->where(array('userid'=>$_SESSION['uid']))->select();
        $this->com=M('weixin_show_column')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->order('ordera desc')->select();

         $this->open='5';
      $this->active='show';
      $this->display();
      }
       public function product_lanmu(){
         $count=M('weixin_product_column')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
         //  $this->com=M('weixin_show')->where(array('userid'=>$_SESSION['uid']))->select();
        $this->com=M('weixin_product_column')->where(array('userid'=>$_SESSION['uid'],'pid'=>0))->limit($limit)->select();

         $this->open='2';
      $this->active='product_lanmu';
      $this->display();
      }
         public function video_column(){
         $count=M('weixin_video_column')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
         //  $this->com=M('weixin_show')->where(array('userid'=>$_SESSION['uid']))->select();
        $this->com=M('weixin_video_column')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->order('ordera desc')->select();

         $this->open='5';
      $this->active='video';
      $this->display();
      }
       public function broadcast_column(){
         $count=M('weixin_broadcast_column')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
         //  $this->com=M('weixin_show')->where(array('userid'=>$_SESSION['uid']))->select();
        $this->com=M('weixin_broadcast_column')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->order('ordera desc')->select();

         $this->open='5';
      $this->active='broadcast';
      $this->display();
      }
      public function video_column_add(){
          $this->open='5';
      $this->active='video';
      $this->display();
      }
      public function broadcast_column_add(){
          $this->open='5';
      $this->active='broadcast';
      $this->display();
      }
       public function education_column_add(){
          $this->open='8';
      $this->active='education_column';
      $this->display();
      }
       public function invest_column_add(){
          $this->open='10';
      $this->active='invest_column';
      $this->display();
      }
      public function easy_column_add(){
          $this->open='5';
      $this->active='easy';
      $this->display();
      }
       public function medicine_column_add(){
          $this->open='9';
      $this->active='medicine_column';
      $this->display();
      }
             public function education_column(){
         $count=M('weixin_education_column')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
         //  $this->com=M('weixin_show')->where(array('userid'=>$_SESSION['uid']))->select();
        $this->com=M('weixin_education_column')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->select();

         $this->open='8';
      $this->active='education_column';
      $this->display();
      }
           public function invest_column(){
         $count=M('weixin_invest_column')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
         //  $this->com=M('weixin_show')->where(array('userid'=>$_SESSION['uid']))->select();
        $this->com=M('weixin_invest_column')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->select();

         $this->open='10';
      $this->active='invest_column';
      $this->display();
      }
           public function easy_column(){
         $count=M('weixin_easy_column')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
         //  $this->com=M('weixin_show')->where(array('userid'=>$_SESSION['uid']))->select();
        $this->com=M('weixin_easy_column')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->select();

         $this->open='5';
      $this->active='easy';
      $this->display();
      }
            public function medicine_column(){
         $count=M('weixin_medicine_column')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
         //  $this->com=M('weixin_show')->where(array('userid'=>$_SESSION['uid']))->select();
        $this->com=M('weixin_medicine_column')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->select();

         $this->open='9';
      $this->active='medicine_column';
      $this->display();
      }
       public function easy(){
       $count=M('weixin_easy')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 8);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_easy')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->select();
 $this->open='5';
      $this->active='easy';
      $this->display();
      }
       public function activity(){
       $count=M('weixin_activity')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 8);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_activity')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->order('id desc')->select();
 $this->open='5';
      $this->active='activity';
      $this->display();
      }
        public function activity_baoming(){
       $count=M('weixin_activity_baoming')->where(array('aid'=>I('id')))->count();
           $page = new \Think\Page($count, 8);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_activity_baoming')->where(array('aid'=>I('id')))->limit($limit)->select();
 $this->open='5';
      $this->active='activity';
      $this->display();
      }
        public function index_pic(){
       $count=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>1))->count();
           $page = new \Think\Page($count, 12);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>1))->limit($limit)->order('type asc')->select();
 $this->open='5';
      $this->active='index_pic';
      $this->display();
      }
        public function dynamic_nav(){
       $count=M('weixin_dynamic_nav')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 8);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_dynamic_nav')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->select();
 $this->open='5';
      $this->active='dynamic_nav';
      $this->display();
      }
          public function word(){
            $where=array('userid'=>$_SESSION['uid']);
            if($_GET['title']){
              $where=array_merge($where,array('word'=>array('like','%'.$_GET['title'].'%')));
            }
       $count=M('weixin_word')->where($where)->count();
           $page = new \Think\Page($count,20);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_word')->where($where)->limit($limit)->select();
 $this->open='5';
      $this->active='word';
      $this->display();
      }
      public function upload_word(){
        $upload=new \Think\Upload();
         
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('txt');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'home/word/';
                 $upload->replace   = true;
                $reArr=$upload->upload();
                if($reArr){
                  $path="Uploads/".$reArr['guanjian']['savepath'].$reArr['guanjian']['savename'];
                }else{
                  $this->error($upload->getError());
                }
                $file='./'.$path;
                //echo $file;
                $lines = file_get_contents($file); 
                $lines = mb_convert_encoding($lines, 'utf-8', 'gbk');
                $lines = preg_replace('/\s/', ',', $lines);
                $lines=explode(',', $lines);
                foreach($lines as $key=>$value){
                  $date=array('word'=>$value,'userid'=>$_SESSION['uid']);
                   M('weixin_word')->add($date);
                 } 
                 @link('./'.$file);
                 redirect(U('word'));
                
      }
      public function word_down(){
         $down=new \Org\Net\Http();
         ob_clean();
      $re="./Uploads/home/word/shili.txt";


     
      $down->download($re);
      }
          public function nav(){
       $count=M('weixin_nav')->where(array('userid'=>$_SESSION['uid'],'page'=>1))->count();
           $page = new \Think\Page($count, 8);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_nav')->where(array('userid'=>$_SESSION['uid'],'page'=>1))->limit($limit)->select();
 $this->open='5';
      $this->active='nav';
      $this->display();
      }
         public function invest_pic(){
       $count=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>4))->count();
           $page = new \Think\Page($count, 8);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>4))->limit($limit)->select();
 $this->open='10';
      $this->active='invest_pic';
      $this->display();
      }
       public function medicine_pic(){
       $count=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>2))->count();
           $page = new \Think\Page($count, 8);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>2))->limit($limit)->select();
 $this->open='9';
      $this->active='medicine_pic';
      $this->display();
      }
         public function education_pic(){
       $count=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>3))->count();
           $page = new \Think\Page($count, 8);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>3))->limit($limit)->select();
 $this->open='8';
      $this->active='education_pic';
      $this->display();
      }
          public function product_pic(){
       $count=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>5))->count();
           $page = new \Think\Page($count, 8);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>5))->limit($limit)->select();
 $this->open='2';
      $this->active='product_pic';
      $this->display();
      }
      public function index_pic_add(){
         $this->open='5';
      $this->active='pic';
      $this->display();
      }

       public function nav_add(){
         $this->open='5';
     
      $this->active='nav';
      $this->display();
      }
      public function invest_pic_add(){
         $this->open='10';
      $this->active='invest_pic';
      $this->display();
      }
      public function medicine_pic_add(){
         $this->open='9';
      $this->active='medicine_pic';
      $this->display();
      }
        public function education_pic_add(){
         $this->open='8';
      $this->active='education_pic';
      $this->display();
      }
        public function product_pic_add(){
         $this->open='2';
      $this->active='product_pic';
      $this->display();
      }
      public function index_pic_change(){
        $this->pic=M('weixin_lunbotu')->where(array('id'=>I('id')))->find();
         $this->open='5';
      $this->active='pic';
      $this->display();
      }
       public function nav_change(){
        $this->pic=M('weixin_nav')->where(array('id'=>I('id')))->find();
         $this->open='5';
      $this->active='nav';
      $this->display();
      }
         public function invest_pic_change(){
        $this->pic=M('weixin_lunbotu')->where(array('id'=>I('id')))->find();
         $this->open='10';
      $this->active='invest_pic';
      $this->display();
      }
       public function medicine_pic_change(){
        $this->pic=M('weixin_lunbotu')->where(array('id'=>I('id')))->find();
         $this->open='9';
      $this->active='medicine_pic';
      $this->display();
      }
      public function product_pic_change(){
        $this->pic=M('weixin_lunbotu')->where(array('id'=>I('id')))->find();
         $this->open='2';
      $this->active='product_pic';
      $this->display();
      }
        public function education_pic_change(){
        $this->pic=M('weixin_lunbotu')->where(array('id'=>I('id')))->find();
         $this->open='8';
      $this->active='education_pic';
      $this->display();
      }
      public function index_pic_add_save(){
       // var_dump($_POST);exit;
        $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 $date=array(
                   'userid'=>$_SESSION['uid'],
                   'page'=>'1',
                   'type'=>I('type'),
                   'url'=>I('url'),
                   'logo'=>$path
                  );
                 M('weixin_lunbotu')->add($date);
                 redirect(U('index_pic'));
      }
      public function nav_add_save(){
 $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 $date=array(
                   'userid'=>$_SESSION['uid'],
                   'title'=>I('title'),
                   'url'=>I('url'),
                   'logo'=>$path
                  );
                 M('weixin_nav')->add($date);
                 redirect(U('nav'));

      }

      public function invest_pic_add_save(){
        $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 $date=array(
                   'userid'=>$_SESSION['uid'],
                   'page'=>'4',
                   'logo'=>$path
                  );
                 M('weixin_lunbotu')->add($date);
                 redirect(U('invest_pic'));
      }
        public function medicine_pic_add_save(){
        $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 $date=array(
                   'userid'=>$_SESSION['uid'],
                   'page'=>'2',
                   'logo'=>$path
                  );
                 M('weixin_lunbotu')->add($date);
                 redirect(U('medicine_pic'));
      }
       public function education_pic_add_save(){
        $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 $date=array(
                   'userid'=>$_SESSION['uid'],
                   'page'=>'3',
                   'logo'=>$path
                  );
                 M('weixin_lunbotu')->add($date);
                 redirect(U('education_pic'));
      }
        public function product_pic_add_save(){
        $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 $date=array(
                   'userid'=>$_SESSION['uid'],
                   'page'=>'5',
                   'logo'=>$path
                  );
                 M('weixin_lunbotu')->add($date);
                 redirect(U('product_pic'));
      }
      public function index_pic_change_save(){
        //var_dump($_POST);exit;
        if($_FILES['logo']['name']!=''){
          @unlink('./'.M('weixin_lunbotu')->where(array('id'=>I('id')))->getField('logo'));
              $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
               }else{
               $path=M('weixin_lunbotu')->where(array('id'=>I('id')))->getField('logo');
               }
        
                 $date=array(
                   'userid'=>$_SESSION['uid'],
                   'page'=>'1',
                   'url'=>I('url'),
                   'type'=>I('type'),
                   'logo'=>$path
                  );
                M('weixin_lunbotu')->where(array('id'=>I('id')))->save($date);
                 redirect(I('p'));
      }
         public function nav_change_save(){
          if($_FILES['logo']['name']!=''){
             @unlink('./'.M('weixin_nav')->where(array('id'=>I('id')))->getField('logo'));
              $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
               }else{
                $path=M('weixin_nav')->where(array('id'=>I('id')))->getField('logo');
               }
       
                 $date=array(
                  'url'=>I('url'),
                   'title'=>I('title'),
                   'logo'=>$path
                  );
                M('weixin_nav')->where(array('id'=>I('id')))->save($date);
                 redirect(U('nav'));
      }
       public function invest_pic_change_save(){
        @unlink('./'.M('weixin_lunbotu')->where(array('id'=>I('id')))->getField('logo'));
              $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 $date=array(
                   'userid'=>$_SESSION['uid'],
                
                   'logo'=>$path
                  );
                M('weixin_lunbotu')->where(array('id'=>I('id')))->save($date);
                 redirect(U('invest_pic'));
      }
       public function medicine_pic_change_save(){
        @unlink('./'.M('weixin_lunbotu')->where(array('id'=>I('id')))->getField('logo'));
              $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 $date=array(
                   'userid'=>$_SESSION['uid'],
                   
                   'logo'=>$path
                  );
                M('weixin_lunbotu')->where(array('id'=>I('id')))->save($date);
                 redirect(U('medicine_pic'));
      }
       public function education_pic_change_save(){
        @unlink('./'.M('weixin_lunbotu')->where(array('id'=>I('id')))->getField('logo'));
              $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 $date=array(
                   'userid'=>$_SESSION['uid'],
                  
                   'logo'=>$path
                  );
                M('weixin_lunbotu')->where(array('id'=>I('id')))->save($date);
                 redirect(U('education_pic'));
      }
       public function product_pic_change_save(){
        @unlink('./'.M('weixin_lunbotu')->where(array('id'=>I('id')))->getField('logo'));
              $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 $date=array(
                   'userid'=>$_SESSION['uid'],
                   'page'=>'5',
                   'logo'=>$path
                  );
                M('weixin_lunbotu')->where(array('id'=>I('id')))->save($date);
                 redirect(U('product_pic'));
      }
          public function friend(){
      /* $count=M('weixin_activity')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 8);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_activity')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->select();*/
 $this->open='5';
      $this->active='friend';
      $this->display();
      }
           public function forum(){
      /* $count=M('weixin_activity')->where(array('userid'=>$_SESSION['uid']))->count();
           $page = new \Think\Page($count, 8);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_activity')->where(array('userid'=>$_SESSION['uid']))->limit($limit)->select();*/
 $this->open='5';
      $this->active='forum';
      $this->display();
      }
     
      public function xieyi(){
        $this->xieyi=M('weixin_xieyi')->where(array('userid'=>$_SESSION['uid']))->find();
        $this->open='5';
      $this->active='xieyi';
      $this->display();
      }
       public function us(){
        $this->us=M('weixin')->where(array('userid'=>$_SESSION['uid']))->find();
        $this->open='5';
      $this->active='us';
      $this->display();
      }
      public function us_save(){
        $date=array(
          'tel'=>I('tel'),'email'=>I('email'),'service'=>I('service'),'privacy'=>I('privacy')
          );
        M('weixin')->where(array('id'=>I('id')))->save($date);
        redirect(U('us'));
      }
      public function xieyi_save(){
         $date=array(
            'title'=>I('title'),
            'content'=>I('content'),
            'userid'=>$_SESSION['uid']
          );
          if(I('id')){
           M('weixin_xieyi')->where(array('id'=>I('id')))->save($date);
        }else{
           M('weixin_xieyi')->add($date);
        }
         redirect(U('xieyi'));
      }
       public function show_add(){
       $this->column=M('weixin_show_column')->where(array('userid'=>$_SESSION['uid']))->select();
 $this->open='5';
      $this->active='show';
      $this->display();
      }
       public function product_add(){
       $this->column=M('weixin_product_column')->where(array('userid'=>$_SESSION['uid'],'pid'=>0))->select();
 $this->open='2';
      $this->active='my_goods';
      $this->display();
      }
        public function video_add(){
      $this->column=M('weixin_video_column')->where(array('userid'=>$_SESSION['uid']))->select();
 $this->open='5';
      $this->active='video';
      $this->display();
      }
        public function broadcast_add(){
      $this->column=M('weixin_broadcast_column')->where(array('userid'=>$_SESSION['uid']))->select();
 $this->open='5';
      $this->active='broadcast';
      $this->display();
      }
         public function education_add(){
      $this->column=M('weixin_education_column')->where(array('userid'=>$_SESSION['uid']))->select();
 $this->open='8';
      $this->active='education';
      $this->display();
      }
        public function invest_add(){
      $this->column=M('weixin_invest_column')->where(array('userid'=>$_SESSION['uid']))->select();
 $this->open='10';
      $this->active='invest';
      $this->display();
      }
         public function medicine_add(){
      $this->column=M('weixin_medicine_column')->where(array('userid'=>$_SESSION['uid']))->select();
 $this->open='9';
      $this->active='medicine';
      $this->display();
      }
        public function easy_add(){
          $this->column=M('weixin_easy_column')->where(array('userid'=>$_SESSION['uid']))->select();
 $this->open='5';
      $this->active='easy';
      $this->display();
      }
       public function activity_add(){
         // $this->column=M('weixin_easy_column')->where(array('userid'=>$_SESSION['uid']))->select();
 $this->open='5';
      $this->active='activity';
      $this->display();
      }
        public function show_change(){
           $this->column=M('weixin_show_column')->where(array('userid'=>$_SESSION['uid']))->select();
          $this->show=M('weixin_show')->where(array('id'=>I('id')))->find();
 $this->open='5';
      $this->active='show';
      $this->display();
      }
         public function product_change(){
           $this->column=M('weixin_product_column')->where(array('userid'=>$_SESSION['uid'],'pid'=>0))->select();
          $this->show=M('weixin_product')->where(array('id'=>I('id')))->find();
 $this->open='2';
      $this->active='my_goods';
      $this->display();
      }
       public function video_change(){
           $this->column=M('weixin_video_column')->where(array('userid'=>$_SESSION['uid']))->select();
          $this->show=M('weixin_video')->where(array('id'=>I('id')))->find();
 $this->open='5';
      $this->active='video';
      $this->display();
      }
        public function broadcast_change(){
           $this->column=M('weixin_broadcast_column')->where(array('userid'=>$_SESSION['uid']))->select();
          $this->show=M('weixin_broadcast')->where(array('id'=>I('id')))->find();
 $this->open='5';
      $this->active='broadcast';
      $this->display();
      }
      public function education_change(){
           $this->column=M('weixin_education_column')->where(array('userid'=>$_SESSION['uid']))->select();
          $this->show=M('weixin_education')->where(array('id'=>I('id')))->find();
 $this->open='8';
      $this->active='education';
      $this->display();
      }
      public function invest_change(){
           $this->column=M('weixin_invest_column')->where(array('userid'=>$_SESSION['uid']))->select();
          $this->show=M('weixin_invest')->where(array('id'=>I('id')))->find();
 $this->open='10';
      $this->active='invest';
      $this->display();
      }
       public function medicine_change(){
           $this->column=M('weixin_medicine_column')->where(array('userid'=>$_SESSION['uid']))->select();
          $this->show=M('weixin_medicine')->where(array('id'=>I('id')))->find();
 $this->open='9';
      $this->active='medicine';
      $this->display();
      }
         public function easy_change(){
          $this->column=M('weixin_easy_column')->where(array('userid'=>$_SESSION['uid']))->select();
          $this->show=M('weixin_easy')->where(array('id'=>I('id')))->find();
 $this->open='5';
      $this->active='easy';
      $this->display();
      }
         public function activity_change(){
         // $this->column=M('weixin_easy_column')->where(array('userid'=>$_SESSION['uid']))->select();
          $this->show=M('weixin_activity')->where(array('id'=>I('id')))->find();
 $this->open='5';
      $this->active='activity';
      $this->display();
      }
     public function activity_delete(){
        $re=M('weixin_activity_baoming')->where(array('aid'=>I('id')))->select();
        foreach ($re as $key => $value) {
         M('weixin_activity_message')->where(array('aid'=>$value['id']))->delete();
          M('weixin_activity_pic')->where(array('aid'=>$value['id']))->delete();
        }
        M('weixin_activity_baoming')->where(array('aid'=>I('id')))->delete();
        M('weixin_activity')->where(array('id'=>I('id')))->delete(); 
        redirect(U('activity'));
     }
       public function activity_baoming_delete(){
       M('weixin_activity_pic')->where(array('aid'=>I('id')))->delete();
        M('weixin_activity_baoming')->where(array('id'=>I('id')))->delete();
        
        redirect($_SERVER['HTTP_REFERER']);
     }
       public function product_change_save(){
        if($_FILES['logo']['name']!=''){
             $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 @unlink('./'.M('weixin_product')->where(array('id'=>I('id')))->getField('logo'));
               }else{
                  $path=M('weixin_product')->where(array('id'=>I('id')))->getField('logo');
               }
        
                 $date=array(
                  'title'=>I('title'),
                  'url'=>I('url'),
                  'pid'=>I('pid'),
                   'price'=>I('price'),
                  'content'=>I('content'),
                  'detial'=>I('detial'),
                  'logo'=>$path
                  );
                 M('weixin_product')->where(array('id'=>I('id')))->save($date);
                 redirect(U('my_goods'));
      }

      public function show_change_save(){
        if($_FILES['logo']['name']!=''){
             $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->uploadOne($_FILES['logo']);
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['savepath'].$reArr['savename'];
                 @unlink('./'.M('weixin_show')->where(array('id'=>I('id')))->getField('logo'));
               }else{
                  $path=M('weixin_show')->where(array('id'=>I('id')))->getField('logo');
               }
             if($_FILES['video']['name']!=''){
  $upload=new \Think\Upload();
                           $upload->maxSize   =     524288000 ;// 设置附件上传大小
                $upload->exts      =     array('mp4','swf','avi','rmvb','rm','wmv','flv','webm','ogg');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/video/';
                 $upload->replace   = true;
                $re=$upload->uploadOne($_FILES['video']);
                 // var_dump($re);exit;
                 @unlink('./'.M('weixin_show')->where(array('id'=>I('id')))->getField('video'));
                  $video="Uploads/".$re['savepath'].$re['savename'];
                  $url='';
                     }else{
                         if(I('url')==''){
                           $video=M('weixin_show')->where(array('id'=>I('id')))->getField('video');
                           $url='';
                         }else{
                           @unlink('./'.M('weixin_show')->where(array('id'=>I('id')))->getField('video'));
                           $video='';
                           $url=I('url');
                         }
                     
                     }
                 $date=array(
                  'title'=>I('title'),
                   'url'=>$url,
                  'video'=>$video,
                  'pid'=>I('pid'),
                  'content'=>I('content'),
                  'logo'=>$path,
                  'userid'=>$_SESSION['uid']
                  );
                 M('weixin_show')->where(array('id'=>I('id')))->save($date);
                 redirect(U('show'));
      }
        public function video_change_save(){
        if($_FILES['logo']['name']!=''){
             $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->uploadOne($_FILES['logo']);
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['savepath'].$reArr['savename'];
                 @unlink('./'.M('weixin_video')->where(array('id'=>I('id')))->getField('logo'));
               }else{
                  $path=M('weixin_video')->where(array('id'=>I('id')))->getField('logo');
               }
              
                     if($_FILES['video']['name']!=''){
  $upload=new \Think\Upload();
                           $upload->maxSize   =     524288000 ;// 设置附件上传大小
                $upload->exts      =     array('mp4','swf','avi','rmvb','rm','wmv','flv','webm','ogg');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/video/';
                 $upload->replace   = true;
                $re=$upload->uploadOne($_FILES['video']);
                 // var_dump($re);exit;
                  $video="Uploads/".$re['savepath'].$re['savename'];
                  $url='';
                     }else{
                         if(I('url')==''){
                           $video=M('weixin_video')->where(array('id'=>I('id')))->getField('video');
                           $url='';
                         }else{
                           @unlink('./'.M('weixin_video')->where(array('id'=>I('id')))->getField('video'));
                           $video='';
                           $url=I('url');
                         }
                     
                     }
                      //var_dump($url);exit;
                 $date=array(
                  'title'=>I('title'),
                  'url'=>$url,
                  'video'=>$video,
                 
                  'pid'=>I('pid'),
                  'content'=>I('content'),
                  'logo'=>$path
                  );

                 M('weixin_video')->where(array('id'=>I('id')))->save($date);
                 redirect(U('video'));
      }
        public function broadcast_change_save(){
        if($_FILES['logo']['name']!=''){
             $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->uploadOne($_FILES['logo']);
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['savepath'].$reArr['savename'];
                 @unlink('./'.M('weixin_broadcast')->where(array('id'=>I('id')))->getField('logo'));
               }else{
                  $path=M('weixin_broadcast')->where(array('id'=>I('id')))->getField('logo');
               }
              
                     if($_FILES['video']['name']!=''){
  $upload=new \Think\Upload();
                           $upload->maxSize   =     524288000 ;// 设置附件上传大小
                $upload->exts      =     array('mp4','swf','avi','rmvb','rm','wmv','flv','webm','ogg');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/video/';
                 $upload->replace   = true;
                $re=$upload->uploadOne($_FILES['video']);
                 // var_dump($re);exit;
                  $video="Uploads/".$re['savepath'].$re['savename'];
                  $url='';
                     }else{
                         if(I('url')==''){
                           $video=M('weixin_broadcast')->where(array('id'=>I('id')))->getField('video');
                           $url='';
                         }else{
                           @unlink('./'.M('weixin_broadcast')->where(array('id'=>I('id')))->getField('video'));
                           $video='';
                           $url=I('url');
                         }
                     
                     }
                      //var_dump($url);exit;
                 $date=array(
                  'title'=>I('title'),
                  'url'=>$url,
                  'video'=>$video,
                 
                  'pid'=>I('pid'),
                  'content'=>I('content'),
                  'logo'=>$path
                  );

                 M('weixin_broadcast')->where(array('id'=>I('id')))->save($date);
                 redirect(U('broadcast'));
      }
       public function education_change_save(){
        if($_FILES['logo']['name']!=''){
             $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 @unlink('./'.M('weixin_education')->where(array('id'=>I('id')))->getField('logo'));
               }else{
                  $path=M('weixin_education')->where(array('id'=>I('id')))->getField('logo');
               }
        
                 $date=array(
                  'title'=>I('title'),
                  'url'=>I('url'),
                  'pid'=>I('pid'),
                  'detial'=>I('detial'),
                  'content'=>I('content'),
                  'logo'=>$path
                  );
                 M('weixin_education')->where(array('id'=>I('id')))->save($date);
                 redirect(U('education'));
      }
       public function invest_change_save(){
        if($_FILES['logo']['name']!=''){
             $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 @unlink('./'.M('weixin_invest')->where(array('id'=>I('id')))->getField('logo'));
               }else{
                  $path=M('weixin_invest')->where(array('id'=>I('id')))->getField('logo');
               }
        
                 $date=array(
                  'title'=>I('title'),
                  'url'=>I('url'),
                  'pid'=>I('pid'),
                  'detial'=>I('detial'),
                  'content'=>I('content'),
                  'logo'=>$path
                  );
                 M('weixin_invest')->where(array('id'=>I('id')))->save($date);
                 redirect(U('invest'));
      }
          public function medicine_change_save(){
        if($_FILES['logo']['name']!=''){
             $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 @unlink('./'.M('weixin_medicine')->where(array('id'=>I('id')))->getField('logo'));
               }else{
                  $path=M('weixin_medicine')->where(array('id'=>I('id')))->getField('logo');
               }
        
                 $date=array(
                  'title'=>I('title'),
                  'url'=>I('url'),
                  'pid'=>I('pid'),
                  'detial'=>I('detial'),
                  'content'=>I('content'),
                  'price'=>I('price'),
                  'logo'=>$path
                  );
                 M('weixin_medicine')->where(array('id'=>I('id')))->save($date);
                 redirect(U('medicine'));
      }
       public function easy_change_save(){
        if($_FILES['logo']['name']!=''){
             $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 @unlink('./'.M('weixin_easy')->where(array('id'=>I('id')))->getField('logo'));
               }else{
                  $path=M('weixin_easy')->where(array('id'=>I('id')))->getField('logo');
               }
        
                 $date=array(
                  'title'=>I('title'),
                  'url'=>I('url'),
                  'content'=>I('content'),
                   'pid'=>I('pid'),
                  'logo'=>$path,
                  'userid'=>$_SESSION['uid']
                  );
                 M('weixin_easy')->where(array('id'=>I('id')))->save($date);
                 redirect(U('easy'));
      }
       public function activity_change_save(){
        if($_FILES['logo']['name']!=''){
             $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 @unlink('./'.M('weixin_activity')->where(array('id'=>I('id')))->getField('logo'));
               }else{
                  $path=M('weixin_activity')->where(array('id'=>I('id')))->getField('logo');
               }
        
                 $date=array(
                  'type'=>I('type'),
                  'title'=>I('title'),
                  'content'=>I('content'),
                  'logo'=>$path,
                  'moban'=>I('moban'),
                  'start_time'=>strtotime(I('start_time')),
                  'end_time'=>strtotime(I('end_time'))
                  );
                 M('weixin_activity')->where(array('id'=>I('id')))->save($date);
                 redirect(U('activity'));
      }
      public function show_add_save(){
           $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->uploadOne($_FILES['logo']);
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['savepath'].$reArr['savename'];
                   if(I('url')==''){
                   $upload->maxSize   =     524288000 ;// 设置附件上传大小
                $upload->exts      =     array('mp4','swf','avi','rmvb','rm','wmv','flv','webm','ogg');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/video/';
                 $upload->replace   = true;
                 $re=$upload->uploadOne($_FILES['video']);
                  $video="Uploads/".$re['savepath'].$re['savename'];
                  $url='';
                 }else{
                    $video='';
                    $url=I('url');
                 }
                 $date=array(
                  'title'=>I('title'),
                  'url'=>$url,
                   'video'=>$video,
                  'pid'=>I('pid'),
                  'addtime'=>time(),
                  'content'=>I('content'),
                  'logo'=>$path,
                  'userid'=>$_SESSION['uid']
                  );
                 M('weixin_show')->add($date);
                 redirect(U('show'));
      }
      public function product_add_save(){
           $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 $date=array(
                  'title'=>I('title'),
                  'url'=>I('url'),
                  'pid'=>I('pid'),
                  'addtime'=>time(),
                  'content'=>I('content'),
                  'detial'=>I('detial'),
                  'price'=>I('price'),
                  'logo'=>$path,
                  'userid'=>$_SESSION['uid']
                  );
                 M('weixin_product')->add($date);
                 redirect(U('my_goods'));
      }
       public function video_add_save(){
           // var_dump($_FILES);  exit();
           $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->uploadOne($_FILES['logo']);
               
                 $path="Uploads/".$reArr['savepath'].$reArr['savename'];
                 if(I('url')==''){
                   $upload->maxSize   =     524288000 ;// 设置附件上传大小
                $upload->exts      =     array('mp4','swf','avi','rmvb','rm','wmv','flv','webm','ogg');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/video/';
                 $upload->replace   = true;
                 $re=$upload->uploadOne($_FILES['video']);
                  $video="Uploads/".$re['savepath'].$re['savename'];
                  $url='';
                 }else{
                    $video='';
                    $url=I('url');
                 }
                 $date=array(
                  'title'=>I('title'),
                  'url'=>$url,
                  'video'=>$video,
                  'pid'=>I('pid'),
                  'addtime'=>time(),
                  'content'=>I('content'),
                  'logo'=>$path,
                  'userid'=>$_SESSION['uid']
                  );
                 M('weixin_video')->add($date);
                 redirect(U('video'));
      }
      public function broadcast_add_save(){
           // var_dump($_FILES);  exit();
           $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->uploadOne($_FILES['logo']);
               
                 $path="Uploads/".$reArr['savepath'].$reArr['savename'];
                 if(I('url')==''){
                   $upload->maxSize   =     524288000 ;// 设置附件上传大小
                $upload->exts      =     array('mp4','swf','avi','rmvb','rm','wmv','flv','webm','ogg');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/video/';
                 $upload->replace   = true;
                 $re=$upload->uploadOne($_FILES['video']);
                  $video="Uploads/".$re['savepath'].$re['savename'];
                  $url='';
                 }else{
                    $video='';
                    $url=I('url');
                 }
                 $date=array(
                  'title'=>I('title'),
                  'url'=>$url,
                  'video'=>$video,
                  'pid'=>I('pid'),
                  'addtime'=>time(),
                  'content'=>I('content'),
                  'logo'=>$path,
                  'userid'=>$_SESSION['uid']
                  );
                 M('weixin_broadcast')->add($date);
                 redirect(U('broadcast'));
      }
         public function education_add_save(){
           $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 $date=array(
                  'title'=>I('title'),
                  'url'=>I('url'),
                  'pid'=>I('pid'),
                  'addtime'=>time(),
                  'content'=>I('content'),
                  'detial'=>I('detial'),
                  'logo'=>$path,
                  'userid'=>$_SESSION['uid']
                  );
                 M('weixin_education')->add($date);
                 redirect(U('education'));
      }
      public function invest_add_save(){
           $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 $date=array(
                  'title'=>I('title'),
                  'url'=>I('url'),
                  'pid'=>I('pid'),
                  'addtime'=>time(),
                  'content'=>I('content'),
                  'detial'=>I('detial'),
                  'logo'=>$path,
                  'invest_time'=>I('invest_time'),
                 'invest_financing'=>I('invest_financing'),
                 'invest_earnings'=>I('invest_earnings'),
                  'userid'=>$_SESSION['uid']
                  );
                 M('weixin_invest')->add($date);
                 redirect(U('invest'));
      }
         public function medicine_add_save(){
           $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 $date=array(
                  'title'=>I('title'),
                  'url'=>I('url'),
                  'pid'=>I('pid'),
                  'addtime'=>time(),
                  'content'=>I('content'),
                  'detial'=>I('detial'),
                  'price'=>I('price'),
                  'logo'=>$path,
                  'userid'=>$_SESSION['uid']
                  );
                 M('weixin_medicine')->add($date);
                 redirect(U('medicine'));
      }
          public function easy_add_save(){
           $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 $date=array(
                  'title'=>I('title'),
                  'url'=>I('url'),
                  'content'=>I('content'),
                  'logo'=>$path,
                  'pid'=>I('pid'),
                  'userid'=>$_SESSION['uid']
                  );
                 M('weixin_easy')->add($date);
                 redirect(U('easy'));
      }
        public function activity_add_save(){
          //P($_POST);exit;
           $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
                 $date=array(
                   'type'=>I('type'),
                  'title'=>I('title'),
                  'moban'=>I('moban'),
                  'start_time'=>strtotime(I('start_time')),
                  'end_time'=>strtotime(I('end_time')),
                  'logo'=>$path,
                  
                  'userid'=>$_SESSION['uid'],
                  'content'=>I('content')
                  );
                 M('weixin_activity')->add($date);
                 redirect(U('activity'));
      }

        public function article_add(){
          $this->column=M('weixin_article_column')->where(array('userid'=>$_SESSION['uid'],'content'=>''))->select();
     
      $this->open='5';
      $this->active='article';
      $this->display();
     }
     public function reply_delete(){
      $re=M('weixin_article_message')->where(array('id'=>I('id')))->find();
       M('weixin_article_message')->where(array('rwid'=>$re['id']))->delete();
      /* foreach ($re1 as $key => $value) {
         # code...
       }*/
      M('weixin_article_message')->where(array('id'=>I('id')))->delete();
        redirect($_SERVER['HTTP_REFERER']);
       }
        public function release_reply_delete(){
      $re=M('weixin_release_message')->where(array('id'=>I('id')))->find();
      $wid=$re['wid'];
       M('weixin_release_message')->where(array('rwid'=>$re['id']))->delete();
      /* foreach ($re1 as $key => $value) {
         # code...
       }*/
      M('weixin_release_message')->where(array('id'=>I('id')))->delete();
        $date=array(
      'aid'=>$wid,
      'addtime'=>time(),
      'content'=>'您发表的评论存在违规行为，已全被管理员删除。',
      'type'=>2,
      'view'=>0
      );
     M('weixin_my_notice')->add($date);
        redirect($_SERVER['HTTP_REFERER']);
       }
        public function affiche_add(){
      $this->open='5';
      $this->active='affiche';
      $this->display();
     }
     public function affiche_delete(){
      M('weixin_affiche')->where(array('id'=>I('id')))->delete();
      redirect(U('affiche'));
     }
     public function affiche_add_save(){
       
         /*    $date=array(
          'userid'=>$_SESSION['uid'],
          'title'=>I('title'),
          'content'=>I('content'),
          'addtime'=>time()
          );

        M('weixin_affiche')->add($date);*/
         $re=M('weixin_man')->select();
         foreach ($re as $key => $value) {
          $date1=array(
            'type'=>1,
            'addtime'=>time(),
            'title'=>I('title'),
            'content'=>I('content'),
            'aid'=>$value['id']
            );
          M('weixin_my_notice')->add($date1);
         }
     
        redirect(U('affiche'));
     }
      public function lanmu_add(){
      $this->open='5';
      $this->active='article';
      $this->display();
     }
       public function dynamic_add(){
        $this->weixin=M('weixin_dynamic_nav')->where(array('id'=>I('id')))->find();
      $this->open='5';
      $this->active='dynamic_nav';
      $this->display();
     }
        public function word_add(){
        $this->weixin=M('weixin_word')->where(array('id'=>I('id')))->find();
      $this->open='5';
      $this->active='word';
      $this->display();
     }
      public function lanmu_change(){
        $this->lanmu=M('weixin_article_column')->where(array('id'=>I('id')))->find();
      $this->open='5';
      $this->active='article';
      $this->display();
     }
       public function article_change(){
        $this->lanmu=M('weixin_article')->where(array('id'=>I('id')))->find();
         $this->column=M('weixin_article_column')->where(array('userid'=>$_SESSION['uid'],'content'=>''))->select();
         $this->pic=M('weixin_pic')->where(array('aid'=>I('id')))->select();
      $this->open='5';
      $this->active='article';
      $this->display();
     }
      public function baoliao_change(){
        $this->lanmu=M('weixin_baoliao')->where(array('id'=>I('id')))->find();
         $this->column=M('weixin_article_column')->where(array('userid'=>$_SESSION['uid']))->select();
        $this->pic=M('weixin_pic')->where(array('bid'=>I('id')))->select();
      $this->open='5';
      $this->active='article';
      $this->display();
     }
     public function lanmu_add_save(){
         $date=array(
         'title'=>I('title'),
         'content'=>I('content'),
         'userid'=>$_SESSION['uid']
          );
         M('weixin_article_column')->add($date);
         redirect(U('lanmu'));
     }
        public function dynamic_add_save(){
         $date=array(
         'title'=>I('title'),
         
         'userid'=>$_SESSION['uid']
          );
         if(I('id')){
  M('weixin_dynamic_nav')->where(array('id'=>I('id')))->save($date);
         }else{
            M('weixin_dynamic_nav')->add($date);
         }
       
         redirect(U('dynamic_nav'));
     }
         public function word_add_save(){
         $date=array(
         'word'=>I('word'),
         
         'userid'=>$_SESSION['uid']
          );
         if(I('id')){
  M('weixin_word')->where(array('id'=>I('id')))->save($date);
         }else{
            M('weixin_word')->add($date);
         }
       
         redirect(U('word'));
     }
     public function dynamic_delete(){
         M('weixin_dynamic_nav')->where(array('id'=>I('id')))->delete();
         redirect(U('dynamic_nav'));
     }
      public function word_delete(){
         M('weixin_word')->where(array('id'=>I('id')))->delete();
         redirect(U('word'));
     }
         public function article_add_save(){

           $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
             // echo  count($reArr);exit;
            //  var_dump($reArr);  exit();
                // $path="Uploads/".$reArr['pic']['savepath'].$reArr['pic']['savename'];
                 // var_dump($path);exit;
             $date=array(
              'title'=>I('title'),
              'content'=>I('content'),
              'source'=>I('source'),
              'column'=>I('column'),
              'userid'=>$_SESSION['uid'],
              'addtime'=>time()
              );
            
             $id= M('weixin_article')->add($date);
             $count=count($reArr);
             //var_dump($reArr);exit;
             if($reArr){
              for ($i=0; $i <$count ; $i++) { 
              $data=array(
               'userid'=>$_SESSION['uid'],
               'aid'=>$id,
               'type'=>1,
               'pic'=>"Uploads/".$reArr[$i]['savepath'].$reArr[$i]['savename']
                );
              M('weixin_pic')->add($data);
            }
             }
            
             
             redirect(U('article'));
    }
      public function lanmu_change_save(){
         $date=array(
         'title'=>I('title'),
         'content'=>I('content')
          );
         M('weixin_article_column')->where(array('id'=>I('id')))->save($date);
         redirect(U('lanmu'));
     }
      public function article_change_save(){

        if($_FILES['pic']['name'][0]){
         //var_dump($_FILES['pic']['name'][0]);exit;
         $re=M('weixin_pic')->where(array('aid'=>I('id')))->select();
         foreach ($re as $key => $value) {
         @unlink('./'.$value['pic']);
         }
         M('weixin_pic')->where(array('aid'=>I('id')))->delete();
           $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                 //var_dump($reArr);exit;
              //var_dump($reArr);  exit();
                // $path="Uploads/".$reArr['pic']['savepath'].$reArr['pic']['savename'];
               }
         $date=array(
         'title'=>I('title'),
         'content'=>I('content'),
         'source'=>I('source'),
         'column'=>I('column')
         
          );
         $count=count($reArr);
         for ($i=0; $i <$count ; $i++) { 
            $data=array(
               'userid'=>$_SESSION['uid'],
               'aid'=>I('id'),
               'type'=>1,
               'pic'=>"Uploads/".$reArr[$i]['savepath'].$reArr[$i]['savename']
                );
              M('weixin_pic')->add($data);
         }
         M('weixin_article')->where(array('id'=>I('id')))->save($date);
         redirect(U('article'));
     }
     public function baoliao_change_save(){

        if($_FILES['pic']['name'][0]){
         //var_dump($_FILES['pic']['name'][0]);exit;
          @unlink('./'.M('weixin_baoliao')->where(array('id'=>I('id')))->getField('path'));
          M('weixin_baoliao')->where(array('id'=>I('id')))->setField('path','');
         $re=M('weixin_pic')->where(array('bid'=>I('id')))->select();
         foreach ($re as $key => $value) {
         @unlink('./'.$value['pic']);
         }
         M('weixin_pic')->where(array('bid'=>I('id')))->delete();
           $upload=new \Think\Upload();
                //设置
         //$name=$_FILES['id_photos']['name'];
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
              $count=count($reArr);
         for ($i=0; $i <$count ; $i++) { 
            $data=array(
               'userid'=>$_SESSION['uid'],
               'bid'=>I('id'),
               'type'=>1,
               'pic'=>"Uploads/".$reArr[$i]['savepath'].$reArr[$i]['savename']
                );
              M('weixin_pic')->add($data);
         }
               }
         $date=array(
         'title'=>I('title'),
         'content'=>I('content'),
         
         'type'=>I('type')
         
          );
       
         M('weixin_baoliao')->where(array('id'=>I('id')))->save($date);
         redirect(U('baoliao_list'));
     }
     public function lanmu_delete(){
       M("weixin_article_column")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
      public function show_column_delete(){
       M("weixin_show_column")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
      public function product_column_delete(){
       M("weixin_product_column")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
      public function video_column_delete(){
       M("weixin_video_column")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
     public function broadcast_column_delete(){
       M("weixin_broadcast_column")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
    public function article_delete(){
      $re=M('weixin_pic')->where(array('aid'=>I('id')))->select();
   foreach ($re as $key => $value) {
    @unlink('./'.$value['pic']);

   }
    $content=M('weixin_article')->where(array('id'=>I('id')))->getField('content');
   //var_dump($content);
    $pattern="/src=(.*?(jpg|jpeg|gif|png))/i"; 
      $re=preg_match_all($pattern, $content, $match);
   //  var_dump($match);
 foreach ($match[1] as $key => $value) {
  $url1=substr(str_replace('&quot;', '', $value),1);
//echo substr($url1,strpos($url1,'/')).'<br>';
    @unlink('.'.substr($url1,strpos($url1,'/')));
 }
      //exit;
   M('weixin_pic')->where(array('aid'=>I('id')))->delete();
       M("weixin_article")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
      public function show_delete(){
        @unlink('./'.M("weixin_show")->where(array('id' =>I('id')))->getField('logo'));
       M("weixin_show")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
    public function index_pic_delete(){
       @unlink('./'.M("weixin_lunbotu")->where(array('id' =>I('id')))->getField('logo'));
       M("weixin_lunbotu")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
     public function product_delete(){
        @unlink('./'.M("weixin_product")->where(array('id' =>I('id')))->getField('logo'));
       M("weixin_product")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
      public function video_delete(){
        @unlink('./'.M("weixin_video")->where(array('id' =>I('id')))->getField('logo'));
         @unlink('./'.M("weixin_video")->where(array('id' =>I('id')))->getField('video'));
       M("weixin_video")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
     public function broadcast_delete(){
        @unlink('./'.M("weixin_broadcast")->where(array('id' =>I('id')))->getField('logo'));
         @unlink('./'.M("weixin_broadcast")->where(array('id' =>I('id')))->getField('video'));
       M("weixin_broadcast")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
     public function education_delete(){
        @unlink('./'.M("weixin_education")->where(array('id' =>I('id')))->getField('logo'));
       M("weixin_education")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
    public function invest_delete(){
        @unlink('./'.M("weixin_invest")->where(array('id' =>I('id')))->getField('logo'));
       M("weixin_invest")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
     public function medicine_delete(){
        @unlink('./'.M("weixin_medicine")->where(array('id' =>I('id')))->getField('logo'));
       M("weixin_medicine")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
     public function education_column_delete(){
      
       M("weixin_education_column")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
    public function invest_column_delete(){
      
       M("weixin_invest_column")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
     public function medicine_column_delete(){
      
       M("weixin_medicine_column")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }

public function baoliao_delete(){
     M('weixin_baoliao')->where(array('id'=>I('id')))->setField('dele',1);
     redirect($_SERVER['HTTP_REFERER']);
}
public function baoliao_status(){
               if (!IS_AJAX) {
           E('页面不存在！');
        }    

            $re1=M('weixin_baoliao')->where(array('id'=>I('id')))->find();

            if(I('status')=='1'){
           // $this->ajaxReturn('truee');
            $date=array(
             'userid'=>$re1['userid'],
             'content'=>$re1['content'],
             'addtime'=>time(),
             'wid'=>$re1['wid'],
             'title'=>$re1['title'],
             'column'=>$re1['type']
              );
            $id=M('weixin_article')->add($date);
            if($re1['path']){
           
                $data=array(
               'userid'=>$re1['userid'],
               'aid'=>$id,
               'type'=>1,
               'pic'=>$re1['path']
                );
              M('weixin_pic')->add($data);
            }else{
               $re3=M('weixin_pic')->where(array('bid'=>I('id')))->select();
                foreach ($re3 as $key => $value) {
                  M('weixin_pic')->where(array('id'=>$value['id']))->setField('aid',$id);
                }
            }
          }elseif(I('status')=='2'){
 //$this->ajaxReturn(I('content'));
            $data=array(
              'title'=>'系统消息',
              'wid'=>'0',
              'type'=>2,
              'aid'=>$re1['wid'],
              'content'=>'很遗憾，您提交的标题为<span style="color:red">'.$re1['title'].'</span>的文章没能通过审核已退回到您的草稿箱。原因：'.I('content').'.',
              'addtime'=>time()
              );
            M('weixin_my_notice')->add($data);
          }
          $re=M('weixin_baoliao')->where(array('id'=>I('id')))->setField('status',I('status'));
            $this->ajaxReturn($re);
    }
    public function baoming_status(){
               if (!IS_AJAX) {
           E('页面不存在！');
        }    

            if(I('status')=='1'){
           // $this->ajaxReturn('truee');
           $re=M('weixin_activity_baoming')->where(array('id'=>I('id')))->setField('status',1);
          }elseif(I('status')=='2'){
            $wid=M('weixin_activity_baoming')->where(array('id'=>I('id')))->getField('wid');
          
            $data=array(
              'title'=>'系统消息',
              'wid'=>'0',
              'type'=>2,
              'aid'=>$wid,
              'content'=>'很遗憾，您的投票报名没能通过审核。原因：'.I('content').'.',
              'addtime'=>time()
              );
            M('weixin_my_notice')->add($data);
             $re=M('weixin_activity_baoming')->where(array('id'=>I('id')))->setField('status',2);
          }
          
            $this->ajaxReturn($re);
    }

public function article_label(){
           if (!IS_AJAX) {
           E('页面不存在！');
        }    
        $re=M('weixin_article')->where(array('id'=>I('id')))->setField('label',I('value'));
        $this->ajaxReturn($re);
}


public function view_change(){
           if (!IS_AJAX) {
           E('页面不存在！');
        }    
        $re=M('weixin_article')->where(array('id'=>I('id')))->setField('view',I('view'));
        $this->ajaxReturn($re);
}

public function dongtai_delete(){
     $re=M('weixin_release')->where(array('wid'=>I('wid')))->select();
     foreach ($re as $key => $value) {
        $re1=M('weixin_release_pic')->where(array('aid'=>$value['id']))->select();
      foreach ($re1 as $key1 => $value1) {
        @unlink('.'.$value1['pic']);
      }
       M('weixin_release_message')->where(array('aid'=>$value['id']))->delete();
       M('weixin_release_pic')->where(array('aid'=>$value['id']))->delete();
       M('weixin_release')->where(array('id'=>$value['id']))->delete();
     }
     $date=array(
      'aid'=>I('wid'),
      'addtime'=>time(),
      'content'=>'您发表的动态或评论存在违规行为，已全被管理员删除。',
      'type'=>2,
      'view'=>0
      );
     M('weixin_my_notice')->add($date);
     redirect($_SERVER['HTTP_REFERER']);
}

public function dongtai_message_delete(){
      $re=M('weixin_release_pic')->where(array('aid'=>I('id')))->select();
      foreach ($re as $key => $value) {
        @unlink('.'.$value['pic']);
      }
   
       M('weixin_release_message')->where(array('aid'=>I('id')))->delete();
       M('weixin_release_pic')->where(array('aid'=>I('id')))->delete();
       $wid=M('weixin_release')->where(array('id'=>I('id')))->getField('wid');
        M('weixin_release')->where(array('id'=>I('id')))->delete();
          $date=array(
      'aid'=>$wid,
      'addtime'=>time(),
      'content'=>'您发表的动态存在违规行为，已全被管理员删除。',
      'type'=>2,
      'view'=>0
      );
     M('weixin_my_notice')->add($date);
     redirect($_SERVER['HTTP_REFERER']);
}

public function broadcast_order_change(){
           if (!IS_AJAX) {
           E('页面不存在！');
        }    
        $re=M('weixin_broadcast_column')->where(array('id'=>I('id')))->setField('ordera',I('order'));
        $this->ajaxReturn($re);
}
public function show_order_change(){
           if (!IS_AJAX) {
           E('页面不存在！');
        }    
        $re=M('weixin_show_column')->where(array('id'=>I('id')))->setField('ordera',I('order'));
        $this->ajaxReturn($re);
}
public function video_order_change(){
           if (!IS_AJAX) {
           E('页面不存在！');
        }    
        $re=M('weixin_video_column')->where(array('id'=>I('id')))->setField('ordera',I('order'));
        $this->ajaxReturn($re);
}
public function broadcast_ordera_change(){
           if (!IS_AJAX) {
           E('页面不存在！');
        }    
        $re=M('weixin_broadcast')->where(array('id'=>I('id')))->setField('ordera',I('order'));
        $this->ajaxReturn($re);
}
public function show_ordera_change(){
           if (!IS_AJAX) {
           E('页面不存在！');
        }    
        $re=M('weixin_show')->where(array('id'=>I('id')))->setField('ordera',I('order'));
        $this->ajaxReturn($re);
}
public function video_ordera_change(){
           if (!IS_AJAX) {
           E('页面不存在！');
        }    
        $re=M('weixin_video')->where(array('id'=>I('id')))->setField('ordera',I('order'));
        $this->ajaxReturn($re);
}
public function jubao_delete(){
       M('weixin_release_jubao')->where(array('id'=>I('id')))->delete();
       redirect($_SERVER['HTTP_REFERER']);
}

























}