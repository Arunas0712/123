
<?php

session_start();

define('TARGET_DIR', 'uploads');

require 'template.phtml';

if (isset($_SESSION['notice'])) {
    unset($_SESSION['notice']);
}

require 'upload.php';