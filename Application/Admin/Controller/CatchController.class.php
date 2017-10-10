<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class CatchController extends Controller {
 
 public function catch_news(){
  $id=I('id');

      $news_url=get_news_url($id);
      $re=file_get_contents($news_url);
      $pattern = '/<div class="list-news-title">.*?href="(.*?)".*?>.*?<\/a>/s';  
      preg_match_all($pattern, $re,$matches);
      $news_url=$matches[1];
     foreach ($news_url as $key => $value) {
      	$url=$value;
      	$re1=file_get_contents($url);
      	$pattern1 = '/<div class="head_title">(.*?)<\/div>/s';
      	 preg_match_all($pattern1, $re1,$title);
      	 //var_dump($title[1]);exit;
       $pattern2 = '/<div class="head_detail">(.*?)<\/div>/s';
         preg_match($pattern2, $re1,$source);
         $pattern3 = '/<a (class="head_detail_u" .*?|target="_blank" class="head_detail_u" .*?|.*? class="head_detail_u")>(.*?)<\/a>/s';
         preg_match_all($pattern3, $source[0],$matches3); 
         //var_dump($matches2);exit;
           $content = '/<div class="article">(.*?)<\/div>/s';
         preg_match($content, $re1,$con);

         $img = '/<img.*? src="(.*?)" .*?>/s';
          $arr=array();
         preg_match_all($img,$con[0],$title1);
         
           foreach ($title1[1] as $key2 => $value2) {
           if(!strpos($value2, 'http')){
            //echo $value2;
            array_push($arr,$value2);

           }
       }
       
         $re5="";
          $all_url=strrpos($value,'/');
          $all_url=substr($value,0,$all_url+1);
    
    $count=count($arr);
     for ($i=0; $i < $count; $i++) { 
      //echo $arr[$i].'<br>';
     
     
      if($i>0){
        if(strrpos($arr[$i],'/')){
         $re5=str_replace($arr[$i], $all_url.substr($arr[$i],strrpos($arr[$i],'/')+1),$re5);
}else{
  $re5=str_replace($arr[$i], $all_url.$arr[$i],$re5);
}
      }else{
          if(strrpos($arr[$i],'/')){
         $re5=str_replace($arr[$i], $all_url.substr($arr[$i],strrpos($arr[$i],'/')+1),$con[0]);
         }else{
           $re5=str_replace($arr[$i], $all_url.$arr[$i], $con[0]);
         }
      }
 //var_dump($re5);
    }
       /*     if($arr){
       var_dump($arr);
        var_dump($re5);
        exit;
       }*/
       if($re5){
         $re5=$re5;
       }else{
        $re5=$con[0];
       }
      // var_dump($re5);exit;
      	 $date=array(
             'title'=>$title[1][0],
             'source'=>$matches3[2][0],
             'content'=>$re5,
             'addtime'=>time(),
             'pid'=>$id
      	 	);
         if($date['title']!=''){
           $re=M('weixin_catch_news')->where(array('title'=>$title[1][0]))->find();
         if(!$re){
           M('weixin_catch_news')->add($date);
         }
         }
      	
      	
      	
      }
redirect(U('weixin/article'));

}

 public function catch_news1(){
  $id=I('id');

      $news_url=get_news_url($id);
      $re=file_get_contents($news_url);
      $pattern = '/<div class="list-news-title">.*?href="(.*?)".*?>.*?<\/a>/s';  
      preg_match_all($pattern, $re,$matches);
      $news_url=$matches[1];
     foreach ($news_url as $key => $value) {
        $url=$value;
        $re1=file_get_contents($url);
        $pattern1 = '/<div class="head_title">(.*?)<\/div>/s';
         preg_match_all($pattern1, $re1,$title);
         //var_dump($title[1]);exit;
       $pattern2 = '/<div class="head_detail">(.*?)<\/div>/s';
         preg_match($pattern2, $re1,$source);
         $pattern3 = '/<a (class="head_detail_u" .*?|target="_blank" class="head_detail_u" .*?|.*? class="head_detail_u")>(.*?)<\/a>/s';
         preg_match_all($pattern3, $source[0],$matches3); 
         //var_dump($matches2);exit;
           $content = '/<div class="article">(.*?)<\/div>/s';
         preg_match($content, $re1,$con);

         $img = '/<img.*? src="(.*?)" .*?>/s';
          $arr=array();
         preg_match_all($img,$con[0],$title1);
         
           foreach ($title1[1] as $key2 => $value2) {
           if(!strpos($value2, 'http')){
            //echo $value2;
            array_push($arr,$value2);

           }
       }
       
         $re5="";
          $all_url=strrpos($value,'/');
          $all_url=substr($value,0,$all_url+1);
    
    $count=count($arr);
     for ($i=0; $i < $count; $i++) { 
      //echo $arr[$i].'<br>';
     
     
      if($i>0){
        if(strrpos($arr[$i],'/')){
         $re5=str_replace($arr[$i], $all_url.substr($arr[$i],strrpos($arr[$i],'/')+1),$re5);
}else{
  $re5=str_replace($arr[$i], $all_url.$arr[$i],$re5);
}
      }else{
          if(strrpos($arr[$i],'/')){
         $re5=str_replace($arr[$i], $all_url.substr($arr[$i],strrpos($arr[$i],'/')+1),$con[0]);
         }else{
           $re5=str_replace($arr[$i], $all_url.$arr[$i], $con[0]);
         }
      }
 //var_dump($re5);
    }
       /*     if($arr){
       var_dump($arr);
        var_dump($re5);
        exit;
       }*/
       if($re5){
         $re5=$re5;
       }else{
        $re5=$con[0];
       }
      // var_dump($re5);exit;
         $date=array(
             'title'=>$title[1][0],
             'source'=>$matches3[2][0],
             'content'=>$re5,
             'addtime'=>time(),
             'pid'=>$id
          );
            if($date['title']!=''){
           $re=M('weixin_catch_news')->where(array('title'=>$title[1][0]))->find();
         if(!$re){
           M('weixin_catch_news')->add($date);
         }
         }
        
      }


}









}
