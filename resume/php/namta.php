<?php


// While loop
echo "সাত এর নামতা while লুপ দিয়ে।<br>";

$x= 1;
$y= 7;

while ( $x<= 10) {
	echo $y." x ".$x." = ".$y*$x."<br>";
	$x++;
}
echo "<br><br>";

//for loop
echo "সাত এর নামতা for লুপ দিয়ে।<br>";

for($x= 1;$x<= 10;$x++)
{
	echo $y." x ".$x." = ".$y*$x."<br>";
}
echo "<br><br>";

//Do while loop
echo "সাত এর নামতা do while লুপ দিয়ে।<br>";
$x= 1;
do {
    echo $y." x ".$x." = ".$y*$x."<br>";
    $x++;
} while ($x<= 10);

//foreach loop
//The foreach loop works only on arrays

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
	echo $value."<br>";
}
?>