<?php
 
 $upload_dir = 'uploads/';
 $target_file = $upload_dir . basename($_FILES['file']['name']);

 if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
  header('Location: index.php');
 } else {
  die('Error uploading file.');
 }
?>