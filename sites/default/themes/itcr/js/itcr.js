jQuery(document).ready(function ($) {
	
	// When the page has loaded show video carousel
	$("#slick-carousel").fadeIn(2000);
	
	// splitter in footer, hides last bar
	$('.footer .block-menu-menu-footer-menu .menu li.leaf:not(:last)').after('<li class="footer-divider">|</li>');
	$('.footer .block-block-4 .menu li.leaf:not(:last)').after('<li class="footer-divider">|</li>');
	
	// toggle function to show/hide
	$(document).ready(function(){
	  $(".toggler").click(function(){
          $(".view-faqs .views-field .field-content .toggler a").attr( "aria-expanded", function (i, attr) {
            return attr == 'true' ? 'false' : 'true'
          });
          $(this).next().slideToggle("fast");
        return false;
	  }).next().hide();
	  
	  $(".toggler-show").click(function(){
          $(this).next().slideToggle("fast");
		return false;
	  }).next().show();

	});
	
	
	jQuery(".abstract").hide();
	jQuery(".showhide").click(function(event) {
		event.preventDefault();
		jQuery(this).closest('tr').next().find('.abstract').toggle();
	});
	

	$(".form-item-field-award-type-value input").attr("size","5");
	
    // 508 issue fix
    $(":hidden").attr( "aria-hidden", "true");
    $(".imaging isotope-element .views-field-php .field-content").attr( "aria-hidden", "false");
    $(".menu-block-wrapper > ul > li > a").attr("aria-haspopup", "true");
    $(".menu-block-wrapper > ul > li > a").attr("aria-controls", "true");
    $(".menu-block-wrapper > ul > li > a").attr("aria-expanded", "false");
	$('.menu-block-wrapper > ul > li > a').focus(function () {
		$('.menu-block-wrapper > ul > li').removeClass('force-show');
		$(this).parent().addClass('force-show');
	});
    
    

	$(document).click(function () {
		$('.menu-block-wrapper > ul > li').removeClass('force-show');
	});
	
	// 508 fixes
    $(".menu li a.nolink").attr("href","#");
    $(".tp-bullets .bullet").attr("tabindex", "0");
    $(".bottomNavClose").attr("tabindex", "-1");
	
	$('.homepage-movie a').on('click', function(){
		$("#bottomNavClose").focus();
	});

//    $("#rev-learn-more a").attr("tabindex", "-1");
//    $('#rev-learn-more').change(function(event){
//        event.PreventDefault();
//        $(".current-sr-slide-visible #rev-learn-more a").attr("tabindex", "0");
//    });
    
});


//jQuery(".rs-wrapper-1").each(function(){
//   $this = jQuery(this);
//   id_array = $this.attr("id").split("_");
//   id = id_array[2];
//    jQuery.globalEval('revapi'+id+'.bind("revolution.slide.onloaded",function (e) {revapi'+id+'.revpause();});' );
//    alert("video paused");
//   });
//});


// shows all items at once
jQuery(function(){
	jQuery('.showall').click(function(){
		jQuery('.abstract').toggle();
	});
});



