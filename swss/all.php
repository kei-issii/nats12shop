<?php require '../header.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=kei_shop;charset=utf8', 
	'kei_ishii', 'Wert3333-');
$pdo->setAttribute(PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);
?>
<?php require '../footer.php'; ?>




