<?php

$string = "Hello World";


$i=0;

while (!empty($string[$i])) {
	$i++;
}

for($j=$i-1; $j>=0;$j--){
	echo $string[$j];
}

?>