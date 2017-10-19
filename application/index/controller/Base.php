<?php
	namespace app\index\controller;
	
	class Base extends \think\Controller
	{
		public function select_to_table($table){
			// $sql = "SELECT * FROM ".$table;
			return Db::table($table)->select();
		}
	}
?>