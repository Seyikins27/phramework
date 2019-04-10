<?php
namespace Core;

 class Globals
 {

            static function view($file)
             {
                require APP.DS.'views/'.$file.".php";
             }
 }  