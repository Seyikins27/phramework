<?php
 namespace App\Route;
 
  use Core\Routemethod as Route;
  use Core\Globals as View;
 
  $routes=new Route();
  
  //All GET Routes
  
  $routes->get("about/index",'about/info');
  $routes->get("about/info", 'about/info');
  $routes->get("home", "Home");
  $routes->get('user/[i:id]/[i:reg]','user/reg');
  $routes->get('user', 'user/reg/2');
  $routes->get("", function(){
      
      View::view("index/index");
  });
  $routes->get("about/user/[i:id]",  function($id){
      
      echo "Hello User my id is ".$id;
  });
  
  // All POST Routes
  $routes->post('register', 'register/new');
  
  