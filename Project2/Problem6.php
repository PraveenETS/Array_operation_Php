<?php
$productDetails = array(
"title" => " SamSung 15 inch laptop",
"size" => "15",
"unit" => "inch",
"processor" => "Intel Core 2 Duo",
"Motherboard" => "",
"RAM" => "2 GB",
"Disk Type" => " SamSung SSD",
"Mouse" => " ",
"display" => " SamSung LED"
);

foreach ($productDetails as $key => $value) {
	$value= trim($value);
	if ($value=="") {
		$value="NA";
	}
	echo ucfirst($key) . ":" . trim($value,"SamSung")  . "<br>";
}
?>