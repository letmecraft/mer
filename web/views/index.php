<html class="no-js" lang="it">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="robots" content="noindex">
        <title>TITLE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/        
        <link rel="icon" type="image/png" href="../images/favicon.ico" />
        <script src="//use.typekit.net/kpu6che.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
        <header>
            <img src="../images/logo.png" alt="Martina e / y Renato" />
        </header>

        <section id="carta">

            <div class="content">
                <p class="intro">Vieni al matrimonio? / Venís al casamiento?</p>
                <p class="intro small">Scrivi il tuo nome e cognome / Escribí tu nombre y apellido</p>
                <p class="msg error">Oups! Qualcosa non ha funzionato.<br />Contata Martina per confermare la tua presenza: martinaeyrenato@gmail.com</p>
                <p class="msg success">Grazie! Gracias!</p>
                <form id="rsvp" method="post">
                    <input type="text" name="name" />
                    <input type="button" name="no" value="No" />
                    <input type="button" name="si" value="Si!" />
                </form>
            </div>
        
            <svg></svg>
        </section>

        <section id="blabla">

            <div class="column">

                <h2 class="arg">Español</h2>

                <h3>
                <?php echo file_get_contents("images/orlogo.svg") ?>
                </h3>

                <p>Después del brindis, los festejos seguirán hasta la noche. 
                Les aconsejamos reservar con buena anticipación una habitación en uno de los siguientes hoteles: 
                <a href="http://hotellario.it" target="_blank">Hotel Lario</a>, un 3 estrellas que queda a 50mt.
                <a href="http://grandhoteltremezzo.com" target="_blank">Grand hotel Tremezzo</a>, un 4 estrellas que queda a 1.3km.
                <a href="http://villaedy.com" target="_blank">Hotel villa Edy</a>, un 3 estrellas que queda a 300 mt en subida.</p>

                <h3>
                    <?php echo file_get_contents("images/salvagente.svg") ?>                    
                </h3>

                <p>Ya que la fiesta se realizará en un jardín, desaconsejamos el uso de tacos. 
                Como es tradición en Azzano, en cualquier momento podríamos terminar todos en el lago, 
                así que recomendamos llevar un traje de baño y un cambio de ropa.</p>

                <h3>
                    <?php echo file_get_contents("images/compas.svg") ?> 
                </h3>

                <p>Via Regina 21.     
                22010 Azzano (Co)
                <a href="https://www.google.ca/maps/place/Via+Provinciale+Regina,+21,+22019+Tremezzo+CO,+Italy/@45.9811597,9.2117205,17z/data=!4m2!3m1!1s0x478422d8216e84af:0xb7e4bf9ab02c0d2a" target="_blank">Google map</a>.
                El aeropuerto más cercano a la ciudad de Como es el “Malpensa” de Milán. Desde Malpensa pueden tomar un tren a Saronno y ahí cambiar y llegar directamente hasta Como. 
                También podrían aterrizar en Milano “Linate”, pero en ese caso deberían tomarse un colectivo hasta una estación de trenes de Milán para después tomar un tren hacia Como. Desde Como a Azzano se puede llegar: En auto: 45 minutos. En ferry rápido: 40 minutos (bajar en la parada de Tremezzo). En colectivo: 50 minutos (bajar en la parada de Azzano o Bolvedro) ¡Avisen cuando y como llegan que los iremos a buscar!</p>
            </div>

            <div class="column">

                <h2>Italiano</h2>

                <h3>
                    <?php echo file_get_contents("images/orlogo.svg") ?> 
                </h3>

                <p>Dopo il brindisi, i festeggiamenti proseguiranno
                fino a tarda serata. 
                Vi consigliamo di riservare un hotel nelle vicinanze. 
                Il piu vicino è <a href="http://hotellario.it" target="_blank">l’Hotel Lario</a>, a 50 mt.
                Altre possibilità sono:
                <a href="http://grandhoteltremezzo.com" target="_blank">Grand hotel Tremezzo</a> a 1.3 km e
                <a href="http://villaedy.com" target="_blank">Hotel villa Edy</a> a 500mt</p>

                <h3>
                    <?php echo file_get_contents("images/salvagente.svg") ?> 
                </h3>

                <p>Visto che la festa si realizzerà in giardino, sconsigliamo l’uso di tacchi. 
                Come da tradizione ad Azzano, in qualsiasi momento potremmo finire tutti nel lago, quindi portatevi un costume da bagno e un cambio! (diseguinio costume e frase carina potrebbe bastare)</p>

                <h3>
                    <?php echo file_get_contents("images/compas.svg") ?> 
                </h3>

                <p>Via Regina 21.     
                22010 Azzano (Co)
                Vedi su <a href="https://www.google.ca/maps/place/Via+Provinciale+Regina,+21,+22019+Tremezzo+CO,+Italy/@45.9811597,9.2117205,17z/data=!4m2!3m1!1s0x478422d8216e84af:0xb7e4bf9ab02c0d2a" target="_blank">Google map</a></p>
            </div>

        </section>

        <footer></footer>

        
    	
        

        <!-- JS -->
        <script type="text/javascript" src="vendors/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="vendors/snap.svg-min"></script>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>