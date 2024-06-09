<!DOCTYPE html>
<html>
<head>
  <title>My First Web Page</title>
</head>
<?php
if (!isset($_GET['username'])) die();
if ($_GET['username']!=='vetsinen') die();
?>
<body>

  <h1>Welcome to my <?php echo 4+2 ?> </h1>
  <p>This is a simple paragraph containing some text.</p>
</body>
</html>