<?php

if (isset($_POST['login-submit'])) {

    require 'databasehandler.inc.php';

    $emailuid = $_POST['login-uid'];
    $password = $_POST['login-pwd'];

    if (empty($emailuid) || empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM adminusers WHERE username=? OR email=?;";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $emailuid, $emailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwd']);

                if($pwdCheck == false) {
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }
                else {
                    session_start();
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['uid'] = $row['username'];

                    header("Location: ../home.php?login=success");
                    exit();
                }
            }
            else {
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }

}

else {
    header("Location: ../index.php");
    exit();
}