<?php
namespace Core;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of router
 *
 * @author User
 */
class Router {
 
    function url_exists($array, $item)
    {
        foreach($array as $key=>$values)
                {
                    $found = false;

                          if ($values['uri'] == $item) 
                               {
                                 $found = true;
                                 break;
                               }
                           else 
                               {
                                 $found = false;
                               }
                }
                return $found;
    }
    
    function return_key($array, $item)
    {
        foreach($array as $key=>$values)
                {
                    $k= '';

                          if ($values['uri'] == $item) 
                               {
                                 $k = $key;
                                 break;
                               }
                           else 
                               {
                                 $k= 'no key';
                               }
                }
                return $k;
    }
    
    function get_callback($callback)
    {
        if(empty($callback))
        {
          $this->redirect_to_controller(DEFAULT_CONTROLLER);
        }
        else if($this->isClosure($callback)==true)
        {
            return $callback();
        }
        else
        {
            $this->redirect_to_controller($callback);
        }

    }
    
    function isClosure($suspected_closure) 
    {
        if(is_callable($suspected_closure))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
	
    function redirect_to_controller($callback)
    {
        $ctrl=explode('/',$callback);
		  $count=count($ctrl);
		  if($count<=1)
		  {
		   require APP.DS.'controllers'.DS.$ctrl[0].'.php';
		   $classname=ucfirst($ctrl[0]);
		   $class=new $classname();
		  }
		  else
		  {
		   require APP.DS.'controllers'.DS.$ctrl[0].'.php';
		   $classname=ucfirst($ctrl[0]);
		   $class=new $classname();
		   $method=$ctrl[1];
		   $class->$method();
		  }   
    }
    
    
    function file_exist($file)
    {
       
    }
    
    function regex()
    {
        return $valid_route;
    }
    function route($data, $url)
    {
        if ($this->url_exists($data, $url))
         {
             //get the index of the uri in the array
              $key= $this->return_key($data, $url);
              //get the callback using the index
              $controller=$data[$key]["callback"];
             //pass the callback to the controller
              $this->get_callback($controller);                   
         }
         else
         {
            echo "Route Does not Exist";                   
	 }
    }
}

