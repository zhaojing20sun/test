<?php
 function p($arr) {
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
 function writelog($filename,$content)
    {
        $fileopen = fopen($filename,"a+");
        fwrite($fileopen,$content."\r\n");
        fclose($fileopen);
}
function writefile($filename,$content)
    {
        $fileopen = fopen($filename,"w+");
        fwrite($fileopen,$content);
        fclose($fileopen);
}
function gettoken($appid,$appsecret){
 
       
       
        $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;
          $gettoken=new \Com\Utils\HttpCurl();
         $token=$gettoken->get($url);
         $token=(array)json_decode($token);
         $token=$token['access_token'];
         return $token;
     
}


