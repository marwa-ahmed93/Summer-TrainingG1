<?php
// include_once('welcome.php');

// echo "$x" , "marwa" , "malik" , "mmn";


// include_once('welcome.php');


// print("mn","mn");

/**File system */

// readfile('test.txt');


// $file =  fopen('test.txt','r');
// echo fread($file ,filesize('test.txt')/2);
// fclose($file);



// $file =  fopen('test.txt','w');
// echo fwrite($file ,"malik maka nour ");
// fclose($file);




// $file =  fopen('test.txt','a');
// echo fwrite($file ,"malik maka zain ");
// fclose($file);


$file =  fopen('test.txt','r');
echo fgets($file );

 while($line = fgets($file )){
    echo $line."<br>";
 }

fclose($file);