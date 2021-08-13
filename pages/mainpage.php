<?php
  echo "Hello, World.<br><br>";

  if ($_SERVER["REQUEST_METHOD"] ==  "POST")
  {
    echo "Welcome <?php echo $_POST['name']; ?><br>";
  }
?>
<br>
<br>
<form action="mainpage.php" method="post">
  <label for="name">Enter Your Name: </label> 
  <input type="text" name="name"><br>
  <button>Give a greeting</button>
</form>
