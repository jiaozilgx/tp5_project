<?php
namespace app\index\controller;

class Order extends \think\Controller
{
    public function index()
    {
		$this->assign('title','我的订单页');
		$this->assign('pageName','order');
        return view('order');
    }
}
?>