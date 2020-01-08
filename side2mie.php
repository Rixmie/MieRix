<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Det vigtigste basis viden og forhistorie</title>
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
        <h1>HTML og CSS kortfortalt</h1>
        <section id="gridhtmlcss">
        <h2 id="htmlover">HTML</h2>
        <p id="htmltekst"> Forkortelsen HTML betyder <q>Hypertext Markup Language kodesprog for design og opsætning af hjemmesider på internettet; jf. XML = htm</q> hvis man slår det op i Politikens Forkortelsesordbog fra 2001 på side 87.<br>
        Siden da betyder HTML forkortelsen stadig det sammen når vi skal oversætte den til ord men HTML er ikke længere det som vi bruger når vi designer da vi gør det i et style sheet som bliver kaldt CSS som vi vender tilbage til længere nede på siden.<br>
        HTML er ren tekst som består af forskellige tags som alle begynder med <”tag”> og slutter med </”tag”>.<br>
        For at starte en HTML kodning bruger man <!doctype HTML> som det første dette fortæller programmet at det er en HTML kodning der laves og skal læses af browserne efterfølgende.<br>
        Når man snakker om HTML så er man også nødsaget til at husk på den gode kodeskik som gør at koderne er meget nemmere at overskue ikke kun for en selv men også andre som evt. skal se koderne og forsøge og finde ud af dem, det som er en del af den gode kodeskik er at lave indryk i koderne så det kan ses hvad der hænger sammen når det står med samme afstand fra kanten dette er en måde at gøre det på.

        </p>
        <img src="HTMLbilledemedtekst.jpg" id="htmlbill" alt="billede HTML med tekst">
        
        <h2 id="cssover"> CSS</h2>
        <p id="csstekst">CSS eller Cascading Style sheet er en kodeform som man bruget til at style sin HTML med, dette gøres ved at linke til filen oppe i toppen af ens HTML kode hvilket vil sige der hvor vi finder vores meta tags samt vores dokumentype osv altså i hederen på HTML’en. <br>
        Men når man styler i CSS så kan man gøre det på mange måder man kan f.eks. kode i grid som jeg fortæller om lidt længere nede men man kan også bruge flot / clear dette er dog ikke noget som der bruges ret meget i dag da de fleste vælger at bruge grid når de vil style på opsætningen af en hjemmeside.<br>
        Noget af det som man kan går rigtigt meget ud af med CSS-kodning er at gøre siden responsiv (at en side er responsiv betyder at den tilpasser sig den skærm den åbnes på) måden dette gøre på er ved at bruge tagget ” @media screen and (min-width: XXXpx)” eller ” @media screen and (max-width: XXXpx)” dette viser hvornår der er et breakpoint hvor siden så skal ændre sig og det er alt man kan ændre her igennem fra skærm størrelse til skærm størrelse når man først har fået styr på hvordan det hele fungere.
</p>
        
        <h2 id="noterover">Noter</h2>
        <p id="notertekst">Noter i en HTML- eller CSS-kodning er ikke noget som en bruger ser det er udelukkende når man kigger på koderne disse ses. <br>
        Disse anvendes som oftest til at gøre koderne letter at læse og dermed gøre det nemmer for andre end personen som har kodet siderne til at se hvad der høre sammen på en side både når vi snakker koder i HTML’en men også i CSS’en så det gøres nemmere og danne sig et overblik over hvilken del af kodningen der gør de forskellige ting som sker på siderne.<br>
        Det som kendetegner noter når man skimmer ned over koderne både i HTML og i CSS-filer er at de er grå i farven når de er lavet. den grå farve på noterne er gennemgående grå uanset om vi er i HTML eller CSS kodninger.<br>
        Tilgengæld er tegnene for noter forskellige for i HTML når der skal laves en note bruger man <!—note --> hvor imod i CSS er det /* note */ .</p>
        
        <img src="noterHTMLogCSS.png" id="notebill" alt="billede af note i HTML">
        

        
        <h2 id="gridover">Grid</h2>
        <p id="gridtekst">Grid er en CSS-kodning som man kan bruge til at opsætte ens hjemmeside så den ikke bare stiller sig med tingene under hinanden, men her igennem kan man designe så ting kan stå og ”fylde” noget mere. Måden Grid forgår på er ved at der laves et grid area hvor alle de ting som man gerne vil have i dette område på siden gives navne i form af forskellige "ID" i HTML ‘en.<br>
        Som man kan se på billede er denne grid bygget op med nogle tags det første tag er display: grid; dette fortæller CSS'en at vi er ved at lave en grid opsætning. Det næste tag er grid-template-columns som er kolonnerne alt dem der skal gå lodret ned af siden også derefter kommer grid-template-rows som er rækkerne der går vandret.<br>
        På billede er der opbygget med to koloner og fem rækker, disse har ikke alle den samme størrelse der er nemlig både størrelsen som der bruges i kodningen der kaldes em som måler i "m'er" også er der størrelsen fr. som er frames dette er nogle fast satte rammer som tilpaser sig alt efter størrelsen på den skærm som loader CSS'en.<br>
        Under disse to tags kommer tagget grid-template-areas og det er så her det forskellige "ID" kommer i brug for det er her man skriver hvordan de forskellige ting skal stå i forhold til hinanden.<br>
        Men for at grid-template-areas kommer til at virke skal der laves nogle grid-area og deter her "ID" fra HTML'en kommer i brug for der laves et hashtag altså dette symbol -> # også "ID" efter fulgt af Akkolade eller Tuborgklammer (efter formen på deres paraplyer der af navnet)som er dem her -> {...}<br>
        i mellem tuborgklammerne sættes tagget grid-area: "ID"; og således er grid altså opbygget og klar til uploade.
        </p>
        <img src="Gridbillede.png" id="gridbil" alt="billede af Grid i CSS">
        </section> <!-- gridhtmlcss Slut -->
    </body>
   <footer>
    <?php
       include 'footer.inc'
            ?>
    </footer>
</html>
