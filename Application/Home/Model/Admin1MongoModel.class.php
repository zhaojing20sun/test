<?php
namespace Home\Model;
use Think\Model\MongoModel;

class Admin1MongoModel extends MongoModel{
    //使用下面这句话进行数据库的连接，其中的各个位置的含义，查看我的这篇文章
    protected $connection       =   'mongo://admin1:admin1@127.0.0.1:27017/admin';  //这里跟前一篇使用 MongoClient 连接 MongoDB 的格式一样，注意后面一定要是 admin
    protected $tableName        =   'runoob'; 
//在这里指定要操作的表
    protected $dbName           =   'test';
//这里指定数据库的名字
}
?>