<?php 
//PHP Array | PHP Associative array | Traversing ??
$courses = array("name" => "ram" , "city" => "gwalior" , "Php"=>"120000"  );

// echo "<pre>";
// print_r($courses);

// echo $courses["name"];

foreach ($courses as $key => $value) {
	echo $key." ".$value."<br/>";
}

// foreach ($courses as $a) {
// 	echo $a;
// }
?>