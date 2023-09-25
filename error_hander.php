<?php
$base_url = "http://localhost/home_tutor";

$request_uri = $_SERVER['REQUEST_URI'];


if (!isValidURL($request_uri)) {
    header("Location: {$base_url}/page_not_found.php");
    exit;
}
function isValidURL($url) {
    $valid_pages = array(
        '/index.php', 
        '/about.php',
        '/contact.php',
        './login.php',
        './register.php',
        './demo.php',
        './services.php',
        './policies.php'
    );

    // Check if the URL is NOT in the list of valid pages
    return !in_array($url, $valid_pages);
}
?>
