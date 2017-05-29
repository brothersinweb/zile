<?php
include 'db.php';
include 'function.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>ZileKameni</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
    <style>
        /* following two viewport lines are equivalent to meta viewport statement above, and is needed for Windows */
        /* see http://www.quirksmode.org/blog/archives/2014/05/html5_dev_conf.html and http://dev.w3.org/csswg/css-device-adapt/ */
        @-ms-viewport { width: 100vw ; min-zoom: 100% ; zoom: 100% ; }          @viewport { width: 100vw ; min-zoom: 100% zoom: 100% ; }
        @-ms-viewport { user-zoom: fixed ; min-zoom: 100% ; }                   @viewport { user-zoom: fixed ; min-zoom: 100% ; }
        /*@-ms-viewport { user-zoom: zoom ; min-zoom: 100% ; max-zoom: 200% ; }   @viewport { user-zoom: zoom ; min-zoom: 100% ; max-zoom: 200% ; }*/
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
<body>

<?php 
  if (isset($_SESSION['id'])) {
          echo'
        <div>
        <form method="POST" action="'.adminLogout().'">
            <button type="logoutSubmit" id="logout">Logout</button>
        </form>
        </div>'; 
    }else{      
        echo 'jedi govna nisi ulogovan!';
    }
     
    ?>
<header> 
    <div class="logo">
            <a href="index.php"><img src="slike/Logo-ZK/Logo-ZKpng.png" alt="logo zile kameni"/></a>
        </div>
    
    <div class="top-left">
        <h1>ZileKameni</h1>
    </div>
            <nav>
                <ul>
                    <li><a href="index.php">Pocetna</a></li>
                    <li><a href="#">O nama</a></li>
                    <li><a href="#">Sta radimo</a></li>
                    <li><a href="galerija.html">Galerija</a></li>
                    <li><a href="#">Kontakt</a></li>
                    <li><a href="#">Izdvajamo</a></li>
                    <li><a href="#">Novosti</a></li>
                </ul>
            </nav>
</header>
    
    <aside id="aside">
        <div class="aside-right"><label>Zanimljivo</label>
            <div>
                <p>tkuhgkibhkijhbliuhbib b bkjb
                    khvjhjbnklmnbhygiujnkn
                    khbkjhbkbkjbkjhb
                    bjhbjkhbjhkberter ver gerg er g
                    kbkjhbkbjhbe ge srg serg serg
                    ser gsergserg serg
                    se gserg jhbhbwertgw erg werg werg w
                    er gwer gwerg werg
                    wer gwer gwer gwr gerg  swer
                    gserg er gsergasergser
                    gserg sertghs thsrthgser gswthdhbst hsret hg
                    es sghser hgserh sertgserg ser
                    gw erg serg ser...</p>

<?php 
      if ($_SESSION['id']=1) {
          echo '<button type="submit" name="edit">Edit</button>';
                }
?>

            </div>
        </div>
    </aside>
    
    <div id="container">
        <h2>neki text</h2>
    </div>

     <aside id="">
        <div id="vidi-galeri">
            <button onclick="galerija.html">Vidi galeriju >>></button>
        </div>
    </aside>
    
        <div id="mid-div">
            <div id="mid-line"></div>
        </div>

    <div id="container">
        <h4>neki text</h4>
    </div>
    
        
    <footer>
        
    </footer>
</body>
</html>
