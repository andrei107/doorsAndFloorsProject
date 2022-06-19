(function ($) {
    $(document).ready(function () {
	

  	if ( $(window).width() > 1000 ) {	
		 var value = sessionStorage.getItem('B1');
   			 if(value!='3'){	
				$('.vau').css('display','block');
			    $('#javchik').css('display','none');
		        $('#header').css('border','2px solid #fff');
		        $('#header').css('background','#fff');
			    $('#wrapper').css('background','#fff');
			    $('#javchik, #menu, #telWay, #contentM, #logo').css('opacity','0');		
					function a4() {
						$('#javchik').css('display','block');
						$('#javchik').css('opacity','1');
		   				$('#header').css('border','2px solid #000');
						$('#header').css('background-image','url("/wp-content/themes/A2/images/dar2.png")');
						$('#menu, #telWay, #contentM, #header').animate({
							'opacity':'1'		
							}, 500, function () {})
		 				$('#header').animate({
							'border':'2px solid #000'		
						}, 500, function () {})
					}	
		 			function a6() {
            			$('.vau').animate({
               				 'margin-left':'3px',
							 'margin-top':'14px'	
           					  }, {duration: 500, queue:false}, function () {
									$('.vau svg').animate({
									'margin-left':'3px',
									'margin-top':'12px'	
									}, 1000, function () {})
						})
			 			 $('.vau').animate({
               				 'width':'340px',
							 'height':'340px'
           					 }, 500, function () {})
    		 		 }

		 		 setTimeout(a4, 1750);
		 		 setTimeout(a6, 1100);
 		 		 sessionStorage.setItem('B1', '3');
			}  }
	 });
})(jQuery);
