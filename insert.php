<?php

$link = mysqli_connect("localhost", "root", "", "demo123");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$usn = mysqli_real_escape_string($link, $_REQUEST['usn']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$sem = mysqli_real_escape_string($link, $_REQUEST['sem']);
 
// Attempt insert query execution
$sql = "INSERT INTO student (usn, name, sem) VALUES ('$usn', '$name', '$sem')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
