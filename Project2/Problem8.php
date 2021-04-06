<?php
$productDetails = array(
"title" => "15 inch samsung laptop",
"size" => "15",
"unit" => "inch",
"processor" => "Intel Core 2 Duo",
"Motherboard" => "",
"RAM" => "2 GB",
"Disk Type" => "SSD gigabyte Hard-disk",
"Mouse" => " ",
"display" => "LED"
);
$productDetails2 = array(
"OS" => "Windows (trial)",
"case" => "FrontTech",
"Hot Spot" => "No",
"BlueTooth" => "Yes gigabyte (range: 2 meter)",
"wifi" => "No",
"cable" => "3mm",
"Cabin" => "multi disk lenovo cabin",
);
$exclude = array("unit", "wifi", "cable");

$result= array_merge($productDetails, $productDetails2);
$result = array_diff_key($result, array_flip($exclude));
$logo_ignore=array("samsung","gigabyte","lenovo");

$new_key = array();

foreach ($result as $product => $details) {

	$new_key+= array(ucfirst($product)=> $details);	
}
ksort($new_key);

foreach ($new_key as $product => $details) {
	if ($details=="" || $details==" ") {
		echo $product . ":NA".'<br>';
	}
	else{
		echo ucfirst($product) . ":" . str_replace(array("samsung","gigabyte","lenovo"), '', $details)  . "<br>";
	}
}

?>
