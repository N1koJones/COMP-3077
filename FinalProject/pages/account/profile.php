<?php
// Start the session to manage user authentication
session_start();

// Redirect to the login page if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: /pages/account/login.php'); // Redirect to login page
    exit; // Stop further execution
}

// Set the page title for the Profile page
$pageTitle = "Profile";

// Include the header file for consistent page structure
include '../../includes/header.php';
?>
<main>
    <!-- Display a welcome message with the user's username -->
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>This is your profile page.</p>
</main>
<?php 
// Include the footer file for consistent page structure
include '../../includes/footer.php'; 
?>