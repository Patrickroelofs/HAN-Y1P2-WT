<?php
session_start();
$accountExists = true;

if(isset($_SESSION['uid'])){
	header('Location: home.php');
	exit();
}

if($accountExists == true){
    header("Location: home.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Register</title>

      <?php include('imports/head.php'); ?>
  </head>
  <body id="index">
  <?php include('../includes/adminBar.inc.php'); ?>
    <header class="center">
      <h1><a href="index.php">Register</a></h1>
    </header>

    <section class="wrapper wrapper--flex wrapper--full">
        <main>
          <form id="loginform" action="includes/register.inc.php" method="POST">
            <fieldset>
              <div>
                <label>Username</label>
                <input name="uid" type="text">
              </div>

              <div>
                <label>Email</label>
                <input name="email" type="email">
              </div>

              <div>
                <label>Password</label>
                <input name="pwd" type="password">
              </div>

              <div>
                <label>re-type Password</label>
                <input name="pwd-repeat" type="password">
              </div>

              <div class="center">
                <button name="register-submit" class="button" type="submit">Register</button>
              </div>
            </fieldset>
          </form>
        </main>
    </section>
  </body>
</html>