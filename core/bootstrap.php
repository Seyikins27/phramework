<?php
namespace Core;
 class Bootstrap 
 {
	 public $url='';
	  function __construct()
	  {
		 $uri=$this->get_url();
		 $method=$this->get_method();
		 //echo $uri;
		 echo $this->routing($method, $uri);
	  }
	  
	  function get_url()
	  {
		  $this->url= isset($_GET['url']) ? $_GET['url'] : null;
		  $this->url = filter_var($this->url, FILTER_SANITIZE_URL);
		  //$this->url = rtrim($this->url, '/');
		  
	         // $this->url = explode('/', $this->url);
		 // empty($this->url)? $this->url="index": $this->url;
		  return $this->url;
	  }
	  
	  function get_method()
	   {
		  $method=$_SERVER['REQUEST_METHOD'];
		  return $method;
                  
           }
	  
	  function routing($method, $url)
	  {
                  
		  $router= new Router();
                       // $router=new AltoRouter();
		  switch ($method)
		  {
			  case "GET":
			  
			  $data=Routemethod::$get_url;
                          $router->route($data, $url);
                              
			   break;
			 
			  case "POST":
			  
			  break;
			  
			  case "DELETE":
			  
			  break;
			  
			  case "UPDATE":
			  
			  break;
		  }
	  }
	 
         
 }