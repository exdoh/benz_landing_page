<?php require_once "controllers/config.php";?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mercedes Benz</title>
		<link rel="shortcut icon" href="img/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<!--[if IE 8]>
			<style type="text/css">
				#blursheet {
					background-image: url("img/blursheet-ie.png");
					/*background:transparent;
			        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#50000000,endColorstr=#50000000); 
			        visibility: visible;*/
				}
				.text-box-alert {
					font-size: 20px;
					line-height: 8px;
				}
				#box-alert-error {
					width: 420px;					
					left:34%;
				}
				form {
					width: 350px;
				}
				form div {
					margin-bottom: 10px;
				}
				form .text {
					font-size: 18px;
				}
				form select {
					font-size: 14px;
				}
				form input[type="button"] {
					font-size: 18px;
				}
				#age {
					width: 110px;
					margin-right: 106px;
				}
				#lower a {
					margin-top: 54px;
					margin-right: 34px;
					font-size: 18px;
				}
			</style>
		<![endif]-->
	</head>

	<body>
		<div id="page-frame">
			<div id="blursheet" style="display: none;"></div>
			<div id="box-alert" class="box-alert" style="display: none;">
				<div id="button-close" class="button-close"></div>
				<div class="text-box-alert">"ขอบคุณสำหรับการลงทะเบียน</div>
				<div class="text-box-alert">ท่านจะได้รับ SMS เพื่อลุ้นรับสมุดโน๊ต Limited Edition</div>
				<div class="text-box-alert">และรับสิทธิพิเศษเพิ่มเติมเมื่อทำสัญญา mySTAR</div>
				<div class="text-box-alert">หากท่านไม่ได้รับ SMS ยืนยัน กรุณาติดต่อ 02-530-9433"</div>
			</div>
			<div id="box-alert-error" class="box-alert" style="display: none;">
				<div id="button-close-error" class="button-close"></div>
				<div id="text-box-alert-error" class="text-box-alert">หมายเลขนี้ได้ถูกลงทะเบียนเรียบร้อยแล้วค่ะ</div>
			</div>
			<div id="benz-image"></div>
			
			<div id="upper"></div>
			<div id="mid-1">
				<form>
					<div>
						<div class="text">ชื่อ - นามสกุล</div><input type="text" id="name" name="name">
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
							<option value="1">A-Class</option>
							<option value="2">B-Class</option>
							<option value="3">CLA-Class</option>
							<option value="4">C-Class</option>
							<option value="5">SLK-Class</option>
							<option value="6">E-Class</option>
							<option value="7">CLS-Class</option>
							<option value="8">S-Class</option>
							<option value="9">Vito/Viano</option>
							<option value="10">Coupe'</option>
							<option value="11">Others</option>
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
		<!--[if IE 8]>
			<script src="js/jquery-1.6.3.min.js"></script>
   		<![endif]-->
		<!-- Include Ajax and Javascript Benz landing page -->
	    <script type="text/javascript">
			 	function getUrl (url) {
				    var full_url = window.location.protocol + "//" + window.location.host + "/";
				    if(window.location.hostname == 'localhost') {
				         full_url += window.location.pathname.split("/")[1] + "/";
				    }
				    return full_url + url;
				}
				alert(getUrl('controllers'));
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