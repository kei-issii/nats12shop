<?php require 'header.php'; ?>
<link rel="stylesheet"href="1style.css">
<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
	'kei_ishii', 'Wert3333-');
$sql=$pdo->prepare('delete from product where id=?');
if ($sql->execute([$_REQUEST['id']])) {
	echo '削除に成功しました。';
} else {
	echo '削除に失敗しました。';
}
?>
<?php require 'footer.php'; ?>
