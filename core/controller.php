<?php
namespace Core;
  class Controller 
  {
	 function __construct()
	 {
             
             $this->view=new View();
	 }
	 function loadModel($model=array())
	 {
		 foreach($model as $models)
		 {
		    require APP.DS.'models/'.$models.'.php';
		 }
         }
  }