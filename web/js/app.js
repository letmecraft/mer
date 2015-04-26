$(document).ready(function() {
    
    var carta = Snap("#carta svg");

    var cuore1 = {
        x: 300, 
        y: 300
    }

    /*  Cuori */

    Snap.load("/images/cuore.svg", function (f) {
        
        var cuore1 = carta.group();
        cuore1.append(f);
        cuore1.transform("translate(230,350)");

        var cuore2 = carta.group();
        cuore2 = cuore1.clone();
        cuore2.transform("translate(780,80)");

        // set timeout
        boomBoom();
        var tid = setInterval(boomBoom, 500);

        function boomBoom(){
            cuore1.animate({ transform: 'matrix(0.9 0 0 0.9 231.8 351.8)' }, 250, mina.linear, function() {
                    cuore1.animate({ transform: 'matrix(1 0 0 1 230 350)' }, 250, mina.linear)
            } )

            cuore2.animate({ transform: 'matrix(0.9 0 0 0.9 741.8 91.8)' }, 250, mina.linear, function() {
                    cuore2.animate({ transform: 'matrix(1 0 0 1 740 90)' }, 250, mina.linear)
            } )
        }
    });

    /*  Nouages 

    Snap.load("/images/nouage.svg", function (f) {
        
        var nouage = carta.group();
        nouage.append(f);

        nouage.transform("translate(50,200)");
        nouage.animate({ transform: 'translate(2000,200)' }, 50250, mina.linear)
        
        var nouages = [];

        for(var i = 0; i<15; i++) {
            console.log(i);
            nouages[i] = nouage.clone();
            nouages[i].transform("translate(50," + random(50, 700) + ") scale(" + random(0.5, 1.1) + ")");
            nouages[i].animate({ transform: 'translate(2000,200)' }, 100250, mina.linear)    
        }
        //nouage.append(f);
    }); */

    $("#rsvp input[type=button]").click(function(e) {
        e.preventDefault();
        var answer = $(this).val();
        var name = $("#rsvp input[type=text]").val();

        $("#carta #rsvp, #carta .intro").fadeOut(500);
        
        $.ajax({
            url: "/answer/" + name + "/" + answer,
        })
        .done(function( data ) {
            if ( console && console.log ) {
                console.log( "Sample of data:", data);
                $("#carta .msg.success").delay(500).fadeIn(200);
            }
        })
        .error(function( data ) {
            $("#carta .msg.error").delay(500).fadeIn(200);
        });
    });

    function random(min,max)
{
    return Math.floor(Math.random()*(max-min+1)+min);
}

})