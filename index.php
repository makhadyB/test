<?php
session_start();

if (isset($_POST['submit'])) {
  if (!empty($_POST['login']) && !empty($_POST['password'])) {
    include("/xampp/htdocs/SOLUTION_B/config/db.php");
    $login = htmlspecialchars($_POST['login']);
    $password = $_POST['password'];

    $recupUser = $connexion->prepare("SELECT * FROM users WHERE login = ? and password=? ");
    $recupUser->execute([$login, $password]);
    // $row=$recupUser->fetch(PDO::FETCH_ASSOC);

    if ($recupUser->rowCount() > 0) {
      $_SESSION['masession'] = $login;
      header("Location:acceuil.php");
      // exit();
    } else {
      echo "mot de pass ou login incorrecte";
    }
  }
}


// 


// require("/xampp/htdocs/SOLUTION_B/traitements/fonction.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/bootstrap/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="favicon.ico">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">
  <title>connexion</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-white">
    <div class="container-lg">


      <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarTogglerDemo02" style="display:flex; justify-content:flex-end;">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="btn btn-primary " href="inscription.php">S'inscrire</a>
          </li>
          

        </ul>

      </div>
  </nav>

  <div class="w3-container">
    <h2 class="card-title" align="center">veuillez vous identifier!</h2>
  </div>
  <div class="container-lg">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">




        <form method="post" action="" align="center" class="fh5co-form animate-box">



          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required autocomplete="off" name="login">

          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" required autocomplete="off" name="password">
          </div>
          <div class="form-group">
            <label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
          </div>
          <div class="form-group">
            <p> <a href="inscription.php">S'inscrire</a> </p>
          </div>

          <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        </form>
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Placeholder -->
        <script src="js/jquery.placeholder.min.js"></script>
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Main JS -->
        <script src="js/main.js"></script>
      </div>
    </div>
  </div>
</body>

</html>