<?php
namespace app\controllers;
use sys\Controller;
class Home extends Controller{
	public function index($params = ''){
		$model = $this->model('User');
		$model->username = 'Baymax';
		$data['model'] = 'set username in Model:'.$model->username;

		$data['title'] = 'miniMVC - PHP';
		$data['contents'] = 'hi, this is a minimum php MVC application';

		$this->assign('data',$data);
		$this->display('Home/index');
	}
}