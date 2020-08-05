<link rel="stylesheet" href="slick/slick.css">
<link rel="stylesheet" href="slick/slick-theme.css">
<style>
  .slick-prev:before, .slick-next:before { color: black; }
  .slick-slide { margin: 0px 20px;}
  #slick{height: 300px; width: 980px;margin: 0 auto;position: relative;}
  .slick-next:before {  content: "→";}
  #slick div h2{font-size: 45px;
    line-height: 50px;
    color: #fff;
    position: absolute;
    top: 50px;
    width: 100%;
    text-align: center;
    background-color: rgba(0, 0, 0, 0.3);
    padding: 1em;}
  </style>
<?php
  $imgs = [
    ["metaslider01.jpg","tekitonamoji"]
    ,["metaslider05.png","てきとうなもじ"]
    ,["metaslider03.jpg","テキトウナモジ"]
    ,["metaslider04.jpg","適当な文字"]
  ];
  shuffle($imgs);
?>
<div id="slick">
  <?php foreach ($imgs as $key => $val){ ?>
    
    <div><img src="<?=$val[0]?>" alt=""><h2><?=$val[1]?></h2></div>
  <?php } ?>  
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="slick/slick.js"></script>
<script>
  $('#slick').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    fade: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: false,
    accessibility: true
  });
</script>