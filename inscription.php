<?php
session_start();
include("/xampp/htdocs/SOLUTION_B/config/db.php");
if (isset($_POST['submit'])) {
  if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['confirmation'])) {


    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $login = htmlspecialchars($_POST['login']);
    $password = $_POST['password'];
    $confirmation = $_POST['confirmation'];

    if ($password === $confirmation) {
      // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      $insertUser = $connexion->prepare("INSERT INTO users(prenom, nom, login, password, confirmation) VALUES (?, ?,?,?,?)");
      $insertUser->execute(array($prenom, $nom, $login, $password, $confirmation));

      $selectUser = $connexion->prepare("SELECT * FROM users WHERE login = ?");
      $selectUser->execute(array($login));

      if ($selectUser->rowCount() > 0) {
        // $user = $selectUser->fetch();

        // if (password_verify($password, $user['password'])) {
        // $_SESSION['login'] = $login;
        // $_SESSION['id'] = $user['id'];
        header("Location:index.php");
        //exit();
        //}
     }
    } 
    else {
      $error_message = "Les mots de passe ne correspondent pas.";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/bootstrap/style.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">


  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <title>Document</title>

</head>

<body>


  <div class="row">
    <div class="col-md-4 col-md-offset-4">


      <!-- Start Sign In Form -->
      <form action="" method="post" class="fh5co-form animate-box" $>
        <h2>S'inscrire</h2>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Prenom</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required autocomplete="off" name="prenom">

        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nom</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required autocomplete="off" name="nom">

        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required autocomplete="off" name="login">

        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" required autocomplete="off" name="password">
        </div>
        <div class="mb-3">
          <label class="form-label">confirmation</label>
          <input type="password" class="form-control" id="exampleInputPassword1" required autocomplete="off" name="confirmation">
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">soumettre</button>

      </form>


    </div>
  </div>
  <div class="row" style="padding-top: 60px; clear: both;">
    <div class="col-md-12 text-center">
      <p><small>&copy; tous droits reservés a makhady</small></p>
    </div>
  </div>
  </div>
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
</body>

</html>