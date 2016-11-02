<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller
{
    function resigter()
    {
       $User = D("User"); // 实例化User对象
       if (!$User->create())
       { 
       // 登录验证数据    
        // 验证没有通过 输出错误提示信息     
            dd($User->getError());
        }
       else{     
       // 验证通过 执行登录操作
       }
        $this->display();
    }

}