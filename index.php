<?php

  require 'config/const.php';
  require APP.DS."routes.php";
  function __autoload($class)
   {
	  //require CORE.DS.$class.'.php';
	   $parts = explode('\\', $class);
       require CORE.DS.end($parts) . '.php';
	
  }
   
   $bootstrap=new Core\Bootstrap();
   
  

?>