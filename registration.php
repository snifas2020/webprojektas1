<?php 
include "config.php";
include "header.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Registracijos forma į mokymus</title>
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
            <label for="text">Artimiausios mokymų datos:</label><br>

            
            <p>2020-05-05</p>
            <p>2020-07-05</p>
            <p>2020-09-05</p>
            

          </div>
           
         

            



            <div class="form-group">
              <label for="phone">Telefono numeris:</label>
              <p>+370 <input  type="phone" class="form-control" name="phone" id="phone" required="required" maxlength="8"></p>
            </div>

            
            
            
            

          
            <br><button type="submit" href="message.php" name="btnsignup" class="btn btn-default">Registruotis<br></button>
           <?php
            if(isset($_POST['submit'])){
    $to = "email@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $subject = "registracija i konsultacijas";
   
    $message = $first_name . " " . $last_name . " nori uzsiregistruoti i mokymus:" . "\n\n" . $_POST['message'];
     mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
    ?>
        


            <br><script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
<br><div class="g-recaptcha" data-sitekey="6Ldk7e4UAAAAAGyDs2ieQuTS9h8rDgYiKppHGmth"></div>
           
          </form>
          
        </div>

        
     </div>
    </div>
    <?php
    include "footer.php";
    ?>
  </body>
</html>
