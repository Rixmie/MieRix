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
        <h1>Historietimen</h1> <!-- overskrift forsiden-->
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
        <p>Den anden del hedder under konstruktion og løber fra 1996 til ca. år 2000. her begyndte private hjemmesider samt flere webshops og dukke op og blive til. det som ellers kende tegner denne periode af internettet er at alt skulle være meget visuelt så JPG filer, Flash, Photoshop grafik samt tabeller og frames blev brugt flittigt af dem alle sammen. det som ellers dukkede op alle steder ved bannerreklamer og pop-up-vindue.<br>
        En af de ting som der blev noget stort i denne periode var en kamp mellem to webguruer nemlig designeren David Siegel som mente man skulle læggen vægt på design og det visuelle ved en webside hvorimod danskeren Jakob Nielsen mente at der skulle vægt på funktionalitet i webdesign, Jakob Nielsen havde en ph. D. i usability engineering og med den kom han med en videnskabelig baggrund for hvorfor man skulle lægge vægte på funktinalitet frem for et fedt design når det angik websider. <br>
        (kilde: Online Kommunikation side 351-356)
        </p>
        </section> <!-- section his2 slut-->
        <img src="internetteshis2.png" id="interbillede2" alt="jim store david guru">
            
         <section id="his3">
        <p> Den tredje del hedder semantisk søgning som også er noget vi bruger meget i dag igennem diverse søgemaskiner på nettet. denne periode startede omkring år 2000 og strakte sig frem til 2003 ca. og det er i denne periode hvad der den dag i dag vist er enhvers bedsteven på nette Google kommer til verden som den første globale søgemaskine da den bruger en algoritme ved navn Pagerank, som bedømte sidsens indhold og der med fandt de ting so brugeren reelt søgte efter. <br>
        En anden ting som tog fart i denne periode var blogs dette var dog mere krævende end de hjemmesider der hidtil var lavet så det endte ud med at bloggerne endte med en standartløsning i form af Typepad og Wordpress hvor bloggere kunne igennem disse få adgang til at lavet en blok dog var personliggørelsen af bloggen noget for sig selv for når bloggerne købte adgang til disse løsninger fulgte der skins med hvor flere af dem endte med at gå igen flere gange på forskellige blogs hvilket gjorde at bloggerne ikke kom tilat skille sig ud fra hinanden hvilket gjorde de stod lige med det grafiske design.<br>
        (kilde: Online Kommunikation side 357-362)  
        </p>
        </section> <!-- section his3 slut-->
        
        <section id="his4">
        <p> Den fjerde del hedder det sociale Web som mange af os i dag ofte kender til på den ene eller den anden måde da denne periode strækker sig fra ca. 2003 og frem til ca. 2010. og det var her en af vores største tidsrøvere begyndte at komme frem nemlig Facebook samtidig blev Youtube også en af de store dreng i skolegården i denne tidsperiode nærmere betegnet 2005 hvor videoen ” Charlie bit my finger – again” som ramte 800 mio. visninger og der med blev et tidligt eksempel på socialt medie med viral deling.   (kilde: Online Kommunikation side 363-368)    
        </p>
        </section> <!-- section his4 slut-->
        
        
        <section id="his5">
        <p>Den femte del hedder det mobile web og denne periode er vi stadig i for den startede tilbage i 2010 hvor vi er blevet mere og mere mobile med hvor vi går på nettet ja vi har kunne gå på nettet fra mobileenheder før 2010 men det er først tilbage i 2010 at det rigtigt har taget fart med at få lavet de bedste løsninger for at alle websider har haft den optimale funktionalitet til at kunne bruges på smartphones hvor der kun var berøringsskærme og det klassiske tastatur forsvandt. (kilde: Online Kommunikation side 369-371)  
        </p>
        </section> <!-- section his5 slut-->
        <img src="Internetordbillede.jpg" id="interbillede3" alt="Internet ord billedet kan ikke læses i Google Chrome">
        
        
        <section id="his6">
        <p>Nu hvor vi hurtigt har gennem gået de 5 perioder så ligger der selvfølgelig mere bag internettets historie for der var også ting som skete før 1993 som f.eks. allerede i kølvandet af  2. verdenskrig  var de første tanker i gang med internettet i form af en amerikansk elektronikingeniør hvis navn var Vannevar Bush, han får ideen om et tekstsystem som brugerne kan ”hoppe rundt i” og i forbindelse med at den første kunstige satellit ved navn Sputnik i 1957 der endte med at danne grundlaget for at den amerikanske regering oprettede forskningsagenturet DARPA som havde til opgave at sørge for at USA var sikret føre pladsen hvad angår forsiking og teknologi. (https://www.dr.dk/presse/internettets-historie fundet den 3 januar 2020)
        </p>
        
        </section> <!-- his6 slut -->
            
        <section id="his7">
        <p> Dette var internettets historie kort fortalt hvis i ønsker at udvide jers egen viden om dette emne kan jeg anbefale og kigge disse youtube videoer igennem som jeg selv har haft brug af i undervisningen.  
        <br>
        <a href="https://www.youtube.com/watch?v=9hIQjrMHTv4&feature=emb_title">https://www.youtube.com/watch?v=9hIQjrMHTv4&feature=emb_title</a>
        
        <br>
        <a href="https://www.youtube.com/watch?v=jFM8mv0wb8g&feature=emb_title">https://www.youtube.com/watch?v=jFM8mv0wb8g&feature=emb_title</a>
        
        <br>
        <a href="https://www.youtube.com/watch?v=j4cN_q3NX9c&feature=emb_title">https://www.youtube.com/watch?v=j4cN_q3NX9c&feature=emb_title</a>
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