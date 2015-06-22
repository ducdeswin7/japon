<?php sleep(2)?>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css"/>
<div class="content">
    <header>
        <div id="mute"><i class="fa fa-volume-up fa-2x"></i></div>
        <audio autoplay loop>
            <source src="audio/cb.mp3" id="musik" type="audio/mpeg"/>
        </audio>
        <div class="btn">
            <div class="part1"></div>
            <div class="part2"></div>
        </div>
    </header>

    <section class="acceuil">
        <figure><img src="images/logo.png" class="img-responsive" alt="logo"></figure>
        <h1 class="title">Rejoingez la famille</h1>
        <a href="#" id="begin">Devenir un yakuza</a>
    </section>

    <section class="video">
        <a href="">Passer la vidéo</a>
        <video controls id="vidintro" src="video/validertattoo.mp4"></video>
    </section>

    <section class="regles">
        <div class="bg-titleRules">
            <h2>les <span id="number">9</span> <br/> règles à respecter</h2>
        </div>
        <div class="blur">
            <ul>
                <li><a class="more" href="#first-rule">1</a></li>
                <li><a class="more" href="#second-rule">2</a></li>
                <li><a class="more" href="#third-rule">3</a></li>
                <li><a class="more" href="#fourth-rule">4</a></li>
                <li><a class="more" href="#fifth-rule">5</a></li>
                <li><a class="more" href="#sixth-rule">6</a></li>
                <li><a class="more" href="#seventh-rule">7</a></li>
                <li><a class="more" href="#eigth-rule">8</a></li>
                <li><a class="more" href="#ninth-rule">9</a></li>
            </ul>
        </div>
        <div class="content-ajax">
            <div id="ajax"></div>
            <span id="accept-rule">Accepter</span>
            <span id="refuse-rule">Refuser</span>
        </div>




    </section>

    <section id="accepted-rule">
        <p>Bravo Robert Saytathonsak developeur fullstack chez bulldozer tu va maintenant devoir choisir une famille</p>

        <a id="toFamille" href="#famille">allons-y</a>
    </section>

    <section id="refused-rule">
        <p>Tu n'es pas pret à etre un membre de notre famille</p>
        <a href="">retourne à l'accueil</a>
    </section>

    <footer>
        <span class="mention">Mentions légales</span>
        <div id="share">partager</div>
    </footer>
    <script>
        var url = "assets/javascripts/script.js";
        $.getScript(url);
    </script>
</div>

