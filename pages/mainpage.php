<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
</head>
<body>
  <?php
    echo "Hello, World.<br><br>";
  ?>
  <br>
  <br>
  <form action="greeting.php" method="post">
    <label for="name">Enter Your Name: </label> 
    <input type="text" name="name"><br>
    <button type="submit">Give a greeting</button>
  </form>
</body>
</html>

