<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
</head>
<body>
<?php

require_once "lib/dbi.class.php";

$age = array('','20-30 ปี','31-40 ปี','41-50 ปี','51-60 ปี','60 ปีขึ้นไป');
$car_type = array('','The A-Class','The B-Class','The CLA-Class','The C-Class','The SLK-Class','The E-Class','The CLS-Class','The S-Class','The Vito/The Visno','Coupe','Others');
$ads = array('','Facebook Ads','GDN','Adwords','Mobile Ads');

$db = new dbi();

$db->clear();
$db->addfield("id");
$db->addfield("name");
$db->addfield("age");
$db->addfield("mobile");
$db->addfield("email");
$db->addfield("car_type");
$db->addfield("ads");
$db->table = "users";

$db1 = new dbi();
$db1->clear();
$db1->addfield("id");
$db1->addfield("name");
$db1->addfield("count");
$db1->table = "ads";
?>

<h2>Ads</h2>

<table border=1>
	<tr>
		<td width=200 align="center">ลำดับ</td>
		<td width=200 align="center">โฆษณษา</td>
		<td width=200 align="center">จำนวนคนที่เข้าจากช่องทางนี้</td>
	</tr>
<?php
if ($db1->query()) {
	$i = 0;
	while ($row1 = $db1->getrow()) {
		$i++;
?>
	<tr>
		<td><?php echo $i; ?></td>
		<td width=200><?php echo $row1["name"]; ?></td>
		<td width=200><?php echo $row1["count"]; ?></td>
	</tr>
<?php 
	}
}
?>
</table>

<h2>Register</h2>

<table border=1>
	<tr>
		<td align="center">ลำดับ</td>
		<td width=200 align="center">ชื่อ</td>
		<td width=200 align="center">ช่วงอายุ</td>
		<td width=200 align="center">เบอร์โทรศัพท์</td>
		<td width=200 align="center">อีเมล์</td>
		<td width=200 align="center">รุ่นรถ</td>
		<td width=200 align="center">โฆษณา</td>
	</tr>
<?php
if ($db->query()) {
	$i = 0;
	while ($row = $db->getrow()) {
		$i++;
?>
	<tr>
		<td><?php echo $i; ?></td>
		<td width=200><?php echo $row["name"]; ?></td>
		<td width=200><?php echo $age[$row["age"]]; ?></td>
		<td width=200><?php echo $row["mobile"]; ?></td>
		<td width=200><?php echo $row["email"]; ?></td>
		<td width=200><?php echo $car_type[$row["car_type"]]; ?></td>
		<td width=200><?php echo $ads[$row["ads"]]; ?></td>
	</tr>
<?php 
	}
}
$db->close();
$db1->close();
?>
</table>
</body>
</html>