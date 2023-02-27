<!DOCTYPE html>
<html>
  <head>
    <title>First php web page</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png" />
    <link rel="manifest" href="./images/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-lime.min.css" />
  </head>

  <body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <?php
    echo "<h1>Hello, World!</h1>";
    ?>
    <form action="handler.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
  </body>
  
</html>
