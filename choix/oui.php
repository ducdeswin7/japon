<?php sleep(2);?>
<div id="info">
    <div class="refuser">
        <div class="accept">
            <p>Vous n'etes pas pret à etre un Yakuza revenez plus tard</p>
            <a href="#">Retour à l'acceuil</a>
        </div>
        <a id="accept" href="#">Accepter</a>
        <a id="denied" href="#">Refuser</a>
    </div>
</div>
<div class="acceuil">
    <div class="truc">
        <span>salut t'es sur l'acceuil</span>
        <a id=videoLink href="#video">Commence l'expérience</a>
    </div>
    <div>
        <a href="#" id="skip">Skip</a>
        <video src="avatar.mp4" id="myLink" preload=""></video>
    </div>

    <script>
        var $videoLink =  $('#videoLink'),
            $vid       =  $('#myLink');

        $videoLink.on('click',function(e){
            e.preventDefault();
            $('.truc').fadeOut(2000);
            $vid.show().get(0).play()
        });
        $vid.on('ended',function(){
           var  $boxInfo = $('#info');
            $boxInfo
                .css({zIndex:'10'})
                .fadeIn(1000);

        });
        $('#denied').on('click',function(){
            $('.accept').fadeIn(1000);
            $('#accept').fadeOut(500);
            $('#denied').fadeOut(500);
        });
        $('#accept').on('click',function(){

        });

        $('#skip').on('click',function(){
            $vid.currentTime=83;
        });



    </script>
</div>


