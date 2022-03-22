<?php
try{
    $connection= new PDO('mysql:dbname=schooldb;host=localhost','root','');
}catch (PDOException $exception){
    echo $exception->getMessage();
}
