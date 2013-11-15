<?php require_once "controllers/config.php";?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mercedes Benz</title>
		<link rel="shortcut icon" href="img/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<div id="page-frame">
			<div id="blursheet" style="display: none;"></div>
			<div id="box-alert" class="box-alert" style="display: none;">
				<div id="button-close" class="button-close"></div>
				<div class="text-box-alert">Thanks you for Registration.</div>
				<div class="text-box-alert">You will receive confirmmation SMS shortly.</div>
				<div class="text-box-alert">Call for detail  02-530-9433</div>
			</div>
			<div id="box-alert-error" class="box-alert" style="display: none;">
				<div id="button-close-error" class="button-close"></div>
				<div id="text-box-alert-error" class="text-box-alert">Thanks you for Registration.</div>
			</div>
			<div id="benz-image"></div>
			
			<div id="upper"></div>
			<div id="mid-1">
				<form>
					<div>
						<div class="text">ชื่อ</div><input type="text" id="name" name="name">
					</div>
					<div>
						<div class="text type">อายุ</div>
						<select id="age" name="age">
							<option value="" selected>กรุณาเลือก</option>
							<option value="1">20-30 ปี</option>
							<option value="2">31-40 ปี</option>
							<option value="3">41-50 ปี</option>
							<option value="4">51-60 ปี</option>
							<option value="5">60 ปีขึ้นไป</option>
						</select>
					</div>
					<div>
						<div class="text">โทรศัพท์มือถือ</div><input type="text" id="tel" name="tel">
					</div>
					<div>
						<div class="text">อีเมล์</div><input type="text" id="email" name="email">
					</div>
					<div>
						<div class="text type">รุ่น</div>
						<select id="car_type" name="car_type">
							<option value="" selected>กรุณาเลือก</option>
							<option value="1">The A-Class</option>
							<option value="2">The B-Class</option>
							<option value="3">The CLA-Class</option>
							<option value="4">The C-Class</option>
							<option value="5">The SLK-Class</option>
							<option value="6">The E-Class</option>
							<option value="7">The CLS-Class</option>
							<option value="8">The S-Class</option>
							<option value="9">The Vito/The Visno</option>
							<option value="10">Coupe</option>
							<option value="0">Others</option>
						</select>
					</div>
					
					<input id="ok" name="ok" type="button" value="ลงทะเบียน">
				</form>
			</div>
			<div id="mid-2"></div>
			<div id="lower">
				<div>
					<div class="apps">
						<div id="googleplay"></div>
						<div id="appstore"></div>
					</div>
					<a href="http://www.mercedes-benz.co.th/content/thailand/mpc/mpc_thailand_website/thng/home_mpc/passengercars/home/financialservices/leasing/my_star.html" target="_blank">เข้าสู่เว็บไซต์ >>></a>
				</div>
			</div>
		</div>
		<!-- Add jQuery library -->
   		<script src="js/jquery-2.0.3.min.js"></script>
		<!-- Include Ajax and Javascript Benz landing page -->
	    <script type="text/javascript">
			 	var service_path = '<?php echo $url_path;?>' + 'localhost/benz_landing_page/controllers';
			 	
			 	var ads = <?php echo $_GET['ads'];?>;
		</script>
	    
	    <script src="js/common.js"></script>
		<script src="js/benz.js"></script>
		<script type="text/javascript">
			var benz = new benz();
	        	
	    	$(document).ready(function(){
		        benz.reset();
	        });
	    </script>
	</body>
</html>