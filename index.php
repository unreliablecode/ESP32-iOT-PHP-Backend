<?php
session_start();

// Get current temperature from session.
$temperature = isset($_SESSION['temperature']) ? $_SESSION['temperature'] : 'No data';

// Get relay states from session.
$relays = isset($_SESSION['relays']) ? $_SESSION['relays'] : [0, 0, 0, 0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ESP32 Control and Monitoring</title>
</head>
<body>
    <h1>ESP32 Control and Monitoring</h1>
    
    <h2>Temperature: <?php echo $temperature; ?>°C</h2>

    <h2>Relay Control</h2>
    <form action="control-relays.php" method="POST">
        <label for="relay1">Relay 1</label>
        <input type="checkbox" name="relay1" value="1" <?php if ($relays[0]) echo 'checked'; ?>><br>

        <label for="relay2">Relay 2</label>
        <input type="checkbox" name="relay2" value="1" <?php if ($relays[1]) echo 'checked'; ?>><br>

        <label for="relay3">Relay 3</label>
        <input type="checkbox" name="relay3" value="1" <?php if ($relays[2]) echo 'checked'; ?>><br>

        <label for="relay4">Relay 4</label>
        <input type="checkbox" name="relay4" value="1" <?php if ($relays[3]) echo 'checked'; ?>><br>

        <button type="submit">Update Relay Status</button>
    </form>
</body>
</html>
