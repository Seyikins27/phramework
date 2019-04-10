<?php
   namespace Core;
  class Model extends Database
  {
	  function __construct()
	  {
		  
		  $this->db=new Database();
	  }
	  
	  
  }