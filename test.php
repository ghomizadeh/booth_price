<?php
require ('config.php');
/**
 * Created by PhpStorm.
 * User: Develop2
 * Date: 5/21/2018
 * Time: 6:06 PM$Db = new Db();
 */



//insert into database

$name ="mohammad";
$email = "mohammad@email.com";

$sql = "INSERT INTO tbltest(name,email) VALUES ('".$name."','".$email."')";
$slc = "Select * FROM tbltest";

$rr = db_select($slc);
foreach ($rr as $tt){
    echo $tt["name"]."-----".$tt["email"] ."<br>";
}