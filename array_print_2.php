<?php
$testArr = array("one", "two", null, "three", 0, "one", "three", false, "");

foreach ($testArr as $test){
    switch(true){
          case $test==="one":
            echo "one: Number 1 <br>"; 
            break;
          case $test==="two":
            echo "two: Number 2 <br>"; 
            break;
          case $test==="three":
            echo "three: Number 3 <br>";
            break;
          case $test==="":
            echo "Nothing  <br>";  
            break;

          default:
            echo "get out <br>"; 
    } 
} 
?>