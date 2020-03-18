<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <body>
    <?php
    require 'components/navbar.php';
    ?>
    <!-- Here we will begin creating most of the components we will be viewing in the about page
    general descritption of our page should be here-->
    <div id="marginAboutUs" class="jumbotron jumbotron-fluid container text-center">
      <h1 class="titleAboutUs"> About PetMeet</h1>
      <img class="aboutImg" src="images/aboutImg.jpg">
      <div class="row mb-5">
        <div class="col">
          <h2> What is PetMeet? </h2>
          <p> PetMeet is a place dedicated to connecting your pet with potential new friends and possible mates! </p>
          <br>
          <h2> How will I introduce my pets to their new friends?  </h2>
          <p> Simply search for the profile of an animal that you like, send them a request,and schedule a playdate with your pet's new best friend!</p>
          <br>
          <h2> BOOM! Youre all set! </h2>
          <p> That's all it the requirements for your playdate!</p>
          <br>
          <div style="background-color:#90ccf4;margin-left:5%;margin-right:5%;padding:20px;border-radius:10px">
            <h1> Play TODAY! </h1>
            <p>Create and Schedule a Playdate NOW!. </p>
            <a href="register.php" style="text-decoration:none;">
              <button type="button" class="btn btn-success">Register Account</button>
            </a>
        </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <?php
    require 'components/footer.php';
    ?>
    <!-- end of footer -->
    <script src ="scripts/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
