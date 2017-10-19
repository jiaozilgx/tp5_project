<?php
namespace app\index\controller;

use \think\Db;

class About extends \think\Controller
{
	// 保存获取的数据集
	// public $about;
	
    public function index()
    {
		$about = Db::table('about')->select();
		$about = array_pop($about);
		// $this->about = select_to_table('about');
		// var_dump($about);die;
		$this->assign('about',$about);
		
		$this->assign('title','公司介绍');
		$this->assign('pageName','about');
        return view('about');
    }
}
?>