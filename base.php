<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=ubike";
$pdo = New PDO($dsn,"root","");

session_start();

function all($dis){
    global $pdo; 
    $sql = "SELECT * FROM `location` WHERE `sarea`='" . $dis . "'";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
function find($dis){
    global $pdo; 
    $sql = "SELECT * FROM `location` WHERE `sna`='" . $dis . "'";
    return $pdo->query($sql)->fetch();
}

function nums($dis){
    global $pdo;
    if($dis == 1){
        $sql = "SELECT count(*) FROM `location` WHERE 1";
    }else{
        $sql = "SELECT count(*) FROM `location` WHERE `sarea`='" . $dis . "'";
    }
    return $pdo->query($sql)->fetch();
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