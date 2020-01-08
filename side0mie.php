<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Side 1</title>
      <link rel="stylesheet" href="eksempelphpmie.css">
        <link rel="stylesheet" href="https://use.typekit.net/jgp7olx.css">
    </head>
    <body>
        <header>
            <span id="headertekst">Mie Rix MMD 2019</span>
        </header>
       <!-- php menu -->
        <div class="navbar">
  <a href="side1mie.php">Forsiden</a>
  <a href="side0mie.php">Om Mig</a>
  <div class="dropdown">
    <button class="dropbtn">Menuen
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <?php
       include 'menumie.inc';
            ?>
    </div> <!-- dropdown-content -->
  </div> <!-- class dropdown -->
</div> <!--navnar -->
        <!-- php menu -->
        <section id="gridommig">
        <section id="mierix1">
        <h2>Fakta:</h2>
        <p> Navn: Mie Rix<br>
            Alder: 25 år<br>
            Bosat: Skive<br>
            Status: Mor til en dreng<br>
            Beskæftigelse: Studere på Multimediedesigner uddannelsen EA dania Skive.<br>
            Udannelse:<br>
            Skive College EUX Studie forløb<br>
            Skive Handelsskole EUX GF2<br>
            Skive Handelsskole EUD GF2<br>
            Skive Handelsskole Butiks medhjælperen<br>
            Social- og Sundhedsskolen Skive Pædagogisk Assistent uddannelsen (ikke færdiggjort)<br>
            Social- og Sundhedsskolen Skive Grundforløb<br>
            Nørbæk Efterskole 10 klasse<br>
            Højselv Skole 0-9. klasse.<br>
            Job: Kebabhuset Amore tjener og udbringerfra Maj 2015 til Aug. 2018<br>
            Hjælpetræner hos Nr. Søby IF. fra sæson start sep. 2008 til sæson slutning marts 2012<br>
        </section> <!-- Mierix1-->
        
        <img src="WilliamogmorESJ-kopi.jpg" id="wme" alt="minbuffas og jeg">
        <section id="mierix2">
        <p>Jeg har styr på mine ting og overholder de aftaler jeg laver, jeg er god til rutine arbejde og finder en hurtig tryghed her i, men jeg nyder også at få nye opgaver hvor jeg kan udvikle på de evner jeg i forvejen har tillært mig men også hvor jeg kan få udvidet min horisont på mere end bare en måde af gang som da jeg skulle for første gang starte med at lærer omkring HTML og CSS kodning.<br>
        <br>
        Jeg har altid en plan som grundlag når jeg starter på noget og den plan bliver fulgt indtil der er noget ikke går som det skal.(så er det godt at man som forældre lærer altid at have en backup plan) <br>
        <br>
        Jeg er kreativ af sind og har altid haft en kærlighed for farver især farven Pink hvilket også afspejles i menuen (sorry for that).<br>
        <br>
        Den kreative del kommer sig af at man må være kreativ når man ikke altid har haft de store evner indenfor læsning samt skrivning.<br>
        Med dette kan jeg så løfte sløret for jeg er konstateret ordblind så stavefejl vil i nok finde selvom jeg forsøger med alle mine redskaber og få dem sorteret ud og hvad angår komma og punktum så ja vi er heller ikke de bedste venner men de dukker op efternånden som jeg ikka her mere luft.<br>
        <br>
        Min fritid som ikke bruges på K3 (selvstudie) bruges som oftest med veninder/venner, familie og kæresten i selvskab med min søn.
        </p>
        </section> <!-- mierix2-->
        <img src="Mierixogk.jpeg" id="mrk" alt="minogjeg">
        </section> <!-- ommiggrid -->
    </body>
   <footer>
    <?php
       include 'footer.inc'
            ?>
    </footer>
</html>
