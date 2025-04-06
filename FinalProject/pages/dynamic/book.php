<!-- filepath: pages/dynamic/book.php -->
<?php
include '../../includes/db.php';

$id = $_GET['id'];
$query = $pdo->prepare("SELECT * FROM books WHERE id = ?");
$query->execute([$id]);
$book = $query->fetch(PDO::FETCH_ASSOC);

$pageTitle = $book['title'];
include '../../includes/header.php';
?>
<main>
    <a href="javascript:history.back()" class="back-button">Back</a>
    <h2><?php echo $book['title']; ?></h2>
    <p><strong>Author:</strong> <?php echo $book['author']; ?></p>
    <p><strong>Category:</strong> <?php echo $book['category']; ?></p>
    <p><strong>Description:</strong> <?php echo $book['description']; ?></p>
    <p><strong>Price:</strong> $<?php echo $book['price']; ?></p>
    <img src="../../<?php echo $book['cover_image']; ?>" alt="Book Cover">
</main>
<?php include '../../includes/footer.php'; ?>