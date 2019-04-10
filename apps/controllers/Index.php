<?php
use Core\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Index
 *
 * @author User
 */
class Index extends Controller
{
    //put your code here
    
    function __construct()
    {
        parent::__construct();
        $vars=array("title"=>"My Index Page");
        $this->view->render('index/index', $vars);
    }
}
