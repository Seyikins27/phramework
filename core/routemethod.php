<?php
namespace Core;
  class Routemethod {
    //put your code here
    
    
  
	  public static $get_url=array();
	  public static $post_url=array();
	  public static $delete_url=array();
	  public static $update_url=array();
	  
         
          
      public function get($uri, $callback)
	  {     
             
                  $data=array(
                          "uri"=>$uri,  
                          "callback"=>$callback);
                          
                 array_push(self::$get_url, $data);
		 return $callback;
                  
	  }
	  
	 public function post($uri, $callback)
	  {
              
		  $data=array(
                          "uri"=>$uri,  
                          "callback"=>$callback);
                          
                 array_push(self::$get_url, $data);
		  return $callback;
	  }
	  
	   public function delete($uri)
	  {
		  self::$delete_url[]=$uri;
		  return $this;
	  }
	  
	   public function update($uri)
	  {
		self::$update_url[]=$uri;
		return $this;  
	  }
	  
	  
  }