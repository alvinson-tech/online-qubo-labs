<?php
// InfinityFree Database Configuration
define('DB_HOST', 'sql200.infinityfree.com'); // Replace XXX with your actual number
define('DB_USER', 'if0_40415211');     // Your database username
define('DB_PASS', 'oRFW9jL4YJtG');        // Your database password
define('DB_NAME', 'if0_40415211_qubo_labs');   // Your database name

// Create connection
function getDBConnection() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}

// Close connection
function closeDBConnection($conn) {
    if ($conn) {
        $conn->close();
    }
}
?>