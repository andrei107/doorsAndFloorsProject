<?php
/*
Template Name: COntactNew3v
*/
?>

<?php get_header(); ?>

<div class="open">
	<div class="close-op"></div>
	<div class="h-open">
		
	<p class="h-name"><i class="fa fa-phone fa-lg"></i>&nbsp;Заказать звонок</p>
	</div>
	<div class="b-open">
		<form name="form"  action="/wp-content/themes/A2/mail1.php"  method="post">		
		<div class="block-form1">
			<label class="dop-field">Ваше имя:</label>
			<input class="i1" type="text" name="username">
		</div>

		<div class="block-form3">
				<label class="dop-field">Телефон:</label>
			<input class="i1" type="tel" placeholder = "+375..."   pattern="^(\+375|80)(29|25|44|33)(\d{3})(\d{2})(\d{2})$" name="phonenumber">
		</div>
		<div class="block-form4">
				<label class="dop-field">Примечания:</label>
			<textarea class="i3" cols="30" rows="9"  maxlength="200" name="textmes"></textarea>
		</div>
		<input class="send-let" type="submit" value="Отправить"/>
		</form>
	</div>
</div>	
	

<div id="wr">
	<div id="content_contact5">
		<script charset="utf-8" async src=""></script>	
	</div>
		
	
	<div id="foon">

	<div class="mask-foto">
		<div id="left-1" data-set="1">
			<img src="/wp-content/themes/A2/images/magaz1.jpg" data-number="1" alt="a">
		</div>	
		<div class="indent">
		</div> 
		<div id="left-2" data-set="2">
			<img src="/wp-content/themes/A2/images/magaz2.jpg" data-number="2" alt="a">
		</div>
		<div id="left-3" data-set="3">
		    <img src="/wp-content/themes/A2/images/magaz3.jpg" data-number="3" alt="a">
		</div>
		<div id="left-4" data-set="4">
		     <img src="/wp-content/themes/A2/images/magaz4.jpg" data-number="4" alt="a">
		</div>
		<div id="left-5" data-set="5">
		     <img src="/wp-content/themes/A2/images/magaz5.jpg" data-number="5" alt="a">
		</div>
		<div id="left-6" data-set="6">
		     <img src="/wp-content/themes/A2/images/magaz6.jpg" data-number="6" alt="a">
		</div>
		<div id="left-7" data-set="7">
		     <img src="/wp-content/themes/A2/images/magaz7.jpg" data-number="7" alt="a">
		</div>
		<div class="override">
		    <i class="fa fa-chevron-circle-down fa-3x"></i>
		</div>
		<div class="override2">
		   <i class="fa fa-chevron-circle-up fa-3x"></i>
		</div>
	</div>
	
	
	
	<div class="mask-K"></div>
		<div id="mainContact6">
				<p>Мы будем рады видеть вас с 10:00 до 19:00, 
                 по адресу ======, ###############3. По 
                 всем интересующим вопросам Вы можете позвонить по указанным телефонам, написать на наш электронный 
                 адрес либо заполнить форму обратной связи и в кратчайшие сроки мы сами свяжемся с Вами. </p>
               <p>  Мы всегда рады Вам - будь вы розничный покупатель, приобретающий для своего дома, или же оптовик. Мы здесь для того чтобы помочь Вам реализовать все ваши задумки во время ремонта с минимальными затратами времени и денег.</p>
		</div>

	</div>
	<div class="big-foto">
			<div class="correct-foto">
			</div>
			<div class="left-bt">
				 <i class="fa fa-chevron-circle-left fa-3x"></i>
		</div>
			<div class="right-bt">
				 <i class="fa fa-chevron-circle-right fa-3x"></i>
		</div>
			<div class="cross">
		 <i class="fa fa-close fa-3x"></i>
		</div>
	</div>
	<div class="fullD">
	</div>
	
	
</div> 


<?php get_footer(); ?>