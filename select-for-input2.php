<?php require './header.php'; ?>
<p>購入数を選択してください。</p>
<form action="select-for-output.php" method="post">
<select name="count">
<?php
for ($i=0; $i<10; $i++) {
	echo '<option value="', $i, '">', $i, '</option>';
}
?>
</select>
<p><input type="submit" value="確定"></p>
</form>
<?php require './footer.php'; ?>


繰り返し文

value属性を省略できないシーン
<option value="1">北海道</option>
$1++   $+1  と同じ意味,代入 ++インクリメント
 