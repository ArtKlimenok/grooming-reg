<?php
session_start(); 
require_once '../conn/connect.php';
if(!$_SESSION['user']){
    header('location: polz.php');
   
}
?>
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
<center><center>
    <table class="content1"><tr><td>

    <div class="inf" >  
    <h2>Это ваш профиль, <?= $_SESSION['user']['fio']?>.</h2>
    <br><br>
    <a class="urll" href="logout.php" class="logout"> Выйти</a>
    </div>

    </table>    
</center> </center>  
</body>
</html>