<?php
/**
 * Created by PhpStorm.
 * User: Develop2
 * Date: 5/21/2018
 * Time: 5:41 PM
 */

class Db
{
protected static $connection;

/**
 * Connect to database
 */
public function connect(){
    //try to connect database
    if(!isset(self::$connection))
    {
        //Check If config.ini exist or not
        if(file_exists('../config.php')){
            $config = parse_ini_file('../config.ini');
            self::$connection = new mysqli(
                $config['host'],
                $config['username'],
                $config['password'],
                $config['dbname']);
        }else{echo "Cant Fined Config.ini";}
    }
    //check connection to database or not
    if(self::$connection === false){
        return false;
    }else{
        return self::$connection;
    }
}
/**
 * Query for database
 */

public function query($query)
    {
        //connect to database
        $connection = $this->connect();
        //query to database
        $result = $connection->query($query);
        return $result;
    }

    /**
     * @param $query
     * @return array|bool
     */
public function select($query)
    {
        $rows = array();
        $result  = $this->query($query);
        if($result === false)
        {
            return false;
        }else{
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
    }

    /**
     * @return string
     */
public function error(){
    $connection = $this->connect();
    return $connection->error;
}

    /**
     * @param $value
     * @return string
     */
public function quote($value){
    $connection = $this->connect();
    return "'".$connection->real_escape_string($value)."'";
}


}