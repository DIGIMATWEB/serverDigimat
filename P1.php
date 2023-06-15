<?php
// Database connection parameters
$host = '35.236.89.248';        // Hostname
$port = '5432';             // Port
$user = 'postgres';    // Username
$password = 'n3l4nddb07*';// Password

// Establishing the database connection
try {
    $dsn = "pgsql:host=$host;port=$port;user=$user;password=$password";
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to the database successfully!';
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

// Performing a sample query
/*try {
    $query = 'SELECT geofence_desc FROM tab_geofences ORDER BY last_update ASC';
    $statement = $pdo->query($query);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    // Outputting the query result
    echo '<pre>';
    print_r($result);
    echo '</pre>';
} catch (PDOException $e) {
    die('Query failed: ' . $e->getMessage());
}*/
?>