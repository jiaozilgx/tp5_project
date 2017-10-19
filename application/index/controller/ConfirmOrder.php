<?php
namespace app\index\controller;

class ConfirmOrder extends \think\Controller
{
    public function index()
    {
		$this->assign('title','确认订货单');
		$this->assign('pageName','confirm_order');
        return view('confirm_order');
    }
}
?>