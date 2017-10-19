<?php
namespace app\index\controller;

class User extends \think\Controller
{
    public function index()
    {
		$this->assign('title','会员中心页');
		$this->assign('pageName','user');
        return view('user');
    }
}
?>