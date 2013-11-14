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
?>

<h2>Register</h2>

<table border=1>

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