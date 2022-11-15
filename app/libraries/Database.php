<?php
	
	class Database {

		private $dbHost = DB_HOST;
		private $dbUser = DB_USER;
		private $dbPass = DB_PASS;
		private $dbName = DB_NAME;
		private $dbCharset = DB_CHARSET;

		private $statement;
		private $dbHandler;
		private $error;

		public function __construct() {
			$dsn = 'mysql:host='.$this->dbHost.';dbname='.$this->dbName.';charset='.$this->dbCharset;
			
			$options = [
    			PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
			];
			
			try {
     			$this->dbHandler = new PDO($dsn, $this->dbUser, $this->dbPass, $options);
			} catch (PDOException $e) {
     			throw new PDOException($e->getMessage(), (int)$e->getCode());
			}
		}

		public function query($sql) {
			$this->statement = $this->dbHandler->prepare($sql);
		}

		public function bind($placeholder, $value, $type = null) {
			switch(is_null($type)) {
				case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }

            $this->statement->bindValue($placeholder, $value, $type);
		}

		public function getAllResult() {
        	$this->execute();
        	return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }

        public function getSingleResult() {
        	$this->execute();
        	return $this->statement->fetch(PDO::FETCH_OBJ);
        }

        public function execute() {
			return $this->statement->execute();
		}
	}

?>