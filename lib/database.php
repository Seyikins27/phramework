<?php

  class Database
  {
	  private $con='';
	  
	  function __construct()
	  {
		 $this->con= mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME)or die("could not connect to database");
	  }
	  
	  function select($sql)
	  {
		  $result=mysqli_query($this->con, $sql);
		  $resultcount=mysqli_num_rows($result);
		  if($result)
		  {
		    
			if($resultcount>=1)
			{
		      $data=array();
		      while($row=mysqli_fetch_assoc($result))
		      {
			   $data[]=$row  ;		
		      }
		  
		       return $data;
			}
			else
			{
				$data='';
			}
		  }
		  
		  else
		  {
			  $this->error();
		  }
		  
		  
	  }
	  
	  function rowCount($sql)
	  {
		  $result=mysqli_query($this->con, $sql);
		  $count=mysqli_num_rows($result);
		  return $count;
	  }
	  
	  function insert($table, $data)
	  {
		  $key=implode(',', array_keys($data));
		  $value=implode("','", array_values($data));
		 
		  
		 
			  $sql="INSERT INTO $table ($key) VALUES ('$value')";
		      
			  $result=mysqli_query($this->con, $sql);
			  if($result)
			  {
				  $r="SUCCESSFUL";
				  
			  }
			  else
			  {
				  $r=mysqli_error($this->con);
			  }
		  
		  
		  
		  return $r;
	  }
	  
	  function update($table, $set, $where)
	  {
         //split each array into stmt seperated by commas
			$s = implode(',', array_map(
    function ($v, $k) {
        if(is_array($v)){
            return $k.'[]='.implode('&'.$k.'[]=', $v);
        }else{
           return "".$k."='".$v."'";
			
        }
    }, 
    $set, 
    array_keys($set)
));
			  
		  //split each array into stmt seperated by AND
			$w = implode(' AND ', array_map(
    function ($v, $k) {
        if(is_array($v)){
            return $k.'[]='.implode('&'.$k.'[]=', $v);
        }else{
           return "".$k."='".$v."'";
			
        }
    }, 
    $where, 
    array_keys($where)
));


		  
		  $sql="UPDATE $table SET ".$s." WHERE ".$w."";
		  
		  $result=mysqli_query($this->con, $sql);
		  if(mysqli_affected_rows($this->con)>=1)
		  {
			  $msg="UPDATED SUCCESSFULLY";
		  }
		  else
		  {
			 $msg="NOT SUCCESSFUL";
		  }
		  echo $msg;
	  }
	  
	  function delete($table, $where)
	  {
         
			  
		  //split each array into stmt seperated by AND
	$w = implode(' AND ', array_map(function ($v, $k) 
	 {
        if(is_array($v)){
            return $k.'[]='.implode('&'.$k.'[]=', $v);
        }else{
           return "".$k."='".$v."'";
			
        }
    },  $where,  array_keys($where)));


		  
		  $sql="DELETE FROM $table WHERE ".$w."";
		  echo $sql;
		  $result=mysqli_query($this->con, $sql);
		  if(mysqli_affected_rows($this->con)>=1)
		  {
			  $msg="DELETED SUCCESSFULLY";
		  }
		  else
		  {
			 $msg="NOT SUCCESSFUL";
		  }
		  echo $msg;
	  }
	  
	  function error()
	  {
		  echo mysqli_error($this->con);
		  
	  }
  }