<?php

   use Core\Controller;
   
  class About extends Controller
  {
	  function __construct()
	  {
              parent::__construct();

              $this->view->render('about');
	  }
	  
	  function info()
	  {
		  echo "For your information";
	  }
	   function index()
	  {
		  echo "Index";
	  }
	  
  }