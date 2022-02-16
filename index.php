<?php
session_start();
require_once 'conn/connect.php';
?>

<html>
<head>
<meta charset="utf-8">
    <title>Чистая Тяфтеля</title>  
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="shapka1">
  <center>
<table height="auto" class="shapka3"><tr><td>
<img class="dog" src="pic/груминг3.svg" width="250" height="250">
</td><td>
<h1 class="text1">Груминг-студия</h1>
<h1 class="text2">Чистая Тяфтеля</h1>
</table>
<br><br>
</td></tr>
</center>
</div class="shapka1">
<br><br><br>

    <table class="content1"><tr><td>

    <div class="inf" >  
  <a class="zagolovok">Стрижка - от 1499 рублей</a><br>
  <img class="dog" src="pic/мыть.png" width="120" height="120">

</div>

<br>

<div class="inf2" >  
  <a class="zagolovok">Мытье - от 999 рублей</a><br>
  <img class="dog" src="pic/стричь.png" width="120" height="120">

</div>
    </table>
 <div class="bot">
     
<br>

<div class="inf" >  
  <a class="zagolovok">Чистка зубов - от 1199 рублей</a><br>
  <img class="dog" src="pic/зубы.png" width="120" height="120">

</div>
    </table>
 <div class="bot">
     
<br>

<div class="inf2" >  
  <a class="zagolovok">Выгул - от 499 рублей</a><br>
  <img class="dog" src="pic/выгул.png" width="120" height="120">

</div>

<div class="inf3">
<form class="regis" action="auth/log.php" method="post">
<h1>Добро пожаловать!</h1>
<button class="butt">Войти</button>
<p>Впервые у нас?<a class="urll" href="auth/reg.php"> Зарегистрируйтесь!</a></p>
<?php
 if(isset($_SESSION['message'])){
     echo '    <p class="msg"> ' . $_SESSION['message'] . '</p>';
 }
 unset($_SESSION['message']);
    ?>
</form>
</div>


    </table>      
</body>
</html>