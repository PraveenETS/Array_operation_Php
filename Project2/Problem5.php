<?php
$productDetails = array(
"title" => "15 inch laptop",
"size" => "15",
"unit" => "inch",
"processor" => "Intel Core 2 Duo",
"Motherboard" => "",

"RAM" => "2 GB",
"Disk Type" => "SSD",
"Mouse" => " ",
"display" => "LED"
);

foreach ($productDetails as $key => $value) {
	if (trim($value)=="") {
		$value="NA";
	}
	echo  ucfirst($key) . ":" . $value . "<br>";
}
?>