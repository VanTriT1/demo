	<?php
		include('../layout/header.php');
	?>
	<?php
		$trang = 0;
		if(isset($_GET['trang'])){
			$trang = $_GET['trang'];
		}
		$laysp=  phan_trang("*", "sanpham", "", 6, $trang,"");
		$truyvan_laysp = $laysp;
	?>
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">Trang Chủ</a></li>
					<li class="active">Sản Phẩm</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-product--> 
	<div class="product">
		<div class="container">
			<div class="product-main">
				<div class="product-one">
				<!--Phần danh sách sản phẩm -->
				<div class="col-md-9 p-left">
					<?php 
						$i = 0;
						while ($cot=mysqli_fetch_array($truyvan_laysp, MYSQLI_ASSOC)) {
							$i++;
					?>
				<div class="col-md-4 product-left single-left"> 
					<div class="p-one simpleCart_shelfItem">
						<a href="ChiTietSanPham.php?MaSP=<?php echo $cot['MaSanPham'] ?>"> <!--Link chi tiết sản phẩm-->
								<img src="../images/HinhSP/<?php echo $cot['Anh']?>" alt="" />
								<div class="mask mask1">
									<span>Xem chi tiết</span>
								</div>
						</a>
						<h4><?php echo $cot['TenSanPham']?></h4>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">$<?php echo $cot['DonGia'] ?></span></a></p>
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
							<div class="divtrang"></div>
			</div>		
		</div>
			<!-- Phần danh mục -->
			<div class="col-md-3 p-right single-right">
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
	<!--end-product-->
	<script type="text/javascript">
		$(document).ready(function(){
			<?php 
				echo "$('.divtrang".$trang."').addClass('divtrangactive')"
			?>
		});
	</script>
	<?php
		include('../layout/footer.php');
	?>