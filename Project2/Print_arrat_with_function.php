<?php
$testArr = array("one", "two", null, "three", 0, "one", "three", false, "");

function print_array(){
    foreach ($testArr as $test) {
        if($test == 'one') {
            echo "one: Number 1 <br>"; 
        }
        else if($test == 'two') {
            echo "two: Number 2 <br>"; 
        }
        else if($test == 'three') {
            echo "three: Number 3 <br>"; 
        }
        else if($test === "") {
            echo "Nothing  <br>"; 
        }   
        else {
            echo "get out <br>"; 
        } 
    } 

}

print_array();

?>