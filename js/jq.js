$(document).ready(function(){
//quick-tabs
	$(".tab").find("a").click(function(event){
		event.preventDefault();
	});

    $(".tab").on('click', function(){
    	$(".quick-tabs-links li").removeClass("active");
    	$(this).addClass("active");
		var tab = $(this).attr('data-tab');
		$(".quick-tabs-container").hide();
		$("#tab_" + tab).show();
    });


    //pop-up make order
    $(".order").on('click', function(){
        $('.form.popup').bPopup({
            follow: [false, false], //x, y
        });;
    });
    //disable select option
    $('select').find("option[value='Выберите специальность']").attr('disabled','disabled');

    //menu specialization toggle
    $('header .menu li:nth-child(3)').click(function(event){
        event.preventDefault();
        $('header .spec-menu').slideToggle();
    });
    //magic contacts select
    $(".magic-select").selectmenu({
        change: function( event, data ) {
        $("#select-spec,.popup #select-spec").val(data.item.value);
       }
     });
    $(".form-wrap .form-submit").click(function(){
        if(($(".zayavka .ui-selectmenu-text").text())=='Выберите специальность'){
            $(".form.zayavka .ui-selectmenu-button").addClass('wpcf7-not-valid');
        }
    });
    $(".popup .form-wrap .form-submit").click(function(){
        if(($(".popup .ui-selectmenu-text").text())=='Выберите специальность'){
            $(".popup.form .ui-selectmenu-button").addClass('wpcf7-not-valid');
            $(".popup .ui-selectmenu-text").css("color","white")
        }
    });

    //desktop version for mobile
    $(".full-link").click(function(e){
        e.preventDefault();
        $.cookie('front',"1");
        location.reload();
    });
    //$.cookie('front',"0");
    function def_button(){
        $('.phone-header-button.def').click(function(e){
            e.preventDefault();
            $('.phone-menu').show(0);
            $(this).addClass('active');
            $(this).removeClass('def');
            active_button();
        });
    }
    function active_button(){
        $('.phone-header-button.active').click(function(e){
            e.preventDefault();
            $('.phone-menu').hide(0);
            $(this).addClass('def');
            $(this).removeClass('active');
            def_button();
        });
    }
    def_button();
    
});