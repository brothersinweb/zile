

<footer>
<link href="https://fonts.googleapis.com/css?family=Amiri|Carrois+Gothic+SC|Cinzel|Cormorant+Garamond|Cormorant+SC|IM+Fell+English+SC|Marcellus+SC|Mate+SC|Stardos+Stencil" rel="stylesheet">
	
    <div id="Fleft">
        <form method="post">
            <label for="name">Ime:</label><br/><input type="text" name="name" placeholder="Ime"/><br/><br/>
            
            <label for="email">Email:</label><br/><input type="email" name="email" placeholder="example@some.com"/><br/><br/>
            
            <label for="message">Poruka:</label><br/>
            <textarea  name="message"></textarea>
            <input type="submit" name="submit" value="Posalji">
        </form>
    </div>
    
       <div id="Fmid">
	   <p style="color: white; font-size: 25px; margin-top: 50px; text-align: center;">
	   Vlasnik Goran Nedeljković <br>
	   Adresa: Resavska 6, Kraljevo <br>
	   Telefon: 064/1325788 <br>
	   Mail: zilekameni@mts.rs <br>
	   </p>
	   </div>
    
    <div id="Fright">
        <p style="float:right;font-size:24px; color:white;position:relative;top:220px;margin:0 25px 15px;">Power by <a href="https://www.facebook.com/brothersinweb/" target="_blank" style="text-decoration:none; color:gray; font-size:28px;">BIW</a></p>
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