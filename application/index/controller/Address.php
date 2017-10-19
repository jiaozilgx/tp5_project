<?php
namespace app\index\controller;

class Address extends \think\Controller
{
    public function index()
    {
		$this->assign('title','收货地址页');
		$this->assign('pageName','address');
        return view('address');
    }
}
?>