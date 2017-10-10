<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
 use Think\Model\MongoModel;
class StoreController extends Controller {
  //public $column = new \Think\Model\MongoModel('column');      
  public function _initialize()  
    {  
      $this->checklogin();
      $admin = new MongoModel('admin');
      $this->admin10=$admin->where(array("_id"=>$_SESSION['admin_id']))->find();
    }
    public function getkeyword_id_name($keyword){
            // echo  $this->keyword=$keyword;
      //////////获取三级栏目id 和名称/////////
      $column_db=new MongoModel('column');
             $column=$column_db->where(array('keyword' =>$keyword,'pid'=>array('neq',0)))->find();
            //  var_dump($column);exit;
      //echo   $column_db->getLastSql();
              $this->active=$column['_id'];
              $this->active_title=$column['title'];
             
            if(!$column)
            {
               $column=$column_db->where(array('keyword' =>$keyword))->find();
               $this->selected=$column['_id'];
                $this->selected_title=$column['title'];
            }
             if($column['pid']!=0)
             {
               //////////获取二级栏目id 和名称/////////
                $pcolumn=$column_db->where(array('_id' =>$column['pid']))->find();
               // p($pcolumn);
                 $this->open=$pcolumn['_id'];
                $this->open_title=$pcolumn['title'];
             }

             if($pcolumn['pid']!=0)
             {
              //////////获取一级栏目id 和名称/////////
                  $ppcolumn=$column_db->where(array('_id' =>$pcolumn['pid']))->find();
                   $this->selected=$ppcolumn['_id'];
                $this->selected_title=$ppcolumn['title'];
             }

             $this->columnlist=column();/////////获取一级栏目

             $this->sencodcolumnlist=sencodcolumn($this->selected);////////获取二级栏目
//var_dump($this->sencodcolumnlist);exit;
     }
     public function column(){
          /////根据id值获取到跳转栏目的keyword/////////////
      $column=new MongoModel('column');
          $keyword=$column->where(array('_id' =>$_GET['_id']))->getField('keyword');
          redirect(U($keyword));
     }
   public function checklogin()
    {
      if(!isset($_SESSION['admin_id'])||empty($_SESSION['admin_id']))
        {
            redirect(U('index/login'));
            //return false;
       }
    }
    public function index(){
            $store = new MongoModel('store');
            $this->getkeyword_id_name("store/index");
           $this->store=$store->where(array('_id'=>'59d100e764fa883c1300002a'))->find();
           //var_dump($this->store['yiji']);exit();
            $this->display();
    }

    public function index_save(){
     //p($_POST['level1']);exit;
        $date=array(
       'yiji'=>I('yiji'),
       'level1'=>I('level1'),
       
       'level2'=>I('level2'),
          );
        $store=new MongoModel('store');
        $store->where(array('_id'=>I('id')))->save($date);
        redirect(U('index'));
    }
    //代理商列表（看区域代理），仅超级管理员能看
    public function agency_list(){
  $this->getkeyword_id_name("agency/agency_list");
   $admin=new MongoModel('admin');
     
             $where=array('permission'=>'1');
          
           if(isset($_GET['nickname'])&&$_GET['nickname']!="")
           {
               $where= array_merge($where,array('nickname'=>array('like',$_GET['nickname'])));
           }
           $count=$admin->where($where)->order($order)->count();
           $page = new \Think\Page($count, 20);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->adminlist=$admin->where($where)->order("addtime desc")->limit($limit)->select();
      $this->display();
    }
 public function xiaji(){
            $admin=new MongoModel('admin');
            $this->getkeyword_id_name("agency/xiaji");

             $admin10=$admin->where(array("_id"=>$_SESSION['admin_id']))->find();
             $where=array('pid'=>$admin10['_id']);
          
           if(isset($_GET['nickname'])&&$_GET['nickname']!="")
           {
               $where= array_merge($where,array('nickname'=>array('like',$_GET['nickname'])));
           }
           $count=$admin->where($where)->order($order)->count();
           $page = new \Think\Page($count, 20);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->adminlist=$admin->where($where)->order("level desc")->limit($limit)->select();
            $this->display();
    }
  
  public function money_list(){
            $log = new MongoModel('log');
            $admin=new MongoModel('admin');
               $this->getkeyword_id_name("agency/money_list");
            $pid=$admin->where(array('_id'=>$_SESSION['admin_id']))->getField('pid');
            //总代理看的业绩明细
            if($pid){
            
          
         }else{
          //其他代理看的业绩明细
            $where=array('aaid'=>$_SESSION['admin_id']);
             $count=$log->where($where)->order($order)->count();
           $page = new \Think\Page($count, 20);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->log=$log->where($where)->order("addtime desc")->limit($limit)->select();
         }
           
            $this->display();
  }
























}