<?php 
  //including the config file
  include ('../.config/serverconfig.php');

  //collecting data from the signup form alone
  $userName = $userEmail = $password = $confirmPassword = '';

  //checks if submit button has been clicked
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $userName = test_input($_POST["username"]);
    $userEmail = test_input($_POST["useremail"]);
    $password = test_input($_POST["password"]);
    $confirmPassword = test_input($_POST["confirmpassword"]);
  }


  //inserting to the database
  if(true){
    $sql = "INSERT INTO `user` (`userName`, `email`, `password`) VALUES ('".$userName."', '".$userEmail."', '".$password."') ";
    if(mysqli_query($cxn, $sql)){

    }else{
      echo 'error inserting data'.mysql_error($cxn);
    }
  }

  //working on the login part as well
  $userNameLogin = $passwordLogin = '';
  //checks if submit button has been clicked
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $userNameLogin = test_input($_POST["usernamelogin"]);
    $passwordLogin = test_input($_POST["passwordlogin"]);
  }


  //cleaning both sign up and login data before processing
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $sqllogin = "SELECT `userName` FROM `user` WHERE userName='".$userNameLogin."' AND password = '".$passwordLogin."'";
  $resultLogin = $cxn->query($sqllogin);

if ($result->num_rows > 0) {

} else {
    echo "User not found";
}



?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>XXNX</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->•••••••••••
    <link href="../css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">
      <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">one</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="signup.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          <h3>Sign up</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
              <div class="form-group">
                <label for="formGroupExampleInput">Username</label>
                <input type="text" class="form-control" name = "username" id="formGroupExampleInput" placeholder="username">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Email</label>
                <input type="email" class="form-control" name = "useremail" id="formGroupExampleInput2" placeholder="email" value="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Password</label>
                <input type="password" class="form-control" name = "password" id="formGroupExampleInput2" placeholder="password">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Confirm password</label>
                <input type="password" class="form-control" name = "confirmpassword" id="formGroupExampleInput2" placeholder="confirm password">
              </div>
              <button type="submit" class="btn btn-primary">Sign up</button>
            </form>
          </div>
          <div class="col-lg-4">
          <h3>Login</h3>
            <form action="dashboard.php" method="POST">
              <div class="form-group">
                <label for="formGroupExampleInput">Username</label>
                <input type="text" class="form-control" name = "usernamelogin" id="formGroupExampleInput" placeholder="username">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Password</label>
                <input type="password" class="form-control" name = "passwordlogin" id="formGroupExampleInput2" placeholder="password">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

  </body>

</html> 
     
