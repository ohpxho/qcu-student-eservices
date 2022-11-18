<?php
	
	class App {
		protected $controller = 'Home';
		protected $page = 'doIndex';
		protected $params = [];

		public function __construct() {
			$url = $this->parseURL();
			$this->setController($url);
			$this->setPage($url);
			$this->setParams($url);

			call_user_func_array([$this->controller, $this->page], $this->params);
		}

		//return array of parameters of trimmed & sanitized url
		private function parseURL() {
			if(isset($_GET['url'])) {
				return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
			}
		}

		private function setController(&$url) {
			
			if(isset($url[0])) {
				if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')) {
					$this->controller = ucwords($url[0]);
					unset($url[0]);
				}	
			}
			
			require_once '../app/controllers/'.$this->controller.'.php';
			$this->controller = new $this->controller;
		}

		private function setPage(&$url) {
			if(isset($url[1])) {
				$method = 'do'.ucwords($url[1]);
				if(method_exists($this->controller, $method)) {
					$this->page = $method;
					unset($url[1]);
				}
			} 
		}

		private function setParams(&$url) {
			$this->params = $url ? array_values($url): [];
		}
	}

?>
