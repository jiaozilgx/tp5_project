<?php
namespace app\index\controller;

class ProDetails extends \think\Controller
{
    public function index()
    {
		$this->assign('title','产品详情页');
		$this->assign('pageName','pro_details');
        return view('pro_details');
    }
}
?>