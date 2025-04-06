<!-- filepath: includes/db.php -->
<?php
$host = 'localhost';
$dbname = 'jones94_comp3077';
$username = 'jones94_comp3077';
$password = 'weNjEtghAfkTkQjVRgVZ';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>