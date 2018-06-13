<div id="dn_thongbao"></div>
<?php
	session_start();
	$ketnoi =  mysqli_connect('localhost','root','','banhang_php') or die('Không kết nối cơ sở dữ liệu được');
	mysqli_set_charset($ketnoi, "utf8");
	$ktTonTai = "SELECT * FROM thanhvien WHERE TenDangNhap = '".$_POST['tendangnhap']."' AND MatKhau = '".$_POST['matkhau']."'";
	$truyvan_ktTonTai = mysqli_query($ketnoi, $ktTonTai);
	if(mysqli_num_rows($truyvan_ktTonTai)>0){
		echo "<script>alert('Đăng nhập thành công')</script>";
		$_SESSION["tendangnhap"] = $_POST['tendangnhap'];
	}
	else
	{
		echo "<script>alert('Tài khoản hoặc mật khẩu không đúng')</script>";
	}
	$tranghientai = $_POST['tranghientai'];
?>
<script type="text/javascript">
	location='<?php echo $tranghientai; ?>';
</script>