<?php

$number = range(1,50);
function check_divisiblity($number){
	$div2;
	$div3;
	$div5;
	$a=0; $b=0; $c=0;

	for ($i=0; $i < 50; $i++) { 
		// var_dump($number[$i]);
		if ($number[$i]%2==0) {
			$div2[$a]=$number[$i];
			$a++;
		}
		if ($number[$i]%3==0) {
			$div3[$b]=$number[$i];
			$b++;
		}
		if ($number[$i]%5==0) {
			$div5[$c]=$number[$i];
			$c++;
		}
	}

	echo "the numbers divisible by 2 are";
	echo '<pre>';
	print_r($div2);
	echo '</pre>';

	echo "the numbers divisible by 3 are";
	echo '<pre>';
	print_r($div3);
	echo '</pre>';

	echo "the numbers divisible by 5 are";
	echo '<pre>';
	print_r($div5);
	echo '</pre>';
}
 // $number = range(1,50);	
check_divisiblity($number);
?>