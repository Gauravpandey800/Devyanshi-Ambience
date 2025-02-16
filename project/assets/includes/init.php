<?php
// Get the project root directory
define('PROJECT_ROOT', __DIR__ . '/../../');  // Corrected definition

// Include configuration
require_once PROJECT_ROOT . '/config/config.php';

// Function to safely include files with full path resolution
function include_template($file) {
    $filepath = PROJECT_ROOT . '/assets/includes/' . $file . '.php';
    if (!file_exists($filepath)) {
        throw new Exception("Template file not found: " . $file . '.php');
    }
    return include $filepath;
}

// Function to set page title
function set_page_title($title) {
    global $page_title;
    $page_title = htmlspecialchars($title . ' - ' . SITE_NAME);
}

// Error handling
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    throw new Exception("Error: $errstr in $errfile on line $errline");
});
