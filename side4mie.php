<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Side 4</title>
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
        <h1>Programmer på MMD</h1>
        <p>her fortæller jeg lidt om programmerne vi har arbejdet med</p>
        
        <h2>Ai eller Adobe Illustrator</h2>
        <br>
        <p>Adobe beskriver selv Ai således i deres creative cloud under appen <q> illustrator er banchens srtandart-app til vektorgrafik. Med den kan du oprette logoer, ikoner, tegninger, typografi og illustrationer til print, web, video eller mobilenhed. Få alle de tegneredskaber, du har brug for til at forvandle enkle former og farver til sofistikerede logoer, ikoner, eller grafikker. Illustrator-illustrationer er vektorbaseret, så de kan skaleres ned til mobilskærme eller op til skiltestørrelse- og stadig være skarpe og smukke.</q>  
        <br>
        Adobe Illustrator er et program som vi har brugt på MMD i forbindelse med forskellige opgaver hvor vi kan lave forskellige layouts, det er også i dette program hvor vi flere gange har laver vierframs når vi har skulle designe websider eller forgive at vi skulle lave dem for at lærer programmet bedre at kende. 
        </p> <!-- Ai slut -->
        <h2>PS eller Photoshop</h2>
        <br>
        <h2>Brackers + alternativer</h2>
        <br>
        <h2>GitHub desktop</h2>
        <br>
        <h2>Spark</h2>
    </body>
    <footer>
    <?php
       include 'footer.inc'
            ?>
    </footer>
</html>
