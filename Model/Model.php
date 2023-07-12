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

    /*
    select query:
    1.para :table
    */
    public function select_data($table){
       $query ="select * from $table";
       $res=$this->connection->query($query);
       while($row=$res->fetch_object()){
          $result[]=$row;
       }
       return $result ?? [];

    }

    /*

    delete query
    1.table
    2.where
    */

    public function delete_data($table,$data){
        //"delete from table where id=1 and color =red";
        $query ="delete from $table where 1=1";
        foreach($data as $key =>$val){
                $query.= " AND ". $key ." = '".$val . "'";
        }
        echo $query;
        if($this->connection->query($query)){
            return true;
        }
        else{
            return false;
        }

    }
    public function select_where_data($table,$data){
        //"delete from table where id=1 and color =red";
        $query ="select *  from $table where 1=1";
        foreach($data as $key =>$val){
                $query.= " AND ". $key ." = '".$val . "'";
        }
        //echo $query;
        $res=$this->connection->query($query);
        while($row=$res->fetch_object()){
          $result[]=$row;
        }
        return $result ?? [];


        

    }
    }


?>
