
<?php require 'header.php';?>
<link rel="stylesheet"href="1style.css">
<link rel="stylesheet"href="style.css">
<?php
$pdo=new PDO('mysql:host=localhost;dbname=ishii_shop;charset=utf8', 
	'kei_ishii', 'Wert3333-');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<?php require 'footer.php';?>  

// PDOのエラーモードを追加してください

//$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//フィールド名配列のみ取得する  