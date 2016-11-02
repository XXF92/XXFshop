<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/XFFshop/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/XFFshop/Public/Admin/css/select.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/XFFshop/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/XFFshop/Public/Admin/js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="/XFFshop/Public/Admin/js/select-ui.min.js"></script>
<script type="text/javascript" src="/XFFshop/Public/Admin/editor/kindeditor.js"></script>

<script type="text/javascript">
    KE.show({
        id : 'content7',
        cssPath : './index.css'
    });
  </script>
  
<script type="text/javascript">
$(document).ready(function(e) {
    $(".select1").uedSelect({
		width : 345			  
	});
	$(".select2").uedSelect({
		width : 167  
	});
	$(".select3").uedSelect({
		width : 100
	});
});
</script>
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">添加商品</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    
    <div id="usual1" class="usual"> 
    
    
  	<ul> 
    <li><a href="#tab1" class="selected">添加商品</a></li> 
   
  	</ul>
    </div> 
    
  	<div id="tab1" class="tabson">
    
    <div class="formtext">Hi，<b>admin</b>，欢迎您试用信息发布功能！</div>
    
    <form action="/XFFshop/Admin/Goods/add" method="post" enctype="multipart/form-data">

    <ul class="forminfo">
    <li><label>商品名称<b>*</b></label><input name="goods_name" type="text" class="dfinput" placeholder="请填写商品名称"  style="width:518px;"/></li>
   
    <li><label>商品分类<b>*</b></label>  
    

    <div class="vocation">

    <select class="select1" name="goods_category_id">
    <?php if(is_array($limitArr)): foreach($limitArr as $key=>$v): ?><option value="<?php echo ($v["category_id"]); ?>"><?php echo ($v["html"]); ?></option><?php endforeach; endif; ?>
    </select>

    </div>
    
    </li>
    <li><label>商品品牌<b>*</b></label>  
    

    <div class="vocation"> 
    <select class="select1" name="goods_brand_id"> 
    <?php if(is_array($brandArr)): foreach($brandArr as $key=>$v): ?><option value="<?php echo ($v["brand_id"]); ?>"><?php echo ($v["brand_name"]); ?></option><?php endforeach; endif; ?>
    </select>
    </div>
    
    </li>
    <li><label>商品重量<b>*</b></label><input name="goods_weight" type="text" class="dfinput" placeholder="请填写商品重量" style="width:518px;"/></li>
    <li><label>商品价格<b>*</b></label><input name="goods_price" type="text" class="dfinput" placeholder="请填写商品价格"  style="width:518px;"/></li>
    <li><label>商品数量<b>*</b></label><input name="goods_number" type="text" class="dfinput" placeholder="请填写商品数量"  style="width:518px;"/></li>
   
    <li><label>商品图片<b>*</b></label></li><input name="goods_big_img" type="file" />
    
    
   
    <li><label>商品介绍<b>*</b></label>
    

    <textarea id="content7" name="goods_introduce" style="width:700px;height:550px;visibility:hidden;"></textarea>
    
    </li>
    <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="添加"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" type="reset" class="btn btn-warning" value="重置"/></li>
    </ul>
    </form>
   
       
	</div> 
 
	<script type="text/javascript"> 
      $("#usual1 ul").idTabs(); 
    </script>
    
    <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>
    
    
    
    
    
    </div>


</body>

</html>