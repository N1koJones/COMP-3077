<?php
// Set the page title for the Fiction Manga page
$pageTitle = "Fiction Manga";

// Include the header file for consistent page structure
include '../../includes/header.php';

// Include the database connection file to interact with the database
include '../../includes/db.php';

// Fetch fiction manga from the database
$query = $pdo->prepare("
    SELECT b.*
    FROM books b
    INNER JOIN (
        SELECT title, MIN(volume) AS first_volume
        FROM books
        WHERE volume IS NOT NULL
        GROUP BY title
    ) first_volumes
    ON b.title = first_volumes.title AND b.volume = first_volumes.first_volume
    WHERE b.main_category = ?
"); // Query to fetch the first volume of each Fiction manga series
$query->execute(['Fiction']); // Execute the query with the category 'Fiction'
$books = $query->fetchAll(PDO::FETCH_ASSOC); // Fetch the results as an associative array
?>
<main>
    <!-- Back button to return to the previous page -->
    <a href="javascript:history.back()" class="back-button">Back</a>
    
    <!-- Page heading -->
    <h2>Fiction Manga</h2>
    
    <!-- List of books in the Fiction category -->
    <ul class="book-list">
        <?php if (count($books) > 0): ?>
            <!-- Loop through each book and display its details -->
            <?php foreach ($books as $book): ?>
                <li class="book-container">
                    <div class="book-card">
                        <!-- Display the book's cover image -->
                        <img src="../../<?php echo htmlspecialchars($book['cover_image']); ?>" alt="<?php echo htmlspecialchars($book['title']); ?> Cover">
                        
                        <!-- Display the book's title -->
                        <h3><?php echo htmlspecialchars($book['title']); ?></h3>
                        
                        <!-- Form to navigate to the series page for the selected book -->
                        <form action="../dynamic/series.php" method="GET">
                            <!-- Pass the book's title as a hidden input -->
                            <input type="hidden" name="title" value="<?php echo htmlspecialchars($book['title']); ?>">
                            <button type="submit" class="view-series">View Series</button>
                        </form>
                    </div>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <!-- Message displayed if no books are found in the category -->
            <p>No books found in this category.</p>
        <?php endif; ?>
    </ul>
</main>
<?php 
// Include the footer file for consistent page structure
include '../../includes/footer.php'; 
?>