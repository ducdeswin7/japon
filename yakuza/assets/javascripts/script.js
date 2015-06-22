$(function(){
    //VARIABLES
    var $oui = $('#oui');

    $oui.on('click',function(e) {
        e.preventDefault();
        //Request to get the content of acceuil.php
        $.ajax({
            url      : "accueil.php",
            dataType:'html',
            method:'post',
            //avant que le requete soit exécuté
            beforeSend: function(){
                $('.container-choix').fadeOut(500);
                $('.load').fadeIn(700);
            },
            cache    : false,
            error    : function(request, error) {
                console.log(arguments);
                alert("Erreur : responseText: "+request.responseText);
            },
            success  : function(html) {
                afficher(html);
            }
        });
    });
    //fonction qui retire et affiche le contenu
    function afficher(data){
        $('.choix').remove();
        $('.load').fadeOut(500);
        var $content = $(data).filter('.content').appendTo('body');
        console.log($content);
        function fade(){
            $('.title').fadeIn(500);
        }
        setTimeout(fade, 2000);
    }

    //BACKGROUND SOUND
    var song = $('audio');
    song.prop('volume', 1);
    $('#mute').click(function () {
        if (song.prop("muted") == true) {
            song.prop("muted", false);
            $('#mute').html('<i class="fa fa-volume-up fa-2x"></i>');
        }
        else {
            song.prop("muted", true);
            $('#mute').html('<i class="fa fa-volume-off fa-2x"></i>');
        }
    });

    //FULLSCREEN

    $('.btn').on('click', function(){
        $(this).toggleClass('fullscreen');
        toggleFullScreen();
    });
    function toggleFullScreen() {
        if ((document.fullScreenElement && document.fullScreenElement !== null) ||
            (!document.mozFullScreen && !document.webkitIsFullScreen)) {
            if (document.documentElement.requestFullScreen) {
                document.documentElement.requestFullScreen();
            } else if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullScreen) {
                document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
            }
        } else {
            if (document.cancelFullScreen) {
                document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            }
        }
    }

    //VIDEO

    var $begin = $('#begin'),
        $containerVid = $('.video'),
        $video = $('#vidintro');

    $begin.on('click',function(e) {
        e.preventDefault();
        //$('.load').remove();
        song.get(0).pause();
        $('.acceuil').fadeOut(2000);
        $containerVid.fadeIn(1000);
        $video.get(0).play();
    });

    $video.on('ended',function(){
        $('.acceuil').remove();
        $('.regles').fadeIn('slow');
        $containerVid.fadeOut(500);
        song.get(0).play();
    });

    //Regles
    $('.more').on('click', function() {
        var href = $(this).attr('href');
        if ($('#ajax').is(':visible')) {
            $('#ajax').css({ display:'block' }).empty();
        }
            $('#ajax').load('ajax/rules.html ' + href, function() {
                $('#ajax').hide().fadeIn('slow');
            });
    });

    //regle acepted
    $('#accept-rule').on('click',function(){
        $('.regles').fadeOut(500);
        $('#accepted-rule').fadeIn(500);
        $containerVid.remove();
    });

    //TO famille.php
    $('#toFamille').on('click',function(e){
        e.preventDefault();
        //Request to get the content of acceuil.php
        $.ajax({
            url      : "famille.php",
            dataType:'html',
            method:'post',
            //avant que le requete soit exécuté
            beforeSend: function(){
                $('.content').fadeOut(500);
                $('.load').fadeIn(700);
            },
            cache    : false,
            error    : function(request, error) {
                console.log(arguments);
                alert("Erreur : responseText: "+request.responseText);
            },
            success  : function(html) {
                afficherFamille(html);
            }
        });
    });
    function afficherFamille(data){
        $('.content').remove();
        $('.load').fadeOut(500);
        var $content = $(data).filter('.content-famille').appendTo('body');
        $('.content-famille').addClass('content');
        console.log($content);
    }
    //FAMILY CHOICE
    $('.famille').on('click',function(){
        $('#choix-done').fadeIn(500);
        $('#choixFamille').fadeOut(500);
    });

    //TITLE
    $('#toIntronisation').on('click',function(e){
        e.preventDefault();
        $('.title').fadeIn(500);
        function fade(){
            $('.title').fadeOut(500);
        }
        setTimeout(fade, 2000);
        $('#choix-done').fadeOut(500);
        $('header').fadeOut(200);
        $('footer').fadeOut(200);

    });

});
