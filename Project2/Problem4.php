<?php
$productDetails = array(
"title" => "15 inch laptop",
"size" => "15",
"unit" => "inch",
"processor" => "Intel Core 2 Duo",
"Motherboard" => "Gigabyte",
"RAM" => "2 GB",
"Disk Type" => "SSD",
);

foreach($productDetails as $x => $x_value){
	echo  ucfirst($x) . ":" . $x_value . "<br>";
}
// $len=count($productDetails);
// for ($i=0; $i <$len ; $i++) { 
// 	$cap_key=get_Key($productDetails[$i]);
// 	$cap_key=ucfirst($cap_key);
// 	echo ucfirst($cap_key) .  ":" . ;
// }
?>