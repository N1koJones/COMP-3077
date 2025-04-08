<!-- filepath: c:\Users\NikoJ\Desktop\Programming\School\COMP-3077\FinalProject\pages\static\wiki\book.php -->
<?php
// Set the page title for the current page
$pageTitle = "Book Page Guide";

// Include the header file for consistent page structure
include '../../../includes/header.php'; // Ensures the header is displayed on the page
?>
<main>
    <!-- Main heading of the page -->
    <h1>Book Page Guide</h1>
    <p>
        <!-- Introduction to the Book Page Guide -->
        Welcome to the Book Page Guide! This page explains how the dynamic 
        <strong>Book</strong> page works, its functionality, and the formatting used 
        to display book details.
    </p>

    <section>
        <!-- Section explaining the purpose of the book page -->
        <h2>Overview of the Dynamic Book Page</h2>
        <p>
            The <strong>Book</strong> page is a dynamic page that displays detailed information 
            about a specific book. It retrieves data from the database based on the book's unique ID 
            passed through the URL.
        </p>
    </section>

    <section>
        <!-- Section explaining how the book page works -->
        <h2>How It Works</h2>
        <p>The <strong>book.php</strong> page works as follows:</p>
        <ol>
            <li>
                <!-- Step 1: Retrieve the book ID from the URL -->
                The page retrieves the <code>id</code> parameter from the URL 
            </li>
            <li>
                <!-- Step 2: Query the database for book details -->
                It queries the database to fetch the details of the book associated with the given ID.
            </li>
            <li>
                <!-- Step 3: Display the book details dynamically -->
                The book's details, such as title, author, genre, description, price, and cover image, 
                are displayed dynamically on the page.
            </li>
        </ol>
        <p>
            <!-- Error handling for invalid or missing ID -->
            If the <code>id</code> parameter is missing or invalid, the page will display an error 
            message or redirect to a default page.
        </p>
    </section>

    <section>
        <!-- Section describing the formatting of the book page -->
        <h2>Formatting of the Book Page</h2>
        <p>
            The <strong>book.php</strong> page uses a clean and structured layout to display book details. 
            The formatting includes:
        </p>
        <ul>
            <li>
                <!-- Description of the book cover -->
                <strong>Book Cover:</strong> A large image of the book cover is displayed prominently 
                at the top of the page.
            </li>
            <li>
                <!-- Description of the book details -->
                <strong>Book Details:</strong> The title, author, genre, and price are displayed in a 
                structured format below the cover image.
            </li>
            <li>
                <!-- Description of the book description -->
                <strong>Description:</strong> A detailed description of the book is displayed in a 
                separate section.
            </li>
            <li>
                <!-- Description of user recommendations -->
                <strong>Recommendations:</strong> If available, user recommendations for the book are 
                displayed at the bottom of the page.
            </li>
        </ul>
    </section>

    <section>
        <!-- Section highlighting the features of the book page -->
        <h2>Features of the Book Page</h2>
        <p>The <strong>book.php</strong> page includes the following features:</p>
        <ul>
            <li>
                <!-- Feature: Dynamic content -->
                <strong>Dynamic Content:</strong> All book details are fetched dynamically from the 
                database based on the book's ID.
            </li>
            <li>
                <!-- Feature: Responsive design -->
                <strong>Responsive Design:</strong> The page is fully responsive and adapts to different 
                screen sizes, ensuring a great user experience on both desktop and mobile devices.
            </li>
            <li>
                <!-- Feature: User recommendations -->
                <strong>User Recommendations:</strong> Users can view recommendations for the book 
                submitted by other users.
            </li>
        </ul>
    </section>
</main>
<?php 
// Include the footer file for consistent page structure
include '../../../includes/footer.php'; // Ensures the footer is displayed on the page
?>