<?php
//DB Connection from config ini
/**
 * @return mysqli|string
 */
$msg_config = "";
function db_connect(){

    static $connection;
    if(!isset($connection)){
        if (file_exists('config.ini'))
        {
            $config = parse_ini_file("config.ini");
            $connection = mysqli_connect(
                $config['host'],
                $config['username'],
                $config['password'],
                $config['dbname']);

        }
        else{echo"لطفا فایل تنظیمات سرور را تنظیم و یا ایجاد نمایید";$msg_config = 0;}
    }
    if($connection === false)
    {
        return mysqli_connect_error();
    }
return $connection;

}

/**
 * @param $query
 * @return bool|mysqli_result
 */
function db_query($query){
$connection = db_connect();
    $result = mysqli_query($connection,$query);
    return $result;
}

/**
 * @return string
 */
function db_error(){
    $connection = db_connect();
    return mysqli_error($connection);
}

/**
 * @param $query
 * @return array|bool
 */
function db_select($query){
    $rows = array();
    $result = db_query($query);
    if($result === false){
        return false;
    }else
    {
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
}

function db_quote($value)
{
    $connection = db_connect();
    return "'".mysqli_real_escape_string($connection,$value)."'";
}