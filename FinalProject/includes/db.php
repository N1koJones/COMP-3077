<!-- filepath: includes/db.php -->
<?php
// Database connection details
$host = 'localhost';          // Hostname of the database server
$dbname = 'jones94_comp3077'; // Name of the database
$username = 'jones94_comp3077'; // Database username
$password = 'weNjEtghAfkTkQjVRgVZ'; // Database password

try {
    // Create a new PDO instance to connect to the database
    // The DSN (Data Source Name) specifies the database type, host, and name
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception for better error handling
    // This ensures that any database errors throw exceptions, making them easier to debug
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If the connection fails, display an error message and terminate the script
    // Using die() here ensures the script stops execution if the database connection fails
    die("Database connection failed: " . $e->getMessage());
}
?>