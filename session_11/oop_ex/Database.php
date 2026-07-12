<?php

interface Database{

public function select($columns,$table,$condation,$operator,$value);
public function selectAll($columns ,$table);
public function insert($table,$columns,$value);
public function update($table ,$columns , $columnValue,$condation , $operator ,$value);
public function delete($table ,$condation , $operator  ,$value );



}