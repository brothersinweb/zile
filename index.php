<?php
include 'db.php';
include 'function.php';
session_start();
?>

<?php include 'header.html'; ?>

<body>    
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

            </div>
        </div>
    </aside>
    
    <div id="container">
        <h2>neki text</h2>
        <p style="font-size: 1.5em;word-wrap: break-word;margin-left: 22px;overflow: hidden;">
        <img src="slike/zile/svasta/svasta30.jpg" alt="Zid uz reku" style="width:300px; position:relative; float: right;margin: 10px;border-radius: 10px;"/>
        sadfsadfasdfasdfkjbhadsjkfngasfdjngoikadsfg
        asdfgljadsfn oiuhjofgihaosdf ohaosihef as
        fa ofhaoiurhfgoiauh fguah oerfjhaosduhfiauds fiaudhf
        aso dhfiauhreiufgabh idufh aiueehfioa hdeoiuf hia
        aw sfhiauwhe filuahdfe uahode fhaoiedfm
        7 aoef upoaiehjf iauhwef iuahweoi fawef
         [aowefoi uhaefiluah eilufh aiwueh fiawueh fiauh efiauh ef
          asw fhaiueh fliuahe fiuawhe fliua H</p>
  
            
    </div>

<!--     <aside id="">
        <div id="vidi-galeri">
            <button onclick="galerija.php">Vidi galeriju >>></button>
        </div>
    </aside>
-->
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
