<?php
header('Content-Type: application/json');

// Get postcode from the request
$postcode = $_GET['postcode'];

// Connect to the database
$db = new mysqli('localhost', 'root', '', 'dldb');

// Check for errors
if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

// Prepare and execute the query
$query = "SELECT state FROM postcode WHERE postcode = '$postcode'";
$result = $db->query($query);

// Check for errors
if(!$result){
    die('There was an error running the query [' . $db->error . ']');
}
$testdd = "ERR";
// Fetch the result
$row = $result->fetch_assoc();
$state = $row['state'];

// Return the state
if($state) {
    $response = array("status"=>"success","state"=>$state);
} 
echo json_encode($response);