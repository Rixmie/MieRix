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
        <p>her fortæller jeg lidt om programmerne vi har arbejdet med på 1. semester på uddannelsen.</p>
        <section id="gridprogrammer">
        <h2 id="Aiover">Ai eller Adobe Illustrator</h2>
        <p id="Aitekst">Adobe beskriver selv Ai således i deres creative cloud under appen <q> illustrator er banchens srtandart-app til vektorgrafik. Med den kan du oprette logoer, ikoner, tegninger, typografi og illustrationer til print, web, video eller mobilenhed. Få alle de tegneredskaber, du har brug for til at forvandle enkle former og farver til sofistikerede logoer, ikoner, eller grafikker. Illustrator-illustrationer er vektorbaseret, så de kan skaleres ned til mobilskærme eller op til skiltestørrelse- og stadig være skarpe og smukke.</q>  
        Adobe Illustrator er et program som vi har brugt på MMD i forbindelse med forskellige opgaver hvor vi kan lave forskellige layouts, det er også i dette program hvor vi flere gange har laver vierframs når vi har skulle designe websider eller forgive at vi skulle lave dem for at lærer programmet bedre at kende. 
        </p> 
        <img src="artboards_i_AI.png" id="artb" alt="Copyright billede med ord/tekst">
        <p id="artbtekst">Her ser i artborads hvor tallene er skrevet i den række følge som de ligger i.</p>
        
        <img src="stjerneAi.png" id="stjerne" alt="Copyright billede med ord/tekst">
        <p id="stjernetekst">Her er hvor der er lavet en cirket som paht som der er lagt stjerne over som fader ud fra hvid til pink i farven samt de ændre størrelse fra lille til stor.</p>
        
        <img src="SuperheltAI.png" id="superb" alt="Copyright billede med ord/tekst">
        <p id="supertekst">Her er en udgave af Captain Americas skjold som vi skulle prøve at lave for at finde ud af hvilke muligheder der var i Ai.</p>
        
        <p id="onepageAitekst">Her kommer der min wierframe fra onepage projektet dette er desktop versionen som vi arbejdede ud fra.</p>
        <img src="onepageAi1.png" id="ai1" alt="Copyright billede med ord/tekst">
        
        
        <img src="onepageAi2.png" id="ai2" alt="Copyright billede med ord/tekst">
        
        <img src="onepageAi3.png" id="ai3" alt="Copyright billede med ord/tekst">
        
        <img src="onepageAi4.png" id="ai4" alt="Copyright billede med ord/tekst">
        <!-- Ai slut -->
            
        <h2 id="psover">PS eller Photoshop</h2>
         <p id="pstekst">Adobe beskriver selv PS således på creative cloud <q> Hvis du har en idé, kan du være sikker på, at du kan realisere den md Photoshop, verdens bedste program til billedbehandling og -design. Skab og komponer fotos og illustrationer. Design websteder og mobilapps. Rediger videoer, simuler realistiske malerier og meget mere. Det er alt, hvad du behøver for at skabe, uanset hvor du får inspirationen til det.</q>q> og med dette beskirver det meget godt hvad Photoshop bruges til primært nemlig billedbehandling i forskellige former ikke kun ændring af billedet med størrelser men også farver, lys og meget mere.<br>
         Her er lidt af de ting som jeg har lavet i løbet af semesteret.</p>
        <!-- Ps Slut -->
            
        <h2 id="brackersover">Brackers + alternativer</h2>
        <p id="brackerstekst">Brackers er et lille program som bruges til at skrive koder i, det vil sige at det er her vi laver selv hjemmesiden med hvad der skal stå hvor og hvordan det hele skal se ud dog kan man i brackers ikke se det medmindre man laver det som kaldes en live-forhåndsvisning dette kan dette program kun lave hvis man kun arbejder i ren HTML og CSS kode-sprog ellers skal man uploade til server hver gang der er laver ændringer som ved f.eks. php-kodning.<br>
        Det som er specielt med et program som Brackers er at dette program ikke viser billeder eller ander animationer her er det udelukkende tekst baseret. Der findes flere forskellige af disse programmer og det er meget forskelligt hvad den som koder vælger at bruge. (jeg bruger Brackers da det var den der blev præsenteret da vi begyndte og ikke har fået mod på at prøve nogle andre endnu)
        </p>
        
        <!-- brackers slut -->
            
        <h2 id="GitHubover">GitHub desktop</h2>
        <p id="GitHubtekst">GitHub desktop er et program som er i forbindelse med hjemmesiden GitHub.com som er en side der bygger på noget som hedder Git som er et open-sourcesystem som blev startet af Linus Torvalds (han var manden bag Linux). Men vider til hvad Git er det er et version system som hvor programmører kan lave koder til f.eks. apps som er i konstant udvikling og udgive nye versioner efter de først har delt den på GitHub hvor så andre kan downloade disse koder og bruge dem eller brudstykker af dem i deres egne projekter.<br>
        Med den viden så er GitHub desktop som gør at man som programmør ikke behøver og skal åbne hjemmesiden for at kunne lave opdatering eller nye versioner til ens kodning da dette program uploader direkte fra skrivebordet.
        </p>
        
        <!-- GitHub slut-->
            
        <h2 id="sparkover">Spark</h2>
        <p id="sparktekst">Spark er endnu et Adobe program som vi har stiftet et kort bekendtskab med her på 1 semester og Adobe beskriver de så ledes i deres creative cloude <q> du kan bruge Adobe Spark til at skabe utrolige grafiske elementer, websider og videohistorier på få minutter.</q> måden vi brugte Spark på var under vores mini projekt under navnet: ”Quick'n Dirty Video®” hvor vi uploadede videoer som vi havde taget med en smartphone og ellers klippede dem sammen og lagde noget stemnings musik på og gav det titel og rulletekster dette var super hurtigt at anvende og Spark kan arbejdes med på flere platforme, den findes både som web baseret siden hvor man laver arbejdet men der er også muylighed for at hente den som app til mobilen så man kan lave det hele fra den af.</p>
            
        <!--spark slut-->
        </section> <!-- grid programmer slut-->
    </body>
    <footer>
    <?php
       include 'footer.inc'
            ?>
    </footer>
</html>
