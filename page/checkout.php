<?php
	include('../layout/header.php');
?>
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Checkout</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-ckeckout-->
	<div class="ckeckout">
		<div class="container">
			<div class="ckeckout-top">
			<div class=" cart-items heading">
			 <h3>My Shopping Bag (3)</h3>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});	  
					});
			   </script>
				
			<div class="in-check" >
				<ul class="unit">
					<li><span>Item</span></li>
					<li><span>Product Name</span></li>		
					<li><span>Unit Price</span></li>
					<li><span>Stock Status</span></li>
					<li> </li>
					<div class="clearfix"> </div>
				</ul>
				<ul class="cart-header">
					<div class="close1"> </div>
						<li class="ring-in"><a href="single.html" ><img src="../images/s-1.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span>Woo Dress</span></li>
						<li><span>$ 290.00</span></li>
						<li><span>In Stock</span></li>
						<li> <a href="single.html" class="add-cart cart-check">ADD TO CART</a></li>
					<div class="clearfix"> </div>
				</ul>
				<ul class=" cart-header1">
					<div class="close2"> </div>
						<li class="ring-in"><a href="single.html" ><img src="../images/s-2.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span>Elliot Shoes</span></li>
						<li><span>$ 300.00</span></li>
						<li><span>In Stock</span></li>
						<li> <a href="single.html" class="add-cart cart-check">ADD TO CART</a></li>
						<div class="clearfix"> </div>
				</ul>
				<ul class="cart-header2">
					<div class="close3"> </div>
						<li class="ring-in"><a href="single.html" ><img src="../images/s-4.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span>Woo Dress</span></li>
						<li><span>$ 360.00</span></li>
						<li><span>In Stock</span></li>
						<li> <a href="single.html" class="add-cart cart-check">ADD TO CART</a></li>
						<div class="clearfix"> </div>
				</ul>
			</div>
			</div>  
		 </div>
		</div>
	</div>
	<!--end-ckeckout-->
	<?php
		include('../layout/footer.php');
	?>