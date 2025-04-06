<?php
$pageTitle = "Home";
include 'includes/header.php';
?>
<main>
    <section>
        <h2>Welcome to Our Online Bookstore</h2>
        <p>Discover a wide range of books across various genres. Whether you're into fiction, non-fiction, or fantasy, we have something for everyone!</p>
        <p>Explore our categories, read reviews, and find your next favorite book today.</p>
    </section>
    <section>
        <h3>Popular Genres</h3>
        <p>Click a genre to explore our titles!</p>
        <ul class="book-list">
            <a href="pages/books/action.php">
                <div class="book-card">
                    <li>Action</li>
                </div>
            </a>
            <a href="pages/books/fantasy.php">
                <div class="book-card">
                    <li>Fantasy</li>
                </div>
            </a>
            <a href="pages/books/fiction.php">
                <div class="book-card">
                    <li>Fiction</li>
                </div>
            </a>
            <a href="pages/books/romance.php">
                <div class="book-card">
                    <li>Romance</li>
                </div>
            </a>
            <a href="pages/books/shonen.php">
                <div class="book-card">
                    <li>Shonen</li>
                </div>
            </a>
            <a href="pages/books/sliceoflife.php">
                <div class="book-card">
                    <li>Slice of Life</li>
                </div>
            </a>
        </ul>
        <br><br>
    </section>
    <section>
        <h3>Customer Reviews</h3>
        <p>See what other readers are saying about our books:</p>
        <a href="reviews/reviews.php">Read Reviews</a>
    </section>
</main>
<?php include 'includes/footer.php'; ?>