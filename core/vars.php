<?php
namespace Core;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vars
 *
 * @author User
 */
class Vars 
{
    public $uri='';
   
    function __construct() 
    {
        
    }
    
    function identify_elements()
    {
        $elems=explode("/",$this->uri);
        foreach($elems as $elements)
        {
            if(strpos($elements, "&"))
            {
             
            }
        }
    }
}
