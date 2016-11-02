<?php
namespace Admin\Controller;
class IndexController extends CommonController
{
    function login()
    {
        
        $this->display();
    }

    function index()
    {
        $this->display('Show/main');
    }


    /**
     * [confirm 验证用户名和密码]
     * @return [type] [description]
     */
    function confirm()
    {   
        $rules = array(     
            array('admin_user','require','请填写用户名！'), 
            array('admin_user','admin_user','用户名错误','','equal'), 
        );

        $obj=M('admin');

        if (!$obj->validate($rules)->create())
        {     // 如果创建失败 表示验证没有通过 输出错误提示信息     
           $this->ajaxReturn($obj->getError());
        }
        else
        {   
            $this->ajaxReturn('ok');
        }

       
        
        

        // $this->display('login');
    }

    /**
     * [code 使用TP自带的验证码类]
     * @return [type] [description]
     */
    function verify()
    {
        $config =    array(
        'fontSize'  =>  20,              // 验证码字体大小(px)
        'useCurve'  =>  true,            // 是否画混淆曲线
        'useNoise'  =>  true,            // 是否添加杂点  
        'imageH'    =>  40,               // 验证码图片高度
        'imageW'    =>  120,               // 验证码图片宽度
        'length'    =>  4,               // 验证码位数
        'fontttf'   =>  '',              // 验证码字体，不设置随机获取
        'bg'        =>  array(243, 251, 254),  // 背景颜色
        'reset'     =>  true,           // 验证成功后是否重置
        );
        $Verify = new \Think\Verify($config);
        // 如果要使用中文验证码，可以设置 但要加入中文字体
        // $Verify->useZh = true; 

        $Verify->entry();
    }
    /**
     * [code 使用自定义的验证码类]
     * @return [type] [description]
     */
    function code()
    {
        $code = new \Common\Code\Code();
        $code->num(1);//验证码位数
        $code->make();
    }
    /**
     * [checkCode 检查验证码是否正确]
     * @return [type] [description]
     */
    function checkCode()
    {
        $code=strtoupper(I('post.code'));
        if($code==session('code'))
        {
            $this->ajaxReturn(1);
        }
        else
        {
            $this->ajaxReturn(0);
        }
    }
}
