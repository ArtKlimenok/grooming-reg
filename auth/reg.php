<html>

<head>
<meta charset="utf-8">
    <title>Чистая Тяфтеля</title>  
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<div class="shapka1">
  <center>
<table height="auto" class="shapka3"><tr><td>
<img class="dog" src="../pic/груминг3.svg" width="250" height="250">
</td><td>
<h1 class="text1">Груминг-студия</h1>
<h1 class="text2">Чистая Тяфтеля</h1>
</table>
<br><br>
</td></tr>
</center>
</div class="shapka1">
<br><br><br>
<center>
    <table class="content1"><tr><td>


<center>
    <div class="regg">
<form  action="signup.php" method="post">
<label>Ф.И.О.</lable>
<input type="text" name="fio" placeholder="Введите своё ФИО">
<br><br>
<label>Логин</lable>
<input type="text" name="login" placeholder="Придумайте логин">
<br><br>
<label>Почта</lable>
<input type="email" name="email" placeholder="Введите свою почту">
<br><br>
<label>Пароль</lable>
<input type="password" name="password" placeholder="Придумайте пароль">
<br><br>
<label>Подтвердите пароль</lable>
<input type="password" name="password_confirm" placeholder="Подтвердите пароль">
<br><br>
<label>Разрешить обработку персональных данных</lable>
<input type="checkbox" class="check" required/><label for="agree-reg"> </lable>
<br><br>
<button class="butt"type="submit">Зарегистрироваться</button>
<p>Уже зарегестрированы?<a class="urll" href="login.php"> Авторизируйтесь!</a></p>
 <?php
 if(isset($_SESSION['message'])){
     echo '    <p class="msg"> ' . $_SESSION['message'] . '</p>';
 }
 unset($_SESSION['message']);
    ?>
    <br><br>
<a class="urll" href="../index.php">Вернуться на главную</a>
</form>
<br>
</center>
</div>
    </table>    
    </center>  
</body>
</html>