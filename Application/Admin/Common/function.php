<?php


 function sencodcolumn($selected){
  $column = new \Think\Model\MongoModel('column');
   $sencodcolumnlist=$column->where(array('pid' =>$selected))->order('sort_order asc')->select();
     // $group_id=getgroupid($_SESSION['admin_id']);
       /* if($group_id==0)
        {

          $sencodcolumnlist=$column->where(array('pid' =>$selected))->order('sort_order asc')->select();
          //echo $column->getLastSql();
        }
        else
        {
           $admin_auth=M("admin_auth")->where(array('group_id' =>$group_id,'rootid' =>$selected))->field(' distinct(pid) as pid ')->select();
            $str="";
           foreach ($admin_auth as $key => $value) {
             if($key==0)
             {
               $str=$value['pid'];
             }
             else
             {
               $str=$str.','.$value['pid'];
             }
           }*/
            //$sencodcolumnlist=$column->where(array('column_id in ('.$str.')'))->order('sort_order asc')->select();

      //  }
   return $sencodcolumnlist;
  }
   function column(){
     $column = new \Think\Model\MongoModel('column');
     $columnlist=$column->where(array('pid' =>0))->order('sort_order asc')->select();
       /*   $group_id=getgroupid($_SESSION['admin_id']);
          // p($group_id);die;
        if($group_id==0)
        {
            $columnlist=$column->where(array('pid' =>0))->order('column_id asc')->select();
        }
        else
        {
           $admin_auth=M("admin_auth")->where(array('group_id' =>$group_id))->field(' distinct(rootid) as rootid ')->select();
           // p($admin_auth);die;
           $str="";
           foreach ($admin_auth as $key => $value) {
             if($key==0)
             {
               $str=$value['rootid'];
             }
             else
             {
               $str=$str.','.$value['rootid'];
             }
           }
         
           $columnlist= $column->where(array('column_id in ('.$str.')'))->order('column_id asc')->select();; 

        }*/
       
      
        return $columnlist;
     }
   /*function getgroupid($admin_id){
    $group_id=M('admin')->where(array('admin_id' => $admin_id))->getField('group_id');
    return $group_id;
   }*/

   function get_news_url($id){
        switch ($id) {
          case '1':
          return "http://www.ha.xinhuanet.com/opinion/index.htm";
            break;
             case '2':
          return "http://www.ha.xinhuanet.com/news/index.htm";
            break;
          
        }
   }
?>