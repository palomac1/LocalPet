<?php
include "conn/connect.php";
session_start();
// Inicia a verificação do login
if ($_POST) {
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  // echo $login . " - " .$senha;
  $emailRes = $conn->query("select * from db_localpet.usuarios where email = '$email' and senha = md5('$senha')");
  $rowEmail = $emailRes->fetch_assoc();
  // $numRow = $loginRes->num_rows;
  $numRow = mysqli_num_rows($emailRes);
  // Se a sessão não existir
  if (!isset($_SESSION)) {
    $sessaoAntiga = session_name('localpet');
    session_start();
    $session_name_new = session_name();
  }
  if($numRow > 0){
    $_SESSION['email'] = $email;
    $_SESSION['nivel_id'] = $rowEmail['nivel_id'];
    $_SESSION['nome_da_sessao'] = session_name();
    if($rowEmail['nivel_id']=='2'){
        echo "<script>window.open('ong/home_ong.php','_self')</script>";
    }elseif ($rowEmail['nivel_id']=='1') {
        echo "<script>window.open('client/home_cli.php','_self')</script>";
    }
}else{
    echo "<script>window.open('usuarios_insere.php','_self')</script>";
}

//ID DO USUARIO E ONG - paloma
  //if($rowEmail['nivel_id']=='2'){
    //    echo "<script>window.open('ong/home_ong.php','_self')</script>";
    //}elseif ($rowEmail['nivel_id']=='1') {
      //  echo "<script>window.open('client/home_cli.php','_self')</script>";
    //}


  // if (mysqli_num_rows($emailRes) > 0) {
  //   $_SESSION['email'] = $email;
  //   $_SESSION['senha'] = $senha;
  //   $_SESSION['nivel_id'] = ;
  //   header('location: ong/home_ong.php');
  // } else {
  //   unset($_SESSION['email']);
  //   unset($_SESSION['senha']);
  //   header('location: ../usuarios_insere.php');
  // }
}
?>
<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.108.0">
  <title>Login</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/sign-in.css">

  <style>
    #corpo {
      background-color: #ff914d;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>
</head>

<body class="text-center" id="corpo">

  <main class="form-signin w-100 m-auto">
    <form action="login.php" name="form_login" id="form_login" method="POST" enctype="multipart/form-data">
      <img class="mb-4" src="images/localpet.png" alt="" width="200" height="200">
      <h1 class="h3 mb-3 fw-normal">Faça seu Login</h1>

      <div class="form-floating">
        <input type="email" class="form-control" id="email" name="email">
        <label for="email">Email:</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="senha" name="senha">
        <label for="senha">Senha:</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit" value="Entrar">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
    </form>
  </main>

</body>
<!-- Link arquivos Bootstrap js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>
