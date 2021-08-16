<?php
require 'index.html';
if (isset($_FILES["file"])) {
    $_SESSION['file'] = $_FILES["file"]["name"];

    if (file_exists("uploads/" . $_FILES["file"]["name"]))
    {
        echo $_FILES["file"]["name"] . " already exists. ";
    }
    else
    {
        move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/" . $_FILES["file"]["name"]);
    }

}
