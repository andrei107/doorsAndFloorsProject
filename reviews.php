<?php
/*
Template Name: OT5
*/
?>
<?php get_header(); ?>
<div id="wrapOTZ">
	<div id="newOTZ5">
		<p class="textOtzF"> НАПИШИТЕ СВОЙ ОТЗЫВ О НАШЕЙ РАБОТЕ </p><br/>
			<div id="FOtz5">
				<div id="pol-OT5">
					<form name="form" action="/wp-content/themes/A2/mail5.php" method="post">
						<div id="G">
							<strong class="otzN1">Ваше имя*:</strong><br />
						<input class="otziv_field15" type="text" name="name" size="20" required/><br /> 
							<strong class="otzN1">Ваш e-mail*:</strong><br />
								<input class="otziv_field15" type="email" name="email" size="20" required/> <br /> <br />
							<p class="otzN1">Ваша оценка*</p> 
						<div class="radi5"><input type="radio" name="learnType" value="group">1 </div>
							<div class="radi"><input type="radio" name="learnType" value="solo">2 </div>	
							<div class="radi"><input  type="radio" name="learnType" value="group1">3 </div>	
							<div class="radi"><input  type="radio" name="learnType" value="group2">4 </div>	
							<div class="radi"><input  type="radio" name="learnType" value="group3">5</div>	
							<p></p><br/>
						</div>
							<strong class="otzN15 poiasnit">Ваш отзыв*:</strong>
						<textarea class="otziv_field55" maxlength="1000" name="mess" required ></textarea> <br /> 
							<p class="poiasnit2"> *  обязательные поля</p>
							<input class="otziv_field25" type="submit" value="Отправить"/> <br/>
					</form>	
				</div>		
			</div>
	</div>
	<div id="H">
		<div id="OtF"> <?php echo do_shortcode('[testimonials]'); ?></div>
	</div>
</div>
<?php get_footer(); ?>