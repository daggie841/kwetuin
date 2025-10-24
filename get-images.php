<?php
$dir = "images/";
$images = [];

// allowed file types
$allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

if (is_dir($dir)) {
  foreach (scandir($dir) as $file) {
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (in_array($ext, $allowed)) {
      $images[] = $dir . $file;
    }
  }
}

echo json_encode($images);
?>
