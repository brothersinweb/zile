<footer>
    <div id="Fleft">
        <form method="post">
            <label for="name">Name:</label><br/><input type="text" name="name" placeholder="Name"/><br/><br/>
            
            <label for="email">Email:</label><br/><input type="email" name="email" placeholder="example@some.com"/><br/><br/>
            
            <label for="message">Message:</label><br/>
            <textarea  name="message"></textarea>
            <input type="submit" name="submit" value="Send">
        </form>
    </div>
    
   <div id="Fmid">
	   <address><p>
           Owner Goran Nedeljković <br>
           Address: Resavska 6, Kraljevo <br>
           Phone: 064/1325788 <br>
           E-mail:<a href="mailto:zilekameni@mts.rs"> zilekameni@mts.rs</a> <br></p>
       </address>
   </div>
    
    <div id="Fright">
        <p>Powered by <a href="https://www.facebook.com/brothersinweb/" target="_blank">BIW</a></p>
    </div>

<!--footer za telefon -->
<div class="foo">
    <div id="TFleft">
        <h3>Contact us</h3>
            <form method="post">
                <label for="name">Name:</label><br/><input type="text" name="name" placeholder="Name"/><br/><br/>

                 <label for="email">E-mail:</label><br/><input type="email" name="email" placeholder="example@some.com"/><br/><br/>

                <label for="message">Message:</label><br/>
                <textarea  name="message"></textarea>
                <input type="submit" name="submit" value="Send">
            </form>
        </div>

        <div id="TFmid">
            <address>
                <p>
                    Owner Goran Nedeljković <br>
                    Address: Resavska 6, Kraljevo <br>
                    Phone: 064/1325788 <br>
                    E-mail:<a href="mailto:zilekameni@mts.rs"> zilekameni@mts.rs</a> <br>
                </p>
            </address>
        </div>

        <div id="TFright">
            <p>Powered by 
                <a href="https://www.facebook.com/brothersinweb/" target="_blank">BIW</a>
            </p>
    </div>
</div>
</footer>


<?php

include 'db.php';

    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
       if(empty($name)){
           echo '<script>alert("ime mora biti upisano!")</script>';
           exit();
           if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
               echo'<script>alert("Samo slova i razmak su dozvoljeni!")</script>';
               exit();
           }
       }if(empty($email)){
           echo'<script>alert("Email mora biti upisan!")</script>';
           exit();
          
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               echo "Invalid email format";
               exit();
            }
       }
        
        if(empty($message)){
           echo '<script>alert("Niste upisali poruku!")</script>';
           exit();
       }
        $message = 'Name:' . $name . "\n"
            . 'Email:' . $email . "\n"
            . 'Poruka:' . $message;
        mail('funkerbot@hotmail.com', 'test', $message, 'From: ' .$email);
        echo '<script> alert("poslato")</script>';
     /*TREBA PROVERITI DA LI JE MAIL POSLAT*/
}
?>

</html>