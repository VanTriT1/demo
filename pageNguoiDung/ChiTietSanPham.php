<?php
	if(!isset($_GET['MaSP'])){
		header("location: SanPham.php");
	}
	include('../layout/header.php');
	$laysp = "SELECT * FROM sanpham WHERE MaSanPham = ".$_GET['MaSP'];
	$truyvan_laySP = mysqli_query($ketnoi, $laysp);
	$cot = mysqli_fetch_array($truyvan_laySP);
?>
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="SanPham.php">Trang chủ</a></li>
					<li class="active">Chi tiết sản phẩm</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
				<div class="col-md-9 single-main-left">
				<div class="sngl-top">
					<div class="col-md-5 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="../images/HinhSP/<?php echo $cot['Anh'];?>">
									<img src="../images/HinhSP/<?php echo $cot['Anh'];?>" />
								</li>
								<li data-thumb="../images/HinhSP/<?php echo $cot['Anh2'];?>">
									<img src="../images/HinhSP/<?php echo $cot['Anh2'];?>" />
								</li>
								<li data-thumb="../images/HinhSP/<?php echo $cot['Anh3'];?>">
									<img src="../images/HinhSP/<?php echo $cot['Anh3'];?>" />
								</li>
							</ul>
						</div>
<!-- FlexSlider -->
  <script defer src="../js/jsNguoiDung/jquery.flexslider.js"></script>
<link rel="stylesheet" href="../css/cssNguoiDung/flexslider.css" type="text/css" media="screen" />

	<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
				</div>	
				<div class="col-md-7 single-top-right">
					<div class="details-left-info simpleCart_shelfItem">
						<h3><?php echo $cot['TenSanPham'];?></h3>
						<p class="availability">Trạng thái: 
							<span class="color">
								<?php 
									if($cot['TrangThai'] = 1){
										echo " Còn hàng";
									}
								?></span>
							</p>
						<div class="price_single">
							<span class="reducedfrom">$800.00</span>
							<span class="actual item_price">$<?php echo $cot['DonGia'];?></span>
						</div>
						<h2 class="quick">Thông tin sản phẩm:</h2>
						<p class="quick_desc"> <?php echo $cot['ThongTin'];?></p>
						<div class="quantity_box">
							<ul class="product-qty">
								<span>Số lượng:</span>
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
								</select>
							</ul>
						</div>
					<div class="clearfix"> </div>
				<div class="single-but item_add">
					<input type="submit" value="Thêm vào giỏ hàng"/>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

					<?php
						$layDsSp = "SELECT * FROM sanpham WHERE MaLoaiSanPham = ".$cot['MaLoaiSanPham']. " LIMIT 0, 6";
						$truyvan_layDsSp = mysqli_query($ketnoi, $layDsSp);
						$row = mysqli_fetch_array($truyvan_layDsSp);
					?>
					<div class="latest products">
						<div class="product-one">
							<?php
								$i = 0; 
								$layDsSp = "SELECT * FROM sanpham WHERE MaLoaiSanPham = ".$cot['MaLoaiSanPham']. " LIMIT 0, 6";
								$truyvan_layDsSp = mysqli_query($ketnoi, $layDsSp);
								while ($row = mysqli_fetch_array($truyvan_layDsSp)) {
									$i++;
							?>
							<div class="col-md-4 product-left single-left"> 
								<div class="p-one simpleCart_shelfItem">
									
									<a href="#">
								<img src="../images/HinhSP/<?php echo $row['Anh']?>" alt="" />
								<div class="mask mask1">
									<span>Xem chi tiết</span>
								</div>
							</a>
									<h4><?php echo $row['TenSanPham']?></h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price">$<?php echo $row['DonGia']?></span></a></p>
									
								</div>
							</div>

							<?php
								if($i % 3 == 0)
								{
							?>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">$<?php echo $cot['DonGia'] ?></span></a></p>
							<div class="clearfix"> </div>
							<?php		
								}
								}
							?>
						</div>
					</div>
				</div>
				<div class="col-md-3 single-right">
					<h3>Categories</h3>
					<ul class="product-categories">
						<li><a href="#">Blucher Shoe</a> <span class="count">(14)</span></li>
						<li><a href="#">Clog Shoe</a> <span class="count">(2)</span></li>
						<li><a href="#">Snow Boot Shoe</a> <span class="count">(2)</span></li>
						<li><a href="#">Galesh Shoe</a> <span class="count">(11)</span></li>
						<li><a href="#">pataugas Shoe</a> <span class="count">(3)</span></li>
						<li><a href="#">Jazz Shoe</a> <span class="count">(3)</span></li>
					</ul>
					<h3>Colors</h3>
					<ul class="product-categories">
						<li><a href="#">Green</a> <span class="count">(14)</span></li>
						<li><a href="#">Blue</a> <span class="count">(2)</span></li>
						<li><a href="#">Red</a> <span class="count">(2)</span></li>
						<li><a href="#">Gray</a> <span class="count">(8)</span></li>
						<li><a href="#">Green</a> <span class="count">(11)</span></li>
						<li><a href="#">Yellow</a> <span class="count">(2)</span></li>
					</ul>
					<h3>Sizes</h3>
					<ul class="product-categories">
						<li><a href="#">5.5</a> <span class="count">(14)</span></li>
						<li><a href="#">6</a> <span class="count">(2)</span></li>
						<li><a href="#">6.5</a> <span class="count">(2)</span></li>
						<li><a href="#">7</a> <span class="count">(8)</span></li>
						<li><a href="#">7.5</a> <span class="count">(11)</span></li>
					</ul>
					<h3>Price</h3>
					<ul class="product-categories p1">
						<li><a href="#">600$-700$</a> <span class="count">(14)</span></li>
						<li><a href="#">700$-800$</a> <span class="count">(2)</span></li>
						<li><a href="#">800$-900$</a> <span class="count">(2)</span></li>
						<li><a href="#">900$-1000$</a> <span class="count">(8)</span></li>
						<li><a href="#">1000$-1100$</a> <span class="count">(11)</span></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-single-->
	<?php
		include('../layout/footer.php');
	?>