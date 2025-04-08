<?php
// Include the header for consistent page structure
include '../../includes/header.php';

// Include the database connection file to interact with the database
include '../../includes/db.php';

// Get the series title from the query parameter
// If no title is provided, default to an empty string
$title = isset($_GET['title']) ? $_GET['title'] : '';

// Fetch all volumes of the same series from the database
$query = $pdo->prepare("
    SELECT * 
    FROM books 
    WHERE title = ?
    ORDER BY volume ASC
");
// Execute the query with the provided title
$query->execute([$title]);
// Fetch all matching books as an associative array
$books = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<main>
    <!-- Back button to return to the previous page -->
    <a href="javascript:history.back()" class="back-button">Back</a>
    
    <!-- Display the series title -->
    <h2><?php echo htmlspecialchars($title); ?></h2>
    
    <!-- List of books in the series -->
    <ul class="book-list">
        <?php if (count($books) > 0): ?>
            <!-- Loop through each book and display its details -->
            <?php foreach ($books as $book): ?>
                <li class="book-container">
                    <div class="book-card">
                        <!-- Display the book's cover image -->
                        <img src="../../<?php echo htmlspecialchars($book['cover_image']); ?>" alt="<?php echo htmlspecialchars($book['title']); ?> Cover">
                        
                        <!-- Display the book's title and volume -->
                        <h3><?php echo htmlspecialchars($book['title']) . "<br>Volume " . htmlspecialchars($book['volume']); ?></h3>
                        
                        <!-- Form to navigate to the specific book's page -->
                        <form action="../dynamic/book.php" method="GET">
                            <!-- Pass the book's ID as a hidden input -->
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($book['id']); ?>">
                            <button type="submit" class="view-series">See Volume</button>
                        </form>
                    </div>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <!-- Message displayed if no volumes are found -->
            <p>No volumes found for this series.</p>
        <?php endif; ?>
    </ul>
</main>
<?php 
// Include the footer for consistent page structure
include '../../includes/footer.php'; 
?>