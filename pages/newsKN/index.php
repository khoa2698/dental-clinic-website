<?php

require_once "core/init.php";

// Bảo trì
if ($data_web['status'] == 0) {
    require 'templates/shutdown.php';
    exit;
}

// Header
require_once "includes/header.php";

// Content
require_once "templates/content.php";

// Footer
require_once "includes/footer.php";
?>