<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<html>

<head>
  <title>Iniciar Sesión</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <style type="text/css">
    .foto1 {
      padding: 0px;
    float: left;
    width: 555px;
    display: block;
    height: 368px;

    }

    .login {
      padding: 0px;
      margin: 0px;
      float: right;
      width: 443px;
      text-align: center;

    }

    .boton {
      font-size: 12px;
      font-family: Verdana, Helvetica;
      font-weight: bold;
      color: white;
      background: #638cb5;
      border: -1px;
      height: 43px;
    }

    .vl {
      border-left: 6px solid green;

      height: 337px;
    margin: 39px;
    }

    .Table {
      position: absolute;
      left: 35%;
      margin-left: -313px;
      top: 65%;
      margin-top: -308px;
    }
  </style>

  <?php require 'partials/header.php' ?>

  <?php

  if (isset($_POST["submit"])) {

    $login = $_POST["login"];

    $pass = $_POST["pass"];
    if ($login == "admin" && $pass == "admin") {
      session_start();

      $_SESSION["usuario"] = $login;
      header("Location:variables.php");
    } else {
      session_start();

      $_SESSION["usuario"] = "";
      header("Location:index.php");
    }
  } else {
  ?>
    <table class="Table" border="0">
      <tr>

        <th><img class="foto1" src="city.jpg" alt="imagen 1"></th>



        <th>
          <div class="vl"></div>
        </th>

        <th>
          <div style="    text-indent: 110px;
                          margin-top: -28px;
                          text-align: justify;">
            <h1>Iniciar Sesión</h1>
          </div>

          <form class="login" action="index.php" method="post">

            <input name="login" type="text" placeholder="Ingrese el usuario">
            <input name="pass" type="password" placeholder="Ingrese la Contraseña">
            <input class="boton" type="submit" value="ENVIAR" name="submit">
          </form>
        </th>
      </tr>
    </table>



  <?php
  }
  ?>
</body