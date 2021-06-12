<?php
$name = strtoupper("surbhi");
echo $name;

//strtolower

$username = "abc@gmail.com";
$entered = strtolower("Abc@gmail.com");

if ($username == $entered){
	echo "correct";
}
else{
	echo "please check your username";
}