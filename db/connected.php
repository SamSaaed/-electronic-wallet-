<?php


class connectedDb
{
        public $servername='localhost';
        public $username='root';
        public $password='';
        public $dbname='Productdb';
        public static $con;


        // class constructor
    public function __construct()
    {
        try{

                  // create connection 
        self::$con = mysqli_connect($this->servername,$this->username, 
        $this->password, $this->dbname);

        }catch(PDOException $e){
            $e->getMessage();
        }

    }

/**
 * @return [PDO Conection]
 */
public function concted(){
    return self::$con;
}

    // get product from the database
    public function getAll($tablename){
        $sql = "SELECT * FROM $tablename";

        $result = mysqli_query(self::$con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
}






