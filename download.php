<?php
 // make sure the user requested a file
 if (!isset($_GET['file'])) {
  die('File not found.');
 }

 // set the file path and name
 $file = 'uploads/' . $_GET['file'];

 // make sure the file exists
 if (!file_exists($file)) {
  die('File not found.');
 }

 // get the file size and type
 $file_size = filesize($file);
 $file_type = mime_content_type($file);

 // set the headers for the download
 header("Content-Disposition: attachment; filename=" . basename($file));
 header("Content-Type: $file_type");
 header("Content-Length: $file_size");

 // send the file to the user
 readfile($file);
?>
