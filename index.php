<?php
// Allow all origins (for testing)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Jooble API endpoint & key
$url = "https://jooble.org/api/";
$key = "9934fba3-3266-4fce-9efd-d2a73f2e6846"; // Your API key

// Read JSON body from the incoming POST
$postData = file_get_contents("php://input");

// Init cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url . $key);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute and return result
$server_output = curl_exec($ch);
curl_close($ch);

echo $server_output;
?>
