<!-- filepath: c:\Users\NikoJ\Desktop\Programming\School\COMP-3077\FinalProject\pages\static\wiki\reccomendation.php -->
<?php
// Set the page title for the current page
$pageTitle = "Recommendations Page Guide";

// Include the header file for consistent page structure
include '../../../includes/header.php'; // Ensures the header is displayed on the page

?>
<main>
    <!-- Main heading of the page -->
    <h1>Recommendations Page Guide</h1>
    <p>
        <!-- Introduction to the Recommendations Page -->
        Welcome to the Recommendations Page Guide! This page explains how the dynamic 
        <strong>recommendations.php</strong> page works, its functionality, and the formatting used 
        to display user recommendations.
    </p>

    <section>
        <!-- Section explaining the purpose of the recommendations page -->
        <h2>Overview of the Recommendations Page</h2>
        <p>
            The <strong>recommendations.php</strong> page is a dynamic page that allows users to view 
            and submit recommendations for their favorite manga. It retrieves data from the database 
            and displays it in a structured format.
        </p>
        <p>
            Users must be logged in to submit recommendations, ensuring accountability and a personalized experience.
        </p>
    </section>

    <section>
        <!-- Section explaining how the recommendations page works -->
        <h2>How It Works</h2>
        <p>The <strong>Recommendations</strong> page works as follows:</p>
        <ol>
            <li>
                <!-- Step 1: Check if the user is logged in -->
                The page checks if the user is logged in. If not, they are redirected to the 
                <strong>login page</strong>.
            </li>
            <li>
                <!-- Step 2: Allow logged-in users to submit recommendations -->
                Logged-in users can submit recommendations using a form at the top of the page.
            </li>
            <li>
                <!-- Step 3: Collect book title and recommendation body -->
                The form collects the book title and a brief review or recommendation body.
            </li>
            <li>
                <!-- Step 4: Store recommendations in the database -->
                Submitted recommendations are stored in the database and displayed dynamically on the page.
            </li>
            <li>
                <!-- Step 5: Fetch and display the last 60 recommendations -->
                The page also fetches and displays the last 60 recommendations from the database, 
                sorted by the most recent submissions.
            </li>
        </ol>
    </section>

    <section>
        <!-- Section describing the formatting of the recommendations page -->
        <h2>Formatting of the Recommendations Page</h2>
        <p>
            The <strong>Recommendations</strong> page uses a clean and structured layout with the following formatting:
        </p>
        <ul>
            <li>
                <!-- Description of the submission form -->
                <strong>Submission Form:</strong> A form at the top of the page allows users to submit their recommendations. 
                It includes fields for the book title and recommendation body.
            </li>
            <li>
                <!-- Description of the recommendations grid -->
                <strong>Recommendations Grid:</strong> Recommendations are displayed in a responsive grid layout, 
                with two recommendations per row on larger screens.
            </li>
            <li>
                <!-- Description of the recommendation cards -->
                <strong>Recommendation Cards:</strong> Each recommendation is displayed in a card format, showing the book title, 
                the user's name, the recommendation body, and the submission date.
            </li>
        </ul>
    </section>

    <section>
        <!-- Section highlighting the features of the recommendations page -->
        <h2>Features of the Recommendations Page</h2>
        <p>The <strong>Recommendations</strong> page includes the following features:</p>
        <ul>
            <li>
                <!-- Feature: Dynamic content -->
                <strong>Dynamic Content:</strong> Recommendations are fetched dynamically from the database and displayed in real-time.
            </li>
            <li>
                <!-- Feature: Submission form -->
                <strong>Submission Form:</strong> Logged-in users can submit recommendations directly from the page.
            </li>
            <li>
                <!-- Feature: Responsive design -->
                <strong>Responsive Design:</strong> The page is fully responsive, ensuring a great user experience on both desktop and mobile devices.
            </li>
            <li>
                <!-- Feature: Optional pagination -->
                <strong>Pagination (Optional):</strong> If there are more than 60 recommendations, pagination can be implemented to navigate through older submissions.
            </li>
        </ul>
    </section>

    <section>
        <!-- Section providing help for recommendations -->
        <h2>Recommendations Help</h2>
        <p>
            If you need assistance with submitting or viewing recommendations, please watch the following instructional video:
        </p>
        <!-- Embed the video for recommendations help -->
        <video controls width="640" height="360">
            <source src="../../../assets/videos/Submission.mp4" type="video/mp4">
            Your browser does not support the video tag. Please download the video <a href="../../../assets/videos/Submission.mp4">here</a>.
        </video>
    </section>
</main>
<?php 
// Include the footer file for consistent page structure
include '../../../includes/footer.php'; // Ensures the footer is displayed on the page
?>