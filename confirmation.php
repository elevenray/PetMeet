
<?php
require "connection.inc.php";

?>
<?php
    session_start();

    //check to see if user login in
    if($_SESSION['is_login']){

        $username = $_SESSION['username'];
        $user2 = $_SESSION['user2'];

    }
    else{
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="stylesheets/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
  <!-- Navbar -->
  <?php
require 'components/navbar.php';
?>
<!-- End Navbar -->
<div class="jumbotron jumbotron-fluid">
    <div class="container logincontainer">
      <h1 class="display-4">Playdate request Sent!</h1>
      <div>
        <img style="width:600px;" src="https://images.unsplash.com/photo-1534361960057-19889db9621e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"/>
        <p class="lead">Thank you <span class="badge badge-pill badge-primary"><?php echo $username?></span>!<br>
          Your request to <span class="badge badge-pill badge-primary"><?php echo $user2 ?></span> has been sent.<br></p>
      </div>
        <button type="button" class="btn btn-primary"><a style="text-decoration:none;color:white" href="index.php">Back to Homepage</a></button>
    </div>
</div>

<!-- footer -->
<?php
require 'components/footer.php';
?>
<!-- end of footer -->

  <script>
    $("#navbarheader").load("/components/navbar.html");
    $("#footer").load("/components/footer.html");
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
