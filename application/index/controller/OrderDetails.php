<?php
namespace app\index\controller;

class OrderDetails extends \think\Controller
{
    public function index()
    {
		$this->assign('title','订单详情页');
		$this->assign('pageName','order_details');
        return view('order_details');
    }
}
?>