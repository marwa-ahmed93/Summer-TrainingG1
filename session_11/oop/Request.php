<?php

class Request{

public function gatData($key){
    return $_GET[$key];
}
public function postData($key,$value){
    $_POST[$key]  = $value ;
}

}