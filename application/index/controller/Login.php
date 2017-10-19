<?php
namespace app\index\controller;

class Login extends \think\Controller
{
    public function index()
    {
		$this->assign('title','登录页');
		$this->assign('pageName','login');
        return view('login');
    }
}
?>