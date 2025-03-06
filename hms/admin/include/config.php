<?php
// Database configuration for Railway
define('DB_SERVER', 'interchange.proxy.rlwy.net'); // Railway host
define('DB_USER', 'root'); // Railway username
define('DB_PASS', 'HeRlbEZqGItFQHokaJcDoCvmOlZhjWOr'); // Railway password
define('DB_NAME', 'railway'); // Railway database name
define('DB_PORT', 53082); // Railway port

// Create connection
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME, DB_PORT);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
