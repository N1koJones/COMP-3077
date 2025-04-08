<!-- filepath: c:\Users\NikoJ\Desktop\Programming\School\COMP-3077\FinalProject\pages\dynamic\recommendations.php -->
<?php
// Set the page title for the Recommendations page
$pageTitle = "Recommendations";

// Include the header file for consistent page structure
include '../../includes/header.php'; // Corrected path to header.php

// Include the database connection file to interact with the database
include '../../includes/db.php'; // Corrected path to db.php

// Start the session to manage user authentication
session_start();

// Redirect to login if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: /pages/account/login.php'); // Redirect to login page
    exit; // Stop further execution
}

// Handle form submission for adding a recommendation
$addError = ''; // Variable to store error messages
$addSuccess = ''; // Variable to store success messages
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_recommendation'])) {
    $userId = $_SESSION['user_id']; // Get the logged-in user's ID
    $bookTitle = $_POST['book_title']; // Get the book title from the form
    $body = $_POST['body']; // Get the recommendation body from the form

    // Validate form inputs
    if (!empty($bookTitle) && !empty($body)) {
        try {
            // Insert the recommendation into the database
            $query = $pdo->prepare("INSERT INTO recommendations (user_id, book_title, body) VALUES (?, ?, ?)");
            $query->execute([$userId, $bookTitle, $body]);
            $addSuccess = 'Your recommendation has been added!'; // Success message
        } catch (PDOException $e) {
            $addError = 'Failed to add your recommendation. Please try again.'; // Error message
        }
    } else {
        $addError = 'Please fill in all fields.'; // Validation error message
    }
}

// Fetch the last 60 recommendations from the database
$query = $pdo->query("
    SELECT 
        users.username AS name, 
        recommendations.book_title, 
        recommendations.body, 
        recommendations.created_at 
    FROM recommendations
    INNER JOIN users ON recommendations.user_id = users.id
    ORDER BY recommendations.created_at DESC
    LIMIT 60
");
$recommendations = $query->fetchAll(PDO::FETCH_ASSOC); // Fetch recommendations as an associative array
?>
<main>
    <!-- Section for submitting a new recommendation -->
    <h2>Submit Your Recommendation</h2>
    <?php if ($addError): ?>
        <!-- Display error message if any -->
        <p style="color: red;"><?php echo htmlspecialchars($addError); ?></p>
    <?php endif; ?>
    <?php if ($addSuccess): ?>
        <!-- Display success message if any -->
        <p style="color: green;"><?php echo htmlspecialchars($addSuccess); ?></p>
    <?php endif; ?>
    <form method="POST" class="recommendation-form">
        <!-- Hidden input to identify the form submission -->
        <input type="hidden" name="add_recommendation" value="1">
        <label for="book_title">Book Title:</label>
        <input type="text" id="book_title" name="book_title" required>
        <br>
        <label for="body">Your Recommendation:</label>
        <textarea id="body" name="body" rows="5" required></textarea>
        <br>
        <button type="submit">Submit Recommendation</button>
    </form>
</main>

<!-- Recommendations Section -->
<section class="recommendations-container">
    <h2>Recent Recommendations</h2>
    <p>Here are some of the most popular manga recommendations from our users!</p>  
    <div class="recommendations-grid">
        <?php if (count($recommendations) > 0): ?>
            <!-- Loop through each recommendation and display it -->
            <?php foreach ($recommendations as $recommendation): ?>
                <div class="recommendation-card">
                    <h3><strong><?php echo htmlspecialchars($recommendation['book_title']); ?></strong></h3>
                    <strong><?php echo htmlspecialchars($recommendation['name']); ?></strong>
                    <p><?php echo htmlspecialchars($recommendation['body']); ?></p>
                    <small class="recommendation-date">Recommended on: <?php echo htmlspecialchars($recommendation['created_at']); ?></small>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <!-- Message displayed if no recommendations are found -->
            <p>No recommendations found.</p>
        <?php endif; ?>
    </div>
</section>
<?php 
// Include the footer file for consistent page structure
include '../../includes/footer.php'; // Corrected path to footer.php 
?>