<?php
error_reporting(E_ERROR | E_PARSE);
const API_KEY = 'YOUR_API_KEY';
$error = false;
$errorMsg = '';
if (isset($_POST['submit'])) {

    $location = urlencode($_POST['city']);
    // Set the API URL with the key and location parameters
    $api_url = 'http://api.weatherapi.com/v1/current.json?key=' . API_KEY . '&q=' . $location . '&aqi=no';

    // Send the request and get the response
    $response = file_get_contents($api_url);
    if (!$response) {
        $error = true;
        $errorMsg = 'Something went wrong, please try again!';
    } else {
        // Decode the response data
        $data = json_decode($response, true);
        $info = 'Current temperature in ' . $data['location']['name'] . '(' . $data['location']['country'] . ')' . ' is: ' . $data['current']['temp_c'] . '°C';
    }
}
