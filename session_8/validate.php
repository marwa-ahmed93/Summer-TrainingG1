<?php


$validates =[

'userName' => [
    'filters' => FILTER_VALIDATE_REGEXP ,
    'error'  => "user name invalid" ,
    'my_options' => ['options'=> ['regexp'=>'/^[A-Z][a-z]{3,8}$/']  ]
],

'password' => [

 'filters' => FILTER_VALIDATE_REGEXP ,
    'error'  => "password invalid" ,
    'my_options' => ['options'=> ['regexp'=>'/^[a-zA-Z0-9]{3,8}$/']  ]
] ,

'age'=> [

 'filters' => FILTER_VALIDATE_INT ,
    'error'  => "age invalid" ,
    'my_options' => ['options'=> [
     'min_range'=>16 ,
      'max_range'=>25
     ]
 ]
] , 


'email' => [
 'filters' => FILTER_VALIDATE_EMAIL,
    'error'  => "email invalid" ,

]


];