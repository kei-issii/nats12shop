<?php
$kuji = ["大吉","中吉","吉","小吉","末吉","凶"];
    $n = rand(1,6);
     //var_daump($n);//デバック用の関数
     echo '<p>', $kuji[$n];
?>
