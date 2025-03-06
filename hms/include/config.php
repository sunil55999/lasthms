    <?php
    // Database configuration for Railway
    define('DB_SERVER', 'interchange.proxy.rlwy.net'); // Replace with your Railway host
    define('DB_USER', 'root'); // Railway username
    define('DB_PASS', 'HeRlbEZqGItFQHokaJcDoCvmOlZhjWOr'); // Railway password
    define('DB_NAME', 'railway'); // Railway database name

    date_default_timezone_set('UTC'); // Set timezone if needed

    // Create connection
    $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME, 53082);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>

