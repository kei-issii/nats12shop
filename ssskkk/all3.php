<?php require '../header.php'; ?>
<link rel="stylesheet"href="1style.css">
<?php
$pdo=new PDO('mysql:host=localhost;dbname=ishii_shop;charset=utf8', 
'kei_ishii', 'Wert3333-');
foreach ($pdo->query('select * from product') as $row) {
	echo "<p>$row[id]:$row[name]:$row[price]</p>";
}
?>
<?php require '../footer.php'; ?>

