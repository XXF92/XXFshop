<?php
namespace Admin\Controller;
use Think\Controller;
class EmptyController extends Controller
{    
    public function index()
    {
        $this->assign("page",'控制器'.CONTROLLER_NAME);
        $this->display('Common:error');

    }
}        