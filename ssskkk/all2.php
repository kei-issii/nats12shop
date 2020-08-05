<?php require 'header.php'; ?>
<link rel="stylesheet"href="1style.css">
<?php
$pdo=new PDO('mysql:host=localhost;dbname=ishii_shop;charset=utf8', 
'kei_ishii', 'Wert3333-');
$sql = 'select * from product';
$stmt = $pdo->query($sql);
var_dump($stmt);
foreach ( $stmt as $row) {
	echo '<p>';
}
foreach ( $stmt as $row) {
	echo $v,':'; 
	echo $row['id'], ':';
	echo $row['name'], ':';
	echo $row['price'];
	echo '</p>';
}
?>
<?php require 'footer.php'; ?>
select * from customer where login=kei_ishii and Wert3333-