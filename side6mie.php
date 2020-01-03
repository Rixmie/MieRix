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
        
        <h1>Denne Hjemmeside </h1> <!-- overskrift-->
        <!--intro -->
        <p> her vil i kunne læse om hvordan opbygningen af denne hjemmeside har været samt hvilke tanker som er gået igennem hovedet på mig under tilblivelsen af denne portfolio.
        </p>
        <!--intro slut-->
        <!-- beskrivelse af min husk det NU viden -->
        <h2>Oops i did it agin </h2><!-- under overskrift afsnit 1-->
        <p>Jeg har igen erfaret at det med at huske og arbejde med mobile first er meget vigtigt når man gerne vil have en siden til at være responsiv og jeg lærer det nok om ikke anden har jeg lært det nu hvor vigtigt det er. <br>
        samt at det er nemmere at gå fra lidt til meget plads frem for meget til lidt plads</p>
        <!-- beskrivelse af min husk det NU viden  -->
        
        
        <!-- processen -->
        <h2>Processen</h2>
        <p> Jeg startede ud med at finde ud af hvordan jeg ville bruge min tid og der ved læggen plan med hvad jeg skulle nå hver dag samt de andre ting som jeg skulle igennem i min "normale" hverdag udover studiet og projektet her. <br>
        <br>
        Jeg havde en super fin plan med at skrive logbog hverdag over de ting jeg kom igennem og de ting som jeg opdagede eller genopdagede men dette varede ikke længe da min plan skred ud i sandet af personlig årsager. <br>
        men dette gjorde at jeg fik lagt backup plan gange to for at sikre at jeg ville kunne nå og få projektet færdig til at resultat jeg ville være tilfreds med. <br>
        
        </p>
        
        <!-- processen slut -->
        <h2>kodningen</h2>
        <p> Hjemmesiden er grundlæggende kodet som almindelig HTML men dette er i en php kode da jeg fandt dette nemmere da jeg ville embette en menu med det udseende som jeg ønskede den skulle være på de forskellige responsite statider.
        
        </p>
        <!-- kodningen SLUT -->
        <h2>Logbogen</h2>
        <p>
        min logbog nåede og trække sig fra den 2 dec. til den 11 dec. 2019 før dette faldt til jorden. <br>
        <br>
        her vil i kunne læse den: <br>
        <br>
        Mandag 2 dec. 2019<br>
        Dagen er blevet brugt på at høre omkring opgaven samt finde relevant information som kan bruges i denne. <br>
        Derudover har jeg planlagt i hvad der skal nås inden den 12. dec. 2019 hvor vi har midtvejsstatus på projektet.
        <br>
        <br>
        Tirsdag 3 dec. 2019<br>
        Dagen er igen brugt på at finde de sidste informationer som jeg gerne vil have med på siden samt jeg har lavet to udkast til hvordan jeg gerne vil have siden til at de ud på henholdsvis mobil og desktop.<br>
        Jeg har yderligere været i gang med at kigge på fonts igennem Adobe og har lagt en plan om at lave et style sheet med disse på så det ligger aktive så de vises på alle skærme osv.<br>
        <br>
        Onsdag 4 dec. 2019<br>
        Dagen er brugt på at finde de sidste fonte som jeg syntes der kunne være interessante og bruge på siderne der udover så har jeg fundet de bøger jeg skal bruge med information i som jeg har skrevet så det passer til min side samt jeg har fået skrevet de bøger på min kilde liste så den også er opdateret også har jeg fået opdelt kildelisten i hvad der er fysiske bøger, links osv. Ellers er dagen gået med at sortere informationen fra i går samt kigge på andre dele af information som jeg har til rådighed for at kunne danne en helt hed på min side. <br>
        <br>
        Torsdag 5 dec. 2019<br>
        Dagen er brugt på at sortere lidt mere i mine informationer samt skrive lidt mere på de ting som jeg vil have med på siden. <br>
        <br>
        Fredag 6 dec. 2019 <br>
        Dagen er brugt for at sortere lidt informationer og forsøge at gøre det mere overskueligt frem til kl 11.00 da William skulle hentes kl 12.00 fra DP. <br>
        <br>
        Mandag 9 dec. 2019<br>
        Dagen er brugt på at passe sygt barn og lavet lidt med at skrive omkring projekter osv. I word og har generelt forsøgt at lave de ting i word hvor jeg kunne gå til og fra uden de store overvejelser. <br>
        <br>
        Tirsdag 10 dec. 2019<br>
        Dagen er brugt på at kode lidt på hjemmesiden og rode lidt rundt med grid dog har jeg opdaget jeg igen har glemt mobile first da jeg var så opsat på at lave grid da jeg var træt af at læse og skrive i word.<br>
        <br>
        Onsdag 11 dec. 2019<br>
        Dagen er brugt på at finde ud af hvordan jeg vil have sat siden op med projekter på hvor jeg viser hvad vi har lavet på 1 semester.<br>
        </p>
        
        <h2>Reflektion</h2>
        <p>igennem arbejdet med denne side og gennem gangen af de opgaver og projekter som jeg har gennem gået her på det første semester så må jeg erkende at der er flere ting som jeg skal have genopfrisket noget mere og flere ting som jeg skal ind og have "leget" med for at få mere styr på de forskellige muligheder som både programmer og koder kan give ikke kun til hjemmesider men også til de opgaver der er aflever og som der bliver stillet.</p>

    </body>
    <footer>
    <?php
       include 'footer.inc'
            ?>
    </footer>
</html>