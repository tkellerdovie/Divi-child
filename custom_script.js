(function($){
    $(document).ready( function(){
	    
	    //* MENU ADJUSTMENT for the last item on the menu - LANGUAGE
	    
		jQuery(".menu-item-language a").each(function(i, value) {
		   var $link = jQuery(value);
		   var text = $link.text();
		   if(text.length > 3) {
			   $link.text(text.substring(0, 3));
		   }
		   $('.menu-item-language ul').css('width', $('.menu-item-language').outerWidth());
		});
		
	
	
		//contact form EDITs
		//adding dropdown placeholders
		
		
		
		
		
        
        //popup vidoe
        $('a').click(function(e){
	        
	    	var hrefAtt = $(this).attr('href');
	        if ( hrefAtt.toLowerCase().indexOf('vimeo') > 0){
		        var Vid = hrefAtt.split('/');
		        $('body').append('<div class="popupVimeo"><div class="xOut">X</div><iframe src="https://player.vimeo.com/video/' + Vid[3] + '" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>');
		        $('.xOut, .popupVimeo').click(function() {
			        $('.popupVimeo').remove();
		        });
		        e.preventDefault();
				return false; 
	        } 
	        
	        
		});
        
        
        /* MOBILE MENU */
        /*
        $('.mobile_menu_bar_toggle').click(function(){
	        if ($('#Top-menu').css('display') == 'block'){
		        $('#Top-menu').css('display', 'none'); 
	        } else {
				$('#Top-menu').css('display', 'block'); 
	       }
        });
        */
        
        
        
    });



	


})(jQuery)



