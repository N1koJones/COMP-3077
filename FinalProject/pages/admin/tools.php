<!-- filepath: c:\Users\NikoJ\Desktop\Programming\School\COMP-3077\FinalProject\pages\admin\tools.php -->
<?php
// Set the page title for the Admin Tools page
$pageTitle = "Admin Tools";

// Include the header file for consistent page structure
include '../../includes/header.php'; // Corrected path to header.php

// Start the session to manage user authentication
session_start();

// Redirect to login if the user is not logged in or not an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: /pages/account/login.php'); // Redirect to login page
    exit; // Stop further execution
}

// Initialize variables for error and success messages
$addBookError = ''; // Variable to store error messages for adding a book
$addBookSuccess = ''; // Variable to store success messages for adding a book
$makeAdminError = ''; // Variable to store error messages for making an admin
$makeAdminSuccess = ''; // Variable to store success messages for making an admin

// Handle form submission for adding a book
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_book'])) {
    $title = $_POST['title']; // Get the book title from the form
    $author = $_POST['author']; // Get the author name from the form
    $mainCategory = $_POST['main_category']; // Get the main category from the form
    $volume = !empty($_POST['volume']) ? intval($_POST['volume']) : null; // Get the volume (optional)
    $description = $_POST['description']; // Get the book description from the form
    $price = $_POST['price']; // Get the book price from the form
    $coverImage = $_FILES['cover_image']; // Get the uploaded cover image

    // Validate required fields
    if (!empty($title) && !empty($author) && !empty($mainCategory) && !empty($description) && !empty($price) && $coverImage['size'] > 0) {
        // Handle image upload and resizing
        $targetDir = '../../assets/images/covers/'; // Directory to store cover images
        $targetFile = $targetDir . basename($coverImage['name']); // Full path for the uploaded file
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Get the file extension
        $allowedTypes = ['jpg', 'jpeg', 'png']; // Allowed file types

        if (in_array($imageFileType, $allowedTypes)) {
            // Resize the image to 660x1000 pixels
            list($width, $height) = getimagesize($coverImage['tmp_name']); // Get original image dimensions
            $newWidth = 660; // Set new width
            $newHeight = 1000; // Set new height
            $imageResized = imagecreatetruecolor($newWidth, $newHeight); // Create a blank canvas for the resized image

            // Create an image resource based on the file type
            if ($imageFileType === 'jpg' || $imageFileType === 'jpeg') {
                $image = imagecreatefromjpeg($coverImage['tmp_name']);
            } elseif ($imageFileType === 'png') {
                $image = imagecreatefrompng($coverImage['tmp_name']);
            }

            // Resize the image
            imagecopyresampled($imageResized, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

            // Save the resized image with a unique name
            $newFileName = $targetDir . uniqid() . '.' . $imageFileType;
            if ($imageFileType === 'jpg' || $imageFileType === 'jpeg') {
                imagejpeg($imageResized, $newFileName);
            } elseif ($imageFileType === 'png') {
                imagepng($imageResized, $newFileName);
            }

            // Free memory used by the image resources
            imagedestroy($image);
            imagedestroy($imageResized);

            // Insert the book into the database
            try {
                include '../../includes/db.php'; // Corrected path to db.php
                $query = $pdo->prepare("
                    INSERT INTO books (title, author, main_category, volume, description, price, cover_image)
                    VALUES (?, ?, ?, ?, ?, ?, ?)
                ");
                $query->execute([$title, $author, $mainCategory, $volume, $description, $price, $newFileName]); // Execute the query
                $addBookSuccess = 'Book added successfully!'; // Success message
            } catch (PDOException $e) {
                $addBookError = 'Failed to add the book. Please try again.'; // Error message
            }
        } else {
            $addBookError = 'Invalid file type. Only JPG, JPEG, and PNG files are allowed.'; // File type error message
        }
    } else {
        $addBookError = 'Please fill in all required fields and upload a valid cover image.'; // Validation error message
    }
}
?>
<main>
    <!-- Admin Tools page heading -->
    <h1>Admin Tools</h1>
    <p>Welcome to the Admin Tools page. Here, you can add new books to the database and manage user roles.</p>

    <section>
        <!-- Section for adding a book -->
        <h2>Add a Book</h2>
        <?php if ($addBookError): ?>
            <!-- Display error message if any -->
            <p style="color: red;"><?php echo htmlspecialchars($addBookError); ?></p>
        <?php endif; ?>
        <?php if ($addBookSuccess): ?>
            <!-- Display success message if any -->
            <p style="color: green;"><?php echo htmlspecialchars($addBookSuccess); ?></p>
        <?php endif; ?>
        <form method="POST" enctype="multipart/form-data" class="add-book-form">
            <!-- Form fields for adding a book -->
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            <br>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required>
            <br>
            <label for="main_category">Main Category:</label>
            <input type="text" id="main_category" name="main_category" required>
            <br>
            <label for="volume">Volume (Optional):</label>
            <input type="number" id="volume" name="volume">
            <br>
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="5" required></textarea>
            <br>
            <label for="price">Price:</label>
            <input type="number" step="0.01" id="price" name="price" required>
            <br>
            <label for="cover_image">Cover Image:</label>
            <input type="file" id="cover_image" name="cover_image" accept="image/*" required>
            <br>
            <button type="submit" name="add_book">Add Book</button>
        </form>
    </section>
</main>

<script>
    // Confirmation dialog for making a user an admin
    function confirmMakeAdmin() {
        const username = document.getElementById('username').value;
        return confirm(`Are you sure you want to make '${username}' an administrator?`);
    }
</script>

<?php 
// Include the footer file for consistent page structure
include '../../includes/footer.php'; // Corrected path to footer.php 
?>