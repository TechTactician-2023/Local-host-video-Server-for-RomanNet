<!DOCTYPE html>
<html>
<head>
 <title>test</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!-- Hero Header -->
<header class="hero-header">
    <!-- Background Image -->
    <div class="background-image"></div>

    <!-- Header Content -->
    <div class="header-content">
      <h1>Welcome to Roman Net</h1>
    </div>
  </header>

  <!-- File Download Section -->
  <section class="file-download-section">
    <div class="container">
      <h2>Download from here!</h2>
  <?php
   // get a list of all files in the "uploads" directory
   $files = scandir("uploads");

   echo "<ul>";

   // display each file as a link to download it
   foreach ($files as $file) {
    if ($file != "." && $file != "..") {
     echo " <li> <p> -  <a href='download.php?file=$file'>$file</a> </p></li> ";
    }
   }

   echo "</ul>";
  ?>
 </div>
</body>
</html>
