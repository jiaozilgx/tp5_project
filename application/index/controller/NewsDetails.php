<?php
namespace app\index\controller;

class NewsDetails extends \think\Controller
{
    public function index()
    {
		$this->assign('title','新闻详情页');
		$this->assign('pageName','news_details');
        return view('news_details');
    }
}
?>