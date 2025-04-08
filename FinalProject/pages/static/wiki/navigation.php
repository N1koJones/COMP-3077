<!-- filepath: c:\Users\NikoJ\Desktop\Programming\School\COMP-3077\FinalProject\pages\static\wiki\nav.php -->
<?php
// Set the page title for the current page
$pageTitle = "Navigation Guide";

// Include the header file for consistent page structure
include '../../../includes/header.php'; // Ensures the header is displayed on the page
?>
<main>
    <!-- Main heading of the page -->
    <h1>Navigation Guide</h1>
    <p>
        <!-- Introduction to the Navigation Guide -->
        Welcome to the Navigation Guide! This page explains how the dynamic 
        <strong>nav.php</strong> file works, its functionality, and the formatting used 
        to create a consistent navigation experience across the website.
    </p>

    <section>
        <!-- Section explaining the purpose of the navigation bar -->
        <h2>Overview of the Navigation Bar</h2>
        <p>
            The <strong>nav.php</strong> file is a dynamic navigation bar included at the top of every page. 
            It provides users with quick access to key sections of the website, such as the homepage, books, 
            recommendations, and account-related features.
        </p>
        <p>
            The navigation bar is designed to adapt based on the user's login status and role 
            (e.g., regular user or admin).
        </p>
    </section>

    <section>
        <!-- Section explaining the functionality of the navigation bar -->
        <h2>How It Works</h2>
        <p>The <strong>nav.php</strong> file works as follows:</p>
        <ol>
            <li>
                <!-- Step 1: Start a session to check the user's login status and role -->
                The file starts a session to check the user's login status and role.
            </li>
            <li>
                <!-- Step 2: Dynamically generate menu items based on the user's login state -->
                It dynamically generates menu items based on the user's login state:
                <ul>
                    <li>
                        <!-- If the user is not logged in -->
                        If the user is not logged in, the menu displays options to log in or register.
                    </li>
                    <li>
                        <!-- If the user is logged in -->
                        If the user is logged in, the menu displays options such as <strong>Profile</strong> 
                        and <strong>Logout</strong>.
                    </li>
                    <li>
                        <!-- If the user is an admin -->
                        If the user is an admin, additional options like <strong>Admin Tools</strong> 
                        and <strong>Admin Guide</strong> are displayed.
                    </li>
                </ul>
            </li>
            <li>
                <!-- Step 3: Ensure the navigation bar is responsive -->
                The navigation bar is styled to be responsive, ensuring it works well on both desktop 
                and mobile devices.
            </li>
        </ol>
    </section>

    <section>
        <!-- Section describing the formatting of the navigation bar -->
        <h2>Formatting of the Navigation Bar</h2>
        <p>The navigation bar uses a clean and structured layout with the following formatting:</p>
        <ul>
            <li>
                <!-- Description of the menu button -->
                <strong>Menu Button:</strong> A toggle button (<code>☰ Menu</code>) is displayed on smaller 
                screens to collapse or expand the menu.
            </li>
            <li>
                <!-- Description of dropdown menus -->
                <strong>Dropdown Menus:</strong> Submenus, such as the <strong>Books</strong> and 
                <strong>Wiki</strong> sections, use dropdowns to organize related links.
            </li>
            <li>
                <!-- Description of theme variables -->
                <strong>Theme:</strong> The navigation bar's colors and styles are controlled, ensuring consistency across themes (e.g., light, dark, contrast).
            </li>
        </ul>
    </section>

    <section>
        <!-- Section highlighting the features of the navigation bar -->
        <h2>Features of the Navigation Bar</h2>
        <p>The <strong>nav.php</strong> file includes the following features:</p>
        <ul>
            <li>
                <!-- Feature: Dynamic content -->
                <strong>Dynamic Content:</strong> The menu items are dynamically generated based on the 
                user's login status and role.
            </li>
            <li>
                <!-- Feature: Responsive design -->
                <strong>Responsive Design:</strong> The navigation bar adapts to different screen sizes, 
                with a collapsible menu for smaller devices.
            </li>
            <li>
                <!-- Feature: Dropdown menus -->
                <strong>Dropdown Menus:</strong> Dropdowns are used to organize links for sections like 
                <strong>Books</strong> and <strong>Wiki</strong>.
            </li>
            <li>
                <!-- Feature: Consistency -->
                <strong>Consistency:</strong> The navigation bar is included on every page, ensuring a 
                consistent user experience.
            </li>
        </ul>
    </section>
</main>
<?php 
// Include the footer file for consistent page structure
include '../../../includes/footer.php'; // Ensures the footer is displayed on the page
?>