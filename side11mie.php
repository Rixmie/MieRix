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
        
        <section id="kommunikatiogrid">
        <section id="kommunikation1">
            <h1>Kommunikation</h1> <!-- overskrift forsiden-->
        </section> <!-- os1 -->
        
        <img src="kommunikationbillede.jpg" id="kommunikationbil1" alt="kommunikation">
        
        <!-- beskrivelse af hvad denne hjemmeside er og hvem jeg er her under -->
        <section id="kommunikation_b1">
        <p> Nu vil jeg fortælle lidt omkring kommunikation og i finder på denne side små vidoer som forklare hvad vi har gennemgået i kommunikation både med præsentationer men også omkring feedback.
        </p>
        </section> <!-- kommunikation_b1-->
            <img src="kodningafkommunikation_fra_kommunikation_i_multimedie_design_side_26.png" id="kommunikationbil2" alt="kommunikation">
        <section id="kommunikation_b2">
        <h2>Kommunikation hvad er det?</h2>
        <p>Når vi taler om kommunikation findes dette i flere forskellige former for vi kommunikerer altid på den ene eller den anden måde da vi ikke kun kommunikere ved at tale vi kommunikere også på skrift både online og i brev form når dette en sjælden gang sker, derudover kommunikere vi også med kroppen med den måde vi agere på når vi er ude fra ens egene fire vægge. Men yderligere når vi kommunikere er der forskel på hvad det er der skal kommunikeres som hvis det f.eks. bare er hyggesnak er det det uformelt hvorimod hvis det er kommunikation som der vil forgå i et projektarbejde hvor man enten fungere som projektleder eller projektdeltager hvor behovet for at forklare eller forstå noget samt det at stille spørgsmål eller give ordre for at noget kan ske i forhold til det forstående projektarbejde så bliver kommunikation præget af alle disse ting fordi man i kommunikation gerne vil op nået noget. (Kommunikation i multimediedesign kap. 2 side 25.) <br>
        Når man kigger på den måde som vi bruger sproget på hver især når vi taler med og til hinanden er vi ikke objektive men vi er i høj grad i præget af den personlighed vi hver især har samt den tilstand vi er i når vi kommunikerer som f.eks. hvis vi har det som vil blive kaldt en ”dårlig dag” vil dette påvirker hvordan vi kommunikere som kan få ændret opfattelsen af de ord og sætninger som vi bruger, ligesom at vi alle opfanger virkeligheden forskelligt fordi vi er farvet af vores egen personlighed og kultur.<br>
        Med dette i baghoved så når vi kommunikere så er det mere end bare de ord vil vælger at bruge som har betydning for om budskabet bliver opfanget i det omfang man som afsender ønsker for når man kommunikere med nogen så er det faktisk kun 7% af ordene som har betydning for budskabet det som modtager lægger mest mærket til er stemmeføring som ligger på hele 38% hvor de sidste 55% er hvordan afsenders kropssprog er hvilket vil sige om dette er lukket eller åbnet har meget og sige i dette.
        </p>
        </section> <!-- kommunikation_b2 -->
        <section id="kommunikation_b3">
        <h2>Præsentationsteknik</h2>
        <p>Når vi skal koble noget ord til præsentationsteknik, så er det primære at få deltagerens opmærksomhed, hvilket vil sige at hvis man skal præsentere noget er det vigtigt at få styr på det materiale som man skal tale om men det er også vigtigt at man husker og få delt op så det ikke bliver et langt monotont enetale hvor tilhørerne ender med at sidde med hovedet i bordet.<br>
        det som også er vigtigt at husk når man arbejder med præsentationsteknik er at man tænker over hvordan ens holdning er når man fysisk står op for giver det som der vil været et aktivt kropssprog som Mette Hald beskriver i hendes bog præstentation og formidling fra xxxx her står der <q> et aktivt kropssprog signaler kontrol og associerer energi. Et aktivt kropssprog kommer fra en rank holdning, og en person med et aktivt kropssprog bevæger sig harmonisk, har fødderne i jorden og hviler lige meget på begge fødder. En god kontakt med det underlag, man står på, giver balance i kroppen. En aktiv person bevæger sig ofte hurtigt og smidigt, han har levende øjne, der følger med i det, der foregår omkring ham, har interesse. Hele kroppen signalere, at den er til stede i rummet.</q> hvor imod de passive kroppsprog som Mette hald beskriver er det kropssprog som ingen ønsker at se når de selv står og skal ha noget præsenteret eller endnu værre hvis man selv står og præsentere hvor alle tilhørerne sidder og synker sammen og virker helt energi forladte.    
        </p>
        
            
        </section> <!-- kommunikation_b3 Slut -->
        <section id="videobeskrivelse">
        <p>Her er hvor jeg prøver og lave en lille forklaring omkring psoraisis for at vise at det man bruger kroppen har betydningen for budskabet og for at øve præsentationsteknik (dette var en øvelse som vi lavede i undervisningen den 19/9-19 hvor vi havde fokus på præsentationsteknik)</p>
        </section> <!-- videobeskrivelse -->
        <section id="kommunikationvideo">
        <video width="320" height="240" controls>
        <source src="frem.mp4" type="video/mp4">
        <source src="frem.mp4" type="video/ogg">
        Your browser does not support the video tag.
        </video> 
        </section> <!-- kommunikagtionvideo Slut -->
        </section><!-- kommunikationgrid -->

    </body>
    <footer> 
    <?php
       include 'footer.inc'
            ?>
    </footer>
</html>
