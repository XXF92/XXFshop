<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends CommonController
{
    function index()
    {
        $this->dispaly('goodsList');
    }
    /**
     * [goodsList 商品展示功能]
     * 
     */
    function goodsList()
    {
        $obj=M('Goods');
        $goodsArr=$obj->field('goods_id,goods_name,goods_small_img,goods_weight,goods_price,goods_number')->select();
        // dd($goodsArr);
        $this->assign('goodsList',$goodsArr);
        $this->display();
    }

    /**
     * [add 商品添加功能]
     */
    function add()
    {
        //无限级分类
        $cate=D('Category');
        $arr=$cate->field(true)->select();
        $limitArr=$cate->limitless($arr);
        $this->assign('limitArr',$limitArr);
        
        //商品品牌
        $brand=M('brand');
        $brandArr=$brand->field('brand_id,brand_name')->select();
        $this->assign('brandArr',$brandArr);

        //是否有商品添加
        if(IS_POST)
        {
            $obj=D('Goods');
            if($obj->create())
            {
                $res=$obj->add();
                if($res)
                {
                    echo "添加商品成功";
                }
                else
                {
                    echo "添加商品失败";
                }
            }
            else
            {
                echo "fail";
            }

        }
        $this->display();
    }
    /**
     * [update 商品更新]
     * @return [type] [description]
     */
    function update()
    {
        $goods_id=$_GET['goods_id'];
        $obj=M('Goods');
        $obj->where($goods_id)->update();
    }
    /**
     * [delete 商品删除]
     * 
     */
    function delete()
    {

        $goods_id=$_GET['goods_id'];
        
        $obj=M('Goods');
        if($obj->where('goods_id='.$goods_id)->delete())
        {
            $this->success('删除商品条成功',U('goodsList'));
        }
        else
        {
            $this->error('删除商品失败',U('goodsList'));
        }
    }
}