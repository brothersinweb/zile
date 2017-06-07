<?php
include 'db.php';
$cookie_name = "user";
$cookie_value = "user";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

?>

<?php include 'header.html'; ?>

<body>    
<link href="https://fonts.googleapis.com/css?family=Amiri|Carrois+Gothic+SC|Cinzel|Cormorant+Garamond|Cormorant+SC|IM+Fell+English+SC|Marcellus+SC|Mate+SC|Stardos+Stencil" rel="stylesheet">
<?php 
    /*NESTO NIJE KAKO TREBA*/
 if (isset($_SESSION['id'])) {
    echo  "<form method='POST' action='".userLogout()."'>
        <button type='text' name='logoutSubmit'>Logout</button>
        </form>";     
 }  
?>
     <aside id="aside">
        <div class="aside-right"><label>Zanimljivo</label>
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
                gw erg serg ser...
                milos
                vlado kralj
            </p>
        </div>
    </aside>
    
    <div id="container">
        <h2>neki text</h2>
        <p style="font-size: 1.5em;word-wrap: break-word;margin: 35px;overflow: hidden; text-align: right; line-height: 32px;line-height: 1.4;">
        <img src="slike/zile/svasta/svasta30.jpg" class="conimg" alt="Zid uz reku" />
               
        ADASDASDASDASDSADASDASDASD
        sadfsadfasdfasdfkjbhadsjkfngasfdjngoikadsfg
        asdfgljadsfn oiuhjofgihaosdf ohaosihef as
        fa ofhaoiurhfgoiauh fguah oerfjhaosduhfiauds fiaudhf
        aso dhfiauhreiufgabh idufh aiueehfioa hdeoiuf hia
        aw sfhiauwhe filuahdfe uahode fhaoiedfm
        7 aoef upoaiehjf iauhwef iuahweoi fawef
         [aowefoi uhaefiluah eilufh aiwueh fiawueh fiauh efiauh ef
          asw fhaiueh fliuahe fiuawhe fliua H
            asd
            fasdf
            asdfasdfa;lkjnfaoskjhfgoaskjnfga
            sdfgasdkjfgnaskjngpasmnrfas
            aspfgkanlsdkrngaplerngpaenrg
            aspgnalorngaprngpaenrpg7
            p[aeorjgloakenrgpanerpgnaprngpaerjmgf[aoejmr[gaerg
            aep;rgjkpaeorjgpaerkgpoaekrgp[[oaekrgpsadf;lgkam]]]]]
            laksrjgflakenmrgplaknrpgkifnaerg
            asodngoaR GFAELERJN GAOIRJNFPOAIWJNRFGA
            
         <img src="slike/zile/najveci-zid/zid23.jpg" alt="Zid uz reku" class="conimg2" />
        </p>
    </div>

<!--     <aside id="">
        <div id="vidi-galeri">
            <button onclick="galerija.php">Vidi galeriju >>></button>
        </div>
    </aside>
-->  
        <div id="mid-div">
          <h2>Pratite nas:</h2>
            <a href="#" target="_blank"><img src="slike/soc/facebook.png" alt="facebook" class="soc"></a>

            <div id="mid-line"></div>

        </div>

    <div id="container">
        <h4>neki text</h4>
    </div>
    
        
<?php include 'footer.php'; ?>
</body>
</html>
