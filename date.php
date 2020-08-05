<?php require './header.php'; ?>
<?php
date_default_timezone_set('Japan');
echo '<p>', date('Y/m/d H:i:s'), '</p>';
echo '<p>', date('Y年m月d日 H時i分s秒'), '</p>';
?>
<?php require './footer.php'; ?>
<?php
/*日時⇢タイムスタンプは用意されていない
タイムスタンプ⇢簡単
例) oct 1-12 ⇢10月1日 2012年は無い
  fri 12:22

簡単に出来ること出来ないことを知っておこう