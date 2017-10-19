<?php
namespace app\index\controller;

class Register extends \think\Controller
{
    public function index()
    {
		$this->assign('title','注册页');
		$this->assign('pageName','register');
        return view('register');
    }
}
?>