<?php
session_start();

if(isset($_SESSION['uid'])){
	header('Location: home.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin | Patrick Roelofs</title>

    <link rel="stylesheet" href="css/admin-stylesheet.css">
  </head>
  <body id="index">
    <header class="center">
      <h1><a href="#">Login</a></h1>
    </header>

    <section class="wrapper wrapper--flex wrapper--full">
        <main>
          <form id="loginform" method="post" action="includes/login.inc.php">
            <fieldset>
              <div>
                <label>Username</label>
                <input name="login-uid" type="text">
              </div>

              <div>
                <label>Password</label>
                <input name="login-pwd" type="password">
              </div>

              <div class="center">
                <button name="login-submit" class="button" type="submit">Login</button>
              </div>
            </fieldset>
          </form>
        </main>
    </section>
  </body>
</html>