<form id="ibbhaber-testimonial-form"action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

	<div class="field-container">
		<input type="text" class="field-input" placeholder="Adınız" id="name" name="name">
		<small class="field-msg error" data-error="invalidName">Ad kutusu boş bırakılamaz!</small>
	</div>

	<div class="field-container">
		<input type="text" class="field-input" placeholder="Email Adresiniz" id="email" name="email">
		<small class="field-msg error"  data-error="invalidEmail">Lütfen Email adresi giriniz. </small>
	</div>

	<div class="field-container">
		<textarea name="message" id="message" class="field-input" placeholder="Mesajınız"></textarea>
		<small class="field-msg error" data-error="invalidMessage">Mesaj kutusu boş bırakılamaz!</small>
	</div>
	
	<div class="field-container">
		<div>
            <button type="stubmit" class="btn btn-default btn-lg btn-sunset-form">Submit</button>
        </div>
		<small class="field-msg js-form-submission">Gönderim işlemi devam ediyor. Lütfen bekleyiniz&hellip;</small>
		<small class="field-msg success js-form-success">Mesajınız başarıyla gönderildi. Teşekkürler &hellip;</small>
		<small class="field-msg error js-form-error">İletişim Formuyla ilgili bir sorun oldu, lütfen tekrar deneyin!</small>
	</div>

	<input type="hidden" name="action" value="submit_testimonial">
	<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("testimonial_nonce")?>">

</form>