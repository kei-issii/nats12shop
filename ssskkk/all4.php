<?php require 'header.php'; ?>
<link rel="stylesheet"href="1style.css">
<table>
<tr><th>商品番号</th><th>商品名</th><th>価格</th></tr>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=ishii_shop;charset=utf8', 
'kei_ishii', 'Wert3333-');
foreach ($pdo->query('select * from product') as $row) {
?>
		<tr>
			<td><?=$row['id']?></td>
			<td><?=$row['name']?></td>
			<td><?=$row['price']?></td>
		</tr>
<?php } ?>
</table>  
<?php require 'footer.php'; ?>

