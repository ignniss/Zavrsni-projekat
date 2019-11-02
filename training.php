<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="Style/bootstrap.css">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/training.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="Script/training.js"></script>

    <?php
        if($_SESSION != NULL)
        echo '<script src="Script/session.js"> </script>' ; 
   ?>

    <title>Cross gym trainings</title>
</head>

<body>
    <nav id="navBar" class="navbar text-uppercase navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand text-success font-weight-bolder" href="index.php
            ">
                <img id="logo" src="Img/logo.png" alt=""> ozon cross gym
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-success" href="training.php">cross gym training</a>                       
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cross_sport_kids.php">cross sport kids</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="gallery.php" active>gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contact.php">contact us</a>
                    </li>
                    <?php if(isset($_SESSION['id'])):  ?>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">login/Register</a>
                    </li>
                    <?php endif ?>
                    <li class="nav-item">
                        <img id="ser" src="Img/ser.png" alt="SER">
                        <img id="uk" src="Img/uk.png" alt="ENG">
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="mainDivTraining">
        <div style="height:6%;" id="naslov">
            <h1>Cross gym trainings</h1>
        </div>
        <div class="container" id="kontejner">
            <div id="prviLevo" class="col-sm-12 col-md-5 box">
                <h3>Cross training</h3>
                <img src="Img/prvaLevo.jpg" alt="">
                <p>
                    <span style="font-weight: bold;">Cross training</span> od samog početka ima za osnovni cilj 
                    da se kreira konkretan, svestran i raznolik fitnes program koji će povećati individualne sposobnosti
                    za bolje suočavanje sa izazovima savremenog načina života. 
                </p>

                <a id="saznajViseCrossTraining" class="saznajVise" href="#">Saznaj više o programu</a>
            </div>

            <div id="prviDesno" class="col-sm-12 col-md-5 box">
                <h3>Cross conditioning</h3>
                <img src="Img/prvaDesno.jpg" alt="">
                <p>
                    <span style="font-weight: bold;">Cross conditioning</span> je naprednija generacija treninga koja će vas maksimalno angažovati
                    tokom sat vremena. Benefiti ovog treninga su ultimativno sagorevanje kalorija i ubrzanje
                    vašeg metabolizma do maksimuma.
                </p>
                <a id="saznajViseCrossConditioning" class="saznajVise" href="#">Saznaj više o programu</a>
            </div>

            <div id="drugiLevo" class="col-sm-12 col-md-5 box">
                <h3>Cross box</h3>
                <img src="Img/crossBox.jpg" alt="">
                <p>
                    <span style="font-weight:bold;">Cross box</span> je grupni program koji obuhvata osnove borilačkih veština,
                        uz elemente funkcionalnog i kondicijskog treninga. Trening  se radi na vrećama,
                        vežbajući nožne i ručne tehnike udaraca.
                    </p>
                <a id="saznajViseCrossBox" class="saznajVise" href="#">Saznaj više o programu</a>
            </div>

            <div id="drugiDesno" class="col-sm-12 col-md-5 box">
                <h3>Zumba</h3>
                <img src="Img/zumba.jpg" alt="">
                <p><span style="font-weight: bold;">Zumba</span>
                    je u plesu, zabavi i muzici ali je takođe i veoma pažljivo kreiran trening. Svaki pokret i
                    promena ritma osmišljeni su tako da stekneš vrhunski izgled, formu i zdravlje. Zumba je naročito
                    poznata po uspesima oblikovanja delova tela kao sto su stomak i zadnjica.

                </p>
                <a id="saznajViseZumba" class="saznajVise" href="#">Saznaj više o programu</a>
            </div>
            <div id="treciLevo" class="col-sm-12 col-md-5 box">
                <h3>Pilates</h3>
                <img src="Img/pilates.jpg" alt="">
                <p><span style="font-weight: bold;">Pilates</span>
                    je u poslednjih nekoliko godina jedan od najpopularnijih vidova rekreacije kako u svetu
                    tako i kod nas. Razlog tome je sto vežbanje pilatesa osim fizičke aktivnosti, telu daje i neophodno
                    opuštanje i uspostavlja ravnotezu između fizičkog i mentalnog.

                </p>
                <a id="saznajVisePilates" class="saznajVise" href="#" >Saznaj više o programu</a>
            </div>
            <div id="treciDesno" class="col-sm-12 col-md-5 box">
                <h3>Yoga</h3>
                <img src="Img/yoga.jpg" alt="">
                <p><span style="font-weight: bold;">Hatha yoga</span>
                    je jedna od najpoznatijih i najrasprostranjenijih vrsta joge na svetu. Joga nije samo
                    fizičko vežbanje, već učenje uspostavljanja stanja potpunog mira i opuštenosti.
                    Usmerena je na upostavljanje harmonije uma, tela i duha, odnosno postizanje stanja opuštenosti i
                    sreće.
                </p>
                <a id="saznajViseYoga" class="saznajVise" href="#">Saznaj više o programu</a>
            </div>
        </div>


        <!-- Pilates -->


        <div class="container" id="kontejnerPilates">
            <div style="text-align:left" id="slikaPilates" class="col-sm-12 col-md-4 box">
                <img src="https://muscle-beach.rs/wp-content/uploads/2019/03/pilates-2.jpg" alt="">

                <p>
                    <h5>PREPORUČUJE SE:</h5>
                    <ul>
                        <li>Vežbačima koji vole mirniji trening</li>
                        <li>Vežbačima koji imaju sedentarne poslove</li>
                        <li>Vežbačima koji imaju probleme sa postiralnim statusom</li>
                    </ul>
                </p>

                <p>
                    <h5> NE PREPORUČUJE SE:</h5>
                    <ul>
                        <li>Hroničnim bolesnicima</li>
                        <li>Osobama koje imaju problem sa hipertenzijom, astmom</li>
                        <li>Srčanim bolesnicima</li>
                    </ul>
                </p>
            </div>

            <div id="infoPilates" class="col-sm-12 col-md-7 box">
                <p>
                    <p style="font-weight: bold;">Ostvari ravnotežu tela i uma.</p>

                    <p>Pilatesom dobijaš u isto vreme fizičku i mentalnu stabilnost, snagu,
                        opuštenost i gipkost.
                        Izgradićeš svoje telo na jedan potpuno drugačiji način.</p>

                    <p>Bez agresivnih i napornih vežbi pilates ti donosi formu koja će drugima biti
                        uzor.</p>

                    <p>Imaćeš bolje držanje i opšti osećaj ravnoteže u životu.</p>

                    <p>Pređi preko crte i uđi u novi svet.</p>
                </p>


                <p>
                    <p style="font-weight: bold;"> Više o pilatesu:</p>

                    <p>
                        Priča o pilatesu je priča o uspehu uprkos teškim okolnostima. Tvorac ovog
                        sistema vežbi je Jozef
                        Pilates – vrhunski atleta. Više nego običan sportista vodio se antičkim
                        idealom zdravog tela i duha.
                        Uspešno
                        se bavio skijanjem, boksom, ronjenjem i mnogim drugim sportovima.
                    </p>

                    <p>
                        Ono što je fascinantno je da je Jozef u detinjstvu bio veoma krhkog
                        zdravlja. Bolovao je od astme,
                        rahitisa i reumatske groznice. Bio je nepokolebljiv u tome da prevaziđe
                        posledice koje je takvo
                        detinjstvo ostavilo na njega a takvih posledica je bilo mnogo.
                    </p>

                    <p>
                        Bio je čovek širokih interesovanja i poznavalac nauke. Upućen u načine
                        vežbanja starog Rima i Grčke
                        jednako je poznavao i istočnjačke sisteme treninga kao što su joga i zen. Iz
                        svog bogatog znanja i
                        iskustva stvorio je sistem vežbanja kasnije poznat kao pilates.
                    </p>

                    <p>
                        Za vreme rata bio je zatočen u logoru ali telo i karakter koje je izgradio
                        vežbanjem istrajali su. U
                        logoru je svojim vežbama uspešno pomagao bolesnima i ranjenima da se oporave
                        od povreda, povrate
                        fizičku i mentalnu snagu.
                    </p>

                    <p>
                        Sve ovo samo je jedan mali deo priče o treningu i njegovom tvorcu. Drugi i
                        najvažniji deo nalazi se
                        u samom vežbanju.
                    </p>

                    <p> Dođi i uzmi ga za sebe. </p>
                </p>
            </div>

            <div class="col-sm-12" style="text-align: center; margin-bottom: 30px;">
                <a id="programiPilates" style="color: green;" href="">
                    <h3><---- PROGRAMI</h3> 
                </a>
            </div>
        </div>
    
             
             
             
        <!-- Zumba -->

        <div class="container" id="kontejnerZumba">

            <!--klasa  box ili box1?! -->
            <div style="text-align:left" id="slikaZumba" class="col-sm-12 col-md-5 box1">
                <img src="https://topformplus.com/images/usluge/zumba_fitness.jpg" alt="">
                <p>
                    <h5>PREPORUČUJE SE:</h5>
                    <ul>
                        <li>Vežbačima koji vole da vežbaju u grupi i uz muziku</li>
                        <li>Vežbačima koji vole dinamičan trening</li>
                        <li>Vežbačima koji imaju višak kilograma</li>
                        <li>Vežbačima koji žele da povećaju tonus mišića i da povrate i održe
                            kondiciju</li>
                        <li>Podjednako je dobar i za iskusne vežbače i za početnike</li>
                    </ul>
                </p>

                <p>
                    <h5> NE PREPORUČUJE SE:</h5>
                    <ul>
                        <li>Hroničnim bolesnicima</li>
                        <li>Osobama koje imaju problem sa hipertenzijom, astmom</li>
                        <li>Srčanim bolesnicima</li>
                    </ul>
                </p>
            </div>

            <!--klasa  box ili box1?! -->
            <div id="infoZumba" class="col-sm-12 col-md-6 box1">  
                <p>
                    <p style="font-weight: bold;">Zaboravi na trening i dođi na žurku!</p>

                    <p>Uz ritam zumbe do gipkog i izvajanog tela! Zumba je u plesu, zabavi i muzici
                        ali je takođe i
                        veoma pažljivo kreiran trening. Svaki pokret i promena ritma osmišljeni su
                        tako da stekneš
                        vrhunski izgled, formu i zdravlje. Zumba je naročito poznata po uspesima
                        oblikovanja delova
                        tela koji važe kao najteži za postizanje željenog izgleda: butina, stomaka i
                        zadnjice.</p>

                    <p style="font-weight: bold;">Sagori kalorije zabavom i plesom!</p>

                    <p style="font-weight: bold;">Više o zumbi i zumbanju:</p>

                    <p>Zumba je unela revoluciju u svet fitnesa. Dobar izgled i zdravlje uvek su
                        bili (i još uvek
                        jesu) pitanje discipline, znanja i posvećenosti, a zumba je veliki deo tog
                        puta učinila
                        nalik igri. Ipak, to je samo jedan od razloga zbog kojih su zumba i zumbanje
                        osvojili svet.
                        Iako ćeš imati osećaj lakoće i zabave kao da se provodiš – iznenadiće te
                        brzina sopstvenog
                        progresa. Mešavina latino ritma i pokreta lakih za učenje angažovaće i
                        oblikovati celo tvoje
                        telo bez osećaja monotonije i napora. Danas u svetu fitnesa zumba je jednako
                        poznata po
                        uživanju kao i po vrhunskim rezultatima.</p>

                </p>
            </div>

            <div class="col-sm-12" style="text-align: center; margin-bottom: 30px;">
                <a id="programiZumba" style="color: green;" href="">
                    <h3><---- PROGRAMI</h3> 
                </a>
            </div>
        </div>

            <!-- YOGA -->


        <div class="container" id="kontejnerYoga">
                <div style="text-align:left" id="slikaYoga" class="col-sm-12 col-md-4 box">
                    <img src="Img/yoga1.jpg" alt="">
                    <p>
                        <h5>PREPORUČUJE SE:</h5>
                        <ul>
                            <li>Svima koji žele da uspostave balans tela, uma i duha.</li>
                        </ul>
                    </p>
    
                    <p>
                        <h5> NE PREPORUČUJE SE:</h5>
                        <ul>
                            <li>Svima se preporučuje.</li>
                        </ul>
                    </p>
                </div>
    
                <div id="infoYoga" class="col-sm-12 col-md-7 box">
                    <p>    
                        <p>
                            Hatha yoga je jedna od najpoznatijih i najrasprostranjenijih vrsta joge na svetu.
                            Joga nije samo fizičko vežbanje, već učenje pre svega kako da umirimo um i postignemo
                            stanje potpunog mira i opuštenosti.
                        </p>
    
                        <p>
                            Usmerena je na upostavljanje harmonije uma, tela i duha, odnosno postizanje
                            stanja opuštenosti, sreće i pozitivne energije.
                        </p>
    
                        <p>
                            Redovnim vežbanjem joge jačamo, zatežemo i oblikujemo telo, ali i otklanjamo napetosti
                            nagomilane u telu i umu. Efekti joge su suptilni, ali redovnim vežbanjem postaju jači
                            i trajni, odnosno postaju deo svakodnevnice i način funkcionisanja.
                        </p>
    
                        <p>
                            Bolja forma, više energije, osećanje sreće i spokojstva su zasigurno rezultati
                            redovnog vežbanja ove discipline.
                        </p>

                        <p>Dođite da zajedno pretvorimo napetost i stres u stanje mira i opuštenosti.</p>
    
                    </p>
                </div>
    
                <div class="col-sm-12" style="text-align: center; margin-bottom: 30px;">
                    <a id="programiYoga" style="color: green;" href="">
                        <h3><---- PROGRAMI</h3> 
                    </a>
                </div>
        </div>

        <!-- crossBox -->

        <div class="container" id="kontejnerCrossBox">
            <div style="text-align:left" id="slikaCrossBox" class="col-sm-12 col-md-4 box">
                <img src="Img/crossBox1.jpg" alt="">
                <p>
                    <h5>PREPORUČUJE SE:</h5>
                    <ul>
                        <li>Vežbačima koji vole dinamičan trening</li>
                        <li>Vežbačima koji žele da povećaju tonus mišića i da povrate i održe kondiciju</li>
                        <li>Podjednako je dobar i za iskusne i vezbače početnike</li>
                    </ul>
                </p>

                <p>
                    <h5> NE PREPORUČUJE SE:</h5>
                    <ul>
                        <li>Hroničnim bolesnicima</li>
                        <li>Osobama koji imaju problem sa hipertenzijom, astmom</li>
                        <li>Srčanim bolesnicima</li>
                    </ul>
                </p>
            </div>

            <div id="infoCrossBox" class="col-sm-12 col-md-7 box">
                <p> 
                    <p>
                        <span style="font-weight:bold;">Cross box</span> je grupni program koji obuhvata osnove borilačkih veština,
                        uz elemente funkcionalnog i kondicijskog treninga. Trening  se radi na vrećama,
                        vežbajući nožne i ručne tehnike udaraca.
                    </p>

                    <p>
                        Vremenom se poboljšava opšta izdržljivost, oblikuje se  telo i smanjuje potkožno masno tkivo,
                        a pored toga program je odličan i za izbacivanje negativne energije i stresa. U prvom delu časa
                        akcenat je na kondiciji dok se u drugom delu časa rade vežbe kojima se oblikuje i jača celokupna
                        muskulatura.Program se preporučuje iskusnijim vežbačima.
                    </p>
                </p>

                <p>
                    <p style="font-weight: bold;">Više o Cross box-u:</p>

                    <p>
                        Cross box  is a an international  branded fitness regimen created by Donny Mustapha  and is a published
                        trademark of  CrossBox International LLC in International Class041 .  Mustapha was the first person to
                        utilize Strict Boxing Basics in strategic sequences , to maximize  a person’s fitness capacity ,
                        while giving them boxing basics , at the same time.  The CrossBox programming is designed specifically
                        for improving fitness levels , while giving the dedicated practitioner , a basic Self Defense Platform.
                        CrossBox International has built the largest collection of Fitness Boxing workout’s in the world,
                        which are available for public use. Each day the CrossBox Fitness Journal  publishes a CrossBox Boxing
                        Workout and CrossBox Fitness Workout for free at www.crossboxfitness.com. 
                    </p>

                    <p>
                        CrossBox also employ’s competitive fitness functional movements performed at high intensity levels.
                        Each of the functional movements were strategically selected in their relevance to basic functional
                        everyday movement.  CrossBox , aside from employing strict  boxing CrossBox utilizes , weightlifting,
                        running, rowing and more.  CrossBox workouts incorporate elements from high-intensity interval training,
                        lympic weightlifting, plyometrics, powerlifting, calisthenics, strongman, and other exercises in
                        conjunction with strict boxing  sequences.     Traditional Boxing Gyms were among the first group
                         training platforms in the modern fitness era.
                    </p>
                </p>
            </div>

            <div class="col-sm-12" style="text-align: center; margin-bottom: 30px;">
                <a id="programiCrossBox" style="color: green;" href="">
                    <h3><---- PROGRAMI</h3> 
                </a>
            </div>
        </div>

        <!-- CrossTraining -->
        
        <div class="container" id="kontejnerCrossTraining">
                <div style="text-align:left" id="slikaCrossTraining" class="col-sm-12 col-md-4 box">
                    <img src="Img/crossTraining1.jpg" alt="">
                    <p>
                        <h5>PREPORUČUJE SE:</h5>
                        <ul>
                            <li>Vežbačima koji vole dinamičan trening</li>
                            <li>Vežbačima koji žele da povećaju tonus mišića i da povrate i održe kondiciju</li>
                            <li>Podjednako je dobar i za iskusne i vezbače početnike</li>
                        </ul>
                    </p>
    
                    <p>
                        <h5> NE PREPORUČUJE SE:</h5>
                        <ul>
                            <li>Hroničnim bolesnicima</li>
                            <li>Osobama koji imaju problem sa hipertenzijom, astmom</li>
                            <li>Srčanim bolesnicima</li>
                        </ul>
                    </p>
                </div>
    
                <div id="infoCrossTraining" class="col-sm-12 col-md-7 box">
                    <p> 
                        <p>
                            <span style="font-weight: bold;">Cross training</span> od samog početka ima za osnovni cilj 
                            da se kreira konkretan, svestran i raznolik fitnes program koji će povećati individualne sposobnosti
                            za bolje suočavanje sa izazovima savremenog načina života. Osim raznolikosti i usmerenosti na celokupan
                            psihofizički razvoj pojedinca. Ovaj program je prepoznatljiv i jedinstven sa svojim naglaskom na
                            maksimalni neuroendokrini odgovor, razvoj snage, funkcionalni pokret i razvoj uspešne strategije prehrane.
                        </p>
    
                        <p style="font-weight: bold;">Više o Cross training-u:</p>

                        <p>
                           <span style="font-weight: bold;">Cross training-om</span> aktiviraju se mnogi mišići i zglobovi i stavljaju se u funkciju različitim delovima tela,
                            što se postiže specifičnim kretanjem kod kog se telo savija u tri osnovne ravni: frontalnoj,
                            transverzalnoj I sagitalnoj. Od tela sportista traži se da bude savršeno: sinhronizovano, koordinirano,
                            čvrsto, snažno, delotvorno, fleksibilno, agilno, eksplozivno, brzo, i naravno, funkcionalno,
                            što znači da sve te karakteristike ima u jednoj celini. 
                        </p>

                        <p>
                            Iz tog razloga ideja je da se trening konstantno
                            menja kako se telo nikad ne bi prilagodilo na ono što mu spremamo. Takođe vežbe se izvode maksimalnim
                            intenzitetom ali u kraćim sekvencama upravo zbog toga što se na taj način postiže najbolji neuroendokrini
                            odgovor organizma. Međutim izuzetno je važno da se prilikom planiranja treninga poštuje
                            princip individualizacije na način da se vežbe, intenzitet i opterećenje prilagode svakom
                            pojedincu posebno, jer u protivnom mogli biste postići više štete nego koristi.                 
                            Zbog toga je definisan poseban plan I program koji se prilagođava vama I bazira se na
                            radu na svim fizičkim svojstvima u pravilnom opsegu: snaga, brzina i izdržljivost i
                            njihovim kombinacijama: brzinska izdržljivost, eksplozivna snaga i izdržljivost u snazi i to uz rad
                            od dva odvojena nivoa.
                        </p>  
                    </p>
                </div>
    
                <div class="col-sm-12" style="text-align: center; margin-bottom: 30px;">
                    <a id="programiCrossTraining" style="color: green;" href="">
                        <h3><---- PROGRAMI</h3> 
                    </a>
                </div>
            </div>

             <!-- Cross Conditioning -->
        
        <div class="container" id="kontejnerCrossConditioning">
                <div style="text-align:left" id="slikaCrossConditioning" class="col-sm-12 col-md-4 box">
                    <img src="Img/crossConditioning1.jpg" alt="">
                    <p>
                        <h5>PREPORUČUJE SE:</h5>
                        <ul>
                            <li>Vežbačima koji vole dinamičan trening</li>
                            <li>Vežbačima koji žele da povećaju tonus mišića i da povrate i održe kondiciju</li>
                            <li>Podjednako je dobar i za iskusne i vezbače početnike</li>
                        </ul>
                    </p>
    
                    <p>
                        <h5> NE PREPORUČUJE SE:</h5>
                        <ul>
                            <li>Hroničnim bolesnicima</li>
                            <li>Osobama koji imaju problem sa hipertenzijom, astmom</li>
                            <li>Srčanim bolesnicima</li>
                        </ul>
                    </p>
                </div>
    
                <div id="infoCrossConditioning" class="col-sm-12 col-md-7 box">
                    <p> 
                        <p>
                            <span style="font-weight: bold;">Cross conditioning</span> je naprednija generacija treninga koja će vas maksimalno angažovati
                            tokom sat vremena. Benefiti ovog treninga su ultimativno sagorevanje kalorija i ubrzanje
                            vašeg metabolizma do maksimuma tako da sagorevate kalorije i do 48h nakon treninga.
                        </p>
    
                        <p style="font-weight: bold;">Više o Cross conditioning-u:</p>

                        <p>
                           <span style="font-weight: bold;">Početni nivo</span> se bazira na učenju tehnike izvođenja vežbi,
                            kondicionoj pripremi (povećanje radne sposobnosti sa manjim opterećenjima ali većeg obima) kao
                            i psihološkoj pripremi (u kojoj se odustajanje kao opcija eliminiše sa treninga).
                            Ovakav intezitet vežbanja je prilagođen svim amaterskim vežbačima, kao i onima koji do sada nisu
                            trenirali, a čvrsto su rešeni da to promene.
                        </p>

                        <p>
                            <span style="font-weight: bold;">Napredni nivo</span> je baziran na usavršavanju tehnike i postepenom povećanju
                            snage (opterećenje se postepeno podiže tek onda kada se savlada tehnika), kondicionoj pripremi
                            (izvode se vežbe sa srednjim opterećenjem ali visokog inteziteta) kao i strožijoj psihološkoj pripremi
                            gde se od vežbača zahteva da na treninzima prelaze preko svojih granice izdržljivosti kako bi se podstakao
                            konkretniji napredak. Treba još napomenuti da iako je donedavno bio rezervisan samo za vrhunske sportiste,
                            vojsku i specijalnu policiju, ovaj izuzetno zanimljiv i delotvoran način vežbanja svakim danom postaje sve
                            dostupniji za sve one koji traže izazov. Vežbe koje se najčešće koriste u ovom načinu treninga su olimpijska dizanja,
                            vežbe snage bez tegova, elementi gimnastike, vežbe s vijačom, veslanje, trčanja, penjanja,
                            vežbe pliometrije i mnoge druge.
                        </p>  

                        <p>
                            Još jedna od bitnih karakteristika CROSS treninga je i korišćenje raznolikih, ali potpuno drugačijih i
                            nesvakidašnjih rekvizita u odnosu na klasične teretane. Neki od mnogobrojnih rekvizita koji se koriste
                            na našim treninzima su: kugle, gimnastičke sprave, medicinke, wall ball-ovi, vreće sa peskom, vijače,
                            pliometrijske kutije, kamionske gume, macole, zaštitne maske, kanapi za kondiciju i penjanje, veštačka
                            rampa, veštački zidovi za preskakanje kao i mnoga druga improvizovana pomagala koja se mogu primenjivati
                            na neograničen broj načina.
                        </p>
                    </p>
                </div>
    
                <div class="col-sm-12" style="text-align: center; margin-bottom: 30px;">
                    <a id="programiCrossConditioning" style="color: green;" href="">
                        <h3><---- PROGRAMI</h3> 
                    </a>
                </div>
            </div>


    </div>



        <!-- foooter -->

        <div id="footer" class="bg-dark">
            <h2>Reklame</h2>
        </div>
</body>

</html>