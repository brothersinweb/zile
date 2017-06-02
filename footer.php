<?php
    require('kontakt/kontakt.php')
?>

<footer>
    <div id="Fleft">
        <form method="post" style="margin:10px 25px 0 25px;">
            <label for="name" style="color:white;">Ime:</label><br/><input type="text" name="name" placeholder="Ime"/><br/><br/>
            
            <label for="email" style="color:white;">Email:</label><br/><input type="email" name="email" placeholder="example@some.com"/><br/><br/>
            
            <label for="message" style="color:white;">Poruka:</label><br/>
            <textarea rows="5" cols="50" name="message"></textarea>
            <input type="submit" name="submit" value="Posalji">
        </form>
    </div>
    
       <div id="Fmid"></div>
    
    <div id="Fright">
        <p style="float:right;font-size:24px; color:white;position:relative;top:220px;margin:0 25px 15px;">Power by <a href="#" target="_blank" style="text-decoration:none; color:gray; font-size:28px;">BIW</a></p>
    </div>
</footer>


<?php
/*ne radi slanje!!!!!!!!!!!!!!!!!!!!!!!!!*/

/*MORA DA SE PROVERI ONLINE DA LI RADI SLANJE EMAIL-A*/
    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
       if(empty($name)){
           echo 'ime mora biti upisano!';
       }else if(empty($email)){
           echo'email mora biti upisan!';
       }else if(empty($message)){
           echo 'niste upisali poruku!';
       }
     
}else {
        $message = 'Name:' . $name . "\n"
            . 'Email:' . $email . "\n"
            . 'Poruka:' . $message;
        mail('funkerkv@gmail.com', 'test', $message, 'From: ' .$email);
        echo 'poslato';
       # header('Location:index.php');
    }
?>