<?php

class Database{

private static $dsn = "mysql:host=localhost;dbname=nti_online_g1";
public function getConnection(){
    return new PDO(self::$dsn ,'root','');
} 

}