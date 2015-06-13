<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>PHP Basics</title>

</head>
<body>

<h1>PHP Basics</h1>
<ul>
  <?php
      $dir = new DirectoryIterator('.');
      foreach($dir as $fileInfo) {
        echo "<li>{$fileInfo->getfilename()}</li>";
      }
  ?>
</ul>

</body>
</html>