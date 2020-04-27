<?php include "header.php" ?>
=======
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
>>>>>>> 32a90620eef3770be565743a6912a65fc6ee425f


<div class="container">
    <div style="text-align:center">
        <h2>Registracija į mokymus</h2>
       
    </div>
<html>
<head>
<title>PHP Contact Form</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div class="form-container">
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Vardas</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label style="padding-top: 20px;">Pavardė</label> <span
                    id="lname-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="lname"
                    id="lname" />
            </div>
<<<<<<< HEAD
            <div class="input-row">
                <label>Paštas</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Tel. nr.</label> <span id="Privalomas užpildyti laukas"
                    class="info"></span><br /> <input type="number"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Pasirinkite mokymu data:</label> <span id="userMessage-info"
                    class="info"></span><br />

                    
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Registruotis" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var lname = $("#lname").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Privalomas užpildyti laukas");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
                
            }
            if (lname == "") {
                $("#lname-info").html("Privalomas užpildyti laukas.");
                $("#lname").css('border', '#e66262 1px solid');
                valid = false;
                
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Privalomas užpildyti laukas.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("netinkamai įvestas pašto adresas.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Privalomas užpildyti laukas.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Privalomas užpildyti laukas.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
            
        }
        
</script>

</body>
</html>

<br><?php include "footer.php" ?>
