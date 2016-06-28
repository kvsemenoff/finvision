
$(document).ready(function(){
    RESPONSIVEUI.responsiveTabs();
/*menu*/
    funcun = function(){$('.menu-list-pressed').css({'animation-duration': '1s'});}
    setTimeout(funcun,1000);
/*menu*/
alert(1);
/*slider*/
var $i = 1;
        var $items = $('.anz-item');
        var $left_arrow = $('.anz-left-arrow');
        var $right_arrow = $('.anz-right-arrow');
        func4 = function(){
            $items.eq($i-2).removeClass('anz-item-hidden');
        }
        func3 = function(){
            $items.eq(($i+2)%$items.length).removeClass('anz-item-hidden');
        }

        func2 = function(){
            if(($i+1)==$items.length){$i-=$items.length;}
            else if(($i-1)==-$items.length){$i+=$items.length;}
            //alert($i);
            $items.addClass('anz-item-hidden');
            
            if ($items.eq($i).hasClass('anz-item-after')){

            $items.eq($i).removeClass('anz-item-after').removeClass('anz-item-hidden');
            
            $items.eq($i-1).addClass('anz-item-before').removeClass('anz-item-hidden');;
            $items.eq($i-2).removeClass('anz-item-hidden').removeClass('anz-item-before').addClass('anz-item-before2');
            $items.eq($i-3).removeClass('anz-item-before2');
            $items.eq(($i+1)%$items.length).removeClass('anz-item-hidden').removeClass('anz-item-after2').addClass('anz-item-after');
            $items.eq(($i+2)%$items.length).addClass('anz-item-after2');
            setTimeout(func3,500);
            } else {
            $items.eq($i).removeClass('anz-item-before').removeClass('anz-item-hidden');
            
            $items.eq(($i+1)%$items.length).addClass('anz-item-after').removeClass('anz-item-hidden');;
            $items.eq(($i+2)%$items.length).removeClass('anz-item-hidden').removeClass('anz-item-after').addClass('anz-item-after2');
            $items.eq(($i+3)%$items.length).removeClass('anz-item-after2');
            $items.eq($i-1).removeClass('anz-item-hidden').removeClass('anz-item-before2').addClass('anz-item-before');
            $items.eq($i-2).addClass('anz-item-before2');
            setTimeout(func4,500);
            }
        }
        func = function(){
            $items.removeClass('anz-none');

        }
        $left_arrow.click(function(){
            $i--;
            func2();
        });
        $right_arrow.click(function(){
            $i++;
            func2();
        });
            
            $items.addClass('anz-item-hidden');
            $items.eq(($i)%$items.length).removeClass('anz-item-hidden');
            $items.eq($i-1).removeClass('anz-item-hidden').addClass('anz-item-before');
            $items.eq($i-2).removeClass('anz-item-hidden').addClass('anz-item-before2');
            $items.eq(($i+1)%$items.length).removeClass('anz-item-hidden').addClass('anz-item-after');
            $items.eq(($i+2)%$items.length).removeClass('anz-item-hidden').addClass('anz-item-after2');
        func();
/*slider*/



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
