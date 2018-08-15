<?php

$string = "Hello World tahsin ";

$word = [];

$string2= " ";

$j=0;

$i=0;

$k=0;

for($i=0;$i<strlen($string);$i++)
{
	if($string[$i] != ' ')
	{
		$string2[$j]=$string[$i];
		$j++;
	}
	else
	{
		$word[$k]= $string2;
		$k++;
		$string2= " ";
		$j=0;
	}

}

$ln= sizeof($word);

for($i=$ln-1;$i>=0;$i--)
{
	echo $word[$i]." ";
}
echo "<br>";

for($i=0;$i<$ln;$i++)
{
	$string3=$word[$i];
	$k=0;

	while (!empty($string3[$k])) {
		$k++;
	}

	for($j=$k-1; $j>=0;$j--){
		echo $string3[$j];
	}
	echo " ";

}


?>