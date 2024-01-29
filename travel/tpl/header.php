<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale = 1, shrink-to-fit = no">
  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <link rel="stylesheet" href="css/style.css" >
  <script src = "https://unpkg.com/react@16/umd/react.development.js"></script>
  <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
  
  <script src = "https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
  <title>Сайт туристической компании</title>
</head>
<body class="body-top">
  <div id="content">
    <header class = "container-fluid">
      <div class="row">
        <div class="col-3">
          <img id="logo" src="img/logo.jpg">
        </div>
        <div class="col-9">
          <h1>Путешествуйте с нами!</h1>
        </div>
      </div>
<?php
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
?>
<div class= "row">
  <div class="col">
    <div id="auth_block">
      <div id="link_register">
        <a href = "../register.php">Регистрация</a>
      </div>
      <div id="link_auth">
      <a href = "../avtor.php">Авторизация</a>
    </div>
  </div>
</div>
</div>
<?php
}
else
{
?>
<div class="row">
  <div class="col">
    <div id="exit_block">
      <div id="link_remark">
        <a href= "remarks.php">Вы можете оставить отзыв</a>
      </div>
      <div id="link_exit">
        <a href = "exit.php">Выход</a>
      </div>
    </div>
  </div>
</div>
<?php
}
?>
</header>