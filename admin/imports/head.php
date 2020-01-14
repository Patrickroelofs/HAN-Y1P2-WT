<?php
include '../includes/dbh.inc.php';

$stmt = $connection->query('SELECT * FROM setup');
$row = $stmt->fetch(PDO::FETCH_OBJ);
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<meta name="author" content="<?php echo $row->author; ?>">
<meta name="description" content="<?php echo $row->description; ?>">
<meta name="keywords" content="<?php echo $row->keywords; ?>">

<link rel="apple-touch-icon" sizes="180x180" href="../../images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon/favicon-16x16.png">
<link rel="manifest" href="../../images/favicon/site.webmanifest">

<link rel="stylesheet" href="../css/stylesheet.css">
<link rel="stylesheet" href="css/admin-stylesheet.css">