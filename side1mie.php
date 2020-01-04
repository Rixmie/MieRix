<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mie Rix</title>
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
        
        <section id="gridside1">
        <section id="os1">
            <h1>Læringsportfolio 1. semester </h1> <!-- overskrift forsiden-->
        </section> <!-- os1 -->
        
        <img src="Mlogocolorbox.jpg" id="mlog" alt="M logo med farvewr fra colorbox">
        
        <!-- beskrivelse af hvad denne hjemmeside er og hvem jeg er her under -->
        <section id="b1">
        <p> Velkommen til Mie Rix’s lærings port folie i forbindes med hendes eksamen på 1. semester på Erhvervsakademiet Dania Skive på Multimediedesigner uddannelsen.
        <br>
        </p>
        </section> <!-- b1-->
            <img src="portfoliobillede.jpg" id="port" alt="Portfolio billedet kan ikke læses i Google Chrome">
        <section id="b2">
        <p>Denne hjemmeside er opbygget på det grundlag at den skal vise hvad jeg har lært igennem det 1. semester på Multimediedesigner uddannelsen på Erhvervsakadamiet Dania i Skive. <br>
        Siden vil efter 1 semester eksamen være et opslagsværk for mig selv som jeg vil kunne bruge gennem hele uddannelsen og kunne bygge videre på. <br>
        På siden herover vil i finde menuen som er opdelt i hvad jeg har gennem gået på det første semester samt hvordan arbejdet med opbygningen af denne hjemmeside har været dette findes.<br>
        på siden "om mig" i menuen finder i en beskrivelse af hvem jeg er og hvad jeg har lavet førhen. 
        <br>
        <br>
        </p>
        </section> <!-- b2 -->
        </section><!-- gridside1-->

    </body>
    <footer> 
    <?php
       include 'footer.inc'
            ?>
    </footer>
</html>
