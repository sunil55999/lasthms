<?php
require 'config.php';

if ($con) {
    echo "✅ Database connection successful!";
} else {
    echo "❌ Database connection failed: " . mysqli_connect_error();
}
?>
