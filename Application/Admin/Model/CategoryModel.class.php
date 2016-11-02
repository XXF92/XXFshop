<?php
namespace Admin\Model;
use Think\Model;
/**
 * 商品的无限级分类
 */
class CategoryModel extends Model
{
    /**
     * [limitless 商品无限级分类]
     * @param  [type]  $cate  [二维数组]
     * @param  integer $pid   [父id]
     * @param  integer $level [分类层次等级]
     * @return [type]         [分类拼装好二维数组]
     */
    function limitless($cate,$pid=0,$level=0)
    {
        $arr=array();
        foreach ($cate as  $v) 
        {
            if ($v['category_parent_id']==$pid) 
            {
                $v['level']=$level;
                $v['html']=str_repeat('--', $level).$v['category_name'];
                $arr[]=$v;
                //合并成一个数组
                $arr=array_merge($arr,$this->limitless($cate,$v['category_id'],$level+1));
            }
        }
        return $arr;
    }
}