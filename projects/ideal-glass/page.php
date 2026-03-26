<?php
// Define a constant to prevent direct access to sub-files if needed
define('SECURE_ACCESS', true);

// 1. Load Header
if (file_exists('header.php')) {
    include_once 'header.php';
}

// 2. Main Content Area
echo '<main id="main-content">';

    $section = 'example-section'; // This would be dynamic based on your logic
    $sections = "sections/{$section}.php";

    if (file_exists($section_path)) {
        include $sections["path"];
    }

echo '</main>';

// 3. Load Footer
if (file_exists('footer.php')) {
    include_once 'footer.php';
}
