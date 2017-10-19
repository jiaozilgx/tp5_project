<?php
namespace app\index\controller;

class News extends \think\Controller
{
    public function index()
    {
		$this->assign('title','新闻中心');
		$this->assign('pageName','news');
        return view('news');
    }
}
?>