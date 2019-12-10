
$(document).ready(function(){
   $('.slider-nav').slick({
     slidesToShow: 3,
     slidesToScroll: 3,
     asNavFor: '.slider-for',
     dots: true,
     focusOnSelect: true,
       responsive: [
      {
        breakpoint: 769,
        settings: {
          arrows: false,
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 600,
        settings: {
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
   });

   $('a[data-slide]').click(function(e) {
     e.preventDefault();
     var slideno = $(this).data('slide');
     $('.slider-nav').slick('slickGoTo', slideno - 1);
   });


    $(".various").fancybox({
            maxWidth    : 800,
            maxHeight   : 600,
            fitToView   : false,
            width       : '70%',
            height      : '70%',
            autoSize    : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none'
     });

  

/*  	function testAnim(x) {
  	     // alert(x);
	    $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	      $(this).removeClass();
	    });
	  }; 

	$('.slider-title').hover(function(e){
	  e.preventDefault();
	  var anim = "fadeInDown";
	  testAnim(anim);
	});
*/
   /* function fixe_height_text(x){ 
     alert(x);
     
     $(x).each(function(){
            var currentHeight = $(this).height();
            var thisHeight = currentHeight;
           // var currentWidth = $(this).width();
            var newWidth = currentWidth;
            // Try shrinking width until height changes
            while (thisHeight == currentHeight) {
                var testWidth = newWidth - 10;
                $(this).width(testWidth);
                thisHeight = $(this).height();
                if (thisHeight == currentHeight) {
                    newWidth = testWidth;
                } else {
                    break;
                }
            }
            $(this).height(thisHeight);
        });
    }
    
    var story_title= $('.grid-inner');
    alert(story_title);
        fixe_height_text(story_title);
   var story_h6= $('.grid-inner h6');
        fixe_height_text(story_h6);
        
    var story_p= $('.grid-inner p');
        fixe_height_text(story_p);
        
     var text1 = $('.quate-inner');
     fixe_height_text(text1);
     
     $(window).resize(function(){
         var tex1 = $('.quate-inner');
            fixe_height_text(tex1);
             
        var story_title= $('.grid-inner h3');
            fixe_height_text(story_title);
    
        var story_h6= $('.grid-inner h6');
            fixe_height_text(story_h6);
            
        var story_p= $('.grid-inner p');
            fixe_height_text(story_p);         
     });*/

 });
 
 jQuery(window).on('load', '', function(){
     $('.carousel-inner').addClass('loaded');
 })

