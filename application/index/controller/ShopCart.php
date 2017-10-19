<?php
namespace app\index\controller;

class ShopCart extends \think\Controller
{
    public function index()
    {
		$this->assign('title','我的购物车');
		$this->assign('pageName','shop_cart');
        return view('shop_cart');
    }
}
?>