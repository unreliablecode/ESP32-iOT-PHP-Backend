<?php
session_start();

// Get relay data from POST request and update session.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $relays = [$_POST['relay1'], $_POST['relay2'], $_POST['relay3'], $_POST['relay4']];
    $_SESSION['relays'] = array_map('intval', $relays);  // Store relay states as integers
}

header("Location: index.php");
exit;
?>
