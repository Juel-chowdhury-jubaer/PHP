<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  
   <link rel="stylesheet" href="css/normalize.css">
   <link rel="stylesheet" href="css/responsiveslides.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  
  <script>
  $(function () {

      $("#slider4").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });
  });
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  
  	<header class="headsection clear">
      <div class="headtemplate">
  		<div class="headertop clear">
  			<img src="img/dia/safe diabetic life1.png">
  		</div>
  		<nav class="mainmenu clear">
    <ul class="showing">
      <li id="<?php if($currentPage =='index'){echo 'active';}?>"><a href="index.php">Home</a></li>
      <li class="<?php if($currentPage =='prescriptions'){echo 'active';}?>"><a href="prescriptions.php">Prescriptions</a></li>
      <li class="<?php if($currentPage =='symptoms'){echo 'active';}?>"><a href="symptoms.php">Symptoms</a></li>
      <li class="<?php if($currentPage =='foodsrecipes'){echo 'active';}?>"><a href="foodsrecipes.php">Foods&amp;Recipes</a></li>
      <li class="<?php if($currentPage =='livingwithdiabetics'){echo 'active';}?>"><a href="livingwithdiabetics.php">Living With Diabetes</a></li>
      <li class="<?php if($currentPage =='weightandheight'){echo 'active';}?>"><a href="weightandheight.php">Weight of Height</a></li>
      <li class="<?php if($currentPage =='diabetcscenter'){echo 'active';}?>"><a href="diabeticscenter.php">Diabetes Centers</a></li>
      <li class="<?php if($currentPage =='endocrinologists'){echo 'active';}?>"><a href="endocrinologists.php">Endrocrinologists</a></li>
    </ul>
    </div>
    </header>
    <div class="template">
    <div class="handle">Menu</div>
  </nav>
  	</header>
    <div class="slider-section template clear">
      <div class="callbacks_container">
        <ul class="rslides" id="slider4">
          <li>
            <img src="img/dia/Eat well.jpg" alt="">
            <p class="caption">Eating well to prevent Diabetics</p>
          </li>
          <li>
            <img src="img/dia/healthy-foods.jpg" alt="">
            <p class="caption">Healty foods for controlling Diabetics</p>
          </li>
          <li>
            <img src="img/dia/worstandbest2.jpg" alt="">
            <p class="caption">Understanding the best and worst food for Diabetics controlling</p>
          </li>
          <li>
            <img src="img/dia/control.jpg" alt="">
            <p class="caption">Diabetics food choice is important</p>
          </li>
           <li>
            <img src="img/dia/top10.jpg" alt="">
            <p class="caption">Top foods</p>
          </li>
          <li>
            <img src="img/dia/drug.jpg" alt="">
            <p class="caption">Taking medicine</p>
          </li>
        </ul>
      </div>

    </div>
  