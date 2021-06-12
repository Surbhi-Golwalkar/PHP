<?php
$name = "viki";
echo strlen($name);
$len = strlen($name);

if ($len<=5) {
	echo "Your password should be more than 5 char long";
}