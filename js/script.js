
/*-------------GOOGLE MAPS-----------------*/

/*function initialize() {

    var myLatlng = new google.maps.LatLng(59.934602, 30.334607);
    var mapOptions = {
        center: new google.maps.LatLng(59.934602, 30.334607),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        mapOptions);
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:"Ditlogistic"
    });
}

function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE&callback=initialize";
    document.body.appendChild(script);
}

window.onload = loadScript;
*/
$(document).ready(function() {
    $(".fancybox").fancybox();

    $('input[type="submit"]').on('click', function(e){
        e.preventDefault();
        $title = $(this).parent().find('h1').val();
        $name = $(this).parent().find($('input[name="name"]')).val();
        $email = $(this).parent().find($('input[name="email"]')).val();
        if ($email==""){
            $(this).parent().find($(".response")).text("Введите Email");
            return false;
        }
        $phone = $(this).parent().find($('input[name="phone"]')).val();
        $comment = $(this).parent().find($('textarea[name="comment"]')).val();
        $(this).parent().find($(".response")).text("Ваше письмо отправлено");
        jQuery.post(
        myajax.url,
        {
        action : 'myajax-submit',
        name: $name,
        comment: $comment,
        title: $title,
        email: $email,
        phone: $phone,
        // отправим код nonce вместе с остальными данными
        nonce : myajax.nonce
        },
        function( response ) {
           // alert( response );
        }
    );
    });
    
});

$(function() {

    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function() {
        $('body,html').animate({scrollTop: 0}, 1000);
    });

    $('.smoothScroll').click(function(event) {
        event.preventDefault();
        var href=$(this).attr('href');
        var target=$(href);
        var top=target.offset().top;
        $('html,body').animate({
            scrollTop: top
        }, 1000);
    });
});

