<?php
include("Model/Model.php");
class Controller extends Model{
    public $baseurl;
    public function __construct(){
        
      $host= $_SERVER['HTTP_HOST'];
      $requrl = $_SERVER['REQUEST_URI'];
      $array= explode("/",$requrl);
     //print_r($array);
       $newstr= "/".$array[1]."/".$array[2]."/";
        $this->baseurl= $host . $newstr;
        parent::__construct();
        //echo "child class";
    }

    public function index(){
        $productData=$this->select_data("products");
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
            header("Location:index");

        }
    }
    public function delete(){
        if(isset($_REQUEST['pid'])){
            echo $pid=$_REQUEST['pid'];
            if($this->delete_data("products",["pid"=>$pid])){
                header("Location:index");
            }
            else{
                echo "fail";
            }
        }
    }

    public function edit(){
        if(isset($_REQUEST['pid'])){
            $pid=$_REQUEST['pid'];
            $productdata= $this->select_where_data("products",['pid'=>$pid]);
            $productData = $productdata[0];
            include('View/edit.php');
        }
    }
}


?>