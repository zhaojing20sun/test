<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
 use Think\Model\MongoModel;
class IndexController extends Controller {
  //public $column = new \Think\Model\MongoModel('column');      
  public function _initialize()  
    {  
      $admin = new \Think\Model\MongoModel('admin');
      $this->admin10=$admin->where(array("_id"=>$_SESSION['admin_id']))->find();
    }
   
  
     public function check_adminusername(){
        if (!IS_AJAX) {
           E('页面不存在！');
        } 
        $admin=new MongoModel('admin');
        $re=$admin->where(array('username'=>I('username')))->find();
        if($re){

         $this->ajaxReturn('1');
        }
     }

   


    public function checklogin()
    {
      if(!isset($_SESSION['admin_id'])||empty($_SESSION['admin_id']))
        {
            redirect(U('login'));
            //return false;
       }
    }

    public function index(){
      if(!isset($_SESSION['admin_id'])||empty($_SESSION['admin_id']))
         {
             redirect(U('login'));
         }
         else
         { 
          //$column = new \Think\Model\MongoModel('column');
          $column=new \Think\Model\MongoModel('column');
            $this->selected="59ce132ccf776a840300002b";
            $this->open="59cef70ccf776ac81100002a";
            $this->active="59cef732cf776ac81100002b";
            $this->selected_title=$column->where(array('_id' =>$this->selected))->getField('title');
            $this->open_title=$column->where(array('_id' => $this->open))->getField('title');
            $this->active_title=$column->where(array('_id' =>$this->active))->getField('title');
            $this->columnlist=column();
            //var_dump($this->selected_title);exit;
            $this->sencodcolumnlist=sencodcolumn($this->selected);
            //$this->sencodcolumnlist=sencodcolumn($this->selected);
        $this->display(); //显示页面 
      //  }          
    }

   }
    ////////////////////// 修改密码
    public function pwd(){
        $this->checklogin();//  判断是否登录 没有登录跳转到登录页面
            $this->getkeyword_id_name("index/pwd");//  根据keywor获取 一、二、三级栏目id和名称 并且显示一级 和二级栏目

            //$this->active=-1;
            //$this->open=-1;
            //$this->columnlist=column();
           // p($this->columnlist);
             $this->display();
        
    }
    //////后台栏目跳转函数///////
     public function column(){
          /////根据id值获取到跳转栏目的keyword/////////////
      $column=new MongoModel('column');
          $keyword=$column->where(array('_id' =>$_GET['_id']))->getField('keyword');
          redirect(U($keyword));
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
    





    //********************************后台管理员（）********************************//
      public function site_setedit(){
         $this->checklogin();//  判断是否登录 没有登录跳转到登录页面
            $this->getkeyword_id_name("index/site_set");//  根据keywor获取 一、二、三级栏目id和名称 并且显示一级 和二级栏目
           $where=array('id' =>"59d04765cf776aa811000029");
          $site_parameter=new MongoModel('site_parameter');
          $this->site_parameter=$site_parameter->where($where)->find();
           
        //   p($this->site_parameter);
           $this->display();
        
      }
     public function site_parametersaveedit(){
        //p($_POST);
         $data = array(
          'domain' =>I('domain'),
          'name' =>I('name'),
          'upload_type' =>I('upload_type'),
          'filesize' =>I('filesize'),
         
           'qq' =>I('qq'),
           'email' =>I('email'),
           'phone' =>I('phone'),
           'address' =>I('address'),
           'seo_title' =>I('seo_title'),
           'keyword' =>I('keyword'),
           'description' =>I('description'),
          
          );
         $m=new MongoModel('site_parameter');
            $m->where(array('_id' =>"59d04765cf776aa811000029"))->save($data);
         redirect(U('site_set'));
     }
     public function site_set(){
         $this->checklogin();//  判断是否登录 没有登录跳转到登录页面
            $this->getkeyword_id_name("index/site_set");//  根据keywor获取 一、二、三级栏目id和名称 并且显示一级 和二级栏目
         
          $where=array('_id' =>"59d04765cf776aa811000029");
          $site_parameter=new MongoModel('site_parameter');

          $this->site_parameter=$site_parameter->where($where)->find();
           //var_dump($this->site_parameter);exit;
        //   p($this->site_parameter);
           $this->display();
         
     }



      public function adminlist(){
        if(!isset($_SESSION['admin_id'])||empty($_SESSION['admin_id']))
         {
             redirect(U('login'));
         }
         else
         { 
           $this->selected="59ce132ccf776a840300002b";
           $this->open="59cef5eccf776ac811000029";
           $this->active="59cef66ecf776ad81100002d";
           $column=new MongoModel('column');
           $this->selected_title=$column->where(array('_id' =>$this->selected))->getField('title');
           $this->open_title=$column->where(array('_id' => $this->open))->getField('title');
           $this->active_title=$column->where(array('_id' =>$this->active))->getField('title');
           $this->columnlist=column();
           $this->sencodcolumnlist=sencodcolumn($this->selected);
             $where=array('permission'=>array('neq',null));
          
           if(isset($_GET['nickname'])&&$_GET['nickname']!="")
           {
               $where= array_merge($where,array('nickname'=>array('like',$_GET['nickname'])));
           }
          
           
          
           $admin=new MongoModel('admin');
           $count=$admin->where($where)->order($order)->count();
           $page = new \Think\Page($count, 20);
           $page->setConfig('theme', '%HEADER% 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
           $limit = $page->firstRow . ',' . $page->listRows;
           $nowPage = isset($_GET['p'])?$_GET['p']:1;
           $this->page = $page->show();
           $this->adminlist=$admin->where($where)->order("permission asc")->limit($limit)->select();
         //var_dump($admin->getLastSql());exit;
           //   p($this->adminlist);
           $this->display();
         }
      }
       public function adminadd(){
          if(!isset($_SESSION['admin_id'])||empty($_SESSION['admin_id']))
         {
             redirect(U('login'));
         }
         else
         { 
          $column=new MongoModel('column');
            $this->selected="59ce132ccf776a840300002b";
            $this->open="59cef5eccf776ac811000029";
            $this->active="59cef66ecf776ad81100002d";
            $this->selected_title=$column->where(array('_id' =>$this->selected))->getField('title');
            $this->open_title=$column->where(array('_id' => $this->open))->getField('title');
            $this->active_title=$column->where(array('_id' =>$this->active))->getField('title');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
            // $this->citylist=M("city")->order('displayorder DESC')->select();
            //$this->grouplist=M("admin_group")->where(array('admin_id' =>$_SESSION['admin_id']))->select();
            // p($this->columnlist);
            $this->display();
        }
       }
       public function adminedit(){
             if(!isset($_SESSION['admin_id'])||empty($_SESSION['admin_id']))
         {
             redirect(U('login'));
         }
         else
         { 
            $admin=new MongoModel('admin');
            $column=new MongoModel('column');
            $this->selected="59ce132ccf776a840300002b";
            $this->open="59cef5eccf776ac811000029";
            $this->active="59cef66ecf776ad81100002d";
            $this->selected_title=$column->where(array('_id' =>$this->selected))->getField('title');
            $this->open_title=$column->where(array('_id' => $this->open))->getField('title');
            $this->active_title=$column->where(array('_id' =>$this->active))->getField('title');
            $this->columnlist=column();
            $this->sencodcolumnlist=sencodcolumn($this->selected);
            
          
            $this->admin=$admin->where(array('_id' =>I('_id')))->find();
            //  p($this->admin);
            $this->display();
        }
       }
      public function adminsave(){
            //p($_POST);exit;
        //  p($_GET);
        $admin=new MongoModel('admin');
           $data = array(
                  'username' =>I('username'),
                  'password' =>md5(I('password')),
                  'nickname' =>I('nickname'),
                  'pid' =>$_SESSION['admin_id'],
                  'permission'=>I('permission'),
                  'power'=>array($_POST['power'][0],$_POST['power'][1],$_POST['power'][2],$_POST['power'][3],$_POST['power'][4]),
                  'addtime'=>time(),
                  'address'=>I('address')
                  );
           if(I('id')){
            $admin->where(array('_id'=>I('id')))->save($data);
           }else{
            $admin->add($data);
           }
          
           redirect(U('adminlist'));
      }
  
       public function admindelete(){
        $admin=new MongoModel('admin');
         $admin->where(array('_id' => I('_id')))->delete();
         //  M('admin_group')->where(array('admin_id' => I('admin_id')))->delete();
         redirect(U('adminlist'));
       }
     
      public function passwordsave(){
         $date=array(
           'password'=>md5(I('confirmpassword'))
          );
         $admin=new MongoModel('admin');
         $admin->where(array('_id'=>$_SESSION['admin_id']))->save($date);
         redirect(U('pwd'));
         
      }
   
     public function login(){
         $this->display();
     }
      public function out(){
           session_unset();
        session_destroy();

        //删除用于自动登录的COOKIE
        @setcookie('auto', '', time() - 3600, '/');
     // $this->display();
        //跳转致登录页
        redirect(U('Index/index'));
      }
     public function checkpassword(){
         if (!IS_AJAX) {
            E('页面不存在');
        }
        // $username = I('post.username','','htmlspecialchars');
        $pwd = md5(I('oldpassword'));
        $admin=new MongoModel('admin');
        $where = array('_id' => $_SESSION['admin_id']);
        $admin = $admin->where($where)->find();

        if ($admin['password'] != $pwd) {
           $this->ajaxReturn('2');
            //echo $pwd;
        }
        else {
            $this->ajaxReturn('1');
          //  echo $pwd;
        }
     }
     public function  runlogin(){
          if (!IS_POST) {
            E('页面不存在');
        }
          $username = I('username');
        $pwd = I('password');
        
        $where = array('username' => $username);
        $admin=new MongoModel('admin');
        $admin = $admin->where($where)->find();
        //var_dump($admin);exit;
          if (!$admin || $admin['password'] != md5($pwd)) {
            $this->error('用户名或者密码不正确');
            //echo $pwd;
        }
        else {
          $date=array(
          'last_time'=>time()
            );

             session('admin_id', $admin['_id']);
             $admin->where(array('_id'=>$_SESSION['admin_id']))->save($date);
            redirect(U('index'));
          //  echo $pwd;
        }
     }
       public function verify () {
        $config =    array(
          'fontSize'    =>    30,    // 验证码字体大小
          'length'      =>    4,     // 验证码位数
           'useNoise'    =>    false, // 关闭验证码杂点
       );
        $verify=new \Think\Verify($config);
        $verify->entry();
    }
     public function admindeleteajax(){
        if (!IS_AJAX) {
           E('页面不存在！');
        } 
    $admin=new MongoModel('admin');
         foreach ($_POST['id']  as $key => $value) {
           $admin->where(array('_id' =>$value))->delete();
        }
     }
    public function checkverify () {
        if (!IS_AJAX) {
            E('页面不存在');
        }
        $verify = new \Think\Verify();

        $verify->reset = false;
        if (!$verify->check($_POST['verify'])) {
            echo 'false';
        } else {
             $username = I('username');
             $pwd = md5(I('password'));

             $admin=new MongoModel('admin');
             $where = array('username' => $username);
             $admin = $admin->where($where)->find();
  //var_dump($admin);exit;
            if (!$admin || $admin['password'] != $pwd) {
                echo '0';
            //echo $pwd;
             }
             else {
                  session('admin_id', $admin['_id']);
                echo '1';
          //  echo $pwd;
             }
        }//*/
        //echo $verify->check($_POST['verify']);
    }
     public function checkaccount () {
        if (!IS_AJAX) {
           E('页面不存在！');
        }   
        $username = I('post.username','','htmlspecialchars');
        $pwd = I('post.password', '','md5');
        
        $where = array('username' => $username);
        $admin = $admin->where($where)->find();

        if (!$admin || $admin['password'] != $pwd) {
            echo 'false';
            //echo $pwd;
        }
        else {
            echo 'true';
          //  echo $pwd;
        }

    }

}