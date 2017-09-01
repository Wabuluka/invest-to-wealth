<?php include('../.config/serverconfig.php');?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scrolling Nav - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
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
            <form>
              <div class="form-group">
                <label for="formGroupExampleInput">Username</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="username">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Email</label>
                <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="email">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Password</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="password">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Confirm password</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="confirm password">
              </div>
              <button type="submit" class="btn btn-primary">Sign up</button>
            </form>
          </div>
          <div class="col-lg-4">
          <h3>Login</h3>
            <form>
              <div class="form-group">
                <label for="formGroupExampleInput">Username/email</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="username or email">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Password</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="password">
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
     
