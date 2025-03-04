<?php

// Array 
// used to store multiple values in a single variable

//indexed array
$namesx = array("John", "Doe", "Jane", "Dog");
echo $namesx[0];
echo "<br/>";
echo count($namesx);
echo "<br/>";


// associative array 
$squad = array("Brand"=>"Iphone", "Product"=>"14 Promax", "Amount"=>1.4."m");
echo $squad ["Amount"];
echo "<hr/>";

foreach ($squad as $dy => $des){
    echo $dy."<br/>";
}

// multidimensional arrray
$club = array(array("club","leipzig"),array("club","napoli"));
echo $club[1][1]







?>