<?php
	include('../layout/header.php');
?>
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Contact</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-contact-->
	<div class="contact">
		<div class="container">
			<div class="contact-top heading"> 
				<h3>CONTACT US</h3>
			</div>
			<div class="contact-bottom"> 
				<div class="col-md-6 contact-left"> 
				<form>
					<input type="text" placeholder="Name" required="">
					<input type="text" placeholder="E-mail" required="">
					<input type="text" placeholder="Phone" required="">
				</form>
				</div>
				<div class="col-md-6 contact-left">
				<form>
					<textarea placeholder="Message"></textarea>
					<input type="submit" value="SEND">
				</form>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-contact-->
	<!--start-map-->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10120.556497001287!2d18.76800955!3d50.6431073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4710db154211990b%3A0x2d1cfe0737d73ec1!2sRusinowice%2C+Poland!5e0!3m2!1sen!2sin!4v1434621332678" frameborder="0" style="border:0"></iframe>
	</div>
	<!--end-map-->
	<?php
		include('../layout/footer.php');
	?>