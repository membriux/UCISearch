<?php
    $_SUCCESS_MESSAGE = "";

    $mysql = new mysqli('localhost', 'yerline', 'Esmeralda189', 'sign_in');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // When user clicks on button

        $user_name       = $mysql->real_escape_string($_POST['name']);
        $birthday        = $mysql->real_escape_string($_POST['birthday']);
        $id              = $mysql->real_escape_string($_POST['id']);
        $major           = $mysql->real_escape_string($_POST['major']);
        $grad            = $mysql->real_escape_string($_POST['grad']);
        $gender          = $mysql->real_escape_string($_POST['gender']);

        // Insert friend information to database
        $sql_add = "INSERT INTO users (Name,Birthday,ID,Major,Graduation,Gender) "
        . "VALUES ('$user_name', '$birthday', '$id', '$major', '$grad', '$gender')";

        // If the query is succesful, send a message to user
        if($mysql->query($sql_add) === true) {
            $_SUCCESS_MESSAGE = "Member $user_name was added to database!";
        }
    }

 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SHPE | UCI</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">SHPE | UCI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Get Involved</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Executive Board</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>SHPE NEW MEMBER REGISTRATION</h1>
        <p class="lead"><h3>Get a personal QR code to sign in!</h3></p>
      </div>
    </header>

            <h2 id="">Sign Up</h2>
            <div class="user_box">

            <form action="" method="post">
                <div class="input_box">
                    <p>Name:</p>
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>

                <p>Birthday:</p>
                <input style= "font-size: 17.7px" type="date" name="birthday" placeholder="Birthday" required>

                <p>UCI Net ID:</p>
                <input type="text" name="id" placeholder="UCI Net ID" required>

                <p>Major:</p>
                <input type="text" name="major" placeholder="Major" required>

                <p>Expected Graduation:</p>
                <input type="text" name="grad" placeholder="Graduation Year" required>

                <p>Gender:</p>
                <input type="text" name="gender" placeholder="Gender" required>
                <br><br>
                <input type="submit" name="add" value="Register to SHPE!">

                <div class="">
                  <br>
                  <?php echo $_SUCCESS_MESSAGE ?>
                </div>

              </div>

            </form>


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy;
            Society of Hispanic Professional Engineers 2018.</p>
        <p class="m-0 text-center text-white">All Rights Reserved.</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

  </body>

</html>
