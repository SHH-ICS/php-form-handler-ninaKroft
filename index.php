<!DOCTYPE html>
<html lang="en-CA">
  <head>
    <title>First php web page</title>
    <meta charset="utf-8">
    <meta name="author" content="Nina Kroft">
    <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png" />
    <link rel="manifest" href="./images/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-lime.min.css" />
    <link rel="stylesheet" href="stylesheet.css" />
  </head>

  <body class="background">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <center><h1 id="title">NAME AND EMAIL FORM</h1></center>
  <h2 class="subtitle">Please fill out the form below:</h2>
    <form action="handler.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
  </body>
  
</html>
