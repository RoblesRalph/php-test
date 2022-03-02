<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
  <?php
    if ($_SERVER["REQUEST_METHOD"] ==  "POST")
    {
      echo "<p>Hello, " . $_POST["name"] . "!</p><br>";
    }
    else
    {
      echo "Hello, World.<br><br>";
    }
  ?>
  <br>
  <br>
  <form action="mainpage.php" method="post">
    <label for="name">Enter Your Name: </label> 
    <input type="text" name="name"><br>
    <button type="submit">Give a greeting</button>
  </form>
</body>
</html>
