<?php
    header('Content-Type: text/html; charset=utf-8');
 
    $server = "localhost"; /* имя хоста */
    $username = "root"; /* Имя пользователя БД */
    $password = ""; /* Пароль пользователя */
    $database = "admin"; /* Имя базы данных*/
     
    $mysqli = new mysqli($server, $username, $password, $database);
  
    if (mysqli_connect_errno()) { 
        echo "<p><strong>Ошибка подключения к БД</strong>. Описание ошибки: ".mysqli_connect_error()."</p>";
        exit(); 
    }
 
    $mysqli->set_charset('utf8');
?>