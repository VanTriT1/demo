<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Free Style A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="../css/cssNguoiDung/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jsNguoiDung/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="../css/cssNguoiDung/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Free Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="../js/jsNguoiDung/move-top.js"></script>
<script type="text/javascript" src="../js/jsNguoiDung/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>	
<!-- start menu -->
<script src="../js/jsNguoiDung/simpleCart.min.js"> </script>
<link href="../css/cssNguoiDung/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../js/jsNguoiDung/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<?php session_start();?>				
</head>
<body> 
	<!--top-header-->
	<div class="top-header">
	<div class="container">
		<div class="top-header-main">
			<div class="col-md-4 top-header-left">
				<div class="search-bar">
					<form method="POST" action="TimKiemSanPham.php">
						<input type="text" placeholder="Nhập tên sản phẩm..." name="timkiemTenSP">
						<input type="submit" value="">
					</form>
					
				</div>
			</div>
			<div class="col-md-4 top-header-middle">
				<a href="<?php index.php ?>"><img src="../images/logo-4.png" alt="" /></a>
			</div>
			<div class="col-md-4 top-header-right">
				<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="../images/cart-1.png" alt="" />
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--top-header-->
<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="SanPham.php">Trang chủ</a></li>
					<li class="active"><a href="SanPham.php">Sản phẩm</a></li>
					<li class="active"><a href="DangKy.php">Đăng ký</a></li>
					<li class="grid"><a href="#">Men</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Shop</h4>
									<ul>
										<li><a href="products.html">New Arrivals</a></li>
										<li><a href="products.html">Men</a></li>
										<li><a href="products.html">Women</a></li>
										<li><a href="products.html">Accessories</a></li>
										<li><a href="products.html">Kids</a></li>
										<li><a href="products.html">login</a></li>
										<li><a href="products.html">Brands</a></li>
										<li><a href="products.html">My Shopping Bag</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Style Zone</h4>
									<ul>
										<li><a href="products.html">Men</a></li>
										<li><a href="products.html">Women</a></li>
										<li><a href="products.html">Brands</a></li>
										<li><a href="products.html">Kids</a></li>
										<li><a href="products.html">Accessories</a></li>
										<li><a href="products.html">Style Videos</a></li>
									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="products.html">Levis</a></li>
										<li><a href="products.html">Persol</a></li>
										<li><a href="products.html">Nike</a></li>
										<li><a href="products.html">Edwin</a></li>
										<li><a href="products.html">New Balance</a></li>
										<li><a href="products.html">Jack & Jones</a></li>
										<li><a href="products.html">Paul Smith</a></li>
										<li><a href="products.html">Ray-Ban</a></li>
										<li><a href="products.html">Wood Wood</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</li>				
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--bottom-header-->
<?php 
	$ketnoi =  mysqli_connect('localhost','root','','banhang_php') or die('Không kết nối cơ sở dữ liệu được');
	mysqli_set_charset($ketnoi, "utf8");
	function phan_trang($tenCot, $tenBang, $dieuKien, $soLuongSP, $trang, $dieuKienTrang){
		$ketnoi =  mysqli_connect('localhost','root','','banhang_php') or die('Không kết nối cơ sở dữ liệu được');
		if(mysqli_set_charset($ketnoi, "utf8")){
			$spBatDau = $trang*$soLuongSP;
			$laySp = "SELECT ".$tenCot. " FROM ".$tenBang ." ".$dieuKien." LIMIT ".$spBatDau.",".$soLuongSP;
			$truyvanLaySP = mysqli_query($ketnoi, $laySp);
			$laySoLuongSP = "SELECT ".$tenCot." FROM ".$tenBang." ".$dieuKien;
			$tongSoLuong = mysqli_num_rows(mysqli_query($ketnoi, $laySoLuongSP));
			$tongSoTrang = ceil($tongSoLuong / $soLuongSP);
			$dsTrang = "";
			for($i = 0; $i < $tongSoTrang; $i++){
				$soTrang = $i+1;
				$dsTrang .= "<a class='divtrang".$i."' href='".$_SERVER["PHP_SELF"]."?trang=".$i."&tensp=".$dieuKienTrang."'>".$soTrang."</a>";
			}
			echo "<script>
				$( document ).ready(function() {
				    $('.divtrang').html(\"".$dsTrang."\");
				});
			</script>";
		return $truyvanLaySP;
		}	
	}
?>	