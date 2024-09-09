<?php
// Store the temperature in a session or database as needed.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $temperature = $data['temperature'];
    
    // Store in session for demo purposes (you could use a database).
    session_start();
    $_SESSION['temperature'] = $temperature;

    echo "Temperature received: " . $temperature . "°C";
}
?>
