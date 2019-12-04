<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<title>Healthy Recettes</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet"  href="css/style_pages.css">
    <link rel="stylesheet" type="text/css" href="css/news.css">
    <link rel="stylesheet"  href="css/menu.css">
    <link rel="stylesheet"  href="css/go_top.css">
    <link rel="stylesheet" type="text/css" href="css/toDoList.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dancing+Script|Great+Vibes" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/toDoList.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/go_top.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                "use strict";
                //================ Проверка email ==================
         
                //регулярное выражение для проверки email
                var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
                var mail = $('input[name=email]');
                 
                mail.blur(function(){
                    if(mail.val() != ''){
         
                        // Проверяем, если введенный email соответствует регулярному выражению
                        if(mail.val().search(pattern) == 0){
                            // Убираем сообщение об ошибке
                            $('#valid_email_message').text('');
         
                            //Активируем кнопку отправки
                            $('input[type=submit]').attr('disabled', false);
                        }else{
                            //Выводим сообщение об ошибке
                            $('#valid_email_message').text('Не правильный Email');
         
                            // Дезактивируем кнопку отправки
                            $('input[type=submit]').attr('disabled', true);
                        }
                    }else{
                        $('#valid_email_message').text('Введите Ваш email');
                    }
                });
         
                //================ Проверка длины пароля ==================
                var password = $('input[name=password]');
                 
                password.blur(function(){
                    if(password.val() != ''){
         
                        //Если длина введенного пароля меньше шести символов, то выводим сообщение об ошибке
                        if(password.val().length < 6){
                            //Выводим сообщение об ошибке
                            $('#valid_password_message').text('Минимальная длина пароля 6 символов');
         
                            // Дезактивируем кнопку отправки
                            $('input[type=submit]').attr('disabled', true);
                             
                        }else{
                            // Убираем сообщение об ошибке
                            $('#valid_password_message').text('');
         
                            //Активируем кнопку отправки
                            $('input[type=submit]').attr('disabled', false);
                        }
                    }else{
                        $('#valid_password_message').text('Введите пароль');
                    }
                });
            });
        </script>



</head>
<div id="header">
 
            <div id="auth_block">
            <?php
                //Проверяем авторизован ли пользователь
                if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
                    // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
            ?>
                    <div id="link_register">
                        <a href="form_register.php">SIGNUP</a>
                    </div>
             
                    <div id="link_auth">
                        <a href="form_auth.php">LOGIN</a>
                    </div>
            <?php
                }else{
                    //Если пользователь авторизован, то выводим ссылку Выход
            ?> 
                    <div id="link_logout">
                        <a href="logout.php">LOGOUT</a>
                    </div>
            <?php
                }
            ?>
            </div>
             <div class="clear"></div>
        </div>

    <div id="wrapper">
        <header>
		
            <div id="titre_principal">
                <div id="logo">
                    <a href="index.php"><img src="./images/logo.png" alt="logo du blog"></a>
                    <h1>Healthy  Recettes</h1>
                </div>
                <h2>HEALTHY FOOD BLOG</h2>
            </div>
		
			
			
        
        
            <nav id="menu-wrap">
				<ul class="menu">
					<li><a href="index.php">HOME</a></li>
					<li><a href="#">RECETTES</a>
				<ul>
					<li><a href="recettes.php">DISHES</a></li>
					<li><a href="snacks.php">SNACKS</a></li>
					<li><a href="drink.php">DRINK</a></li>
				</ul>
				</li>
					 <li><a href="news.php">NEWS</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
					<li><a href="video.php">VIDEO</a></li>
				</ul>
			</nav>

        </header>
<body>