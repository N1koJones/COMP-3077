<!-- filepath: pages/dynamic/book.php -->
<?php
// Include the database connection file to interact with the database
include '../../includes/db.php';

// Retrieve the book ID from the URL query parameter
$id = $_GET['id'];

// Prepare a query to fetch all details of the book with the given ID
$query = $pdo->prepare("SELECT * FROM books WHERE id = ?");
$query->execute([$id]); // Execute the query with the provided ID
$book = $query->fetch(PDO::FETCH_ASSOC); // Fetch the book details as an associative array

// Set the page title dynamically based on the book's title
$pageTitle = $book['title'];

// Include the header file for consistent page structure
include '../../includes/header.php';
?>
<main>
    <!-- Back button to return to the previous page -->
    <a href="javascript:history.back()" class="back-button">Back</a>
    
    <!-- Display the book title -->
    <h2><?php echo $book['title']; ?></h2>
    
    <!-- Display the book author -->
    <p><strong>Author:</strong> <?php echo $book['author']; ?></p>
    
    <!-- Display the book category -->
    <p><strong>Category:</strong> <?php echo $book['category']; ?></p>
    
    <!-- Display the book description -->
    <p><strong>Description:</strong> <?php echo $book['description']; ?></p>
    
    <!-- Display the book price -->
    <p><strong>Price:</strong> $<?php echo $book['price']; ?></p>
    
    <!-- Display the book cover image -->
    <img src="../../<?php echo $book['cover_image']; ?>" alt="Book Cover">
</main>
<?php 
// Include the footer file for consistent page structure
include '../../includes/footer.php'; 
?>