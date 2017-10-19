<?php
namespace app\index\controller;

class Index extends \think\Controller
{
    public function index()
    {
		$this->assign('title','首页');
		$this->assign('pageName','index');
        return view('index');
    }
}
