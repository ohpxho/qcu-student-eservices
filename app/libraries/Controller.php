<?php
	
	class Controller {

		protected function showView($view, $data = []) {
			if(file_exists('../app/views/'.$view.'.php')) {
				require_once '../app/views/'.$view.'.php';
			} else {
				die('view does not exists.');
			}
		}

		protected function initModel($model) {
			if(file_exists('../app/models/'.$model.'.php')) {
				require_once '../app/models/'.$model.'.php';
				return new $model;	
			} else {
				die('model not found. dev error');
			}
		}

	}

?>