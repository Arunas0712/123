<?php

function goBackWithError($message) {
    $_SESSION['notice'] = $message;

    header('Location: ' . $_SERVER['HTTP_REFERER']);

    exit;
}

if (isset($_FILES['image'])) {
    if (empty($_POST['description'])) {
        goBackWithError('Description required');
    }

    $allowed_images = ['jpg', 'png', 'jpeg'];

    $image_name = basename($_FILES['image']['name']);

    $image_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));

    if (in_array($image_ext, $allowed_images) == FALSE) {
        goBackWithError(sprintf('Sorry, only [%s] files are allowed.', implode(', ', $allowed_images)));
    }

    $image_size_data = getimagesize($_FILES['image']['tmp_name']);

    if ($image_size_data == false) {
        goBackWithError('File is not an image.');
    }

    if ($_FILES['image']['size'] > 500000) {
        goBackWithError('Sorry, your file is too large.');
    }

    $image_name = uniqid() . '-' . $image_ext;
    $image_path = TARGET_DIR . '/' .$image_name;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
        if (isset($_SESSION['images']) == FALSE) {
            $_SESSION['images'] = [];
        }

        $_SESSION['images'][] = [
            'name' => $image_name,
            'desc' => $_POST['description']
        ];

        header('Location: ' . $_SERVER['HTTP_REFERER']);

        exit;
    } else {
        goBackWithError('Sorry, there was an error uploading your file.');
    }
}