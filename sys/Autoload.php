<?php
namespace sys;
class Autoload{
	static function autoload($class){
		$file = BASEDIR.'/' . str_replace('\\','/',$class) . '.php';
		if (file_exists($file)){
			require $file;
		}
	}
}