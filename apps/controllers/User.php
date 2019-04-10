<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author User
 */
class User {
    //put your code here
    
	function __construct()
	{
		echo "this is a user";
	}
	function index()
	{
		echo "index user";
	}
    function reg(string $name, int $id)
    {
        echo "My name is ".$name." and my ID is ".$id;
    }
}
