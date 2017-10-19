<?php
namespace app\index\controller;

class Contact extends \think\Controller
{
    public function index()
    {
		$this->assign('title','联系我们');
		$this->assign('pageName','contact');
        return view('contact');
    }
}
?>