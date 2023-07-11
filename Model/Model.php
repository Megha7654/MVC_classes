<?php
//database :=>connect,query
class Model{
    public $connection;
    public function __construct(){
        $this->connection = new mysqli("localhost","root","","mvcdb");
        // if($this->connection){
        //     echo "done";
        // }
        // else{
        //     echo "not done";
        // }
    }

    /*
    first para Table name
    sec assoic array key=>database column value form data
    */

    public function insert_data($table,$data){
        //"insert into product(pname,price,qty)value('laptop','20000','13')";
        $key= implode(",",array_keys($data));
        $value=implode("','",array_values($data));
        $query = "insert into $table($key)values('$value')";
        if($this->connection->query($query)){
            echo "data successfully inserted";
        }
        else{
            echo "data not inserted";
        }
    }
}


?>
