<?php
namespace sys;
class App{
	private $controller = 'app\controllers\Home';
	private $method = 'index';

	function __construct(){
		$url = $this->parseUrl();
		if (isset($url[0])){
			$controller = '\app\controllers\\'.$url[0];
			if (class_exists($controller)){
				$this->controller = $controller;
				unset($url[0]);
			}
		}
		$this->controller = new $this->controller;

		if (isset($url[1])){
			if (method_exists($this->controller,$url[1])){
				$this->method = $url[1];
				unset($url[1]);
			}
		}
		$params = array_values($url);
		call_user_func_array(array($this->controller,$this->method),$params);
	}
	private function parseUrl(){
		if (isset($_GET['url'])){
			$url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
			return $url;
		}
	}
}