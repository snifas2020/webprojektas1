<?php include "header.php" ?>


<div class="container back">
    
        <div style="text-align:center">
            <h3>Contact Us</h3>
        </div>
        <div class="row">
            <div class="col l6 s12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2305.9098246088492!2d25.266742816069158!3d54.69361448064311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd940648ab4aa5%3A0xb37b0ef00dbfeca4!2sAlaus%20Namai!5e0!3m2!1slt!2slt!4v1587754973917!5m2!1slt!2slt" width="100%" height="403" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col l6 s12">
                <form action="/action_page.php">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Your message.." style="height:170px"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    
</div>




<!-- Čia kontaktų puslapio vidinė dalis -->



<?php include "footer.php" ?>