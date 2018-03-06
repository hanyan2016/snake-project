<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: yangweijie <yangweijiester@gmail.com> <code-tech.diandian.com>
// +----------------------------------------------------------------------

namespace Admin\Model;

use Common\Model\ContentHandlerModel;
use Think\Model;

/**
 * 插件模型
 * @author yangweijie <yangweijiester@gmail.com>
 */

class OrderModel extends Model {

    public function getListPageByMap($map,$page=1,$order='createtime desc',$r=20,$field='*')
    {
        $totalCount=$this->where($map)->count();

        if($totalCount){
            $list=$this->where($map)->page($page,$r)->order($order)->field($field)->select();

        }
        return array($list,$totalCount);
    }
}