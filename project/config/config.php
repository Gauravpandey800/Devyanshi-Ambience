<?php
// Site configuration
define('SITE_NAME', 'Devyanshi Ambience');
define('DEBUG', true);

// Error reporting based on environment
if (DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}
