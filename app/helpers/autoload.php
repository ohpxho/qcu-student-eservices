<?php
  
  function custom_autoloader($class) {
    if(file_exist('../controllers/'.ucwords($class).'.php')) {
       
    }
  
  }
 
  spl_autoload_register('custom_autoloader');

?>