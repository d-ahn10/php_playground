<?php 

$fname = $_GET["fname"];
$lname = $_GET["lname"];

if (isset($fname) && isset($lname)) {
    echo "Welcome " . $fname . " " . $lname . " :) ";
} else {
    echo "$fname or $lname is not set";
}

die;

?>