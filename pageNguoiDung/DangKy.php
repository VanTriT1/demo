<?php
	include('../layout/header.php');
	if(isset($_SESSION['tendangnhap'])){
		echo "<script>location='SanPham.php'</script>";
	}
?>
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="SanPham.php">Trang Chủ</a></li>
					<li class="active">Đăng Ký</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-account-->
	<div class="account">
		<div class="container"> 
			<div class="account-bottom">
				<div class="col-md-6 account-left">
					<form id="dangky" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
						<div class="account-top heading">
							<h3>Đăng ký tài khoản</h3>
						</div>
						<div class="address">
							<span>Tên đăng nhập</span>
							<input type="text" name="tendangnhap" id="tendangnhap">
						</div>
						<div class="address">
							<span>Mật khẩu</span>
							<input type="password" name="matkhau" id="matkhau">
						</div>
						<div class="address">
							<span>Nhập lại mật khẩu</span>
							<input type="text" name="nhaplaimatkhau" id="nhaplaimatkhau">
						</div>
						<div class="address">
							<span>Họ tên</span>
							<input type="text" name="hoten" id="hoten">
						</div>
						<div class="address">
							<span>Ngày sinh</span>
							<input type="date" name="ngaysinh" id="ngaysinh">
						</div>
						<div class="address">
							<span>Giới tính</span>
							<input type="radio" name="gioitinh" value="M" checked="checked" id="gioitinh">Nam
							<input type="radio" name="gioitinh" value="F" id="gioitinh">Nữ
							<input type="radio" name="gioitinh" value="O"> Khác
						</div>
						<div class="address">
							<span>Địa chỉ</span>
							<input type="text" name="diachi" id="diachi">
						</div>
						<div class="address">
							<span>Điện thoại</span>
							<input type="text" name="dienthoai" id="dienthoai">
						</div>
						<div class="address">
							<span>Email</span>
							<input type="text" name="email" id="email">
						</div>
						<div class="address">
							<span style="color: red" id="thongbao" class="text-danger"></span>
						</div>
						<div class="address new">
							<input type="submit" value="Đăng ký">
						</div>
					</form>
				</div>
				<div class="col-md-6 account-left">
					<form method="POST" action="DangNhap.php">
						<input type="hidden" name="tranghientai" value="<?php echo $_SERVER['PHP_SELF']?>">
						<div class="account-top heading">
							<h3>Đăng nhập</h3>
						</div>
						<div class="address">
							<span>Tên đăng nhập</span>
							<input type="text" name="tendangnhap" id="dn_tendangnhap">
						</div>
						<div class="address">
							<span>Mật khẩu</span>
							<input type="password" name="matkhau" id="dn_matkhau">
						</div>
						<div class="address">
							<span style="color: red" id="dn_thongbao" class="text-danger"></span>
							<a class="forgot" href="#">Quên mật khẩu</a>
							<input id="dangnhap" type="submit" value="Đăng nhập">
							
						</div>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-account-->
	<?php
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$tendangnhap = $_POST['tendangnhap'];
			$matkhau = $_POST['matkhau'];
			$nhaplaimatkhau = $_POST['nhaplaimatkhau'];
			$hoten = $_POST['hoten'];
			$ngaysinh = $_POST['ngaysinh'];
			$gioitinh = $_POST['gioitinh'];
			$diachi = $_POST['diachi'];
			$dienthoai = $_POST['dienthoai'];
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo "<script>$('#thongbao').text('Email không hợp lệ'); </script>";
			}
			$ktTonTai = "SELECT * FROM thanhvien WHERE TenDangNhap = '".$tendangnhap."'";
			$truyvan_ktTonTai = mysqli_query($ketnoi, $ktTonTai);
			if(mysqli_num_rows($truyvan_ktTonTai) > 0)
			{
				echo "<script>$('#thongbao').text('Tài khoản đã tồn tại'); </script>";
			}
			else
			{
				$themNguoiDung = "INSERT INTO thanhvien VALUE ('".$tendangnhap."', '".$matkhau."', '".$hoten."', '".$ngaysinh."','".$gioitinh."', '".$diachi."', '".$dienthoai."', '".$email."')";
				if(mysqli_query($ketnoi, $themNguoiDung))
				{
					echo "<script>window.location='SanPham.php'</script>";
				}
				else
				{
					echo "<script>$('#thongbao').text('Có lỗi xảy ra. Vui lòng thử lại'); </script>";
				}
			}
		}
	?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#dangky').click(function(){
				tendangnhap = $ ('#tendangnhap').val();
				matkhau = $ ('#matkhau').val();
				nhaplaimatkhau = $ ('#nhaplaimatkhau').val();
				hoten = $ ('#hoten').val();
				ngaysinh = $ ('#ngaysinh').val();
				diachi = $ ('#diachi').val();
				dienthoai = $ ('#dienthoai').val();
				email = $ ('#email').val();
				loi=0;
				if(tendangnhap==""||matkhau==""||hoten==""||ngaysinh==""||diachi==""||dienthoai==""||email=="" ){
					loi++;
					$('#thongbao').text("Hãy nhập đầy đủ thông tin");
				}
				if(matkhau != nhaplaimatkhau){
					loi++;
					$('#thongbao').text("Mật khẩu nhập lại không trùng khớp");
				}
				if(isNaN(dienthoai)==true){
					loi++;
					$('#thongbao').text("Điện thoại nhập vào phải là số");
				}
				if(loi != 0){
					return false;
				}
			});
			$('#dangnhap').click(function(){
				dn_tendangnhap = $('#dn_tendangnhap').val();
				dn_matkhau = $('#dn_matkhau').val();
				loi = 0;
				if(dn_tendangnhap == ""|| dn_matkhau == ""){
					loi++;
					$('#dn_thongbao').text("Bạn chưa nhập tên đăng nhập hoặc tài khoản");
				}
				if( loi != 0){
					return false;
				}
			});
		});
	</script>
	<?php
		include('../layout/footer.php');
	?>