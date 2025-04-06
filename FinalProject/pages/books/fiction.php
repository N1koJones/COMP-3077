<?php
$pageTitle = "Fiction Manga";
include '../../includes/header.php';
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
");
$query->execute(['Fiction']);
$books = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<main>
    <h2>Fiction Manga</h2>
    <ul class="book-list">
        <?php if (count($books) > 0): ?>
            <?php foreach ($books as $book): ?>
                <li class="book-container">
                    <div class="book-card">
                        <img src="../../<?php echo htmlspecialchars($book['cover_image']); ?>" alt="<?php echo htmlspecialchars($book['title']); ?> Cover">
                        <h3><?php echo htmlspecialchars($book['title']); ?></h3>
                        <form action="../dynamic/book.php" method="GET">
                            <input type="hidden" name="title" value="<?php echo htmlspecialchars($book['title']); ?>">
                            <button type="submit" class="view-series">View Series</button>
                        </form>
                    </div>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No books found in this category.</p>
        <?php endif; ?>
    </ul>
</main>
<?php include '../../includes/footer.php'; ?>