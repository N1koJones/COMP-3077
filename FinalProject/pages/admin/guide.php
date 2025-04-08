<!-- filepath: c:\Users\NikoJ\Desktop\Programming\School\COMP-3077\FinalProject\pages\admin\guide.php -->
<?php
// Set the page title for the Admin Guide page
$pageTitle = "Admin Guide";

// Include the header file for consistent page structure
include '../../includes/header.php'; // Adds the header to the page

// Start the session to manage user authentication
session_start();

// Redirect to login if the user is not logged in or not an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: /pages/account/login.php'); // Redirect to the login page
    exit; // Stop further execution
}
?>
<main>
    <!-- Main heading for the Admin Guide page -->
    <h1>Admin Guide</h1>
    <p>
        <!-- Introduction to the Admin Guide -->
        Welcome to the Admin Guide! This page explains the features and functionality available in the Admin Tools page.
    </p>

    <section>
        <!-- Section explaining the Add a Book feature -->
        <h2>Add a Book</h2>
        <p>
            The <strong>Add a Book</strong> feature allows administrators to add new books to the database. This includes providing details such as:
        </p>
        <ul>
            <li><strong>Title:</strong> The name of the book.</li>
            <li><strong>Author:</strong> The author of the book.</li>
            <li><strong>Main Category:</strong> The genre or category of the book (e.g., Action, Fantasy).</li>
            <li><strong>Volume:</strong> The volume number (optional, for series).</li>
            <li><strong>Description:</strong> A summary or description of the book.</li>
            <li><strong>Price:</strong> The price of the book.</li>
            <li>
                <strong>Cover Image:</strong> An image of the book cover, which is uploaded and resized to 660x1000 pixels.
            </li>
        </ul>
        <p>
            Once the form is submitted, the book is added to the database, and the cover image is saved in the 
            <code>assets/images/covers</code> directory.
        </p>
        <p>
            <strong>Validation:</strong> The form ensures all required fields are filled, and only valid image files (JPG, JPEG, PNG) are accepted.
        </p>
    </section>

    <section>
        <!-- Section providing help for adding a book -->
        <h2>Add Book Help</h2>
        <p>
            If you need assistance with adding a book, please watch the following instructional video:
        </p>
        <!-- Embed the video for adding a book -->
        <video controls width="640" height="360">
            <source src="../../assets/videos/addBook.mp4" type="video/mp4">
            Your browser does not support the video tag. Please download the video <a href="../../assets/videos/addBook.mp4">here</a>.
        </video>
    </section>

    <section>
        <!-- Section explaining the security features of the Admin Tools page -->
        <h2>Security Features</h2>
        <p>The Admin Tools page includes the following security measures:</p>
        <ul>
            <li>
                <strong>Role-Based Access:</strong> Only users with the <code>admin</code> role can access the page. 
                Non-admin users are redirected to the login page.
            </li>
            <li>
                <strong>Input Validation:</strong> All form inputs are validated to prevent invalid data from being submitted.
            </li>
            <li>
                <strong>Database Protection:</strong> Prepared statements are used for all database queries to prevent SQL injection attacks.
            </li>
        </ul>
    </section>
</main>
<?php 
// Include the footer file for consistent page structure
include '../../includes/footer.php'; // Adds the footer to the page
?>