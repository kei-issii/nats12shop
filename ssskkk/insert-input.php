<?php require 'header.php'; ?>
<link rel="stylesheet"href="1style.css">
<p>商品を追加します。</p>
<form action="insert-output.php" method="get">
商品名<input type="text" name="kei_ishii">
価格<input type="text" name="price">
<input type="submit" value="追加">
</form>
<?php require 'footer.php'; ?>
