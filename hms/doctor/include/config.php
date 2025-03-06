<?php
define('DB_SERVER', 'interchange.proxy.rlwy.net'); // Railway MySQL Host
define('DB_USER', 'root'); // Railway MySQL Username
define('DB_PASS', 'HeRlbEZqGItFQHokaJcDoCvmOlZhjWOr'); // Railway MySQL Password
define('DB_NAME', 'railway'); // Railway MySQL Database Name
define('DB_PORT', 53082); // Railway MySQL Port

// Establish connection
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME, DB_PORT);

// Check connection
if (!$con) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>
