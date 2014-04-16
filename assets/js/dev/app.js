jQuery(function($) {
	 
	 $('#main-menu').superfish();

	$('.tip').tooltip('toggle');

  	$('.product-sliders').flexslider({
	    animation: "slide",
	    animationLoop: false,
	    itemWidth: 270,
	    itemMargin: 10,
	    controlNav: false
  	});

  	$('#shop-single-slider').eislideshow({
        // animation           : 'center',
        autoplay            : true,
        // slideshow_interval  : 3000,
        easing			: 'easeInBack',
        titlesFactor        : 0,
    });
   
   $('#ei-slider').eislideshow({
		animation			: 'center',
		autoplay			: true,
		slideshow_interval	: 3000,
		titlesFactor		: 0
    });

    $('#myTab a').click(function (e) {
	  	e.preventDefault()
	  	$(this).tab('show')
	});

	$('#mega-3').dcVerticalMegaMenu({
        rowItems: '6',
        speed: 'slow',
        effect: 'slide',
        direction: 'left'
	});

});




(function($) {
	var Dokan = {
		/*
			init method call
		 */
		switcher: function() {
			$(".cbp-vm-options").on( 'click', 'a.cbp-vm-icon', this.switcherIcon );
		},
		hoverNavSlideEffect: function() {
			$('.header-woo-content').on( 'mouseenter', '.selector', this.hoverNavSlideEffectOn );
			$('.header-woo-content').on( 'mouseleave', '.selector', this.hoverNavSlideEffectOff );
		},
		shopCatToggle: function() {
			$('.vertical-menu').on( 'click', '.cat-shop', this.shopCatToggleEffect );
		},


		
		/*
			Calling method from init 
		 */
		// method for switcher
		switcherIcon: function(e) {
			e.preventDefault();
			var self = $(this),
				data = self.data( 'view' ),
				select = self.siblings( '.cbp-vm-selected' ),
				siblingsData = select.data( 'view' );
			
			select.removeClass( 'cbp-vm-selected' );
			self.addClass( 'cbp-vm-selected' );
			$( '.cbp-vm-switcher' ).removeClass( siblingsData ).hide().fadeIn( 'slow' ).addClass( data );

			
		},

		// method for hoverNavSlideEffect
		hoverNavSlideEffectOn: function(e) {
			e.preventDefault();
			drop_down = $(this).find('.drop-down-container');
			drop_down.stop().slideDown('slow');

		},
		hoverNavSlideEffectOff: function(e) {
			e.stopImmediatePropagation();
			drop_down = $(this).find('.drop-down-container');
			drop_down.stop().slideUp('slow');
		},


		shopCatToggleEffect: function(e) {
			var self = $(this),
				toggle = self.siblings('.mega-menu-wrapper');
				
			if( toggle.css('visibility') === 'hidden' ) {
				
				toggle.css('visibility', 'visible').hide();
				toggle.slideDown('slow');
				
			} else if( ! toggle.is(':visible') ) {
				toggle.slideDown('slow');
			} else {
				
				
				toggle.slideUp('slow');
				
				
			}
		}

	}


	Dokan.switcher();
	Dokan.hoverNavSlideEffect();
	Dokan.shopCatToggle();

})(jQuery);

