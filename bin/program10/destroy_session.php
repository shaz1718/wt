<?php
// Start the session
session_start();

// Destroy all session data
session_unset();  // Unset session variables
session_destroy();  // Destroy the session

// Redirect to the start session page
header("Location: start_session.php");
exit();
