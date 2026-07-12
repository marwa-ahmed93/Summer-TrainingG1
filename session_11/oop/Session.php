<?php

class Session{

public function __construct()
{
    session_start();
}

public function setSession($key,$value){
$_SESSION[$key] = $value;
}  
 

public function getSession($key){
    return $_SESSION[$key];
}

public function removeSession($key){
   unset($_SESSION[$key]);
}

}
$session = new Session ;
$session->setSession('username','mrwa');
$session->getSession('username');


