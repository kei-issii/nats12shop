<?php 
if(isset($_POST['text_sample'])) {  
  $text = htmlspecialchars($_POST['text_sample'], ENT_QUOTES, 'UTF-8');
}else{  
  $text = "初期値";
}
?>
 
<form method="post" action="" class="form_sample">
<p> テキスト: 
  <input type="text" name="text_sample" size="40" value="<?= $text ?>">
</p>
<input type="submit" value="送信">
</form>
<?php echo '<p>送信された値：'. $text . '</p>'; ?>