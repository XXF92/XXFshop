<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户注册</title>
    <link rel="stylesheet" href="/XFFshop/Public/bootstrap/css/bootstrap.min.css">
    <script src="/XFFshop/Public/bootstrap/js/jquery-3.0.0.min.js"></script>
    <script src="/XFFshop/Public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div style="">

        <div class="row">
            
            
          <div class="col-md-2"></div>
          <div class="col-md-10">
            <div class="page-header">
            <h3 style="font-align: center">用户注册</h3>
            </div>
          

              <form class="form-horizontal" role="form" action="/XFFshop/Home/User/resigter" method="post">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="user_name" name="user_name" placeholder="请输入用户名">
                    </div>
                    <div class="col-sm-5"></div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                    <div class="col-sm-5">
                      <input type="password" class="form-control" id="user_psd" name="user_psd" placeholder="请输入密码">
                    </div>
                    <div class="col-sm-5"></div>
                  </div>
                
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">确认密码</label>
                    <div class="col-sm-5">
                      <input type="password" class="form-control" id="c_user_psd" name="c_user_psd" placeholder="请输入确认密码">
                    </div>
                    <div class="col-sm-5"></div>
                  </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">邮箱</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="user_email" name="user_email" placeholder="请输入邮箱">
                    </div>
                    <div class="col-sm-5"></div>
                  </div>
                
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">QQ号码</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="user_qq" name="user_qq" placeholder="请输入QQ号码">
                    </div>
                    <div class="col-sm-5"></div>
                  </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">手机号码</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="user_mobile" name="user_mobile" placeholder="请输入号码">
                    </div>
                    <div class="col-sm-5"></div>
                  </div>

                <div class="form-group">
                    <label for="user_sex" class="col-sm-2 control-label">性别</label>
                    <div class="col-sm-5">
                      <label class="radio-inline">
                      <input type="radio" name="user_sex" id="user_sex" value="男"> 男
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="user_sex" id="user_sex" value="女"> 女
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="user_sex" id="user_sex" value="保密" checked="checked"> 保密
                    </label>
                    </div>
                    <div class="col-sm-5"></div>
                  </div>
                
                   <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">学历</label>
                    <div class="col-sm-3">
                      <select class="form-control" name="user_education">
                        <option value="7" selected="selected">小学</option>
                        <option value="6">初中</option>
                        <option value="5">高中</option>
                        <option value="4">大专</option>
                        <option value="3">大学本科</option>
                        <option value="2">硕士</option>
                        <option value="1">博士</option>
                      </select>
                    </div>
                    <div class="col-sm-7"></div>
                  </div>

                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">爱好</label>
                    <div class="col-sm-5 " style="margin-top: 5px">
                        <input id="User_user_hobby_0" value="0" type="checkbox" name="user_hobby[]"  /> 
                        <label for="User_user_hobby_0">阅读</label>&nbsp;
                        <input id="User_user_hobby_1" value="1" type="checkbox" name="user_hobby[]"  /> 
                        <label for="User_user_hobby_1">舞蹈</label>&nbsp;
                        <input id="User_user_hobby_2" value="2" type="checkbox" name="user_hobby[]" /> 
                        <label for="User_user_hobby_2">爬山</label>&nbsp;
                        <input id="User_user_hobby_3" value="3" type="checkbox" name="user_hobby[]" /> 
                        <label for="User_user_hobby_3">动漫</label>&nbsp;
                        <input id="User_user_hobby_4" value="4" type="checkbox" name="user_hobby[]" /> 
                        <label for="User_user_hobby_4">电影</label>
                        <input id="User_user_hobby_5" value="5" type="checkbox" name="user_hobby[]" /> 
                        <label for="User_user_hobby_5">游泳</label>
                        <input id="User_user_hobby_6" value="6" type="checkbox" name="user_hobby[]" /> 
                        <label for="User_user_hobby_6">音乐</label>
                                           
                    </div>
                    <div class="col-sm-5"></div>
                  </div>
            
                  <div class="form-group">
                     <label for="inputPassword3" class="col-sm-2 control-label">简介</label>
                      <div class="col-sm-5 " >
                        <textarea class="form-control" rows="3" id="user_introduce" name="user_introduce"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-5"></div>
                  </div>

                  <div class="form-group">

                    <div class="col-sm-offset-3 col-sm-5">
                      <button type="submit" class="btn btn-primary">注册</button>
                      <button type="reset" class="btn btn-warning">重置</button>
                    </div>
                    <div class="col-sm-5"></div>
                  </div>
                </form>
          </div>
          
        </div>
        
    </div>
</body>
</html>