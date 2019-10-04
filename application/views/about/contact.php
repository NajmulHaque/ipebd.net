<style type="text/css">
	.contact-form input[type="text"], input[type="email"] {
	border: 1px solid #a8a8a8;
	width: 31.65%;
	outline: none;
	padding: 10px;
	font-size: 14px;

	color: #fc3a3a;
	margin: 0 24px 24px 0;
}
</style>


 <!-- contact-page -->
<div class="contact">
	<div class="container">
		<div class="contact-page">
			<div class="contact-info">
				<h2 class="tittle">CONTACT</h2>
			</div>
			<div class="contact-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819"></iframe>
			</div>
			<div class="contact-form">
	               <form class="contact_form" method="post" enctype="multipart/form-data" action="<?php echo site_url('Temp/contact');?>">
						<input type="text" value="Name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" value="Telephone" name="telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
						<textarea onfocus="this.value = '';" name="message" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message</textarea>
						<input type="submit" value="SEND" >
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //contact-page -->