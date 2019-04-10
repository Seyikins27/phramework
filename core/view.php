<?php
  namespace Core;
  
  class View
  {
	  function render($file, $vars=array())
	  {
                 global $var;
                  foreach($vars as $var->$value)
                      {
                        $var=$value;
                      }
                      
		  require APP.DS.'views/'.$file.".php";
                  
	  }
          
           
  }


