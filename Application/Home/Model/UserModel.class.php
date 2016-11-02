<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model
{

      protected $patchValidate = true;

      protected $_validate = array(     
          array('user_name','require','用户名必须！'),
          array('user_psd','require','密码必须！'),
          array('c_user_psd','require','确认密码必须！',0),
          array('user_mobile','require','手机号码必须！'),
          array('user_email','email','邮箱格式不正确！'),
          array('c_user_psd','user_psd','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
          array('user_qq',"/^[1-9]\d{4,9}$/",'qq格式不正确'),//qq号码正则
          
          array('user_education','1,2,3,4,5,6,7','请选择学历',0,'in'),
          array('user_hobby','check_hobby','请至少选择两个爱好',1,'callback'),
     );
    /*
     * 自定义爱好字段的验证规则
     * $name  一维数组
     * */
    function check_hobby($name)
    {
        if (count($name)<2)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}