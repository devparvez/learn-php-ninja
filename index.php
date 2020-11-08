<?php
//$radius=25;
//$pi=3.14;
//echo $pi**2;
//order of calculation(BIDMAS);
//echo $radius++;
//echo $radius;
//$age=30;
//$age=$age+10;
//$age-=10;
//$age*=2;
//echo $age;
//echo floor($pi);
//echo ceil($pi);
//echo pi();

//indexed arrays 

$peopleOne=['parvez','Aman','ayaj'];
//echo $peopleOne[2];
$peopleTwo=array('jonaki','jomor','Afroza');
//echo $peopleTwo[2];
$ages=[30,40,50];
//echo $ages[1];
$ages[1]=60;
$ages[]=70;
array_push($ages,90);
//print_r($ages);
//echo count($ages);

$peopleThree=array_merge($peopleOne,$peopleTwo);
//print_r($peopleThree);
//Associative arrays(keky and value pairs);
$ninjaOne=['hossain'=>'black','parvez'=>'gray','afroza'=>'white'];
//echo $ninjaOne['parvez'];
//print_r($ninjaOne);
$ninjaTwo=array('afroza'=>'like','jomor'=>'as');
$ninjaTwo['toad']=['pink'];
//print_r($ninjaTwo);
//echo count($ninjaOne);
$ninjaThree=array_merge($ninjaOne,$ninjaTwo);
print_r($ninjaThree);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1></h1>
    
</body>
</html>