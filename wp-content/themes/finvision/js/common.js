
$(document).ready(function(){
    RESPONSIVEUI.responsiveTabs();

    funcun = function(){$('.menu-list-pressed').css({'animation-duration': '1s'});}
    setTimeout(funcun,1000);

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

    $(".phone").mask("+ 7 (999) 999 - 99 - 99?"); 

    $(".single_image").fancybox();

    $("a[rel=group]").fancybox({
      'transitionIn' : 'none',
      'transitionOut' : 'none',
      'titlePosition' : 'over',
      'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
       return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
       }
    });
    $("a[rel=group2]").fancybox({
      'transitionIn' : 'none',
      'transitionOut' : 'none',
      'titlePosition' : 'over',
      'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
       return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
       }
    });

    $('a[name=modal]').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('href');
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#mask').css({'width':maskWidth,'height':maskHeight});
        $('#mask').fadeTo("slow",0.8); 
        var winH = $(window).height();
        var winW = $(window).width();
        posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
        $(id).css('top',  posTop+150);
        $(id).css('left', winW/2-$(id).width()/2);
        $(id).fadeIn(500); 
    });

    
     
    $('.window .close').click(function (e) {
        e.preventDefault();
        $('#mask, .window').hide();
        $('.window').hide();
    }); 
      
    $('#mask, .an-exit__krest').click(function () {
        $('#mask').hide();
        $('.window').hide();
    }); 

   function cleanTnakns(form){
        $('input[type="text"]').removeClass("error-input");
        $("input[type=text], textarea").val("");
        $('.window').hide();
        $('a[href=#thanks]').trigger('click');
        
    }


    $('input[type="text"]').mousedown(function() { 
        $('input[type="text"]').removeClass("error-input");
    });

    $(".form1").submit(function() { 
        var tel = $(this).find('input[name="tel"]');
        var empty = false;
        if (tel.val() == ""){
            empty = true;
        }
        if (empty == true){
            tel.addClass("error-input");
            tel.focus();
        }else{
            var form_data = $(this).serialize(); 
            $.ajax({
                type: "POST", 
                url: "/sendmessage.php", 
                data: form_data,
                success: function() {
                    cleanTnakns(this);
                }
            });
        }
        return false;
    });


// ******************************** ah-item ********************************

    $("#form2_submit").click(function () {
       
        var empty = true;
        $('.form2  input[name="tel"]').each(function(o){
            if ($(this).val() == ""){empty = false;}
        });
        if (empty == false){
          alert("Заполните, пожалуйста, Ваш телефон");
        }else{
          $.ajax({
            type: 'POST',
            url: '/sendmessage.php',
            data: $('.form2').serialize(),
            success: function(data) {
            }
          });
          $('.window').hide();
          $('a[href=#thanks]').trigger('click');
        }
        var empty = true;
        return false;
    }); 

    $("#form3_submit").click(function () {
       
        var empty = true;
        $('.form3  input[name="tel"]').each(function(o){
            if ($(this).val() == ""){empty = false;}
        });
        if (empty == false){
          alert("Заполните, пожалуйста, Ваш телефон");
        }else{
          $.ajax({
            type: 'POST',
            url: '/sendmessage.php',
            data: $('.form3').serialize(),
            success: function(data) {
            }
          });
          $('.window').hide();
          $('a[href=#thanks]').trigger('click');
        }
        var empty = true;
        return false;
    }); 
// ******************************** ah-item ********************************

});
