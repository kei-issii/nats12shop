<?php require './header.php';?>
$kuji = ["大吉","中吉","吉","小吉","末吉","凶"];
   $n = rand(1,6);
    $n = rand(1,100);
     echo '<img src="img/fuda1', rand(1, 6),$n,'.png">';
     echo '<img src="img/fuda2',$n,'.png">';
    
     echo '<img src="img/fuda3',$n,'.png">';
    
     echo '<img src="img/fuda4',$n,'.png">';
    
     echo '<img src="img/fuda5',$n,'.png">';
    
     echo '<img src="img/kai.png',$n,'.png">';
    
     echo '<img src="img/tori.png',$n,'.png">';
    
     echo '<img src="img/un.png',$n,'.png">';
    
     echo '<p>', $kuji[$n];
<?php require './footer,php';?>

  /*  echo '<img src="item', rand(0, 2), '.png">';
   <img src="img/<?=$n?>.png">
    $num = rand(1,100);
    if( $num  <= 10){
      $n=1;  
    }elseif(  $num <= 30){
      $n=2;  
    }elseif(  $num <= 60){
      $n=3;   
    }elseif(  $num <=70){
      $n=4;
    }elseif(  $num <= 95){
      $n=5;   
    }elseif(  $num <=100){
      $n=6;   
    } var_dump($n);
  ?>
