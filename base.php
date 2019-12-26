<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=ubike";
$pdo = New PDO($dsn,"root","");

session_start();

function all($dis){
    global $pdo; 
    $sql = "SELECT * FROM `location` WHERE `sarea`='" . $dis . "'";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function insert($data){
    global $pdo; 
    $key = "`" . implode("`,`", array_keys($data))  . "`";
    $value = "'" . implode("','", $data) . "'";
    $sql = "insert into `location`($key) value($value)";
    $pdo->exec($sql);
}

function del(){
    global $pdo;
    $sql = "DELETE FROM `location` WHERE 1";
    $pdo->exec($sql);
}



?>