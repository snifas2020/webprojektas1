
<?php 
include "config.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Registracijos forma į mokymus</title>

<!-- laikinas dizainas-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



  </head>
  <body>
    <div class='container'>
      <div class='row'>

        <div class='col-md-6' >

          <form method='post' action=''>

            <h1>Registracijos forma į konsultacijas</h1>
            <?php 
            // Klaidos pranesimas
            if(!empty($error_message)){
            ?>
            <div class="alert alert-danger">
              <strong>Įvyko klaida!</strong> <?= $error_message ?>
            </div>

            <?php
            }
            ?>

            <?php 
            // jei pavyksta prisijungti išmetamas pranešimas
            if(!empty($success_message)){
            ?>
            <div class="alert alert-success">
              <strong>Success!</strong> <?= $success_message ?>
            </div>

            <?php
            }
            ?>

            <div class="form-group">
              <label for="fname">Vardas:</label>
              <input type="text" class="form-control" name="fname" id="fname" required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="lname">Pavardė:</label>
              <input type="text" class="form-control" name="lname" id="lname" required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="email">Pašto adresas:</label>
              <input type="email" class="form-control" name="email" id="email" required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="password">Slaptažodis:</label>
              <input type="password" class="form-control" name="password" id="password" required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="pwd">Pakartokite slaptažodį:</label>
              <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" onkeyup='' required="required" maxlength="80">
            </div>

            <button type="submit" name="btnsignup" class="btn btn-default">Registruotis</button><br>

            <br><div class="g-recaptcha" data-sitekey="6LcePAATAAAAAGPRWgx90814DTjgt5sXnNbV5WaW"></div>

            <script src='https://www.google.com/recaptcha/api.js'></script>

           
          </form>
        </div>

     </div>
    </div>
  </body>
</html>