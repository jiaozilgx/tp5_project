<?php
namespace app\index\controller;

class Pay extends \think\Controller
{
    public function index()
    {
		$this->assign('title','支付页');
		$this->assign('pageName','pay');
        return view('pay');
    }
}
?>