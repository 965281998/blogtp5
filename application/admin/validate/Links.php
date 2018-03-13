<?php
namespace app\admin\validate;
use think\Validate;
class Links extends Validate
{
	protected $rule =[
		'title' => 'require|max:25',
		'url' => 'require',
	];

	protected $message = [
		'title.require' => '链接名称必须填写',
		'title.max' => '链接名称长度不得大于25位',
		'url.require' => '链接地址必须填写',
	];

	protected $scene = [
		'add' => ['title','url'],
		'edit' => ['title','url'],
	];
	
}