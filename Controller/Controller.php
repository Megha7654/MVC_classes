<?php
include("Model/Model.php");
class Controller extends Model{
    public function __construct(){
        parent::__construct();
        //echo "child class";
    }

    public function index(){
        include('View/index.php');
    }

    public function home()
    {
        include('View/home.php');
        if(isset($_POST['submit'])){
            $pname=$_POST['pname'];
            $price=$_POST['price'];
            $qty=$_POST['qty'];

            $insertData = ["pname"=>$pname,"price"=>$price,"qty"=>$qty];
            $this->insert_data("products",$insertData);

        }
    }
}


?>