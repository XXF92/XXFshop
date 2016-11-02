<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller
{
       public function _empty($name)
       {
            $this->assign("page",'方法'.ACTION_NAME);
            $this->display('Common:error');

       }
}