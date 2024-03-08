<?php

$apiKey = '3W3jltT4zpyqAmv7aNXc9WI2mBHu8Yas4MdbP263'; // Replace with your Cohere API Key
$prompt = "list me 1 recent movie with the highest rating and with aliens in it"; // Your initial message

// Construct the payload
$data = [
    'model' => 'command',
    'message' => $prompt,
    'temperature' => 0.3,
     // ... (rest of your configuration)
];

// Initialize cURL
$ch = curl_init('https://api.cohere.ai/v1/chat');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $apiKey,
    'Content-Type: application/json'
));

// Execute and process the response
$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpcode == 200) {
    // echo $response; 
} else {
    echo "API request failed with code: " . $httpcode;
}


if ($httpcode == 200) {
    $data = json_decode($response, true);  // Decode JSON into an associative array

    if (isset($data['text'])) {

        echo $data['text'];  // Display the movie description
    } else {
        echo "Could not extract movie description from response";
    }
} else {
    // ... (your existing error handling)
}