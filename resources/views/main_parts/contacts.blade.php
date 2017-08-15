<div id="contacts"  data-offset="150" class="col-md-12 contact-form-block">
	<header class="heading">
		<h2 class="heading-txt">Связаться с нами</h2>
		<p class="description-bl">Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации.</p>
	</header>
	<div class="social-media">
		<a href="@lang('messages.footer.facebook')" class="sm-link-ft"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a href="@lang('messages.footer.instagram')" class="sm-link-ft"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		<a href="@lang('messages.footer.vk')" class="sm-link-ft"><i class="fa fa-vk" aria-hidden="true"></i></a>
		<a href="@lang('messages.footer.youtube')" class="sm-link-ft"><i class="fa fa-youtube" aria-hidden="true"></i></a>
	</div>
	<div class="contact-form">
		<form action="javascript:contact()" class="form-itself" id="contactform">
			<div class="contact-form1">
				<input type="text" name="name" id="name" placeholder="Имя" required="">
			</div>
			<div class="contact-form2">
				<input type="text" name="phone" id="phone" placeholder="Телефон" required="">
			</div>
			<div class="contact-form3">
				<input type="email" name="email" id="email" placeholder="E-mail" required="">
			</div>
			<div class="contact-form4">
				<textarea name="content" id="content" placeholder="Сообщение" cols="30" rows="10"></textarea>
			</div>
			<input type="submit" class="send-message-input" value="Отправить сообщение" >
		</form>
		<div class="nesto-message">
			<h2 class="nesto-response" id="h2"></h2>
		</div>
	</div>
</div>