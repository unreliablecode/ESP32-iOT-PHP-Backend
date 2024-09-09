<?php
session_start();

// If relays are not set in session, initialize them to 0 (off).
if (!isset($_SESSION['relays'])) {
    $_SESSION['relays'] = [0, 0, 0, 0];  // Four relays, all off initially
}

echo json_encode($_SESSION['relays']);
?>
