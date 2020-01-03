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
        <h2>HTML</h2>
        <p> Forkortelsen HTML betyder <q>Hypertext Markup Language kodesprog for design og opsætning af hjemmesider på internettet; jf. XML = htm</q> hvis man slår det op i Politikens Forkortelsesordbog fra 2001 på side 87.<br>
        Siden da betyder HTML forkortelsen stadig det sammen når vi skal oversætte den til ord men HTML er ikke længere det som vi bruger når vi designer da vi gør det i et style sheet som bliver kaldt CSS som vi vender tilbage til længere nede på siden.<br>
        HTML er ren tekst som består af forskellige tags som alle begynder med <”tag”> og slutter med </”tag”>. 
        </p>
        <h2>Noter</h2>
        <p>Noter i en HTML- eller CSS-kodning er ikke noget som en bruger ser det er udelukkende når man kigger på koderne disse ses. <br>
        Disse anvendes som oftest til at gøre koderne letter og læse med hvad der høre sammen på en side både når vi snakker koder i HTML’en men også i CSS’en.<br>
        Det som kendetegner noter når man skimmer ned over koder er et de bliver grå i farven når de er lavet så det grå skrift uanset om vi er i HTML eller CSS så er de gå tilgengæld er tegnene for noter forskellige for i HTML er det <!—note --> hvor i CSS er det /* note */ .</p>

        <h2> CSS</h2>
        <p> her beskriver jeg CSS</p>
    </body>
   <footer>
    <?php
       include 'footer.inc'
            ?>
    </footer>
</html>
