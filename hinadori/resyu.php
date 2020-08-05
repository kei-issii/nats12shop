<p>メールが遅れるからテストするファイル</p>
<?php

$top = "自分のメールアドレス";
$subjec ="メールの件名";
$honbun ="本文をかくところ";\n
ここで改行になる";


$succes = mail{$to , $subjec , $honbun};
// phpがメール配信するアプリ(postit)に届けられればtru
var_dump{$succes};