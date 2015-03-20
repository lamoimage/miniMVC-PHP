<?php
namespace sys;
class Controller{
	protected $data = array();
	protected function model($model){
		$modelname = '\app\models\\'.$model;
		if (class_exists($modelname)){
			return new $modelname;
		}
	}

	protected function assign($k,$v){
		$this->data[$k] = $v;
	}

	protected function display($view){
		$file = BASEDIR.'/app/views/' . $view . '.php';
		if (file_exists($file)){
			extract($this->data);
			require $file;
		}
	}
}