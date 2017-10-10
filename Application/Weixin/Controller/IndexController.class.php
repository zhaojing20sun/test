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

namespace Weixin\Controller;

use Think\Controller;
/*use Vendor\Weixin\Wechat;*/
/*use Com\Wechat;*/
use Com\Utils\HttpCurl;

class IndexController extends Controller{
  public function _initialize()  
    {  
       if($_SESSION['uid']==''){
         session('uid',$_GET['id']);
      }
       if($_SESSION['wid']==''){
         session('wid',$_GET['wid']);
      }
      
 
//$this->get_openid();

 //echo $_SESSION['wid'];exit;
    }
    /**
     * 微信消息接口入口
     * 所有发送到微信的消息都会推送到该操作
     * 所以，微信公众平台后台填写的api地址则为该操作的访问地址
     */
    public function index(){

     $this->configa=M('weixin_info')->where(array('id'=>1))->find();
     //var_dump($this->config);exit;
      $this->display();
    }

public function new_huodong1(){

   $re=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->select();
  $all='';
  foreach ($re as $key => $value) {
    $he=M('weixin_activity_message')->where(array('aid'=>$value['id'],'wid'=>$_SESSION['wid']))->find();
    if($he){
       $all+=1;
    }
  }
 $this->assign('all',$all);
   $view=M('weixin_activity')->where(array('id'=>I('nid')))->getField('view');
  M('weixin_activity')->where(array('id'=>I('nid')))->setfield('view',$view+1);
  $this->num=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->count();
   $this->activity=M('weixin_activity')->where(array('id'=>I('nid')))->find();
  // $this->man=M('weixin_activity_baoming')->where($where)->order($order)->select();
$this->display();
}
public function new_huodong2(){

   $re=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->select();
  $all='';
  foreach ($re as $key => $value) {
    $he=M('weixin_activity_message')->where(array('aid'=>$value['id'],'wid'=>$_SESSION['wid']))->find();
    if($he){
       $all+=1;
    }
  }
 $this->assign('all',$all);
   $view=M('weixin_activity')->where(array('id'=>I('nid')))->getField('view');
  M('weixin_activity')->where(array('id'=>I('nid')))->setfield('view',$view+1);
  $this->num=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->count();
   $this->activity=M('weixin_activity')->where(array('id'=>I('nid')))->find();
  // $this->man=M('weixin_activity_baoming')->where($where)->order($order)->select();
$this->display();
}
public function new_baoming1(){
$re=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->select();
  $all='';
  foreach ($re as $key => $value) {
    $he=M('weixin_activity_message')->where(array('aid'=>$value['id'],'wid'=>$_SESSION['wid']))->find();
    if($he){
       $all+=1;
    }
  }
 $this->assign('all',$all);
  $this->num=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->count();
  $this->activity=M('weixin_activity')->where(array('id'=>I('nid')))->find();
$this->display();
}
public function new_baoming2(){

  $this->activity=M('weixin_activity')->where(array('id'=>I('nid')))->find();
$this->display();
}
public function new_paiming1(){
  $where=array('aid'=>I('nid'),'status'=>1);
  $order="piao desc";
  if(I('title')){
   
    if(is_numeric(I('title'))){
       $where=array_merge($where,array('id'=>I('title')));
    }else{
$where=array_merge($where,array('name'=>array('like','%'.I('title').'%')));
    }
  }
  $re=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->select();
  $all='';
  foreach ($re as $key => $value) {
    $he=M('weixin_activity_message')->where(array('aid'=>$value['id'],'wid'=>$_SESSION['wid']))->find();
    if($he){
       $all+=1;
    }
  }
 $this->assign('all',$all);
  $this->num=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->count();
  $this->activity=M('weixin_activity')->where(array('id'=>I('nid')))->find();
   $this->man=M('weixin_activity_baoming')->where($where)->order($order)->select();
$this->display();
}
public function new_paiming2(){
  $where=array('aid'=>I('nid'),'status'=>1);
  $order="piao desc";
  if(I('title')){
   
    if(is_numeric(I('title'))){
       $where=array_merge($where,array('id'=>I('title')));
    }else{
$where=array_merge($where,array('name'=>array('like','%'.I('title').'%')));
    }
  }
  $re=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->select();
  $all='';
  foreach ($re as $key => $value) {
    $he=M('weixin_activity_message')->where(array('aid'=>$value['id'],'wid'=>$_SESSION['wid']))->find();
    if($he){
       $all+=1;
    }
  }
 $this->assign('all',$all);
  $this->num=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->count();
  $this->activity=M('weixin_activity')->where(array('id'=>I('nid')))->find();

   $this->man=M('weixin_activity_baoming')->where($where)->order($order)->select();
$this->display();
}
public function new_paiming(){
  $where=array('aid'=>I('nid'),'status'=>1);
  $order="piao desc";
  if(I('title')){
   
    if(is_numeric(I('title'))){
       $where=array_merge($where,array('id'=>I('title')));
    }else{
$where=array_merge($where,array('name'=>array('like','%'.I('title').'%')));
    }
  }
  $re=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->select();
  $all='';
  foreach ($re as $key => $value) {
    $he=M('weixin_activity_message')->where(array('aid'=>$value['id'],'wid'=>$_SESSION['wid']))->find();
    if($he){
       $all+=1;
    }
  }
 $this->assign('all',$all);
  $this->num=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->count();
  $this->activity=M('weixin_activity')->where(array('id'=>I('nid')))->find();
   $this->man=M('weixin_activity_baoming')->where($where)->order($order)->select();
$this->display();
}
public function new_toupiao1(){
   $where=array('aid'=>I('nid'),'status'=>1);
  if(I('title')){
   
    if(is_numeric(I('title'))){
       $where=array_merge($where,array('id'=>I('title')));
    }else{
$where=array_merge($where,array('name'=>array('like','%'.I('title').'%')));
    }
  }

  $re=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->select();
  $all='';
  foreach ($re as $key => $value) {
    $he=M('weixin_activity_message')->where(array('aid'=>$value['id'],'wid'=>$_SESSION['wid']))->find();
    if($he){
       $all+=1;
    }
  }
 $this->assign('all',$all);
  
  $this->num=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->count();
   $this->activity=M('weixin_activity')->where(array('id'=>I('nid')))->find();
   $count=M('weixin_activity_baoming')->where($where)->count();
    $page = new \Think\Page($count, 4);
           $page->setConfig('theme', ' %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
   $this->man=M('weixin_activity_baoming')->where($where)->limit($limit)->order($order)->select();
$this->display();
}
public function new_toupiao2(){
   $where=array('aid'=>I('nid'),'status'=>1);
  if(I('title')){
   
    if(is_numeric(I('title'))){
       $where=array_merge($where,array('id'=>I('title')));
    }else{
$where=array_merge($where,array('name'=>array('like','%'.I('title').'%')));
    }
  }
if($_GET['order']){
$order="addtime desc";
}
  $re=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->select();
  $all='';
  foreach ($re as $key => $value) {
    $he=M('weixin_activity_message')->where(array('aid'=>$value['id'],'wid'=>$_SESSION['wid']))->find();
    if($he){
       $all+=1;
    }
  }
 $this->assign('all',$all);
  
  $this->num=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->count();
   $this->activity=M('weixin_activity')->where(array('id'=>I('nid')))->find();
  
   $this->man=M('weixin_activity_baoming')->where($where)->limit($limit)->order($order)->select();
$this->display();
}
public function new_huodong(){
  $this->activity=M('weixin_activity')->where(array('userid'=>$_SESSION['uid']))->order('id desc')->select();
  $this->display();
}

 public function new_huodong_detial(){

      $this->activity=M('weixin_activity')->where(array('id'=>I('nid')))->find();
     
      $this->display();
    }

public function new_baoming(){
   $this->activity=M('weixin_activity')->where(array('id'=>I('nid')))->find();
   $this->num=M('weixin_activity_baoming')->where(array('aid'=>I('nid')))->count();
  $this->display();
}
public function new_toupiao(){
  $where=array('aid'=>I('nid'),'status'=>1);
  if(I('title')){
   
    if(is_numeric(I('title'))){
       $where=array_merge($where,array('id'=>I('title')));
    }else{
$where=array_merge($where,array('name'=>array('like','%'.I('title').'%')));
    }
  }

  $re=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->select();
  $all='';
  foreach ($re as $key => $value) {
    $he=M('weixin_activity_message')->where(array('aid'=>$value['id'],'wid'=>$_SESSION['wid']))->find();
    if($he){
       $all+=1;
    }
  }
 $this->assign('all',$all);
  $view=M('weixin_activity')->where(array('id'=>I('nid')))->getField('view');
  M('weixin_activity')->where(array('id'=>I('nid')))->setfield('view',$view+1);
  $this->num=M('weixin_activity_baoming')->where(array('aid'=>I('nid'),'status'=>1))->count();
   $this->activity=M('weixin_activity')->where(array('id'=>I('nid')))->find();
   $this->man=M('weixin_activity_baoming')->where($where)->order($order)->select();
  $this->display();
}
public function new_activity_detial(){
  $this->man=M('weixin_activity_baoming')->where(array('id'=>I('nid')))->find();
  $this->activity=M('weixin_activity')->where(array('id'=>$this->man['aid']))->find();
  $this->image=M('weixin_activity_pic')->where(array('aid'=>I('nid')))->select();
  $this->zhichi=M('weixin_activity_message')->where(array('aid'=>I('nid'),'wid'=>$_SESSION['wid']))->find();
  $this->piao=M('weixin_activity_message')->where(array('aid'=>I('nid')))->count();
  $this->display();
}
public function new_activity_detial1(){
  $this->man=M('weixin_activity_baoming')->where(array('id'=>I('nid')))->find();
  $this->activity=M('weixin_activity')->where(array('id'=>$this->man['aid']))->find();
  $this->image=M('weixin_activity_pic')->where(array('aid'=>I('nid')))->select();
  $this->zhichi=M('weixin_activity_message')->where(array('aid'=>I('nid'),'wid'=>$_SESSION['wid']))->find();
  $this->piao=M('weixin_activity_message')->where(array('aid'=>I('nid')))->count();
  $this->display();
}
public function new_tianqi(){
   $wea = new \Org\Net\weather('CiEwAVN72cVAuHLzNRAMjzpY'); 
 $json=$wea->weatherInfo();
 $this->json=$json['result'];
 //var_dump($this->json['result']);exit;
$this->display();
}
public function new_search(){
  if($_GET['type']=='1'){
    $this->news=M('weixin_article')->where(array('userid'=>$_SESSION['uid'],'title'=>array('like','%'.$_GET['title'].'%')))->order('addtime desc')->select();
  }elseif($_GET['type']=='2'){

  }elseif($_GET['type']=='3'){
    $re=M('weixin_man')->where(array('userid'=>$_SESSION['uid'],'nickname'=>array('like','%'.$_GET['title'].'%')))->order('id asc')->select();
   $arr=array();
    $news=M('weixin_mydata')->where(array('userid'=>$_SESSION['uid'],'nickname'=>array('like','%'.$_GET['title'].'%')))->order('id asc')->select();
    $count=count($news);
    //echo $count;
    foreach ($news as $key1 => $value1) {
     array_push($arr,$value1['wid']);
    }
    foreach ($re as $key => $value) {
      if(in_array($value['id'], $arr)){
        unset($re[$key]);
      }
    }
    foreach ($re as $key2 => $value2) {
         $news[$count+$key2]=array(
             'wid'=>$value2['id'],
             'nickname'=>$value2['nickname']
          );
    }
  // var_dump($re);exit;
  //  var_dump($news);exit;
    $this->assign('news',$news);
  }
  $this->display();
}
   public function new_sign(){
    // $now1=time();
     $day=date('N',time());
     $time_arr=array();
     /*if($day==1){
      $time_arr[0]=date('N',time()-60*60*24); 
      $time_arr[1]=date('N',time()); 
       $time_arr[2]=date('j',time()+60*60*24); 
          $time_arr[3]=date('j',time()+60*60*24*2); 
            $time_arr[4]=date('j',time()+60*60*24*3); 
             $time_arr[5]=date('j',time()+60*60*24*4); 
          $time_arr[6]=date('j',time()+60*60*24*5); 
          
     }elseif($day==2){
      
     }elseif($day==3){
       $time_arr[0]=date('j',time()-60*60*24*3); 
      $time_arr[1]=date('j',time()-60*60*24*2); 
       $time_arr[2]=date('j',time()-60*60*24); 
        $time_arr[3]=date('j',time()); 
         $time_arr[4]=date('j',time()+60*60*24); 
          $time_arr[5]=date('j',time()+60*60*24*2); 
            $time_arr[6]=date('j',time()+60*60*24*3); 
     }elseif($day==4){
      
     }elseif($day==5){
      
     }elseif($day==6){
      
     }elseif($day==7){
      
     }*/
     for ($i=0; $i <7 ; $i++) { 
        if($day>$i){
           $time_arr[$i]['day']=date('j',time()-60*60*24*($day-$i));
            $time_arr[$i]['day1']=date('Y-m-d',time()-60*60*24*($day-$i));
        }elseif($day==$i){
           $time_arr[$i]['day']=date('j',time());
            $time_arr[$i]['day1']=date('Y-m-d',time());
        }else{
          $time_arr[$i]['day']=date('j',time()+60*60*24*($i-$day));
          $time_arr[$i]['day1']=date('Y-m-d',time()+60*60*24*($i-$day));
        }
     }
     $this->assign('time_arr',$time_arr);
    
     $time=date("Y-m-d",time());
    //echo $time;exit;
     $this->order=M('weixin_sign')->where(array('userid'=>$_SESSION['uid'],'wid'=>$_SESSION['wid']))->order("id desc")->select();
      $this->time=M('weixin_sign')->where(array('userid'=>$_SESSION['uid'],'wid'=>$_SESSION['wid']))->select();
     $this->today_sign=M('weixin_sign')->where(array('userid'=>$_SESSION['uid'],'day'=>$time,'wid'=>array('neq',$_SESSION['wid'])))->limit('4')->select();
      $this->display();
   }
    public function new_news(){
       if($_GET['num']){
        $this->numb=$_GET['num'];
      }
        $this->pic=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>1,'type'=>7))->select();
      $this->nav=M('weixin_article_column')->where(array('userid'=>$_SESSION['uid']))->select();
      if($_GET['type']=='catch'){
         $this->news=M('weixin_catch_news')->where(array('title'=>array('neq','')))->order('addtime desc')->select();
      }else{
        $where=array('userid'=>$_SESSION['uid']);

      if($_GET['type']){
        $where=array_merge($where,array('column'=>$_GET['type']));
      }
      $zhiding=array_merge($where,array('label'=>1));
      $ding=M('weixin_article')->where($zhiding)->order('view asc')->select();
      if($ding){
        $arr=array();
        foreach ($ding as $key => $value) {
         array_push($arr,$value['id']);
        }
        $where=array_merge($where,array('id'=>array('not in',$arr)));
      }
     
       $news=M('weixin_article')->where($where)->order('addtime desc')->select();

       foreach ($ding as $key => $value) {
         array_unshift($news,$value);
        }
        //array_unshift($news[0],$ding);
       $this->assign('news',$news);
        //var_dump($news);exit;
      }
     
 //
      $this->display();
    }
    public function new_news_detial(){
      if($_GET['type']=='catch'){
     
 $this->news=M('weixin_catch_news')->where(array('id'=>I('nid')))->find();
 $this->about=M('weixin_catch_news')->where(array('pid'=>$this->news['pid'],'id'=>array('neq',I('nid'))))->limit(4)->order("addtime desc")->select();

      }else{
        $this->like_man=M('weixin_article_message')->where(array('aid'=>I('nid'),'type'=>2,'like'=>1))->count();
        $re=M('weixin_article')->where(array('id'=>I('nid')))->getField('view');
      M('weixin_article')->where(array('id'=>I('nid')))->setfield('view',$re+1);
      $this->news=M('weixin_article')->where(array('id'=>I('nid')))->find();
      $this->like=M('weixin_article_message')->where(array('wid'=>$_SESSION['wid'],'aid'=>I('nid'),'type'=>2))->getField('like');
       $this->xin=M('weixin_article_message')->where(array('wid'=>$_SESSION['wid'],'aid'=>I('nid'),'type'=>3))->getField('xin');
          $this->liuyan=M('weixin_article_message')->where(array('aid'=>I('nid'),'type'=>1))->order('addtime asc')->select();
       //echo $this->xin;exit;
      $this->about=M('weixin_article')->where(array('userid'=>$_SESSION['uid'],'column'=>$this->news['column'],'id'=>array('neq',I('nid'))))->limit(4)->order("addtime desc")->select();
      }
      
     
      
      $this->display();
    }

    public function new_release(){
      cookie('release_delete',$_SERVER['HTTP_REFERER']);
     // $this->p=urldecode();
      //echo $this->p;exit;
          $this->news=M('weixin_release')->where(array('id'=>I('nid')))->find();
           $re=M('weixin_release')->where(array('id'=>I('nid')))->getField('view');
      M('weixin_release')->where(array('id'=>I('nid')))->setfield('view',$re+1);
          $this->like_man=M('weixin_release_message')->where(array('aid'=>I('nid'),'type'=>2,'like'=>1))->count();
           $this->like=M('weixin_release_message')->where(array('wid'=>$_SESSION['wid'],'aid'=>I('nid'),'type'=>2))->getField('like');
           $this->xin=M('weixin_release_message')->where(array('wid'=>$_SESSION['wid'],'aid'=>I('nid'),'type'=>3))->getField('xin');
            $this->liuyan=M('weixin_release_message')->where(array('aid'=>I('nid'),'type'=>1))->order('addtime asc')->select();
       $this->display();
    }
    public function release_delete(){
        //echo I('p');exit;
       $re=M('weixin_release_pic')->where(array('aid'=>I('id')))->select();
       foreach ($re as $key => $value) {
         @unlink('./'.$value['pic']);
         M('weixin_release_pic')->where(array('id'=>$value['id']))->delete();
       }
          M('weixin_release')->where(array('id'=>I('id')))->delete();
M('weixin_release_message')->where(array('aid'=>I('id')))->delete();
          redirect($_COOKIE['release_delete']);
    }
      public function new_bendi(){
      $this->pic=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>1,'type'=>4))->select();
       $this->news=M('weixin_article')->where(array('userid'=>$_SESSION['uid']))->order('addtime desc')->select();
      $this->display();
    }
    public function new_index(){

      $this->activity=M('weixin_activity')->where(array('userid'=>$_SESSION['uid']))->limit('2')->order('id desc')->select();
      $this->ding=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>1,'type'=>1))->select();
      $this->yaowen=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>1,'type'=>2))->select();
      $this->haoyou=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>1,'type'=>3))->select();
       $this->guangbo=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>1,'type'=>4))->select();
        $this->dianshi=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>1,'type'=>5))->select();
         $this->huodong=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>1,'type'=>6))->select();

         
         $this->news=M('weixin_article')->where(array('userid'=>$_SESSION['uid']))->limit('3')->order('addtime desc')->select();
         $pic=M('weixin_release_pic')->where(array('wid'=>array('neq',$_SESSION['wid'])))->group('wid')->select();
         $arr=array();
         foreach ($pic as $key => $value) {
          $re=M('weixin_release_pic')->where(array('wid'=>$value['wid']))->count();
           if($re>2){
              array_push($arr,$value['wid']);
           }
         }
         $count=count($arr);
       $rand1=rand(0,$count-1);
       $rand2=rand(0,$count-1);
       if($rand2==$rand1 and $rand1+1>$count ){
          $rand2=$rand1-1;
       }elseif($rand2==$rand1 and $rand1-1>0 ){
        $rand2=$rand1+1;
       }elseif($rand2==$rand1){
           $rand2=$rand1+1;
       }
      $arr=array($arr[$rand1],$arr[$rand2]); 
      $this->tuijian=M('weixin_release_pic')->where(array('wid'=>array('in',$arr)))->group('wid')->select();
      $this->display();
    }
    public function new_baoliao(){
      $this->news=M('weixin_baoliao')->where(array('id'=>I('id')))->find();
      $this->type=M('weixin_article_column')->where(array('userid'=>$_SESSION['uid']))->select();
      $this->display();
    }
    public function new_my(){
      $re=M('weixin_mydata')->where(array('wid'=>$_SESSION['wid']))->find();
     if($re){
        $my=M('weixin_man')->where(array('id'=>$_SESSION['wid']))->find();
        $re['headimgurl']=$my['headimgurl'];
        //$re['type']='1';
//var_dump($re);exit;
        $this->assign('my',$re);
       }else{
        $this->my=M('weixin_man')->where(array('id'=>$_SESSION['wid']))->find();
       }
      $this->release=M('weixin_release')->where(array('wid'=>$_SESSION['wid']))->select();
       $this->guanzhu=M('weixin_attention')->where(array('wid'=>$_SESSION['wid']))->count();
       $this->fins=M('weixin_attention')->where(array('aid'=>$_SESSION['wid']))->count();
       $this->num=M('weixin_my_notice')->where(array('aid'=>$_SESSION['wid'],'view'=>0))->count();
      $this->display();
    }
    public function new_myhide(){
       $aid=M('weixin_article_message')->where(array('wid'=>$_SESSION['wid'],'type'=>3,'xin'=>1))->select();
       $arr=array();
       foreach ($aid as $key => $value) {
       array_push($arr,$value['aid']);
       }
       if($arr){
          $this->news=M('weixin_article')->where(array('id'=>array('in',$arr)))->order('addtime desc')->select();
       }
      
        $this->display();
    }
    public function new_shou(){
      $shou=M('weixin_release_message')->where(array('wid'=>I('wid'),'type'=>3,'xin'=>1))->select();
      $arr=array();
      foreach ($shou as $key => $value) {
        array_push($arr,$value['aid']);
      }
       if($arr){
          $this->dongtai=M('weixin_release')->where(array('id'=>array('in',$arr)))->order('addtime desc')->select();
       }
       //var_dump($this->dongtai);exit;
        $this->display();
    }
    public function new_zone(){
        $re=M('weixin_mydata')->where(array('wid'=>I('wid')))->find();
     if($re){
        $my=M('weixin_man')->where(array('id'=>I('wid')))->find();
        $re['headimgurl']=$my['headimgurl'];
        //$re['type']='1';
//var_dump($re);exit;
        $this->assign('my',$re);
       }else{
        $this->my=M('weixin_man')->where(array('id'=>I('wid')))->find();
       }
       $this->release=M('weixin_release')->where(array('wid'=>I('wid')))->order("addtime desc")->select();
       $this->guanzhu=M('weixin_attention')->where(array('wid'=>I('wid')))->count();
       $this->fins=M('weixin_attention')->where(array('aid'=>I('wid')))->count();
       $this->shou=M('weixin_release_message')->where(array('wid'=>I('wid'),'type'=>3,'xin'=>1))->count();
       //$this->dongtai=M('weixin_release')->
      $this->display();
    }
    public function new_attention(){
      if(I('type')=='guanzhu'){
         $this->man=M('weixin_attention')->where(array('wid'=>I('wid')))->order('addtime desc')->select();
       }elseif(I('type')=='fins'){
        $this->man=M('weixin_attention')->where(array('aid'=>I('aid')))->order('addtime desc')->select();
       }
     //var_dump($this->man);exit;
      $this->display();
    }
    public function new_message(){
       $this->message1=M('weixin_my_notice')->where(array('aid'=>$_SESSION['wid'],'type'=>1))->order('addtime desc')->select();
      $this->message2=M('weixin_my_notice')->where(array('aid'=>9,'type'=>2))->order('addtime desc')->select();
      $this->display();
    }
    public function new_mydraft(){
      $this->news=M('weixin_baoliao')->where(array('wid'=>$_SESSION['wid'],'status'=>2))->order('addtime desc')->select();
      $this->display();
    }
    public function new_aboutus(){
      $this->us=M('weixin')->where(array('userid'=>$_SESSION['uid']))->find();
      $this->display();
    }
    public function new_mydata(){
      // echo $_SESSION['uid'].'+'.$_SESSION['wid'];

       $re=M('weixin_mydata')->where(array('userid'=>$_SESSION['uid'],'wid'=>$_SESSION['wid']))->find();

       if($re){
        $my=M('weixin_man')->where(array('id'=>$_SESSION['wid']))->find();
        $re['headimgurl']=$my['headimgurl'];
       
//var_dump($my);exit;
        $this->assign('my',$re);
       }else{
        $this->my=M('weixin_man')->where(array('id'=>$_SESSION['wid']))->find();
       }
      // var_dump($re);exit;
      $this->display();
    }
    public function mydata_save(){
      $date=array(
          'nickname'=>I('nickname'),'sex'=>I('sex'),'age'=>strtotime(I('age')),'city'=>I('city'),'sign'=>I('sign'),'userid'=>$_SESSION['uid'],
          'wid'=>$_SESSION['wid'],'position'=>I('position'),'blood'=>I('blood'),'qq'=>I('qq'),'phone'=>I('phone'),'education'=>I('education'),'school'=>I('school'),'intro'=>I('intro'),'emotion'=>I('emotion'),'like'=>I('like'),'purpose'=>I('purpose')
        );
      $re=M('weixin_mydata')->where(array('wid'=>$_SESSION['wid'],'userid'=>$_SESSION['uid']))->find();
      if($re){
          M('weixin_mydata')->where(array('wid'=>$_SESSION['wid'],'userid'=>$_SESSION['uid']))->save($date);
      }else{
        M('weixin_mydata')->add($date);
      }
      redirect(U('new_my'));
    }
    public function new_addfriend(){
      $re=M('weixin_attention')->where(array('wid'=>$_SESSION['wid']))->select();
      $arr=array();
      foreach ($re as $key => $value) {
        array_push($arr,$value['aid']);
      }
      array_push($arr,$_SESSION['wid']);
        $where=array("userid"=>$_SESSION['uid'],'wid'=>array('not in',$arr));
        if($_GET['change']){
           $count=count(M('weixin_release')->where($where)->order($order)->group("wid")->select());
          //echo $count;exit;
          $min=rand(0,$count)-2;$min=$min<0?0:$min;
          $max=rand($min,$count)+4;$max=$max>$count?$count:$max;
         $limit=$min.','.$max;
        }
         
         $this->dongtai=M('weixin_release')->where($where)->order($order)->limit($limit)->group("wid")->select();
         $this->display();
    }
 /*   public function new_release_pic(){
       $this->pic=M('weixin_release_pic')->where(array('aid'=>I('aid')))->select();
       $this->display();
    }*/
    public function new_dongtai(){
      if($_GET['type']==''){
        $order="view desc";
        $where=array("userid"=>$_SESSION['uid'],'type'=>array('gt',0));
      }elseif($_GET['type']=='0'){
         $order="addtime desc";
        $where=array("userid"=>$_SESSION['uid'],'type'=>'0');
      }
     if($_GET['wid']){
        $re=M('weixin_attention')->where(array('wid'=>$_GET['wid']))->select();
      $arr=array();
      foreach ($re as $key => $value) {
        array_push($arr,$value['aid']);
      }
     
      if($arr){
      $where=array("userid"=>$_SESSION['uid'],'wid'=>array('in',$arr));
        $order="addtime desc";  
        $group="";
        $this->tuijian=M('weixin_release')->where(array("userid"=>$_SESSION['uid'],'wid'=>array('not in',$arr)))->order('view desc')->group('wid')->select();
    }else{
      $where=array("userid"=>$_SESSION['uid'],'wid'=>array('neq',$_GET['wid']));
      $count=count(M('weixin_release')->where($where)->order($order)->group("wid")->select());
          //echo $count;exit;
          $min=rand(0,$count)-2;$min=$min<0?0:$min;
          $max=rand($min,$count)+4;$max=$max>$count?$count:$max;
         $limit=$min.','.$max;
        // echo $limit;exit;
         $group='wid';
    }
     }
      if($_GET['type']){
       $where=array('type'=>$_GET['type'],"userid"=>$_SESSION['uid']);
 $order="addtime desc"; 
      }
  $this->assign('arr',$arr);
       $this->huodong=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>1,'type'=>9))->select();
      $this->nav=M('weixin_dynamic_nav')->select();
 $this->dongtai=M('weixin_release')->where($where)->order($order)->limit($limit)->group($group)->select();

//var_dump($this->dongtai);exit;

         $this->display();
    }
    public function attention_add(){
      $date=array(
         'wid'=>$_SESSION['wid'],
         'aid'=>I('aid'),
         'addtime'=>time()
        );
      M('weixin_attention')->add($date);
          $a="<a href='new_zone?wid=".$_SESSION['wid']."'>";
            $name=M('weixin_mydata')->where(array('wid'=>$_SESSION['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$_SESSION['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$_SESSION['wid']))->getfield('nickname');
             $data=array(
              'wid'=>$_SESSION['wid'],
              'aid'=>I('aid'),
              'addtime'=>time(),
              'content'=>$a."<span style='color: #4876FF'>".$name."</span></a>关注了你.",
              'type'=>2,
              'title'=>'系统消息',
              'view'=>0
              );
             M('weixin_my_notice')->add($data);

      redirect($_SERVER['HTTP_REFERER']);
    }
     public function attention_delete(){
      
      M('weixin_attention')->where(array('id'=>I('id')))->delete();
      redirect($_SERVER['HTTP_REFERER']);
    }
    public function new_faxian(){
      $this->zonghe=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>1,'type'=>8))->select();
      $this->display();
    }
    public function new_write(){
      //echo "http://".$_SERVER ['HTTP_HOST'];exit;
      $this->news=M('weixin_release')->where(array('id'=>I('nid')))->find();
      $this->type=M('weixin_dynamic_nav')->select();
      $this->display();
    }
     public function faxian(){
      $this->column=M('weixin_easy_column')->where(array('userid'=>$_SESSION['uid']))->select();
      $this->display();
    }
     public function luntan(){
      $this->display();
    }
     public function zhiyouquan(){
      $this->display();
    }
    public function activity(){
      $this->display();
    }
    public function medicine(){
     //$this->get_openid();
      $this->pic=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>2))->select();
       $this->medicine=M('weixin_medicine')->where(array('userid'=>$_SESSION['uid']))->select();
       $this->display();
    }
    public function detial(){
      $this->display();
    }
    public function education(){
     // $this->get_openid();
      $this->pic=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>3))->select();
      $this->display();
    }
    public function education_faxian(){
      $this->column=M('weixin_education_column')->where(array('userid'=>$_SESSION['uid']))->select();
      $this->display();
    }
    public function education_faxian_list(){
      $this->title=M('weixin_education_column')->where(array('id'=>I('id')))->find();
      $this->licai=M('weixin_education')->where(array('pid'=>I('id')))->select();
      $this->display();
    }
    public function invest(){
     //$this->get_openid();
      $this->pic=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>4))->select();
      $this->licai=M('weixin_invest_column')->where(array('userid'=>$_SESSION['uid'],'pid'=>1))->limit('2')->select();
      $this->display();
    }
    public function invest_licai(){
       $this->pic=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>4))->select();
      $this->licai=M('weixin_invest_column')->where(array('userid'=>$_SESSION['uid'],'pid'=>1))->select();
      $this->display();
    }
    public function invest_licai_list(){
      $this->title=M('weixin_invest_column')->where(array('id'=>I('id')))->find();
      $this->licai=M('weixin_invest')->where(array('pid'=>I('id')))->select();
      $this->display();
    }
    public function news_list(){
      if(I('order')=='addtime'){
          $order="addtime desc";
        }elseif(I('order')=='view'){
          $order="view desc";
        }else{
          $order='';
        }

       $this->news=M('weixin_article')->where(array('userid'=>$_SESSION['uid']))->order($order)->select();
      
      $this->display();
    }
    public function xieyi(){
      $this->xieyi=M('weixin_xieyi')->where(array('userid'=>$_SESSION['uid']))->find();
      $this->display();
    }
    public function regist_save(){
       $date=array(
         'tel'=>I('tel'),
         'password'=>I('password')
        );
       M('weixin_man')->where(array('id'=>$_SESSION['wid']))->save($date);
       redirect(I('page'));
    }
    public function get_openid(){
      $weixin=M('weixin')->where(array('userid'=>$_SESSION['uid']))->find();
    
            if(time()-$weixin['token_time']>7200){
               $access_token= gettoken($weixin['appid'],$weixin['appsecret']);
               $date=array(
                'access_token'=>$access_token,
                'token_time'=>time()
                );
               M('weixin')->where(array('userid'=>$_SESSION['uid']))->save($date);
             }else{
              $access_token=$weixin['access_token'];
             }
        if($_SESSION['wid']=='' && $_GET['code']==''){
       //var_dump($weixin);exit;
        $redirect_uri="http://lgx.meixingkong.com/weixin/index/new_index/id/2.html";
          $url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$weixin['appid']."&redirect_uri=".urlencode($redirect_uri)."&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect"; 
           redirect($url);
           //exit;
      }
      if($_GET['code']!=''){
           
          $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$weixin['appid']."&secret=".$weixin['appsecret']."&code=".$_GET['code']."&grant_type=authorization_code";
          $httpget=new HttpCurl();
          $list=$httpget->get($url);
           $list=json_decode($list,true);
         // var_dump($list)."<br>";
           $re=M('weixin_man')->where(array('openid'=>$list['openid']))->find();

         $url1="https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$list['access_token']."&openid=".$list['openid']."&lang=zh_CN";
             $man_list=$httpget->get($url1);
                $man=json_decode($man_list,true);
               if($man['errcode']!=''){
               	 $url="https://api.weixin.qq.com/sns/oauth2/refresh_token?appid=".$weixin['appid']."&grant_type=refresh_token&refresh_token=".$list['refresh_token'];
               	   $httpget=new HttpCurl();
          $list=$httpget->get($url);
           $list=json_decode($list,true);
             $re=M('weixin_man')->where(array('openid'=>$list['openid']))->find();

         $url1="https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$access_token."&openid=".$list['openid']."&lang=zh_CN";
             $man_list=$httpget->get($url1);
                $man=json_decode($man_list,true);
               }
             /* var_dump($re).'<br>';
             var_dump($man);
              exit;*/
           if($re!=null){
             $date=array(
                 'userid'=>$_SESSION['uid'],
                 'openid'=>$man['openid'],
                 'nickname'=>$man['nickname'],
                 'sex'=>$man['sex'],
                 'city'=>$man['city'],
                 'country'=>$man['country'],
                 'province'=>$man['province'],
                 'headimgurl'=>$man['headimgurl'],
                 'subscribe_time'=>$man['subscribe_time'],
                 'remark'=>$man['remark'],
                 'groupid'=>$man['groupid'],
                 'tagid_list'=>$man['tagid_list']
                  );
             M('weixin_man')->where(array('id'=>$re['id']))->save($date);
            session('wid',$re['id']);
           }else{

                 $data=array(
                  'userid'=>$_SESSION['uid'],
                 'openid'=>$man['openid'],
                 'nickname'=>$man['nickname'],
                 'sex'=>$man['sex'],
                 'city'=>$man['city'],
                 'country'=>$man['country'],
                 'province'=>$man['province'],
                 'headimgurl'=>$man['headimgurl'],
                 'subscribe_time'=>$man['subscribe_time'],
                 'remark'=>$man['remark'],
                 'groupid'=>$man['groupid'],
                 'tagid_list'=>$man['tagid_list'],
                 'linshi'=>1
                  );
               $id= M('weixin_man')->add($data);
               session('wid',$id);
           }
      }
    }
    public function product(){
     //$this->get_openid();
       $this->pic=M('weixin_lunbotu')->where(array('userid'=>$_SESSION['uid'],'page'=>5))->select();
       $this->column=M('weixin_product_column')->where(array('userid'=>$_SESSION['uid'],'pid'=>0))->select();
      $this->product=M('weixin_product')->where(array('userid'=>$_SESSION['uid']))->select();
      $this->display();
    }
    public function product_column(){
      if(I('id')){
        $this->id=I('id');
        $this->erji=M('weixin_product_column')->where(array('userid'=>$_SESSION['uid'],'pid'=>I('id')))->select();
        $arr=array();
        foreach ($this->erji as $key => $value) {
           $re=M('weixin_product')->where(array('userid'=>$_SESSION['uid'],'pid'=>$value['id']))->select();
           $arr=array_merge($arr,$re);
        }
     $this->product=$arr;    

       }
      if(I('pid')){

        $re=M('weixin_product_column')->where(array('id'=>I('pid')))->find();
         $this->id=$re['pid'];
        $this->erji=M('weixin_product_column')->where(array('userid'=>$_SESSION['uid'],'pid'=>$re['pid']))->select();
        $this->product=M('weixin_product')->where(array('userid'=>$_SESSION['uid'],'pid'=>I('pid')))->select();
      }
      if(I('id')=='' && I('pid')==''){
         $this->product=M('weixin_product')->where(array('userid'=>$_SESSION['uid']))->order('id desc')->select();
      }
      $this->numb=I('id');
      $this->column=M('weixin_product_column')->where(array('userid'=>$_SESSION['uid'],'pid'=>0))->select();
      $this->display();
    }

    public function activity_list(){
      $this->activity=M('weixin_activity')->where(array('userid'=>$_SESSION['uid']))->order('id desc')->select();
      $this->display();
    }
    public function friend_list(){
      $this->display();
    }
    public function show_list(){
       if(I('vid')){
         $where=array('userid'=>$_SESSION['uid'],'pid'=>I('vid'));
      }else{
        $where=array('userid'=>$_SESSION['uid']);
      }
      if(I('num')){
        $this->numb=I('num');
      }
      $this->column=M('weixin_show_column')->where(array('userid'=>$_SESSION['uid']))->select();
      $this->video=M('weixin_show')->where($where)->order('id desc')->select();
      
      $this->display();
    }
    public function show_detial(){
       $this->video=M('weixin_show')->where(array('id'=>I('id')))->find();
      $this->display();
    }
   
    public function news_detial(){
       $this->news=M('weixin_article')->where(array('id'=>I('id')))->find();
      $this->display();
    }
    public function new_video_list(){
      if(I('vid')){
         $where=array('userid'=>$_SESSION['uid'],'pid'=>I('vid'));
      }else{
        $where=array('userid'=>$_SESSION['uid']);
      }
      if(I('num')){
        $this->numb=I('num');
      }
      $this->column=M('weixin_video_column')->where(array('userid'=>$_SESSION['uid']))->order('ordera desc')->select();
      $this->video=M('weixin_video')->where($where)->order('ordera desc')->select();
      $this->display();
    }
    public function new_video_end(){

      $count=M('weixin_video')->where(array('userid'=>$_SESSION['uid']))->select();
      $arr=array();
      foreach ($count as $key => $value) {
        if($value['id']!=I('nid')){
          array_push($arr,$value['id']);
        }
      }
  
$arr1=array_rand($arr,4);

      $arr=array($arr[$arr1[0]],$arr[$arr1[1]],$arr[$arr1[2]],$arr[$arr1[3]]);
        $this->like=M('weixin_video_message')->where(array('wid'=>$_SESSION['wid'],'aid'=>I('nid'),'type'=>2))->getField('like');
  
          $this->liuyan=M('weixin_video_message')->where(array('aid'=>I('nid'),'type'=>1))->order('addtime asc')->select();
   $this->about=M('weixin_video')->where(array('id'=>array('in',$arr)))->select();
   $re=M('weixin_video')->where(array('id'=>I('nid')))->getField('view');
   M('weixin_video')->where(array('id'=>I('nid')))->setfield('view',$re+1);
  $this->view1=M('weixin_video')->where(array('id'=>I('nid')))->getField('view');
  $this->zan=M('weixin_video_message')->where(array('aid'=>I('nid'),'type'=>2,'like'=>1))->count();
  $this->pinglun=M('weixin_video_message')->where(array('aid'=>I('nid'),'type'=>1))->count();
         $this->video=M('weixin_video')->where(array('id'=>I('nid')))->find();
         //$this->view1=M('weixin_video')->where(array('id'=>I('nid')))->getField('view');
      $this->display();
    }
     public function new_guangbo(){
      $this->column=M('weixin_broadcast_column')->where(array('userid'=>$_SESSION['uid']))->order('ordera desc')->select();
      if(I('vid')){
         $where=array('userid'=>$_SESSION['uid'],'pid'=>I('vid'));
      }else{
        $where=array('userid'=>$_SESSION['uid'],'pid'=>$this->column[0]['id']);
      }
      
      
      $this->video=M('weixin_broadcast')->where($where)->order('ordera desc')->select();
      $this->display();
    }
    public function baoliao_add_save(){
       // P($_FILES);
        if($_FILES['path']['name']){
           $upload=new \Think\Upload();
           $arr= explode('/', $_FILES['path']['type']);
          // var_dump($arr);
          if($arr[0]=='image'){
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->uploadOne($_FILES['path']);
              // var_dump($reArr);exit;
                 
          }else{
              $upload->maxSize   =     524288000 ;// 设置附件上传大小
                $upload->exts      =     array('mp4','swf','avi','rmvb','rm','wmv','flv','webm','ogg');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/video/';
                 $upload->replace   = true;
                 $reArr=$upload->uploadOne($_FILES['path']);
          }
         // var_dump($reArr);exit;
          $path="Uploads/".$reArr['savepath'].$reArr['savename'];
          
        }else{
           if(I('id')){
         $path=M('weixin_baoliao')->where(array('id'=>I('id')))->getField('path');
           }else{
            $path='';
           }
          
        }
        if(I('id')){
  $date=array(
          'title'=>I('title'),'type'=>I('type'),'content'=>I('content'),'path'=>$path,'status'=>'0','dele'=>'2'
          );
        M('weixin_baoliao')->where(array('id'=>I('id')))->save($date);
        }else{
            $date=array(
          'title'=>I('title'),'type'=>I('type'),'content'=>I('content'),'path'=>$path,'userid'=>$_SESSION['uid'],'wid'=>$_SESSION['wid'],'addtime'=>time()
          );
        M('weixin_baoliao')->add($date);
        }
      
        redirect(I('p'));
    }
    public function baoming_save(){
        $date=array(
          'wid'=>$_SESSION['wid'],
         'aid'=>I('nid'),
         'name'=>I('name'),
         
         'tel'=>I('tel'),
        
         'content'=>I('content'),
        
         'addtime'=>time()
          );
        $re=M('weixin_activity_baoming')->add($date);
           foreach ($_POST['pic'] as $key => $value) {
          $data=array(
             'showpic'=>$_POST['showpic'][$key],
            'pic'=>$value,
            'aid'=>$re,
            'wid'=>$_SESSION['wid']
            );
          M('weixin_activity_pic')->add($data);
         }
         redirect($_SERVER['HTTP_REFERER']);
    }
    public function write_save(){
       $content=I('content');
         $content=str_replace('../../../../','http://'.$_SERVER['HTTP_HOST'].'/', $content);
        $word=M('weixin_word')->where(array('userid'=>$_SESSION['uid']))->select();
       // var_dump($word);exit;
        $arr=array();
        foreach ($word as $key => $value) {
         array_push($arr,$value['word']);
        }
        $content=str_replace($arr,'**',$content);
      if(I('id')){
          $date=array(
          'type'=>I('type'),
          'content'=>$content
          );
         M('weixin_release')->where(array('id'=>I('id')))->save($date);

          foreach ($_POST['pic'] as $key => $value) {
            $re=M('weixin_release_pic')->where(array('pic'=>$value))->find();
            if(!$re){
              $data=array(
            'showpic'=>$_POST['showpic'][$key],
            'pic'=>$value,
            'aid'=>I('id'),
            'wid'=>$_SESSION['wid']
            );
          M('weixin_release_pic')->add($data);
            }
          
         }

  redirect(U('new_release',array('nid'=>I('id'))));
      }else{
        
        $date=array(
          'type'=>I('type'),
          'content'=>$content,'userid'=>$_SESSION['uid'],'addtime'=>time(),'wid'=>$_SESSION['wid']
          );
        $re=M('weixin_release')->add($date);
         foreach ($_POST['pic'] as $key => $value) {
          $data=array(
             'showpic'=>$_POST['showpic'][$key],
            'pic'=>$value,
            'aid'=>$re,
            'wid'=>$_SESSION['wid']
            );
          M('weixin_release_pic')->add($data);
         }
        redirect(I('p'));
      }
   
    }
    public function new_video_detial(){
      $this->man=M('weixin_man')->where(array('id'=>$_SESSION['wid']))->find();
      if(I('type')=='show'){
         $this->video=M('weixin_show')->where(array('id'=>I('nid')))->find();
         $this->title=M('weixin_show_column')->where(array('id'=>$this->video['pid']))->getField('title');
       }elseif(I('type')=='broadcast'){

         $this->video=M('weixin_broadcast')->where(array('id'=>I('nid')))->find();
         $this->title=M('weixin_broadcast_column')->where(array('id'=>$this->video['pid']))->getField('title');
       }
     
      $this->display();
    }

    public function new_tv(){
      $this->column=M('weixin_show_column')->where(array('userid'=>$_SESSION['uid']))->order('ordera desc')->select();
      if(I('vid')){
         $where=array('userid'=>$_SESSION['uid'],'pid'=>I('vid'));
      }else{
        $where=array('userid'=>$_SESSION['uid']);
      }
      
      
      $this->video=M('weixin_show')->where($where)->order('ordera desc')->select();
      $this->display();
    }
      public function medicine_column(){
      if(I('vid')){
         $where=array('userid'=>$_SESSION['uid'],'pid'=>I('vid'));
      }else{
        $where=array('userid'=>$_SESSION['uid']);
      }
      $this->column=M('weixin_medicine_column')->where($where)->select();
      //var_dump($this->column);exit;
      $this->video=M('weixin_medicine')->where($where)->select();
      $this->display();
    }
     public function video_detial(){
       $this->video=M('weixin_video')->where(array('id'=>I('id')))->find();
      $this->display();
    }
    public function new_gengduo(){
      $this->geng=M('weixin_easy_column')->where(array('userid'=>$_SESSION['uid']))->select();

      $this->display();
    }
   public function weixin_login(){
     $url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=APPID&redirect_uri=REDIRECT_URI&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect";
     
   }

   public function today_sign(){
      if (!IS_AJAX) {
           E('页面不存在！');
        } 
        
       
          $re=M("weixin_sign")->where(array('userid'=>$_SESSION['uid'],'day'=>date('Y-m-d',time()),'wid'=>$_SESSION['wid']))->find();
          if($re){
            $this->ajaxReturn('yi');
          }else{
            $re=M("weixin_sign")->where(array('userid'=>$_SESSION['uid'],'wid'=>$_SESSION['wid']))->order("id desc")->limit("1")->select();

             $date=array(
             
           'userid'=>$_SESSION['uid'],
           'jointime'=>time(),
            'day'=>date('Y-m-d',time()),
           'wid'=>$_SESSION['wid'] 
            );
            $day=(time()-strtotime($re[0]['day']))/60/60/24;
             if( $day<2){
              $date['order']=$re[0]['order']+1;
             }else{
              $date['order']=1;
             }
           M('weixin_sign')->add($date);
           $this->ajaxReturn($date['order']); 
          }
         
        
       /* $date=array(
           'day'=>I('day'),
           'userid'=>$_SESSION['uid'],
           'jointime'=>time()
          );
        M('weixin_sign')->add($date);*/
   }
   public function shoucang()
   {
        if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
        $re=M('weixin_article_message')->where(array('wid'=>I('wid'),'aid'=>I('aid'),'type'=>3))->find();
            if(I('status')==1)
            {
                if($re){
                  M('weixin_article_message')->where(array('wid'=>I('wid'),'aid'=>I('aid'),'type'=>3))->setfield('xin',1);
                  
                }else{
                   $date=array(
                'aid'=>I('aid'),
                'wid'=>I('wid'),
                'type'=>3,
                'xin'=>1
                );
               M('weixin_article_message')->add($date);

                }
               $this->ajaxReturn('1');
            }elseif(I('status')=='2'){
               M('weixin_article_message')->where(array('wid'=>I('wid'),'aid'=>I('aid'),'type'=>3))->setfield('xin',2);
              $this->ajaxReturn('2');
            }
   }
    public function shoucang1()
   {
        if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
        $re=M('weixin_release_message')->where(array('wid'=>I('wid'),'aid'=>I('aid'),'type'=>3))->find();
            if(I('status')==1)
            {
                if($re){
                  M('weixin_release_message')->where(array('wid'=>I('wid'),'aid'=>I('aid'),'type'=>3))->setfield('xin',1);
                  
                }else{
                   $date=array(
                'aid'=>I('aid'),
                'wid'=>I('wid'),
                'type'=>3,
                'xin'=>1
                );
               M('weixin_release_message')->add($date);

                }
               $this->ajaxReturn('1');
            }elseif(I('status')=='2'){
               M('weixin_release_message')->where(array('wid'=>I('wid'),'aid'=>I('aid'),'type'=>3))->setfield('xin',2);
              $this->ajaxReturn('2');
            }
   }

   public function zan()
   {
        if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
        $re=M('weixin_article_message')->where(array('wid'=>I('wid'),'aid'=>I('aid'),'type'=>2))->find();
            if(I('status')==1)
            {
                if($re){
                  M('weixin_article_message')->where(array('wid'=>I('wid'),'aid'=>I('aid'),'type'=>2))->setfield('like',1);
                  
                }else{
                   $date=array(
                'aid'=>I('aid'),
                'wid'=>I('wid'),
                'type'=>2,
                'like'=>1
                );
               M('weixin_article_message')->add($date);

                }
               $this->ajaxReturn('1');
            }elseif(I('status')=='2'){
               M('weixin_article_message')->where(array('wid'=>I('wid'),'aid'=>I('aid'),'type'=>2))->setfield('like',2);
              $this->ajaxReturn('2');
            }
   }
   public function video_zan()
   {
        if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
        $re=M('weixin_video_message')->where(array('wid'=>I('wid'),'aid'=>I('aid'),'type'=>2))->find();
            if(I('status')==1)
            {
                if($re){
                  M('weixin_video_message')->where(array('wid'=>I('wid'),'aid'=>I('aid'),'type'=>2))->setfield('like',1);
                  
                }else{
                   $date=array(
                'aid'=>I('aid'),
                'wid'=>I('wid'),
                'type'=>2,
                'like'=>1
                );
               M('weixin_video_message')->add($date);

                }
               $this->ajaxReturn('1');
            }elseif(I('status')=='2'){
               M('weixin_video_message')->where(array('wid'=>I('wid'),'aid'=>I('aid'),'type'=>2))->setfield('like',2);
              $this->ajaxReturn('2');
            }
   }
     public function zan1()
   {
        if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
        $re=M('weixin_release_message')->where(array('wid'=>I('wid'),'aid'=>I('aid'),'type'=>2))->find();
            if(I('status')==1)
            {
                if($re){
                  M('weixin_release_message')->where(array('wid'=>I('wid'),'aid'=>I('aid'),'type'=>2))->setfield('like',1);
                  
                }else{
                   $date=array(
                'aid'=>I('aid'),
                'wid'=>I('wid'),
                'type'=>2,
                'like'=>1
                );
               M('weixin_release_message')->add($date);

                }
               $this->ajaxReturn('1');
            }elseif(I('status')=='2'){
               M('weixin_release_message')->where(array('wid'=>I('wid'),'aid'=>I('aid'),'type'=>2))->setfield('like',2);
              $this->ajaxReturn('2');
            }
   }

      public function liuyan()
   {
        if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
        
                $word=M('weixin_word')->where(array('userid'=>$_SESSION['uid']))->select();
       // var_dump($word);exit;
        $arr=array();
        foreach ($word as $key => $value) {
         array_push($arr,$value['word']);
        }
        $content=str_replace($arr,'**',I('content'));
                   $date=array(
                'aid'=>I('aid'),
                'wid'=>I('wid'),
                'type'=>1,
                'content'=>$content,
                'addtime'=>time()
                );
              $re= M('weixin_article_message')->add($date);
               $aid=M('weixin_article')->where(array('id'=>I('aid')))->getField('wid');
               if($aid>0){
                $a="<a href='new_news_detial?nid=".I('aid')."' style='color:#333'>";
               $name=M('weixin_mydata')->where(array('wid'=>I('wid')))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>I('wid')))->getfield('nickname'):M('weixin_man')->where(array('id'=>I('wid')))->getfield('nickname');
              $data=array(
                'wid'=>I('wid'),
                'aid'=>$aid,
                'addtime'=>time(),
                'type'=>2,
                'title'=>'系统消息',
                'content'=>$a."<span style='color: #4876FF'>".$name.'</span>回复了您</a>',
                'view'=>0
                );
              M('weixin_my_notice')->add($data);
               }
              
               $this->ajaxReturn($re);
         
   }
     public function video_liuyan()
   {
        if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
        
                $word=M('weixin_word')->where(array('userid'=>$_SESSION['uid']))->select();
       // var_dump($word);exit;
        $arr=array();
        foreach ($word as $key => $value) {
         array_push($arr,$value['word']);
        }
        $content=str_replace($arr,'**',I('content'));
                   $date=array(
                'aid'=>I('aid'),
                'wid'=>I('wid'),
                'type'=>1,
                'content'=>$content,
                'addtime'=>time()
                );
              $re= M('weixin_video_message')->add($date);
             
              
               $this->ajaxReturn($re);
         
   }
     public function liuyan1()
   {
        if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
        
              $content=str_replace('../../../../../../','http://'.$_SERVER['HTTP_HOST'].'/', I('content'));
               $word=M('weixin_word')->where(array('userid'=>$_SESSION['uid']))->select();
       // var_dump($word);exit;
        $arr=array();
        foreach ($word as $key => $value) {
         array_push($arr,$value['word']);
        }
        $content=str_replace($arr,'**',$content);
                   $date=array(
                'aid'=>I('aid'),
                'wid'=>I('wid'),
                'type'=>1,
                'content'=>$content,
                'addtime'=>time()
                );
              $re= M('weixin_release_message')->add($date);
              $aid=M('weixin_release')->where(array('id'=>I('aid')))->getField('wid');
              $a="<a href='new_release?nid=".I('aid')."' style='color:#333'>";
               $name=M('weixin_mydata')->where(array('wid'=>I('wid')))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>I('wid')))->getfield('nickname'):M('weixin_man')->where(array('id'=>I('wid')))->getfield('nickname');
              $data=array(
                'wid'=>I('wid'),
                'aid'=>$aid,
                'addtime'=>time(),
                'type'=>2,
                'title'=>'系统消息',
                'content'=>$a."<span style='color: #4876FF'>".$name.'</span>回复了您</a>',
                'view'=>0
                );
              M('weixin_my_notice')->add($data);
               $this->ajaxReturn($re);
         
   }
    public function huifu()
   {
        if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
        
                $word=M('weixin_word')->where(array('userid'=>$_SESSION['uid']))->select();
       // var_dump($word);exit;
        $arr=array();
        foreach ($word as $key => $value) {
         array_push($arr,$value['word']);
        }
        $content=str_replace($arr,'**',I('content'));
                   $date=array(
                'aid'=>I('aid'),
                'wid'=>I('wid'),
                'rwid'=>I('rwid'),
                'type'=>1,
                'content'=>$content,
                'addtime'=>time()
                );
              $re= M('weixin_article_message')->add($date);
               $aid=M('weixin_article_message')->where(array('id'=>I('rwid')))->getField('wid');
              $a="<a href='new_news_detial?nid=".I('aid')."' style='color:#333'>";
               $name=M('weixin_mydata')->where(array('wid'=>I('wid')))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>I('wid')))->getfield('nickname'):M('weixin_man')->where(array('id'=>I('wid')))->getfield('nickname');
                 $data=array(
                'wid'=>I('wid'),
                'aid'=>$aid,
                'addtime'=>time(),
                'type'=>2,
                'title'=>'系统消息',
                'content'=>$a."<span style='color: #4876FF'>".$name.'</span>回复了您</a>',
                'view'=>0
                );
              M('weixin_my_notice')->add($data);
              
               $this->ajaxReturn($re);
         
   }
    public function video_huifu()
   {
        if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
        
                $word=M('weixin_word')->where(array('userid'=>$_SESSION['uid']))->select();
       // var_dump($word);exit;
        $arr=array();
        foreach ($word as $key => $value) {
         array_push($arr,$value['word']);
        }
        $content=str_replace($arr,'**',I('content'));
                   $date=array(
                'aid'=>I('aid'),
                'wid'=>I('wid'),
                'rwid'=>I('rwid'),
                'type'=>1,
                'content'=>$content,
                'addtime'=>time()
                );
              $re= M('weixin_video_message')->add($date);
               $aid=M('weixin_video_message')->where(array('id'=>I('rwid')))->getField('wid');
              $a="<a href='new_video_end?nid=".I('aid')."' style='color:#333'>";
               $name=M('weixin_mydata')->where(array('wid'=>I('wid')))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>I('wid')))->getfield('nickname'):M('weixin_man')->where(array('id'=>I('wid')))->getfield('nickname');
                 $data=array(
                'wid'=>I('wid'),
                'aid'=>$aid,
                'addtime'=>time(),
                'type'=>2,
                'title'=>'系统消息',
                'content'=>$a."<span style='color: #4876FF'>".$name.'</span>回复了您</a>',
                'view'=>0
                );
              M('weixin_my_notice')->add($data);
              
               $this->ajaxReturn($re);
         
   }
       public function huifu1()
   {
        if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
        
              $content=str_replace('../../../../../../','http://'.$_SERVER['HTTP_HOST'].'/', I('content'));
               $word=M('weixin_word')->where(array('userid'=>$_SESSION['uid']))->select();
       // var_dump($word);exit;
        $arr=array();
        foreach ($word as $key => $value) {
         array_push($arr,$value['word']);
        }
        $content=str_replace($arr,'**',$content);
                   $date=array(
                'aid'=>I('aid'),
                'wid'=>I('wid'),
                'rwid'=>I('rwid'),
                'type'=>1,
                'content'=>$content,
                'addtime'=>time()
                );
                    $re= M('weixin_release_message')->add($date);
                   $aid=M('weixin_release_message')->where(array('id'=>I('rwid')))->getField('wid');
              $a="<a href='new_release?nid=".I('aid')."' style='color:#333'>";
               $name=M('weixin_mydata')->where(array('wid'=>I('wid')))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>I('wid')))->getfield('nickname'):M('weixin_man')->where(array('id'=>I('wid')))->getfield('nickname');
                 $data=array(
                'wid'=>I('wid'),
                'aid'=>$aid,
                'addtime'=>time(),
                'type'=>2,
                'title'=>'系统消息',
                'content'=>$a."<span style='color: #4876FF'>".$name.'</span>回复了您</a>',
                'view'=>0
                );
              M('weixin_my_notice')->add($data);
                  
             
              
               $this->ajaxReturn($re);
         
   }

public function ajax_upload()
{
  if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
      $count=count($_FILES['uploadfile']['name']);
      $count+=I('num');
       if($count<10){

                $upload=new \Think\Upload();
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                $image = new \Think\Image();
              foreach ($reArr as $key => $value) {
                 $image->open('./Uploads/'.$value['savepath'].$value['savename']); 
               $image->thumb(400,270)->save('./Uploads/'.$value['savepath'].time().'+'.$value['savename']);
                $reArr[$key]['showimg']=$value['savepath'].time().'+'.$value['savename'];
              }
               
          // p($reArr);
         echo json_encode($reArr);
              }else{
                echo "2";
              }

   
}
public function activity_ajax_upload()
{
  if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
      $count=count($_FILES['uploadfile']['name']);
      $count+=I('num');
       if($count<4){

                $upload=new \Think\Upload();
                $upload->maxSize   =     10000000 ;// 设置附件上传大小
                $upload->exts      =     array('gif','jpg','jpeg','png');// 设置附件上传类型
                $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      'weixin/images/';
               
                 $upload->replace   = true;
                //保存
                $reArr=$upload->upload();
                $image = new \Think\Image();
              foreach ($reArr as $key => $value) {
                 $image->open('./Uploads/'.$value['savepath'].$value['savename']); 
               $image->thumb(400,270)->save('./Uploads/'.$value['savepath'].time().'+'.$value['savename']);
                $reArr[$key]['showimg']=$value['savepath'].time().'+'.$value['savename'];
              }
               
          // p($reArr);
         echo json_encode($reArr);
              }else{
                echo "2";
              }

   
}
    

public function attention_status(){
   if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
      if(I('quxiao')){

        M('weixin_attention')->where(array('wid'=>I('wid'),'aid'=>I('aid')))->delete();
        $this->ajaxReturn(I('quxiao'));
      }elseif(I('guanzhu')){

             $date=array(
              'wid'=>I('wid'),
              'aid'=>I('aid'),
              'addtime'=>time()
              );
             M('weixin_attention')->add($date);
             $a="<a href='new_zone?wid=".I('wid')."'>";
            $name=M('weixin_mydata')->where(array('wid'=>I('wid')))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>I('wid')))->getfield('nickname'):M('weixin_man')->where(array('id'=>I('wid')))->getfield('nickname');
             $data=array(
              'wid'=>I('wid'),
              'aid'=>I('aid'),
              'addtime'=>time(),
              'content'=>$a."<span style='color: #4876FF'>".$name."</span></a>关注了你.",
              'type'=>2,
              'title'=>'系统消息',
              'view'=>0
              );
             M('weixin_my_notice')->add($data);
           $this->ajaxReturn(I('guanzhu'));

      }else{
        $re=M('weixin_attention')->where(array('wid'=>I('wid'),'aid'=>I('aid')))->find();
         if($re){
          $re=M('weixin_attention')->where(array('wid'=>I('wid'),'aid'=>I('aid')))->delete();
 $this->ajaxReturn('1');
         }else{
            $date=array(
              'wid'=>I('wid'),
              'aid'=>I('aid'),
              'addtime'=>time()
              );
             $re=M('weixin_attention')->add($date);
              $this->ajaxReturn('2');
         }
        
      }


}
public function attention_status1(){
   if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
     
       $re= M('weixin_attention')->where(array('wid'=>I('wid'),'aid'=>I('aid')))->find();
        if($re){
          M('weixin_attention')->where(array('wid'=>I('wid'),'aid'=>I('aid')))->delete();
           $this->ajaxReturn('1');
        
      }else{
             $date=array(
              'wid'=>I('wid'),
              'aid'=>I('aid'),
              'addtime'=>time()
              );
             M('weixin_attention')->add($date);

              $a="<a href='new_zone?wid=".I('wid')."'>";
            $name=M('weixin_mydata')->where(array('wid'=>I('wid')))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>I('wid')))->getfield('nickname'):M('weixin_man')->where(array('id'=>I('wid')))->getfield('nickname');
             $data=array(
              'wid'=>I('wid'),
              'aid'=>I('aid'),
              'addtime'=>time(),
              'content'=>$a."<span style='color: #4876FF'>".$name."</span></a>关注了你.",
              'type'=>2,
              'title'=>'系统消息',
              'view'=>0
              );
             M('weixin_my_notice')->add($data);
           $this->ajaxReturn('2');
      }

}
public function ajaxdeleteimg(){
   if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
        $re=M('weixin_release_pic')->where(array('id'=>I('id')))->find();
        @unlink('./'.$re['pic']);
        $re1= M('weixin_release_pic')->where(array('id'=>I('id')))->delete();
        if($re1){
          $this->ajaxReturn(1);
        }
}
public function change_view(){
   if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
        $re=M('weixin_my_notice')->where(array('id'=>I('id')))->setfield('view',1);
        if($re){
          echo '1';
        }
       
}

public function notice_delete(){
   if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
        $re=M('weixin_my_notice')->where(array('id'=>I('id')))->delete();
        if($re){
          echo '1';
        }
       
}
public function activity_toupiao(){
   if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
        $re=M('weixin_activity_message')->where(array('wid'=>I('wid'),'aid'=>I('aid')))->find();
        if($re){
        echo '2';
        }else{
           $date=array(
       'wid'=>I('wid'),
       'aid'=>I('id'),
       'addtime'=>time()
        );
       
       $re=M('weixin_activity_message')->add($date);
        if($re){
          $order=M('weixin_activity_baoming')->where(array('id'=>I('id')))->getField('piao');
          M('weixin_activity_baoming')->where(array('id'=>I('id')))->setfield('piao',$order+1);
          echo '1';
        }
        }
      
       
}
public function change(){
if (!IS_AJAX) 
        {
               E('页面不存在！');
        } 
     $wid1=I('wid1');
     $wid2=I('wid2');
     $arr1=array($wid1,$wid2,$_SESSION['wid']);

    $pic=M('weixin_release_pic')->where(array('wid'=>array('not in',$arr1)))->group('wid')->select();
         $arr=array();
         foreach ($pic as $key => $value) {
          $re=M('weixin_release_pic')->where(array('wid'=>$value['wid']))->count();
           if($re>2){
              array_push($arr,$value['wid']);
           }
         }
         $count=count($arr);
       $rand1=rand(0,$count-1);
       $rand2=rand(0,$count-1);
       if($rand2==$rand1 and $rand1+1>$count ){
          $rand2=$rand1-1;
       }elseif($rand2==$rand1 and $rand1-1>0 ){
        $rand2=$rand1+1;
       }elseif($rand2==$rand1){
           $rand2=$rand1+1;
       }
      $arr=array($arr[$rand1],$arr[$rand2]); 
      $re=M('weixin_release_pic')->where(array('wid'=>array('in',$arr)))->group('wid')->select();
      $re3=array();
      $re3['wid']=array($re[0]['wid'],$re[1]['wid']);
      $re3['src']=array(M('weixin_man')->where(array('id'=>$re[0]['wid']))->getfield('headimgurl'),M('weixin_man')->where(array('id'=>$re[1]['wid']))->getfield('headimgurl'));
      $re3['nickname']=array(M('weixin_mydata')->where(array('wid'=>$re[0]['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$re[0]['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$re[0]['wid']))->getfield('nickname'),M('weixin_mydata')->where(array('wid'=>$re[1]['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$re[1]['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$re[1]['wid']))->getfield('nickname'));
      $re3['sign']=array( M('weixin_mydata')->where(array('wid'=>$re[0]['wid']))->getfield('sign')?M('weixin_mydata')->where(array('wid'=>$re[0]['wid']))->getfield('sign'):'暂无签名', M('weixin_mydata')->where(array('wid'=>$re[1]['wid']))->getfield('sign')?M('weixin_mydata')->where(array('wid'=>$re[1]['wid']))->getfield('sign'):'暂无签名');
      $re3['img']=array(M('weixin_release_pic')->where(array('wid'=>$re[0]['wid']))->limit('3')->select(),M('weixin_release_pic')->where(array('wid'=>$re[1]['wid']))->limit('3')->select());
      $this->ajaxReturn($re3);
}

public function release_jubao(){
  $content=I('content')=='  详细描述被举报人的恶意行为'?'':I('content');

        $date=array(
         'userid'=>$_SESSION['uid'],
         'wid'=>$_SESSION['wid'],
         'rid'=>I('rid'),
         'type'=>I('type'),
         'content'=>$content,
         'addtime'=>time()
          );
        $re=M('weixin_release_jubao')->add($date);
       redirect(U('new_release',array('nid'=>I('rid'),'id'=>$_SESSION['uid'])));
       
}




























}
