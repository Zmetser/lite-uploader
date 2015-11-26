<?php

if ($_FILES['foobar']['name']) {
    $uploadedUrl = 'uploads/' . $_FILES['foobar']['name'];
    move_uploaded_file($_FILES['foobar']['tmp_name'], $uploadedUrl);
}

echo json_encode([
  'post' => $_POST,
  'file' => $_FILES
]);
exit;