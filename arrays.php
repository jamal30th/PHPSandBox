<?php

//indexed array:

// $people = array('Mike', 'Jeremy', 'Sara');
// $ids = array(22,34,57);
// $cars = ['toyoto', 'volvo', 'marchedes'];
// $cars[3]= 'bmw';
// $cars[]='Hyundai';
// print_r($cars);
// var_dump($cars);

//associated arrays:
// $people = array('Brad'=>22, 'Chad' =>44, 'William'=>36);
// echo $people['Chad'];
// $ids = [22=>'Roberto', 44=>"Caroline", 56=>'tushar'];
// echo $ids[44];
// $people['Jill']=42;
// print_r($people);
// var_dump($people);
// echo count($people);

//Multi dimensional arrays:
$cars = array(
    array('Honda',30,20),
    array('Toyota', 50, 30),
    array('kia',20,5)

);
echo $cars[2][1];
?>