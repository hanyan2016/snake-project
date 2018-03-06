<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: yangweijie <yangweijiester@gmail.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Admin\Controller;

use Admin\Builder\AdminConfigBuilder;
use Admin\Builder\AdminListBuilder;
use Admin\Builder\AdminTreeListBuilder;
/**
 * 后台配置控制器
 * @author yangweijie <yangweijiester@gmail.com>
 */
class OrderController extends AdminController {
    private $orderModel;
    public function _initialize()
    {
        parent::_initialize();
        $this->orderModel = D('Admin/Order');
    }
    /**
     * 后台菜单首页
     * @return none
     */
    public function index($page = 1, $r = 20){
        $order_no = I('get.orderid', "");

        if ($order_no != "") {
            $map['order_no'] = $order_no;
        }
        $sTime=I('post.sTime',0,'text');
        $eTime=I('post.eTime',0,'text');
        if($sTime && $eTime) {
            $map['createtime']=array('between',array($sTime,$eTime));
        }

        $list   =   $this->lists('Order', $map);
        int_to_string($list,array("status"=>array(1=>'未支付',2=>'已支付',3=>'支付失败')));


        $questidstr="0,";
        $answeridstr="0,";
        foreach($list as $val){
            $questidstr.=$val['question_id'].",";
            $answeridstr.=$val['answer_id'].",";
        }
        $questidstr=substr($questidstr,0,-1);
        $answeridstr=substr($answeridstr,0,-1);

        $q_map=array("id"=>array("IN",$questidstr));
       // $a_map=array("id"=>array("IN",$answeridstr));
        $questres=D("Question")->where($q_map)->select();
        $question_array=array();
        foreach ($questres as $val){
            $question_array[$val['id']]=$val['title'];
        }
        /*$answerres=D("QuestionAnswer")->where($a_map)->select();
        $answer_array=array();*/


        $this->assign('_list', $list);
        $this->assign('_questtion', $question_array);
        $this->meta_title = L('_BEHAVIOR_LOG_');
        $this->display();


    }
    public function edit($id = 0){
        empty($id) && $this->error(L('_PARAMETER_ERROR_'));
        $info = M('Order')->find($id);

        $questres=D("Question")->find($info['question_id']);


       if($info['status']==1){$statusstr="未支付";}
        if($info['status']==2){$statusstr="已支付";}
        if($info['status']==3){$statusstr="支付失败";}

        $this->assign('info', $info);
        $this->assign('questres', $questres);
        $this->assign('statusstr', $statusstr);
        $this->meta_title = L('_ORDER_INFO_');
        $this->display();
    }


}
