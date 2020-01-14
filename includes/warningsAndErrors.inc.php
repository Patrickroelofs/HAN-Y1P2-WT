<?php
//======================================================================
// Patrick Roelofs | 584025 | 16/01/2020
//======================================================================
?>
<?php

if(empty($_GET)){

}else if($_GET['message'] == 'success') {

    echo "<div class='success'><p>". $message ."</p></div>";

} else if ($_GET['message'] == 'warning') {

    echo "<div class='warning'><p>". $message ."</p></div>";

} else if ($_GET['message'] == 'error') {

    echo "<div class='error'><p>". $message ."</p></div>";

}