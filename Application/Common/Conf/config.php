<?php
return array(
 //'DB_MYSQL' => array(
        'DB_TYPE'   => 'mysql', // 数据库类型
        'DB_HOST'   => '127.0.0.1', // 服务器地址
        'DB_NAME'   => 'weixin', // 数据库名
        'DB_USER'   => 'root', // 用户名
        'DB_PWD'    => '', // 密码
        'DB_PORT'   => 3306, // 端口
        'DB_PREFIX' => 'wx_', // 数据库表前缀 
        'DB_CHARSET'=> 'utf8', // 字符集
  //  ),
/* 'WEIXIN_APPID'     => 'wx93814b396c421448',
 'WEIXIN_APPSECRET' => '8e653152a09ff49645a0ca62f5bfa781',
 'SITEURL' =>'http://www.xkz123.cn',
 'ADMINUSER' => 'admin',
 'ADMINPWD'  => 'heng3378001',*/
 /* KX_DB_USER = 'daikuan';
 KX_DB_PWD  = 't7f4F3f3';*/
   
 'AUTO_LOGIN_TIME' => time() + 3600 * 24 * 7,    //一个星期

	'URL_MODEL' => '2',
    'URL_ROUTER_ON' => true, 
     'DEFAULT_MODULE' => 'Home' ,
    'MODULE_ALLOW_LIST' => array('Home','Admin','weixin'),
    'URL_ROUTE_RULES' => array(
    '/^Index$/i' => 'Index/index', // 首页
     '/^\w{2}\/product\/.*\/(\d+)$/' => array('Home/Product/index?product_id=:1'),
     '/en$/'=>'Home/index/index',
    ),
   
);