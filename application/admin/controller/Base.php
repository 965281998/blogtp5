<?php
namespace app\admin\controller;
use think\Controller;
class Base extends Controller
{
	//初始化方法
	public function _initialize(){
		if(!session('username')){
			$this->error('请先登陆系统','Login/index');
		}
	}
}