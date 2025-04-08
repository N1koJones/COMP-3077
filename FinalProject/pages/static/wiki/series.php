<!-- filepath: c:\Users\NikoJ\Desktop\Programming\School\COMP-3077\FinalProject\pages\static\wiki\series.php -->
<?php
// Set the page title for the Series Recommendations Guide
$pageTitle = "Series Recommendations Guide";

// Include the header for consistent page structure
include '../../../includes/header.php';

?>
<main>
    <!-- Main heading for the Series Guide -->
    <h1>Series Guide</h1>
    <p>
        <!-- Introduction to the Series Guide -->
        Welcome to the Series Guide! This page explains how the Series page works. This works by
        allowing users to see all of the series that follow a specific genre. For example all Fantasy
        manga will be displayed together on the Fantasy Series page. 
    </p>

    <section>
        <!-- Section describing the formatting of the recommendations page -->
        <h2>Formatting of the Series Page</h2>
        <p>
            The <strong>Series</strong> page uses a clean and structured layout with the following formatting:
        </p>
        <ul>
            <li>
                <strong>Section Header:</strong> A header with the genre name and a back button to return to the main page.
            </li>
            <li>
                <strong>Series Cards:</strong> A card for each series in the selected genre, displaying the series title, a manga cover, and a button to view the series.
            </li>
        </ul>
    </section>

</main>
<?php 
// Include the footer for consistent page structure
include '../../../includes/footer.php'; 
?>