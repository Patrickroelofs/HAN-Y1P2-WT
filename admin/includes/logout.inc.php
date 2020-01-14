<?php
//======================================================================
// Patrick Roelofs | 584025 | 16/01/2020
//======================================================================
?>
<?php

include '../../includes/dbh.inc.php';

session_start();
session_unset();
session_destroy();

header('Location: ../index.php');
exit();