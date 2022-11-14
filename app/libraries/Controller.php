<?php
	
	class Controller {

		protected showView($view, $data = []) {
			if(file_exists('../views/'.$view.'.php')) {
				require_once '../views/'.$view.'.php';
			} else {
				die('view does not exists.');
			}
		}

		protected initModel($model) {
			if(file_exists('../models'.$model.'.php')) {
				require_once '../models'.$model.'.php';
				return new $model;	
			} else {
				die('model not found. dev error');
			}
		}

	}

?>