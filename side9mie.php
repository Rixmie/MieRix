<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>andet undervisning</title>
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
        <h1>Andet undervisning</h1>
        <h2>Fotografering</h2>
        <p> Som Multimediedesigner er der mange ting som man skal ind og prøve kræfter med et af dem er fotografering.<br>
        Når man snakker om fotografering er det andet end bare og tag et billede det handler om hvilket motiv det er der skal tages og hvilken stemning skal billedet give som hvis man f.eks. skal tag et prolduktbillede til en hjemmeside er der nogle andre krav som der forventes iforhold til hvis det er et billede af en person.<br>
        
        
        </p>
        
    </body>
    <footer>
    <?php
       include 'footer.inc'
            ?>
    </footer>
</html>
