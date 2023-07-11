<?php
include('Controller/Controller.php');
$obj= new Controller();

if(isset($_SERVER['PATH_INFO'])){
    $path=$_SERVER['PATH_INFO'];

    switch($path){
        case '/index':
            $obj->index();
        break;
        case '/home':
            $obj->home();
        break;
        default:
            echo "wrong choice";
        break;        
            

    }
}







?>