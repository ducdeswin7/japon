<?php sleep(2)?>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css"/>
<div class="content-famille">
    <header>
        <div id="mute"><i class="fa fa-volume-up fa-2x"></i></div>
        <audio controls loop>
            <source src="audio/cb.mp3" id="musik" type="audio/mpeg"/>
        </audio>
        <div class="fullscreen"><i class="fa fa-times fa-2x"></i></div>
    </header>
    <section id="choixFamille">
        <div class="famille" id="famille1">
            <img class="img-responsive" src="images/fammile1.png" alt="clan1"/>
            <span class="titleFamille">Yamaguchi-gumi</span>
        </div>
        <div class="famille" id="famille2">
            <img class="img-responsive" src="images/famille2.png" alt="clan2"/>
            <span class="titleFamille">Tōa Yuai Jigyō Kummiai</span>
        </div>
        <div class="famille" id="famille3">
            <img class="img-responsive" src="images/famille3.png" alt="clan3"/>
            <span class="titleFamille">Inagawa-kaï</span>
        </div>
        <div class="famille" id="famille4">
            <img class="img-responsive" src="images/famille4.png" alt="clan4"/>
            <span class="titleFamille">Sumiyoshi-rengō</span>
        </div>
    </section>
    <section id="choix-done">
        <p>félicitations Robert Say membre de la famille Yamaguchi, vous etes pret pour l'intronisation</p>
        <a id="toIntronisation" href="">Intronisation</a>
    </section>
    <section class="title">
        <h3>Sakazuki</h3>
    </section>
    <section class="video">
        <video src="video/validertattoo.mp4"></video>
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
