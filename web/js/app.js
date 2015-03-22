$(document).ready(function() {
    
    $("#rsvp input[type=button]").click(function(e) {
        e.preventDefault();
        var answer = $(this).val();
        var name = $("#rsvp input[type=text]").val();
        
        $.ajax({
            url: "/answer/" + name + "/" + answer,
        })
        .done(function( data ) {
            if ( console && console.log ) {
                console.log( "Sample of data:", data);
            }
        });
    });

})