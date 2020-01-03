<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mie Rix</title>
        <link rel="stylesheet" href="eksempelphpmie.css">
        <link rel="stylesheet" href="https://use.typekit.net/jgp7olx.css">
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
        <h1>Historie timen</h1> <!-- overskrift forsiden-->
        <!-- internettets historie start -->
        <section id="gridhistorie"> 
        <section id="his1">
        <h2>Internettets historie - kort fortalt</h2>
        <p>Når man kigger på internettet også videre ind på udviklingen af dette kan man inddele det i 5 perioder som løber fra 1993 til 2010.<br>
        Den første periode bliver kaldt tidlige eksperimenter og starter i 1993 hvor den første brugbare browser kom under navnet NCSA Mosaic og denne var årsagen til at der kom et lille skub i udviklingen. Denne første periode var  fyldt med eksperimenter hvor alle forsøgte og finde ud af hvordan et websted skulle konstrueres. <br>
        Selv om websider var meget nye i 1993 havde Det Hvide Hus i USA dog deres eget websted i slutningen af 1993, webstedet havde ikke de mange funktioner som vi ser i dag på når vi besøger et websted (indsæt billede af webside)
        Andre kommercielle virksomheder som Hewlett Packard arbejde på dette tidspunkt på at etablere kommercielt baserede support-tjenester over nettet.(kilde: Online Kommunikation side 346-350) <br>
        </p>
        </section> <!-- section his1-->
        <img src="Dethvidehushjemmeside.png" id="interbillede" alt="det hvide hus hjemmeside fra online kommunikation pdf">
        
        <section id="his2">
        <p> den anden del hed under konstruktion og løber fra 1996 til ca. år 2000. her begyndte privatehjemmesider samt flere webshops og dukke op og blive til. det som ellers kende tegner denne periode af internettet er at alt skulle være meghet visuelt så JPG filer, Flash, Photoshop grafik samt tabeller og frames blev brugt flittigt af dem alle sammen. det som ellers dukkede op alle steder ved bannerreklamer og pop-up-vindue.(kilde: Online Kommunikation side 351-356)
            
        </p>
        </section> <!-- section his2 slut-->
        
         <section id="his3">
        <p> den 3 del hed semantisk søgning som også er noget vi bruger meget i dag igennem diverse søgemaskiner på nettet i dag. <br>
        denne periode startede omkring år 2000 og strakte sig frem til 2003 ca. 
        (kilde: Online Kommunikation side 357-362)    
        </p>
        </section> <!-- section his3 slut-->
        
        <img src="Internetordbillede.jpg" id="interbillede2" alt="Internet ord billedet kan ikke læses i Google Chrome">
        
        <section id="his4">
        <p> den 4 del hed det sociale Web som mange af os i dag ofte kender til på den ene eller den anden måde da denne periode strækker sig fra ca. 2003 og frem til ca. 2010. 
        (kilde: Online Kommunikation side 363-368)    
        </p>
        </section> <!-- section his4 slut-->
        
        
        <section id="his5">
        <p> den 5 del hedder det mobile web og denne periode er vi stadig i for sen startede i 2010 hvor vi er blevet mere og mere mobile med hvor vi går på nettet ja vi hafr kunne gå på nettet fra mobilen før 2010 men det er først tilbage i 2010 at det rigtigt har tagwet fart med at få lavet de bedste løsninger for at alle websider har haft den optimale funktionalitet til at kunne bruges på browser som har eksisteret på mobiltelefoner eller smartphones.
        (kilde: Online Kommunikation side 369-371)    
        </p>
        </section> <!-- section his5 slut-->
        <img src="Internetordbillede.jpg" id="interbillede3" alt="Internet ord billedet kan ikke læses i Google Chrome">
        
        
        <section id="his6">
        <p>Nu hvor vi hurtigt har gennem gået de 5 perioder så ligger der selvfølgelig mere bag internettets historie for der var også ting som skete før 1993 som f.eks. allerede i kølvandet af  2. verdenskrig  var de første tanker i gang med internettet i form af en amerikansk elektronikingeniør hvis navn var Vannevar Bush, han får ideen om et tekstsystem som brugerne kan ”hoppe rundt i” og i forbindelse med at den første kunstige satellit ved navn Sputnik i 1957 der danne grundlaget for at den amerikanske regering opretter forskningsagenturet DARPA som har til opgave at sørge for at USA er sikret føre pladsen hvad angår forsiking og teknologi. (https://www.dr.dk/presse/internettets-historie fundet den 3 januar 2020)
            
        </p>
        
        </section> <!-- his6 slut -->
            
        <section id="his7">
        <p> Dette var internettets historie kort fortalt hvis i ønsker at udvide jers egen viden om dette emne kan jeg anbefale og kigge disse youtube videoer igennem samt at under søge disse hjemmeside hvor i finder meget mere viden omkring internettels historie  
        <br>
        <br>
        <br>
        Husk nu og være kilde kridisk når i læser på nettet ikke alt er sandt ;)
            
        </p>
        
        </section> <!-- his7 slut -->
        </section> <!-- gridhistorie slut-->
        <!-- internettels historie slut -->

    </body>
    <footer>
    <?php
       include 'footer.inc'
            ?>
    </footer>
</html>