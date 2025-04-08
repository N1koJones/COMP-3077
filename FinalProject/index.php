<?php
// Set the page title for the homepage
$pageTitle = "Home";

// Include the header file for consistent page structure
include 'includes/header.php'; // Ensures the header is displayed on the page
?>
<main>
    <section>
        <!-- Welcome section introducing the website -->
        <h2>Welcome to Our Online Bookstore</h2>
        <p>
            Discover a wide range of books across various genres. Whether you're into fiction, non-fiction, 
            or fantasy, we have something for everyone! <!-- Brief introduction to the website -->
        </p>
        <p>
            Explore our categories, read reviews, and find your next favorite book today. <!-- Encourages users to explore -->
        </p>
    </section>
    <section>
        <!-- Section showcasing popular genres -->
        <h3>Popular Genres</h3>
        <p>Click a genre to explore our titles!</p> <!-- Instruction for users -->
        <ul class="book-list">
            <!-- Genre links displayed as clickable cards -->
            <a href="pages/books/action.php"> <!-- Link to the Action genre page -->
                <div class="book-card">
                    <li>Action</li> <!-- Action genre -->
                </div>
            </a>
            <a href="pages/books/fantasy.php"> <!-- Link to the Fantasy genre page -->
                <div class="book-card">
                    <li>Fantasy</li> <!-- Fantasy genre -->
                </div>
            </a>
            <a href="pages/books/fiction.php"> <!-- Link to the Fiction genre page -->
                <div class="book-card">
                    <li>Fiction</li> <!-- Fiction genre -->
                </div>
            </a>
            <a href="pages/books/romance.php"> <!-- Link to the Romance genre page -->
                <div class="book-card">
                    <li>Romance</li> <!-- Romance genre -->
                </div>
            </a>
            <a href="pages/books/shonen.php"> <!-- Link to the Shonen genre page -->
                <div class="book-card">
                    <li>Shonen</li> <!-- Shonen genre -->
                </div>
            </a>
            <a href="pages/books/sliceoflife.php"> <!-- Link to the Slice of Life genre page -->
                <div class="book-card">
                    <li>Slice of Life</li> <!-- Slice of Life genre -->
                </div>
            </a>
        </ul>
        <br><br> <!-- Adds spacing between sections -->
    </section>
    <section>
        <!-- Section highlighting customer reviews -->
        <h3>Customer Reviews</h3>
        <p>See what other readers are saying about our books:</p> <!-- Encourages users to read reviews -->
        <!-- Link to the reviews page -->
        <a href="reviews/reviews.php">Read Reviews</a> <!-- Redirects to the reviews page -->
    </section>
</main>
<?php 
// Include the footer file for consistent page structure
include 'includes/footer.php'; // Ensures the footer is displayed on the page
?>