<?php
session_start()
?>
<?php include("navigation.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Fakebook page2</title>
</head>

<body>
  <div class="container">
    <div class="sidebar-left">
    <form action="home.php" method="post" class="login-form">
        <label for="logout"></label>
        <input type="submit" name="logout" value="Logout"><br><br>

        <?php
        echo $_SESSION["username"] . "<br><br>";
        echo $_SESSION["password"];

        if (isset($_POST["logout"])) {

          session_destroy();
          header("location: index.php");
        };
        ?>
      </form>
    </div>

    <div class="main-content"></div>

    <div class="sidebar-right"></div>

  </div>
</body>
</html>

<?php include("footer.php") ?>