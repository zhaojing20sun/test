<?php
namespace Admin\Controller;
use Think\Controller;
use Com\Wechat;
class WeixinController extends Controller {
   protected $appid;
   protected $appsecret;
   protected $access_token;
  public function _initialize()  
    { 

        //  判断是否登录 没有登录跳转到登录页面
       if(!isset($_SESSION['admin_id'])||empty($_SESSION['admin_id']))
        {
            redirect(U('index/login'));
       }
       
        
     
        
        $this->columnlist=column(); ///显示顶部栏目 
      //  p($this->columnlist);
    }  
 public function column(){
          /////根据id值获取到跳转栏目的keyword/////////////
          $keyword=M('column')->where(array('column_id' =>$_GET['column_id']))->getField('keyword');
          redirect(U($keyword));
     }
 /*public function ajax_upload_image(){
          if (!IS_AJAX) {
           E('页面不存在！');
        } 
      $upload=new \Think\Upload();
                //设置
         $name=$_FILES;
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('docx','txt','doc','pdf');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'project/';
               
                 $upload->replace   = true;
                //保存
               // $reArr=$upload->upload();
              //var_dump($reArr);  exit();
                // $path="Uploads/".$reArr['path']['savepath'].$reArr['path']['savename'];
             $this->ajaxReturn($name);
          
               
           
         
     }*/
     public function set_menu_stop(){
     /* $re="menu_id%s";
      echo sprintf($re,20);
      echo "1";exit;*/
       $weixin=M('weixin')->where(array('userid'=>1))->find();

          if(time()-$weixin['token_time']>7200){
               $token=gettoken($weixin['appid'],$weixin['appsecret']);
               $date=array(
                'access_token'=>$token,
                'token_time'=>time()
                );
                M('weixin')->where(array('userid'=>1))->save($date);    
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
     public function set_menu_start(){
     $re=M('weixinmenu')->where(array('userid'=>1,'pid'=>0))->order("orderid asc")->select();
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
          $weixin=M('weixin')->where(array('userid'=>1))->find();

          if(time()-$weixin['token_time']>7200){
               $token=gettoken($weixin['appid'],$weixin['appsecret']);
               $date=array(
                'access_token'=>$token,
                'token_time'=>time()
                );
                M('weixin')->where(array('userid'=>1))->save($date);    
          }else{
            $token=$weixin['access_token'];
          }
          $config=array(
            'appId'=>$weixin['appid'],
            'appSecret'=>$weixin['appsecret'],
            'access_token'=>$token
            );
          $wechat=new wechat($config);
         $rev= $wechat->create_menu($xml);
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
 public function index(){
       
            $this->selected=14;
          
                   

            $this->selected_title=M('column')->where(array('column_id' =>$this->selected))->getField('column_name');
            $this->open_title=M('column')->where(array('column_id' => $this->open))->getField('column_name');
            $this->active_title=M('column')->where(array('column_id' =>$this->active))->getField('column_name');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
           $this->display(); //显示页面 
                  
    }
     public function set_bangding(){
       
            $this->selected=14;
            $this->open=646;
            $this->active=651;
            $this->selected_title=M('column')->where(array('column_id' =>$this->selected))->getField('column_name');
            $this->open_title=M('column')->where(array('column_id' => $this->open))->getField('column_name');
            $this->active_title=M('column')->where(array('column_id' =>$this->active))->getField('column_name');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
            $this->weixin=M('weixin')->where(array('userid'=>1))->find();
           $this->display(); //显示页面 
                  
    }
       public function set_reply(){
       
            $this->selected=14;
            $this->open=646;
            $this->active=652;
            $this->selected_title=M('column')->where(array('column_id' =>$this->selected))->getField('column_name');
            $this->open_title=M('column')->where(array('column_id' => $this->open))->getField('column_name');
            $this->active_title=M('column')->where(array('column_id' =>$this->active))->getField('column_name');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
            $this->weixin=M('weixin')->where(array('userid'=>1,'type'=>1))->find();
            $this->image=M('weixink')->where(array('userid'=>1,'order'=>1,'type'=>1))->find();
            $this->image_arr=M('weixink')->where(array('userid'=>1,'type'=>1,'order'=>array('neq',1)))->select();
           // var_dump($this->image_arr);exit;
           $this->display(); //显示页面 
                  
    }
    public function company_filed(){
       
            $this->selected=14;
            $this->open=15;
            $this->active=647;
            $this->selected_title=M('column')->where(array('column_id' =>$this->selected))->getField('column_name');
            $this->open_title=M('column')->where(array('column_id' => $this->open))->getField('column_name');
            $this->active_title=M('column')->where(array('column_id' =>$this->active))->getField('column_name');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
             $count=M('company_filed')->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('company_filed')->select();
           // var_dump($this->image_arr);exit;
           $this->display(); //显示页面 
                  
    }
     public function lanmu(){
            $this->selected=14;
            $this->open=16;
            $this->active=80;
            $this->selected_title=M('column')->where(array('column_id' =>$this->selected))->getField('column_name');
            $this->open_title=M('column')->where(array('column_id' => $this->open))->getField('column_name');
            $this->active_title=M('column')->where(array('column_id' =>$this->active))->getField('column_name');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
             $count=M('weixin_catch_news_column')->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_catch_news_column')->select();
           // var_dump($this->image_arr);exit;
           $this->display(); //显示页面 
    }
     public function lanmu_add(){
       
            $this->selected=14;
            $this->open=16;
            $this->active=80;
            $this->selected_title=M('column')->where(array('column_id' =>$this->selected))->getField('column_name');
            $this->open_title=M('column')->where(array('column_id' => $this->open))->getField('column_name');
            $this->active_title=M('column')->where(array('column_id' =>$this->active))->getField('column_name');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
          $this->weixin=M('weixin_catch_news_column')->where(array('id'=>I('id')))->find();
           // var_dump($this->image_arr);exit;
           $this->display(); //显示页面 
                  
    }
     public function article(){
            $this->selected=14;
            $this->open=16;
            $this->active=81;
            $this->selected_title=M('column')->where(array('column_id' =>$this->selected))->getField('column_name');
            $this->open_title=M('column')->where(array('column_id' => $this->open))->getField('column_name');
            $this->active_title=M('column')->where(array('column_id' =>$this->active))->getField('column_name');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
            $where="";
            if($_GET['name']){
               $where=array('title'=>array('like','%'.$_GET['name'].'%'));
               }
             $count=M('weixin_catch_news')->where($where)->count();
           
           $page = new \Think\Page($count,15);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('weixin_catch_news')->where($where)->limit($limit)->order('addtime desc')->select();
           // var_dump($this->image_arr);exit;
           $this->display(); //显示页面 
    }
    public function article_add(){
       
            $this->selected=14;
            $this->open=16;
            $this->active=81;
            $this->selected_title=M('column')->where(array('column_id' =>$this->selected))->getField('column_name');
            $this->open_title=M('column')->where(array('column_id' => $this->open))->getField('column_name');
            $this->active_title=M('column')->where(array('column_id' =>$this->active))->getField('column_name');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
          $this->weixin=M('weixin_catch_news')->where(array('id'=>I('id')))->find();
          $this->filed=M('weixin_catch_news_column')->select();
           // var_dump($this->image_arr);exit;
           $this->display(); //显示页面 
                  
    }
    public function lanmu_add_save(){
             $date=array(
              'title'=>I('title'),
              'url'=>I('url')
              );
             if(I('id')){
              M('weixin_catch_news_column')->where(array('id'=>I('id')))->save($date);
             }else{
              M('weixin_catch_news_column')->add($date);
             }
             
             redirect(U('lanmu'));
    }
       public function article_add_save(){
             $date=array(
              'title'=>I('title'),
              'content'=>I('content'),
              'source'=>I('source'),
              'pid'=>I('pid')
              );
             if(I('id')){
              M('weixin_catch_news')->where(array('id'=>I('id')))->save($date);
             }else{
              M('weixin_catch_news')->add($date);
             }
             
             redirect(U('article'));
    }


     public function company_list(){
       
            $this->selected=14;
            $this->open=15;
            $this->active=648;
            $this->selected_title=M('column')->where(array('column_id' =>$this->selected))->getField('column_name');
            $this->open_title=M('column')->where(array('column_id' => $this->open))->getField('column_name');
            $this->active_title=M('column')->where(array('column_id' =>$this->active))->getField('column_name');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
           $count=M('company')->count();
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->com=M('company')->select();
           $this->display(); //显示页面 
                  
    }
     public function company_filed_add(){
       
            $this->selected=14;
            $this->open=15;
            $this->active=647;
            $this->selected_title=M('column')->where(array('column_id' =>$this->selected))->getField('column_name');
            $this->open_title=M('column')->where(array('column_id' => $this->open))->getField('column_name');
            $this->active_title=M('column')->where(array('column_id' =>$this->active))->getField('column_name');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
          $this->weixin=M('company_filed')->where(array('id'=>I('id')))->find();
           // var_dump($this->image_arr);exit;
           $this->display(); //显示页面 
                  
    }

    public function company_add(){
       
            $this->selected=14;
            $this->open=15;
            $this->active=648;
            $this->selected_title=M('column')->where(array('column_id' =>$this->selected))->getField('column_name');
            $this->open_title=M('column')->where(array('column_id' => $this->open))->getField('column_name');
            $this->active_title=M('column')->where(array('column_id' =>$this->active))->getField('column_name');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
          $this->weixin=M('company')->where(array('id'=>I('id')))->find();
          $this->filed=M('company_filed')->select();
           // var_dump($this->image_arr);exit;
           $this->display(); //显示页面 
                  
    }
    public function company_save(){
           $upload=new \Think\Upload();
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
                 $upload->replace   = true;
                $reArr=$upload->upload();
                 $path="Uploads/".$reArr['logo']['savepath'].$reArr['logo']['savename'];
        $date=array(
      'title'=>I('title'),
      'filed'=>I('filed'),
      'logo'=>$path,
      'intro'=>I('intro'),
      'detial'=>I('detial')
          );
        if(I('id')){
          @unlink("./".M('company')->where(array('id'=>I('id')))->getField('logo'));
 M('company')->where(array('id'=>I('id')))->save($date);
        }else{

        M('company')->add($date);
        }
        redirect(U('company_list'));
    }
    public function company_filed_save(){
      $date=array(
          'title'=>I('title')
        );
      if(I('id')){
       M('company_filed')->where(array('id'=>I('id')))->save($date);
      }else{
       M('company_filed')->add($date);
      }
       redirect(U('company_filed'));
    }
    public function set_reply_delete(){
        $re=M('weixink')->where(array('id'=>I('id')))->find();
        @unlink("./".$re['content']);
        M('weixink')->where(array('id'=>I('id')))->delete();
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function set_guanjian_delete(){
        $re=M('weixinkey')->where(array('id'=>I('id')))->find();
      
        
            @unlink('./'.$re['content']);
            M('weixinkey')->where(array('id'=>$re['id']))->delete();
    
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function set_menu_delete(){
        $re=M('weixinmenu')->where(array('id'=>I('id')))->find();
      
        
            @unlink('./'.$re['content']);
            M('weixinmenu')->where(array('id'=>$re['id']))->delete();
    
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
    public function set_zidong_save(){
     // p($_POST);exit;
      if(I('style')==0){
         $re= M('weixink')->where(array('userid'=>1,'style'=>1,'type'=>2))->select();
         foreach ($re as $key => $value) {
           @unlink($value['content']);
                M('weixink')->where(array('id'=>$value['id']))->delete();
         }
         $re=M('weixink')->where(array('style'=>0,'type'=>2))->find();
            $date=array(
           'style'=>'0',
           'content'=>I('content'),
           'userid'=>1,
           'order'=>1,
           'type'=>2
          );
         if(!$re){
        
         M('weixink')->add($date);
       }else{
          M('weixink')->where(array('style'=>0,'type'=>2))->save($date);
       }
        
      }else{
//p($_POST);
//var_dump($_FILES);exit;
         M('weixink')->where(array('style'=>0,'type'=>2))->delete();

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
     if(I('id')){
           $re=M('weixink')->where(array('id'=>I('id')))->find();
           @unlink('./'.$re['content']);

           $date=array(
         'title'=>I('title'),
         'url'=>I('url'),
         'style'=>1,
         'userid'=>1,
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
         'userid'=>1,
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
     // p($_POST);exit;
      if(I('style')==0){
         $re= M('weixink')->where(array('userid'=>1,'style'=>1,'type'=>1))->select();
         foreach ($re as $key => $value) {
           @unlink($value['content']);
                M('weixink')->where(array('id'=>$value['id']))->delete();
         }
         $re=M('weixink')->where(array('style'=>0,'type'=>1))->find();
            $date=array(
           'style'=>'0',
           'content'=>I('content'),
           'userid'=>1,
           'order'=>1,
           'type'=>1
          );
         if(!$re){
        
         M('weixink')->add($date);
       }else{
          M('weixink')->where(array('style'=>0,'type'=>1))->save($date);
       }
        
      }else{
//p($_POST);
//var_dump($_FILES);exit;
         M('weixink')->where(array('style'=>0,'type'=>1))->delete();

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
     if(I('id')){
           $re=M('weixink')->where(array('id'=>I('id')))->find();
           @unlink('./'.$re['content']);

           $date=array(
         'title'=>I('title'),
         'url'=>I('url'),
         'style'=>1,
         'userid'=>1,
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
         'userid'=>1,
         'order'=>I('order'),
         'content'=>$path ,
           'type'=>1
        );
                 M('weixink')->add($date);
     }
       
                 
                 }
                 redirect(U('set_reply'));
    }
     public function open_image(){
               if (!IS_AJAX) {
           E('页面不存在！');
        } 
            $re=M('weixink')->where(array('userid'=>1,'order'=>I('order'),'type'=>2))->find();
            $this->ajaxReturn($re);
    }
    public function company_fileddeleteajax(){
               if (!IS_AJAX) {
           E('页面不存在！');
        } 
         foreach ($_POST['id']  as $key => $value) {
          //$re=M('company_filed')->where(array('id'=>$value))->find();
   
  
           M("company_filed")->where(array('id' =>$value))->delete();
        }
     
          
    }
    public function lanmudeleteajax(){
               if (!IS_AJAX) {
           E('页面不存在！');
        } 
         foreach ($_POST['id']  as $key => $value) {
          //$re=M('company_filed')->where(array('id'=>$value))->find();
   
  
           M("weixin_column")->where(array('id' =>$value))->delete();
        }
     
          
    }
     public function articledeleteajax(){
               if (!IS_AJAX) {
           E('页面不存在！');
        } 
         foreach ($_POST['id']  as $key => $value) {
          //$re=M('company_filed')->where(array('id'=>$value))->find();
   
  
           M("weixin_article")->where(array('id' =>$value))->delete();
        }
     
          
    }
     public function companydeleteajax(){
               if (!IS_AJAX) {
           E('页面不存在！');
        } 
         foreach ($_POST['id']  as $key => $value) {
          $re=M('company')->where(array('id'=>$value))->find();
        @unlink("./".$re['logo']);
  
           M("company")->where(array('id' =>$value))->delete();
        }
     
          
    }
    public function company_filed_delete(){
       M("company_filed")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
    public function lanmu_delete(){
       M("weixin_column")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
    public function article_delete(){
       M("weixin_catch_news")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
  public function company_delete(){
     $re=M("company")->where(array('id' =>I('id')))->getField('logo');
     @unlink("./".$re);
       M("company")->where(array('id' =>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }





      public function open_image1(){
               if (!IS_AJAX) {
           E('页面不存在！');
        } 
            $re=M('weixink')->where(array('userid'=>1,'order'=>I('order'),'type'=>1))->find();
            $this->ajaxReturn($re);
    }
     public function set_guanjian_image(){
               if (!IS_AJAX) {
           E('页面不存在！');
        } 
            $re=M('weixinkey')->where(array('userid'=>1,'order'=>I('order'),'title'=>I('title')))->find();
            $this->ajaxReturn($re);
    }
     public function set_menu_image(){
               if (!IS_AJAX) {
           E('页面不存在！');
        } 
            $re=M('weixinmenu')->where(array('id'=>I('id'),'style'=>1))->find();
            $this->ajaxReturn($re);
    }
       public function set_zidong(){
       
            $this->selected=14;
            $this->open=646;
            $this->active=653;
            $this->selected_title=M('column')->where(array('column_id' =>$this->selected))->getField('column_name');
            $this->open_title=M('column')->where(array('column_id' => $this->open))->getField('column_name');
            $this->active_title=M('column')->where(array('column_id' =>$this->active))->getField('column_name');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
           // $this->weixin=M('weixin')->where(array('userid'=>1))->find();
              $this->weixin=M('weixin')->where(array('userid'=>1,'type'=>2))->find();
            $this->image=M('weixink')->where(array('userid'=>1,'order'=>1,'type'=>2))->find();
            $this->image_arr=M('weixink')->where(array('userid'=>1,'type'=>2,'order'=>array('neq',1)))->select();
           $this->display(); //显示页面 
                  
    }
     public function set_guanjian(){
       
            $this->selected=14;
            $this->open=646;
            $this->active=654;
            $this->selected_title=M('column')->where(array('column_id' =>$this->selected))->getField('column_name');
            $this->open_title=M('column')->where(array('column_id' => $this->open))->getField('column_name');
            $this->active_title=M('column')->where(array('column_id' =>$this->active))->getField('column_name');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
            

            $count=count(M('weixinkey')->group('title')->select());
           $page = new \Think\Page($count, 10);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->keyword=M('weixinkey')->where(array('userid'=>1))->group('title')->select();
        //  echo  M('weixinkey')->getlastsql();
       // var_dump($this->keyword);exit;
           $this->display(); //显示页面 
                  
    }
    public function set_guanjian_passed(){
        $status=I('status')?'0':'1';
        M('weixinkey')->where(array('id'=>I('id')))->setField("passed",$status);
        redirect($_SERVER['HTTP_REFERER']);
    }
 public function set_guanjian_save(){
  //  p($_POST);var_dump($_FILES);exit;
        if(I('style')==0){
       
         //$re=M('weixinkey')->where(array('style'=>0,'type'=>1))->find();
        
         if(!I('id')){
         $date=array(
           'style'=>'0',
           'content'=>I('content'),
           'userid'=>1,
           'order'=>1,
           'title'=>I('title')
          );
         $re=M('weixinkey')->add($date);
         redirect(U('set_guanjian_add',array('id'=>$re)));
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
        redirect(U('set_guanjian_add',array('id'=>I('id'))));
       }
        
      }else{
   //p($_POST);var_dump($_FILES);exit;


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
      if(M('weixinkey')->where(array('id'=>I('id'),'order'=>I('order')))->find()){
        @unlink('./'.M('weixinkey')->where(array('id'=>I('id')))->getField('content'));
            
           $date=array(
         'image_name'=>I('image_name'),
         'url'=>I('url'),
         'style'=>1,
         'userid'=>1,
         'order'=>I('order'),
         'content'=>$path,
        
        );  
        M('weixinkey')->where(array('id'=>I('id')))->save($date); 

         $re=M('weixinkey')->where(array('id'=>I('id')))->find();
         M('weixinkey')->where(array('title'=>$re['title'],'order'=>1))->setField('keyss',$keyss);

        $res=M('weixinkey')->where(array('title'=>$re['title']))->select();
       // $ress=M('weixinkey')->where(array('title'=>$res['title']))->select();
         foreach ($res as $key => $value) {
          M('weixinkey')->where(array('id'=>$value['id']))->setField('title',I('title'));
         }
         $id=M('weixinkey')->where(array('title'=>I('title'),'order'=>1))->getField('id');
         redirect(U('set_guanjian_add',array('id'=>$id)));
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
         'userid'=>1,
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
                 redirect(U('set_guanjian_add',array('id'=>I('id'))));
     }else{
            $date=array(
              'image_name'=>I('image_name'),
              'url'=>I('url'),
              'style'=>I('style'),
              'userid'=>1,
              'title'=>I('title'),
              'order'=>I('order'),
              'content'=>$path
              );
            $re=M('weixinkey')->add($date);
            redirect(U('set_guanjian_add',array('id'=>$re)));
     }
     
              
     }
       
                 
                 }
                 
    }
    public function set_guanjian_add(){
       
            $this->selected=14;
            $this->open=646;
            $this->active=654;
            $this->selected_title=M('column')->where(array('column_id' =>$this->selected))->getField('column_name');
            $this->open_title=M('column')->where(array('column_id' => $this->open))->getField('column_name');
            $this->active_title=M('column')->where(array('column_id' =>$this->active))->getField('column_name');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
            $this->weixin=M('weixinkey')->where(array('id'=>I('id')))->find();
          $this->keyword=json_decode($this->weixin['keyss'],true);
           $this->image_arr=M('weixinkey')->where(array('userid'=>1,'title'=>$this->weixin['title'],'order'=>array('neq',1)))->select();
          //var_dump($this->key);exit;
           $this->display(); //显示页面 
                  
    }
       public function set_menu(){
       
            $this->selected=14;
            $this->open=646;
            $this->active=655;
            $this->selected_title=M('column')->where(array('column_id' =>$this->selected))->getField('column_name');
            $this->open_title=M('column')->where(array('column_id' => $this->open))->getField('column_name');
            $this->active_title=M('column')->where(array('column_id' =>$this->active))->getField('column_name');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
            $this->menu=M('weixinmenu')->where(array('userid'=>1,'pid'=>0,'type'=>0))->order("orderid asc")->select();
            $this->weixin=M('weixinmenu')->where(array('id'=>I('id')))->find();
            $this->image_arr=M('weixinmenu')->where(array('pid'=>I('id')))->select();
           // var_dump($this->menu);exit;
           $this->display(); //显示页面 
                  
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
   public function delete_menu(){
         @unlink('./'.M('weixinmenu')->where(array('id'=>I('id')))->getField('content'));
         $re=M('weixinmenu')->where(array('id'=>I('id')))->delete();
          $this->ajaxReturn($re);
   }
   /*public function num_menu(){
         if (!IS_AJAX) {
           E('页面不存在！');
        } 
        $re=M('weixinmenu')->where(array('pid'=>I('id')))->count();
        $this->ajaxReturn($re);
   }*/
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
                'userid'=>1
                  );
                           M("weixinmenu")->add($date);
                }else
                {     
                  @unlink(M('weixinmenu')->where(array('id'=>I('id')))->getField('content'));
                  if(I('order')==1)
                  {
                    
               
                     $date=array(
                    'image_name'=>I('image_name'),
                    'url'=>I('url'),
                    'style'=>I('style'),
                    'order'=>I('order'),
                    'content'=>$path,
                    'userid'=>1
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

      public function set_man(){
       
            $this->selected=14;
            $this->open=646;
            $this->active=656;
            $this->selected_title=M('column')->where(array('column_id' =>$this->selected))->getField('column_name');
            $this->open_title=M('column')->where(array('column_id' => $this->open))->getField('column_name');
            $this->active_title=M('column')->where(array('column_id' =>$this->active))->getField('column_name');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
            $this->weixin=M('weixin')->where(array('userid'=>1))->find();
           $this->display(); //显示页面 
    }
                  
    
   public function wx_bangding_save(){
    $date=array(
         'wxid'=>I('wxid'),
         'wxname'=>I('wxname'),
         'url'=>I('url'),
         'token'=>I('token'),
         'appid'=>I('appid'),
         'appsecret'=>I('appsecret'),
         'key'=>I('key')
          );
   
       $re=M('weixin')->where(array('userid'=>I('userid')))->find();
       if($re['appid']==$date['appid'] && $re['appsecret']==$date['appsecret']){
        M('weixin')->where(array('userid'=>I('userid')))->save($date);
       }else{
          $token=gettoken($date['appid'],$date['appsecret']);
           $date=array_merge($date,array('access_token'=>$token,'token_time'=>time()));
            M('weixin')->where(array('userid'=>I('userid')))->save($date);
       }
    
         redirect(U('set_bangding'));
   }

 


}    