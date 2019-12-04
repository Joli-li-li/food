<?php session_start();?>

<?php require_once "pages/head.php"; ?>



<?php
header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
header('Content-type: text/html; charset=UTF-8');
?>
                <img src="./images/404-page.jpg" alt="Error 404">

<?php require_once  "pages/footer.php";?>