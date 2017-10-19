<?php
namespace app\index\controller;

class Product extends \think\Controller
{
    public function index()
    {
		$this->assign('title','产品中心');
		$this->assign('pageName','product');
        return view('product');
    }
}
?>