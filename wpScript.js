(function ($) {
    $(document).ready(function () {
/*кнопки перехода по статьям*/
		var rr2=document.documentElement.clientHeight;
		$('.nextST').css('margin-top', rr2/2-150);
		$('.prevST').css('margin-top', rr2/2-150);
		
		
/*Подсветка меню*/
		var location = window.location.href;
		$('#menu ul li').each(function () {
 			var link = $(this).find('a').attr('href');
			var link2 = link +'/';
			if(location == link2 ||location == link ) {
				$(this).find('a').css('color', '#ff4900');
			}
		});
		
/*Формирование отзыва как диалога*/
		$(' .testimonial_body:even').addClass('even');
		$(' .testimonial_body:odd').addClass('odd');
		$(' .easy_testimonial_image_wrapper:odd').addClass('odd-v2');
		$(' .testimonial_author:odd').addClass('odd-v3');
		
/*Формироание обртаной связи в контактах*/
	var rr1=document.documentElement.clientHeight-235;
		$('.open').css('margin-top', rr1);
		var rr2=rr1-340-35;

		$('.h-open').on('click', function(){
			if($('.open').hasClass('show')){	
			} else{
				$('.open .b-open').css('display', 'block');
				$('.open').addClass('show');
				$('.open').animate({
						'margin-top': rr2,
						'height':'340px'		
						},500,function(){
							$('.close-op').css('display', 'block');	
				})                                                                                            	
			}
		})
		$('.close-op').on('click', function(){
			 $('.open').animate({
						'margin-top': rr1,
						'height':'35px'		
						},500,function(){
							 $('.close-op').css('display', 'none');	
				  				$('.open').removeClass('show');	
								 $('.open .b-open').css('display', 'none');
						 })	
		})
			
		
/*цвета ссылок в товарах и их положение*/		
		var cssB = {
   		    "color":"#ff6600",
			"border":"1px solid #9a9a9a",
			"font-size":"20px",
			"font-family":"Exo 2",
			"padding": "1px 8px 1px 8px",
			"float":"right",
			"display":"block",
			"margin-right":"20px"
           }
		
		var cssV= {
			"font-family":"Exo 2",
			"display":"block",
			"padding": "1px 8px 1px 8px",
           }
	
		$('#main span a span').css(cssB);
		$('#main span a').css(cssV);
		
/*сокрытие линий*/		
		$("#left-sidebar1").after("<div class='uk'></div>");
		$("#Daryia1").after("<div class='uk1'></div>");
		

	    });
})(jQuery);

/*выравнивание высот*/
var oldHandler = window['onload']; // сохраняем старый onload (если есть)
		window['onload'] = function() {
  		 if(typeof(oldHandler) == 'function') {
    		  oldHandler();
  		 } 
  		 setHeight(); // наша функция
		};
		function setHeight() {
  			 var b1 = document.getElementById('primary');
  			 var b2 = document.getElementById('left-sidebar1');
  				 if (!b1 || !b2) return;
  				 var h1 = b1.offsetHeight;
   var h2 = b2.offsetHeight;
   if (h1 > h2) {
      b2.style.height = (h1+30) + 'px';
      b1.style.height = (h1+30) + 'px';
   }else if (h1 < h2) {
      b1.style.height = (h2+30) + 'px';
      b2.style.height = (h2+30) + 'px';
   }
}		
