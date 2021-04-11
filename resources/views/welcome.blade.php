<?php
$currentDT = Carbon\Carbon::now('Europe/Bucharest');
// $currentDT = Carbon\Carbon::createFromFormat('Y-m-d H:i', '2016-12-10 11:30');
$maxSignupTime = Carbon\Carbon::createFromFormat('Y-m-d H:i', '2020-11-17 23:59');
$minSignupTime = Carbon\Carbon::createFromFormat('Y-m-d H:i', '2020-11-09 00:00');
$canSignup = true;
if($currentDT->gte($maxSignupTime) || $currentDT->lte($minSignupTime)) {
    $canSignup = false;
}

$isDone = true;

$timeline = array(

    'Festivitatea de deschidere și anunțul înscrierilor la tombolă' => array(
        'start_date' => '2021-04-12 17:00',
        'end_date' => '2021-04-12 19:00',
        'link' => 'null',
        'register' => 'null'
    ),
    'Speed chatting' => array(
        'start_date' => '2021-04-12 20:00',
        'end_date' => '2021-04-12 23:59',
        'link' => 'https://discord.gg/Z9aeHwXzG2',
        'register' => 'https://forms.gle/YHTZrChZdW6N6SMA7'
    ),
    'Nu mai este la modă să rezolvi cubul rubik?, Sebastian Dima, Bodnaruc Mihai' => array(
        'start_date' => '2021-04-13 17:00',
        'end_date' => '2021-04-13 19:00',
        'link' => 'null',
        'register' => 'null'
    ),
    'Gartic phone' => array(
        'start_date' => '2021-04-13 20:00',
        'end_date' => '2021-04-13 23:59',
        'link' => 'https://discord.gg/Z9aeHwXzG2',
        'register' => 'null'
    ),
    'Studentul la FMI, prin ochii profesorului - Prof. Univ. Dr. GRAD Anca' => array(
        'start_date' => '2021-04-14 17:00',
        'end_date' => '2021-04-14 19:00',
        'link' => 'null',
        'register' => 'null'
    ),
    'Card games: Rentz&Cruce' => array(
        'start_date' => '2021-04-14 20:00',
        'end_date' => '2021-04-14 23:59',
        'link' => 'https://discord.gg/Z9aeHwXzG2',
        'register' => 'null'
    ),
    'Math & Computer Science: To love or not to love? This is the question - Lect. Univ. Dr. MIRCEA Ioan-Gabriel' => array(
        'start_date' => '2021-04-15 17:00',
        'end_date' => '2021-04-15 19:00',
        'link' => 'null',
        'register' => 'null'
    ),
    'Drinking games' => array(
        'start_date' => '2021-04-15 20:00',
        'end_date' => '2021-04-15 23:59',
        'link' => 'https://discord.gg/Z9aeHwXzG2',
        'register' => 'null'
    ),
    'Dincolo de pregătirea de specialitate: cum ne poate ajuta o facultate de mate-info să înțelegem lumea?' => array(
        'start_date' => '2021-04-16 14:00',
        'end_date' => '2021-04-16 16:00',
        'link' => 'null',
        'register' => 'null'
    ),
    'Ce înseamnă să fii student la mate-info? Discuție moderată între echipe ale facultăților de Matematică-Informatică' => array(
        'start_date' => '2021-04-17 16:00',
        'end_date' => '2021-04-17 18:00',
        'link' => 'null',
        'register' => 'null'
    ),
    'SSMI Quiz, concurs de cultură generală din domeniul mate-info (și nu numai)' => array(
        'start_date' => '2021-04-18 18:00',
        'end_date' => '2021-04-18 20:30',
        'link' => 'https://discord.gg/Z9aeHwXzG2',
        'register' => 'null'
    ),
    'Festivitatea de închidere și anunțul premiilor' => array(
        'start_date' => '2021-04-19 20:30',
        'end_date' => '2020-11-22 21:30',
        'link' => 'https://discord.gg/Z9aeHwXzG2',
        'register' => 'null'
    )
);


?>

<!DOCTYPE html>
<html lang="en" ng-app="ssmi">
   <head>
      <!-- Metas -->
      <meta charset="utf-8">
      <title>SSMI - Saptamana Studentilor de la Matematica si Informatica</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta property="og:title" content="SSMI - Saptamana Studentilor de la Matematica si Informatica" />
      <meta property="og:image" content="https://ssmi.societatea-hermes.ro/img/Site.png" />
      <!-- Css -->
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="css/base.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="css/main.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="css/flexslider.css" rel="stylesheet" type="text/css"  media="all" />
      <link href="css/venobox.css" rel="stylesheet" type="text/css"  media="all" />
      <link href="fonts.css" rel="stylesheet" type="text/css"  media="all" />
      <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,700" rel="stylesheet">

   </head>
   <body ng-controller="CoreController as vm">
      <!-- Preloader -->
      <div class="loader">
         <!-- Preloader inner -->
         <div class="loader-inner">
            <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1" xmlns="http://www.w3.org/2000/svg">
               <circle class="spinner" cx="50" cy="50" r="21" fill="#111111" stroke-width="1.5"/>
            </svg>
         </div>
         <!-- End preloader inner -->
      </div>
      <!-- End preloader-->
      <!--Wrapper-->
      <div class="wrapper">
         <!--Hero section-->
         <section class="hero overlay">
            <!--Main slider-->
            <div class="main-slider slider">
               <ul class="slides">
                  <li>
                     <div class="background-img">
                        <img src="img/site3.jfif" alt="">
                     </div>
                  </li>
               </ul>
            </div>
            <!--End main slider-->
            <!--Header-->
            <header class="header">
               <!--Container-->
               <div class="container ">
                  <!--Row-->
                  <div class="row">
                     <div class="col-md-2">
                        <a class="scroll logo" href="#wrapper">
                           <h2 class="nomargin">SSMI</h2>
                        </a>
                     </div>
                     <div class="col-md-10 text-right">
                        <nav class="main-nav">
                           <div class="toggle-mobile-but">
                              <a href="#" class="mobile-but" >
                                 <div class="lines"></div>
                              </a>
                           </div>
                           <ul class="nomargin">
                              <li><a class="scroll" href="#wrapper">Acasa</a></li>
                              <li><a class="scroll" href="#about">Despre</a></li>
                              <!-- <li><a class="scroll" href="#speakers">Speakers</a></li>
                              <li><a class="scroll" href="#topics">Topics</a></li>
                              <li><a class="scroll" href="#schedule">Schedule</a></li> -->
                              {{--<li><a class="scroll" href="#tickets">Hermes Gaming Weekend</a></li>--}}
                              <!-- <li><a class="scroll" href="#location">Location</a></li> -->
{{--                              <li><a class="scroll" href="#faq">FAQ</a></li>--}}
                               <li><a class="scroll" href="#cd-timeline">TimeLine</a></li>
                              <li><a class="scroll" href="#contact">Contact</a></li>
                              <!-- <li><a class="scroll" href="#gallery">Galerie</a></li> -->
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <!--End row-->
               </div>
               <!--End container-->
            </header>
            <!--End header-->
            <!--Inner hero-->
            <div class="inner-hero fade-out">
               <!--Container-->
               <div class="container hero-content">
                  <!--Row-->
                  <div class="row">
                     <div class="col-sm-12 text-center">
                        <h1 class="title gradient-text">SSMI A început! Aveți programul activităților mai jos.</h1>
{{--                        <span class="countdown gradient-text"></span>--}}
                     </div>
                  </div>
                  <!--End row-->
               </div>
               <!--End container-->
            </div>
            <!--End inner hero-->
         </section>
         <!--End hero section-->
         <!--About section-->
         <section id="about" class="about pt-120 pb-120 brd-bottom">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 mb-100 text-center">
                     <h1 class="title">SSMI</h1>
                     <p class="title-lead mt-20">"Săptămâna Studenților de la Matematică și Informatică" redefinește tot ceea ce ai crezut că inseamnă viața de student. <br />Incepând din 12 Aprilie dăm startul unei serii de evenimente menite să ofere experiențe de neuitat. </p>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-md-4 col-sm-4">
                     <div class="block-info-1">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="35px" height="25px" viewBox="0 0 42 32" enable-background="new 0 0 42 32" xml:space="preserve">
                           <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="5.1983" y1="28.1187" x2="43.4067" y2="11.702">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#53bc81"/>
                           </linearGradient>
                           <path fill="url(#SVGID_1_)" d="M38,30.5v-19c0-0.276-0.224-0.5-0.5-0.5S37,11.224,37,11.5v19c0,0.276-0.224,0.5-0.5,0.5h-31
                              C5.224,31,5,30.776,5,30.5v-19C5,11.224,4.776,11,4.5,11S4,11.224,4,11.5v19C4,31.327,4.673,32,5.5,32h31
                              C37.327,32,38,31.327,38,30.5z"/>
                           <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="4.7162" y1="26.9965" x2="42.9245" y2="10.5799">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#53bc81"/>
                           </linearGradient>
                           <path fill="url(#SVGID_2_)" d="M8.5,23C8.224,23,8,23.224,8,23.5S8.224,24,8.5,24H10v3.5c0,0.276,0.224,0.5,0.5,0.5
                              s0.5-0.224,0.5-0.5V24h6v3.5c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5V24h6v3.5c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5V24
                              h6v3.5c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5V24h1.5c0.276,0,0.5-0.224,0.5-0.5S33.776,23,33.5,23H32v-5h1.5
                              c0.276,0,0.5-0.224,0.5-0.5S33.776,17,33.5,17H32v-4.5c0-0.276-0.224-0.5-0.5-0.5S31,12.224,31,12.5V17h-6v-4.5
                              c0-0.276-0.224-0.5-0.5-0.5S24,12.224,24,12.5V17h-6v-4.5c0-0.276-0.224-0.5-0.5-0.5S17,12.224,17,12.5V17h-6v-4.5
                              c0-0.276-0.224-0.5-0.5-0.5S10,12.224,10,12.5V17H8.5C8.224,17,8,17.224,8,17.5S8.224,18,8.5,18H10v5H8.5z M31,18v5h-6v-5H31z
                              M24,18v5h-6v-5H24z M11,18h6v5h-6V18z"/>
                           <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="-0.4811" y1="14.9003" x2="37.7272" y2="-1.5164">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#53bc81"/>
                           </linearGradient>
                           <path fill="url(#SVGID_3_)" d="M32.5,3h4.25C36.837,3,37,3,37,3.5V8H5V3.5C5,3.224,5.224,3,5.5,3h4C9.776,3,10,2.776,10,2.5
                              S9.776,2,9.5,2h-4C4.673,2,4,2.673,4,3.5v5C4,8.776,4.224,9,4.5,9h33C37.776,9,38,8.776,38,8.5v-5C38,2.394,37.354,2,36.75,2H32.5
                              C32.224,2,32,2.224,32,2.5S32.224,3,32.5,3z"/>
                           <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="-1.6311" y1="12.2237" x2="36.5772" y2="-4.1929">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#53bc81"/>
                           </linearGradient>
                           <path fill="url(#SVGID_4_)" d="M26.5,3C26.776,3,27,2.776,27,2.5S26.776,2,26.5,2h-11C15.224,2,15,2.224,15,2.5S15.224,3,15.5,3
                              H26.5z"/>
                           <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="-2.9557" y1="9.1407" x2="35.2526" y2="-7.2759">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#53bc81"/>
                           </linearGradient>
                           <path fill="url(#SVGID_5_)" d="M13,4.5v-4C13,0.224,12.776,0,12.5,0S12,0.224,12,0.5v4C12,4.776,12.224,5,12.5,5S13,4.776,13,4.5z"
                              />
                           <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="-0.3065" y1="15.3067" x2="37.9019" y2="-1.11">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#53bc81"/>
                           </linearGradient>
                           <path fill="url(#SVGID_6_)" d="M29.5,5C29.776,5,30,4.776,30,4.5v-4C30,0.224,29.776,0,29.5,0S29,0.224,29,0.5v4
                              C29,4.776,29.224,5,29.5,5z"/>
                        </svg>
                        <p>
                           <strong>DATA</strong>
                           <span>12 - 18 Aprilie 2021</span>
                        </p>
                     </div>
                  </div>


                  <div class="col-md-4 col-sm-4">
                     <div class="block-info-1">
                        <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="35px" height="25px" viewBox="0 0 42 32" enable-background="new 0 0 42 32" xml:space="preserve">
                           <linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="4.511" y1="11.8158" x2="41.3229" y2="27.6695">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#53bc81"/>
                           </linearGradient>
                           <path fill="url(#SVGID_7_)" d="M10.239,31.926c0.009,0.006,0.021,0.003,0.03,0.009C10.341,31.973,10.418,32,10.499,32
                              c0.044,0,0.088-0.006,0.132-0.018l10.868-2.966l10.868,2.966C32.411,31.994,32.455,32,32.499,32c0.082,0,0.158-0.027,0.23-0.065
                              c0.01-0.005,0.021-0.003,0.03-0.009l9-5.5c0.191-0.117,0.281-0.348,0.22-0.563l-4.984-17.5c-0.041-0.147-0.148-0.267-0.29-0.326
                              c-0.142-0.057-0.301-0.048-0.436,0.026l-4.962,2.784c-0.24,0.135-0.326,0.44-0.191,0.681c0.135,0.242,0.439,0.327,0.682,0.191
                              l4.409-2.475l4.707,16.526l-8.015,4.898l-1.904-15.231c-0.034-0.275-0.293-0.466-0.559-0.434c-0.273,0.034-0.468,0.284-0.434,0.558
                              l1.907,15.259L22,28.115v-2.73c0-0.276-0.224-0.5-0.5-0.5s-0.5,0.224-0.5,0.5v2.73l-9.911,2.705l1.907-15.259
                              c0.034-0.274-0.16-0.524-0.434-0.558c-0.272-0.032-0.524,0.159-0.559,0.434l-1.904,15.231L2.084,25.77L6.791,9.244l4.409,2.475
                              c0.242,0.134,0.546,0.049,0.682-0.191c0.135-0.241,0.049-0.545-0.191-0.681L6.729,8.063C6.595,7.988,6.436,7.979,6.293,8.037
                              c-0.142,0.059-0.249,0.178-0.29,0.326l-4.984,17.5c-0.062,0.216,0.028,0.446,0.22,0.563L10.239,31.926z"/>
                           <linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="12.6241" y1="7.5582" x2="28.5468" y2="14.4156">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#53bc81"/>
                           </linearGradient>
                           <path fill="url(#SVGID_8_)" d="M21.161,23.367c0.096,0.088,0.217,0.132,0.339,0.132c0.12,0,0.24-0.043,0.336-0.129
                              C22.169,23.067,30,15.882,30,8.499c0-4.767-3.733-8.5-8.5-8.5S13,3.732,13,8.499C13,15.753,20.828,23.059,21.161,23.367z
                              M21.5,0.999c4.275,0,7.5,3.224,7.5,7.5c0,6.097-5.993,12.337-7.497,13.807C20.002,20.819,14,14.497,14,8.499
                              C14,4.223,17.225,0.999,21.5,0.999z"/>
                           <linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="17.3671" y1="6.7191" x2="25.6329" y2="10.2789">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#53bc81"/>
                           </linearGradient>
                           <path fill="url(#SVGID_9_)" d="M26,8.499c0-2.481-2.019-4.5-4.5-4.5S17,6.018,17,8.499s2.019,4.5,4.5,4.5S26,10.98,26,8.499z
                              M21.5,11.999c-1.93,0-3.5-1.57-3.5-3.5s1.57-3.5,3.5-3.5s3.5,1.57,3.5,3.5S23.43,11.999,21.5,11.999z"/>
                        </svg>
                        <p>
                           <strong>LOCATIE</strong>
                           <span>Online</span>
                        </p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                     <div class="block-info-1">
                        <svg version="1.1" id="Layer_10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="35px" height="25px" viewBox="0 0 42 32" enable-background="new 0 0 42 32" xml:space="preserve">
                           <linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="1.9027" y1="28.6566" x2="55.9027" y2="10.9483">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#53bc81"/>
                           </linearGradient>
                           <path fill="url(#SVGID_10_)" d="M40.498,0c-0.276,0-0.5,0.224-0.5,0.5v31c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5v-31
                              C40.998,0.224,40.774,0,40.498,0z"/>
                           <linearGradient id="SVGID_14_" gradientUnits="userSpaceOnUse" x1="1.1102" y1="26.2399" x2="55.1102" y2="8.5316">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#53bc81"/>
                           </linearGradient>
                           <path fill="url(#SVGID_10_)" d="M38.717,1.204c-0.17-0.083-0.376-0.062-0.526,0.055l-0.565,0.445C34.648,4.059,29.667,8,19.5,8H5.631
                              C4.18,8,3,9.2,3,10.674v10.714C3,22.828,4.18,24,5.631,24h3.394c0.088,1.125,0.502,3.794,2.454,5.761
                              C12.953,31.247,14.979,32,17.5,32c0.276,0,0.5-0.224,0.5-0.5S17.776,31,17.5,31c-2.242,0-4.026-0.652-5.306-1.938
                              c-1.668-1.677-2.067-4.025-2.163-5.062h2.995c0.085,0.682,0.36,1.881,1.274,2.802C15.089,27.597,16.166,28,17.5,28
                              c0.276,0,0.5-0.224,0.5-0.5S17.776,27,17.5,27c-1.055,0-1.891-0.302-2.484-0.896c-0.657-0.659-0.894-1.546-0.981-2.104h5.396
                              c10.216,0,15.237,3.963,18.237,6.331l0.522,0.411c0.089,0.07,0.198,0.105,0.307,0.105c0.075,0,0.15-0.017,0.219-0.051
                              c0.172-0.084,0.281-0.258,0.281-0.449V1.653C38.998,1.462,38.889,1.288,38.717,1.204z M4,21.388V10.674C4,9.751,4.731,9,5.631,9H9
                              v14H5.631C4.716,23,4,22.292,4,21.388z M37.998,29.317C34.864,26.851,29.672,23,19.432,23h-5.797
                              c-0.047-0.015-0.095-0.03-0.148-0.031c-0.001,0-0.001,0-0.002,0c-0.054,0-0.105,0.015-0.154,0.031H10V9h9.5
                              c10.237,0,15.392-3.864,18.498-6.316V29.317z"/>
                           <linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="-1.8839" y1="17.1097" x2="52.1161" y2="-0.5987">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#53bc81"/>
                           </linearGradient>
                           <path fill="url(#SVGID_11_)" d="M1.5,21.857c0.276,0,0.5-0.224,0.5-0.5V10.643c0-0.276-0.224-0.5-0.5-0.5S1,10.367,1,10.643v10.714
                              C1,21.633,1.224,21.857,1.5,21.857z"/>
                        </svg>
                        <p>
                           <strong>EVENIMENTE</strong>
                           <span>20+ evenimente</span>
                        </p>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End about section-->
         {{--
         <!--Schedule section-->
         <section id="schedule" class="schedule pt-120 pb-120">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 mb-100 text-center">
                     <h1 class="title">Conference Schedule</h1>
                     <p class="title-lead mt-10">We are very excited about the program being planned for Events 2017 <br> this summer in Cincinati, Ohio.</p>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-sm-12">
                     <h3 class="sub-title-0  mb-25"><span class="gradient-text">Conference Days</span></h3>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-sm-4 ">
                     <!--Tabs-->
                     <ul class="block-tabs">
                        <li class="active"><i class="et-line-calendar"></i><strong>Day 1</strong>  <span>- 23 july 2017</span></li>
                        <li class=""><i class="et-line-calendar"></i><strong>Day 2</strong>  <span>- 24 july 2017</span></li>
                        <li class=""><i class="et-line-calendar"></i><strong>Day 3</strong>  <span>- 25 july 2017</span></li>
                        <li class=""><i class="et-line-calendar"></i><strong>Day 4</strong>  <span>- 26 july 2017</span></li>
                     </ul>
                     <a class="link mt-20 gradient-text scroll" href="#accom">Accommodation</a>
                  </div>
                  <div class="col-sm-8 ">
                     <ul class="block-tab">
                        <!--Tab-->
                        <li class="active ">
                           <div class="block-date"><i class="et-line-calendar"></i><strong>Day 1</strong>  <span>- 23 july 2017</span></div>
                           <div class="block-detail">
                              <span class="time">08:00 - 10:00</span>
                              <span class="topic">Conference Opening</span>
                              <div class="block-text">
                                 <p>Nihilne te nocturnum praesidium Palati, nihil urbis vigilae, nihil timor populi, nihil concursus velit omnium, nihil hic muntissimus habendi senatus locus, nihil horum ora vultusque moverunt, patere tua consilia non sentis constrictam nihil hic muntissimus.</p>
                                 <span class="speaker"> <strong >Speaker</strong> : <a href="#" class="gradient-text ">Adam Blanco</a> </span>
                              </div>
                           </div>
                           <div class="block-detail">
                              <span class="time">10:30 - 12:30</span>
                              <span class="topic">Photography Foundations</span>
                              <div class="block-text">
                                 <p>Nihilne te nocturnum praesidium Palati, nihil urbis vigilae, nihil timor populi, nihil concursus velit omnium, nihil hic muntissimus habendi senatus locus, nihil horum ora vultusque moverunt, patere tua consilia non sentis constrictam nihil hic muntissimus.</p>
                                 <span class="speaker"> <strong >Speaker</strong> : <a href="#" class="gradient-text ">Luca Palermo</a> </span>
                              </div>
                           </div>
                           <div class="block-detail">
                              <span class="time">13:00</span>
                              <span class="topic">Lunch Time</span>
                           </div>
                           <div class="block-detail">
                              <span class="time">15:00 - 16:30</span>
                              <span class="topic">Retouching</span>
                              <div class="block-text">
                                 <p>Nihilne te nocturnum praesidium Palati, nihil urbis vigilae, nihil timor populi, nihil concursus velit omnium, nihil hic muntissimus habendi senatus locus, nihil horum ora vultusque moverunt, patere tua consilia non sentis constrictam nihil hic muntissimus.</p>
                                 <span class="speaker"> <strong >Speaker</strong> : <a href="#" class="gradient-text "> Lina Blamberg </a> </span>
                              </div>
                           </div>
                           <div class="block-detail">
                              <span class="time">17:00</span>
                              <span class="topic">Coffee Break</span>
                           </div>
                           <div class="block-detail">
                              <span class="time">17:30 - 18:00</span>
                              <span class="topic">Raw Processing</span>
                              <div class="block-text">
                                 <p>Nihilne te nocturnum praesidium Palati, nihil urbis vigilae, nihil timor populi, nihil concursus velit omnium, nihil hic muntissimus habendi senatus locus, nihil horum ora vultusque moverunt, patere tua consilia non sentis constrictam nihil hic muntissimus.</p>
                                 <span class="speaker"> <strong >Speaker</strong> : <a href="#" class="gradient-text "> Emilie Lippelt </a> </span>
                              </div>
                           </div>
                        </li>
                        <!--Tab-->
                        <li>
                           <div class="block-date"><i class="et-line-calendar"></i><strong>Day 2</strong>  <span>- 24 july 2017</span></div>
                           <div class="block-detail">
                              <span class="time">08:00 - 10:00</span>
                              <span class="topic">Cameras + Gear</span>
                              <div class="block-text">
                                 <p>Nihilne te nocturnum praesidium Palati, nihil urbis vigilae, nihil timor populi, nihil concursus velit omnium, nihil hic muntissimus habendi senatus locus, nihil horum ora vultusque moverunt, patere tua consilia non sentis constrictam nihil hic muntissimus.</p>
                                 <span class="speaker"> <strong >Speaker</strong> : <a href="#" class="gradient-text ">Adam Blanco</a> </span>
                              </div>
                           </div>
                           <div class="block-detail">
                              <span class="time">10:30 - 12:30</span>
                              <span class="topic">Night + Low Light</span>
                              <div class="block-text">
                                 <p>Nihilne te nocturnum praesidium Palati, nihil urbis vigilae, nihil timor populi, nihil concursus velit omnium, nihil hic muntissimus habendi senatus locus, nihil horum ora vultusque moverunt, patere tua consilia non sentis constrictam nihil hic muntissimus.</p>
                                 <span class="speaker"> <strong >Speaker</strong> : <a href="#" class="gradient-text ">Luca Palermo</a> </span>
                              </div>
                           </div>
                           <div class="block-detail">
                              <span class="time">13:00</span>
                              <span class="topic">Lunch Time</span>
                           </div>
                           <div class="block-detail">
                              <span class="time">15:00 - 16:30</span>
                              <span class="topic">Lighting</span>
                              <div class="block-text">
                                 <p>Nihilne te nocturnum praesidium Palati, nihil urbis vigilae, nihil timor populi, nihil concursus velit omnium, nihil hic muntissimus habendi senatus locus, nihil horum ora vultusque moverunt, patere tua consilia non sentis constrictam nihil hic muntissimus.</p>
                                 <span class="speaker"> <strong >Speaker</strong> : <a href="#" class="gradient-text "> Lina Blamberg </a> </span>
                              </div>
                           </div>
                           <div class="block-detail">
                              <span class="time">17:00</span>
                              <span class="topic">Coffee Break</span>
                           </div>
                           <div class="block-detail">
                              <span class="time">17:30 - 18:00</span>
                              <span class="topic">Color Correction</span>
                              <div class="block-text">
                                 <p>Nihilne te nocturnum praesidium Palati, nihil urbis vigilae, nihil timor populi, nihil concursus velit omnium, nihil hic muntissimus habendi senatus locus, nihil horum ora vultusque moverunt, patere tua consilia non sentis constrictam nihil hic muntissimus.</p>
                                 <span class="speaker"> <strong >Speaker</strong> : <a href="#" class="gradient-text "> Emilie Lippelt </a> </span>
                              </div>
                           </div>
                        </li>
                        <!--Tab-->
                        <li>
                           <div class="block-date"><i class="et-line-calendar"></i><strong>Day 3</strong>  <span>- 25 july 2017</span></div>
                           <div class="block-detail">
                              <span class="time">08:00 - 10:00</span>
                              <span class="topic">HDR</span>
                              <div class="block-text">
                                 <p>Nihilne te nocturnum praesidium Palati, nihil urbis vigilae, nihil timor populi, nihil concursus velit omnium, nihil hic muntissimus habendi senatus locus, nihil horum ora vultusque moverunt, patere tua consilia non sentis constrictam nihil hic muntissimus.</p>
                                 <span class="speaker"> <strong >Speaker</strong> : <a href="#" class="gradient-text ">Adam Blanco</a> </span>
                              </div>
                           </div>
                           <div class="block-detail">
                              <span class="time">10:30 - 12:30</span>
                              <span class="topic">Masking + Compositing</span>
                              <div class="block-text">
                                 <p>Nihilne te nocturnum praesidium Palati, nihil urbis vigilae, nihil timor populi, nihil concursus velit omnium, nihil hic muntissimus habendi senatus locus, nihil horum ora vultusque moverunt, patere tua consilia non sentis constrictam nihil hic muntissimus.</p>
                                 <span class="speaker"> <strong >Speaker</strong> : <a href="#" class="gradient-text ">Luca Palermo</a> </span>
                              </div>
                           </div>
                           <div class="block-detail">
                              <span class="time">13:00</span>
                              <span class="topic">Lunch Time</span>
                           </div>
                           <div class="block-detail">
                              <span class="time">15:00 - 18:00</span>
                              <span class="topic">Portraits</span>
                              <div class="block-text ">
                                 <p>Nihilne te nocturnum praesidium Palati, nihil urbis vigilae, nihil timor populi, nihil concursus velit omnium, nihil hic muntissimus habendi senatus locus, nihil horum ora vultusque moverunt, patere tua consilia non sentis constrictam nihil hic muntissimus.</p>
                                 <span class="speaker"> <strong >Speaker</strong> : <a href="#" class="gradient-text "> Emilie Lippelt </a> </span>
                              </div>
                           </div>
                        </li>
                        <!--Tab-->
                        <li>
                           <div class="block-date"><i class="et-line-calendar"></i><strong>Day 4</strong>  <span>- 26 july 2017</span></div>
                           <div class="block-detail">
                              <span class="time">08:00 - 10:00</span>
                              <span class="topic">Questions &amp; Answer</span>
                           </div>
                           <div class="block-detail">
                              <span class="time">10:30 - 11:00</span>
                              <span class="topic">Closing Event</span>
                           </div>
                           <div class="block-detail">
                              <span class="time">15:00 - 17:00</span>
                              <span class="topic">After Party</span>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End schedule section-->
         --}}
         <!--Tickest section-->
         <section id="faq" class="tickets pt-120 pb-120">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  {{--<div class="col-sm-8 col-sm-offset-2 mb-130">--}}
                     {{--<h1 class="title text-center">Hermes Gaming Weekend</h1>--}}
                     {{--<br /><h1 class="sub-title-2 text-center">REGULAMENTUL GENERAL al concursului il gasiti <a href="https://www.esportscluj.com/fest-ruls">aici</a>!</h1>--}}
                     {{--<p class="title-lead mt-10">Hermes Gaming Weekend, evenimentul principal din cadrul SSMI Saptamana Studentilor de la Matematica si Informatica reprezinta o competitie destinata studentilor de la mate-info si nu numai.--}}
                    {{--<br /><br />Participand la acest eveniment aveti ocazia de a va intrece in cele mai populare jocuri ale momentului cu alti jucatori care va imparasesc pasiunea pentru e-sports si chiar sa castigati premiile puse in joc.<br /><br />In cadrul evenimentului vor avea loc 3 concursuri, CounterStrike Global Offensive, Hearthstone, League of Legends, fiecare destinat unui anumit tip de gamer.<br /><br />Fie ca vrei sa iti etalezi reflexele, strategia sau colaborarea cu membrii echipei, acesta este locul unde trebuie sa fii in weekend-ul 12-13 mai!<br /><br />Calificarile pentru Hermes Gaming Weekend se vor juca online, urmand ca sfeturile de finala, semifinalele si finalele sa se joace la locatie!</p><br /><p>Cei care se inscriu la League of Legends trebuie sa se inscrie si <a class="gradient-text" target="_blank"  href="http://events.eune.leagueoflegends.com/en/events/319235">aici</a></p><h1 class="sub-title-2 text-center">INSCRIERILE SE INCHID IN DATA DE 07 MAI !</h2>--}}
                  {{--</div>--}}
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               {{--<div class="row vertical-align tickets">--}}
                  {{--<div class="col-sm-12 ">--}}
                     {{--<div class="col-sm-4">--}}
                        {{--<ul class="block-tickets">--}}
                           {{--<li>--}}
                              {{--<ul class="block-ticket ">--}}
                                 {{--<h1 class="sub-title-2">Counter Strike : Global Offensive</h1><br />--}}
                                 {{--<!-- <li class="block-price"><span class="block-type">Counter Strike : Global Offensive</span></li> -->--}}
                                 {{--<li>5 - 6 Membrii / echipa</li>--}}
                                 {{--<li>Preliminarii online</li>--}}
                                 {{--<li>Sferturi, semifinale si finala la locatie</li>--}}
                                 {{--<!--<li><a class="but mt-30" ng-click="vm.showModal(1)"> Inscrie-ti echipa</a></li>-->--}}
                              {{--</ul>--}}
                           {{--</li>--}}
                        {{--</ul>--}}
                     {{--</div>--}}
                     {{--<div class="col-sm-4">--}}
                        {{--<ul class="block-tickets">--}}
                           {{--<li>--}}
                              {{--<ul class="block-ticket ">--}}
                                 {{--<h1 class="sub-title-2">League of Legends</h1><br />--}}
                                 {{--<!-- <li class="block-price"><span class="block-type">League of Legends</span></li> -->--}}
                                 {{--<li>5 - 6 Membrii / echipa</li>--}}
                                 {{--<li>Preliminarii online</li>--}}
                                 {{--<li>Sferturi, semifinale si finale la locatie</li>--}}
                                 {{--<!-- <li><a class="but mt-30" ng-click="vm.showModal(2)"> Inscrie-ti echipa</a></li> -->--}}
                              {{--</ul>--}}
                           {{--</li>--}}
                        {{--</ul>--}}
                     {{--</div>--}}
                     {{--<div class="col-sm-4">--}}
                        {{--<ul class="block-tickets">--}}
                           {{--<li>--}}
                              {{--<ul class="block-ticket ">--}}
                                 {{--<h1 class="sub-title-2">Hearthstone</h1><br />--}}
                                 {{--<!-- <li class="block-price"><span class="block-type">Hearthstone</span></li> -->--}}
                                 {{--<li>Toate jocurile se desfasoara la locatie</li>--}}
                                 {{--<li>Doar deck-urile standard sunt permise</li>--}}
                                 {{--<li>&nbsp;</li>--}}
                                 {{--<!--<li><a class="but mt-30" ng-click="vm.showModal(3)"> Inscrie-te</a></li>-->--}}
                              {{--</ul>--}}
                           {{--</li>--}}
                        {{--</ul>--}}
                     {{--</div>--}}
                  {{--</div>--}}
               {{--</div>--}}
               <!--End row-->
{{--                <div class="row">--}}
{{--                  <div class="col-sm-8 col-sm-offset-2 text-center ">--}}
{{--                     <h1 class="title">Intrebari frecvente</h1>--}}
{{--                     <p class="title-lead mt-10 mb-20">Cateva intrebari frecvente in legatura cu HGW.</p>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--               <!--End row-->--}}
{{--               <!--Row-->--}}
{{--               <div class="row">--}}
{{--                  <div class="col-sm-8 col-sm-offset-2  ">--}}
{{--                     <div class="block-faq mb-50">--}}
{{--                        <h4 class="mb-10">Care este locatia evenimentului ?</h4>--}}
{{--                        <p>Hermes Gaming Weekend va avea loc la Cantina Studenteasca Hasdeu, Strada Bogdan Petriceicu Hasdeu 45, Cluj-Napoca, in salile C4, C5 si H2(<a class="gradient-text" href="https://goo.gl/maps/WuszQoViwxK2" target="_blank">Google maps</a>)</p>--}}
{{--                     </div>--}}
{{--                     --}}{{--<div class="block-faq mb-50">--}}
{{--                        --}}{{--<h4 class="mb-10">Cum se vor juca meciurile ?</h4>--}}
{{--                        --}}{{--<p>Preliminariile si sferturile se vor juca in sistem Bo1, iar semifinala si finala se vor juca in sistem Bo3</p>--}}
{{--                     --}}{{--</div>--}}
{{--                     <!-- <div class="block-faq mb-50">--}}
{{--                        <h4 class="mb-10">qq ?</h4>--}}
{{--                        <p>Ansuer</p>--}}
{{--                     </div> -->--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--               <!--End row-->--}}
               <!--Row-->
               <div class="row">

                   @if($isDone)
                       <div id="section-timeline" class="page-section nopadding bg-black">
                           <div class="section nomargin nobottompadding bg-black nopadding">
                               <div class="container clearfix bg-black nopadding">
                                   <div class="divcenter center" style="max-width: 900px;">
                                       <h2 class="nobottommargin t300 ls1">Event timeline</h2>
                                   </div>
                               </div>
                           </div>
                           <div class="common-height nomargin nopadding section clearfix dark">
                               <div class="container bg-black noppadding">
                                   <div class="row">
                                       <div class="col-md-12 timeline">
                                           <section id="cd-timeline" class="cd-container">
                                               <?php $itemRedShown = 0; ?>
                                               @foreach($timeline as $key => $val)
                                                   <?php
                                                   # $linkExploded = explode(' ', $val['link']);
                                                   $keyExploded = explode(' ', $val['start_date']);
                                                   $dateExploded = explode('-', $keyExploded[0]);
                                                   $dateTmp = Carbon\Carbon::createFromFormat('Y-m-d H:i', $val['start_date'])->subHours(3);
                                                   $dateTmpEnd = Carbon\Carbon::createFromFormat('Y-m-d H:i', $val['end_date'])->subHours(3);
                                                   if($dateTmp->gt($currentDT)) {
                                                       $class = "cd-picture"; // Urmeaza sa fie..
                                                       $itemRedShown++;
                                                   } elseif($dateTmp->lte($currentDT) && $dateTmpEnd->gt($currentDT)) {
                                                       $class = "cd-location"; // In desfasurare..
                                                   } else {
                                                       $class = "cd-movie"; // A fost..
                                                   }

                                                   $isHidden = false;
                                                   if($class == "cd-movie") {
                                                       $isHidden = true;
                                                   } elseif($class == 'cd-picture' && $itemRedShown > 2) {
                                                       $isHidden = true;
                                                   }
                                                   ?>
                                                   <div class="cd-timeline-block {{$isHidden ? 'hiddenItem' : ''}}">
                                                       <div class="cd-timeline-img {{$class}}"></div> <!-- cd-timeline-img -->
                                                       <div class="cd-timeline-content text-light">
                                                           <h2 class="text-light">{{$key}}</h2>
                                                           <h5 class="cd-date text-white">{{$keyExploded[1]}} ({{$dateExploded[2]}} Apr)</h5>
                                                           <?php if($val['link'] == "null" )  {?>
                                                           <p>Link-ul acvității va fi anunțat curând</p>
                                                           <?php }else{ ?>
                                                           <p>
                                                           <a style="color: white" href= "  <?php echo e($val['link']); ?>  " target="_blank" > Link activitate</a>
                                                           </p>
                                                           <?php }?>
                                                           <?php if($val['register'] != 'null') {?>
                                                           <p>
                                                               <a style="color: white" href= "  <?php echo e($val['register']); ?>  " target="_blank"> Link inscriere activitate</a>
                                                           </p>
                                                           <?php }?>
                                                       </div> <!-- cd-timeline-content -->
                                                   </div> <!-- cd-timeline-block -->
                                               @endforeach
                                           </section> <!-- cd-timeline -->
                                       </div>
                               </div>
                           </div>
                       </div>
                   @endif
                       <div class="row">
                           <div class="col-md-12 text-center">
                               <button id="showTimelineBtn" class="button button-border button-circle button-light topmargin-sm" type="submit" onclick="showFullTimeline();return false;">Show full timeline</button>
                           </div>
                       </div>

                  <div class="col-sm-8 col-sm-offset-2  text-center mt-50">
                     <h2 class="sub-title-1">Nu ați găsit răspuns la întrebarea voastră? Scrieți-ne la adresa:</h2>
                     {{--<p><a class="gradient-text" target="_blank" href="mailto:hgw@societatea-hermes.ro">hgw@societatea-hermes.ro</a></p>--}}
                     <p><a class="gradient-text" target="_blank" href="mailto:ssmi@societatea-hermes.ro">ssmi@societatea-hermes.ro</a></p>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End tickets section-->


         {{-- <!--Sponsor section-->
         <section class="sponser pt-100 pb-100">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 mb-50 text-center ">
                     <h1 class="title">Multumim sponsorilor si partenerilor</h1>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-sm-12  col-sm-push-2 text-center">
                     <div class="col-md-3 col-sm-3 ">
                        <div class="">
                           <img src="img/logo/accenture.png" alt="">
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-3">
                        <div class="">
                           <img src="img/logo/accesa.png" alt="">
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-3">
                        <div class="">
                           <img src="img/logo/yonder.png" alt="">
                        </div>
                     </div>
                     <!-- <div class="col-md-2 col-sm-2">
                        <div class="">
                           <img src="img/logo/2.png" alt="">
                        </div>
                     </div> -->
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End sponser section--> --}}

         {{-- <!--Gallery section-->
         <section id="gallery" class="gallery pt-120">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 mb-130 ">
                     <svg version="1.1" id="Layer_12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="40px" height="30px" viewBox="0 0 42 32" enable-background="new 0 0 42 32" xml:space="preserve">
                        <linearGradient id="SVGID_12_" gradientUnits="userSpaceOnUse" x1="0.9386" y1="24.9189" x2="42.6053" y2="8.5439">
                           <stop  offset="0" style="stop-color:#399BFF"/>
                           <stop  offset="1" style="stop-color:#53bc81"/>
                        </linearGradient>
                        <path fill="url(#SVGID_12_)" d="M39.5,6H32c-1.927,0-1.998-1.797-2-2V3c0-1.258-1.39-3-4-3h-9.969c-2.935,0-4,1.794-4,3v0.994
                           C12.03,4.076,11.983,6,10,6H2.5C1.121,6,0,7.122,0,8.5v18C0,27.878,1.121,29,2.5,29h6C8.776,29,9,28.776,9,28.5S8.776,28,8.5,28h-6
                           C1.673,28,1,27.327,1,26.5V14h8.003C8.359,15.54,8,17.229,8,19c0,7.168,5.832,13,13,13s13-5.832,13-13c0-1.771-0.359-3.46-1.003-5
                           H41v12.5c0,0.827-0.673,1.5-1.5,1.5h-7c-0.276,0-0.5,0.224-0.5,0.5s0.224,0.5,0.5,0.5h7c1.379,0,2.5-1.122,2.5-2.5v-18
                           C42,7.122,40.879,6,39.5,6z M21,31c-6.617,0-12-5.383-12-12S14.383,7,21,7s12,5.383,12,12S27.617,31,21,31z M32.75,13
                           c-0.074,0-0.143,0.018-0.206,0.047C30.38,8.868,26.022,6,21,6s-9.38,2.868-11.544,7.047C9.393,13.018,9.324,13,9.25,13H1V8.5
                           C1,7.673,1.673,7,2.5,7H10c2.368,0,3.019-1.958,3.031-3V3c0-0.804,0.799-2,3-2H26c2.094,0,3,1.324,3,2v1c0,1.038,0.627,3,3,3h7.5
                           C40.327,7,41,7.673,41,8.5V13H32.75z"/>
                        <linearGradient id="SVGID_13_" gradientUnits="userSpaceOnUse" x1="-5.5546" y1="8.3968" x2="36.1121" y2="-7.9782">
                           <stop  offset="0" style="stop-color:#399BFF"/>
                           <stop  offset="1" style="stop-color:#53bc81"/>
                        </linearGradient>
                        <path fill="url(#SVGID_13_)" d="M9.5,5C9.776,5,10,4.776,10,4.5v-1C10,2.673,9.327,2,8.5,2h-4C3.673,2,3,2.673,3,3.5v1
                           C3,4.776,3.224,5,3.5,5S4,4.776,4,4.5v-1C4,3.224,4.225,3,4.5,3h4C8.775,3,9,3.224,9,3.5v1C9,4.776,9.224,5,9.5,5z"/>
                        <linearGradient id="SVGID_15_" gradientUnits="userSpaceOnUse" x1="1.6076" y1="26.6212" x2="43.2743" y2="10.2462">
                           <stop  offset="0" style="stop-color:#399BFF"/>
                           <stop  offset="1" style="stop-color:#53bc81"/>
                        </linearGradient>
                        <path fill="url(#SVGID_15_)" d="M21,10c-4.963,0-9,4.038-9,9s4.037,9,9,9s9-4.038,9-9S25.963,10,21,10z M21,27c-4.411,0-8-3.589-8-8
                           s3.589-8,8-8s8,3.589,8,8S25.411,27,21,27z"/>
                     </svg>
                     <h1 class="title mt-10"> Amintiri de la ultimele noastre editii  </h1>
                     <p class="title-lead mt-5">Pentru mai multe poze vizitati-ne pe facebook.</p>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-sm-12 ">
                     <ul class="block-gallery">
                        <li class="col-sm-2 ">
                           <a href="img/12.jpg" class="venobox">
                              <div class="block-img">
                                 <div class="background-img">
                                    <img alt="" src="img/12.jpg" style="display: none;">
                                 </div>
                              </div>
                           </a>
                        </li>
                        <li class="col-sm-2 ">
                           <a href="img/13.jpg" class="venobox">
                              <div class="block-img">
                                 <div class="background-img">
                                    <img alt="" src="img/13.jpg" style="display: none;">
                                 </div>
                              </div>
                           </a>
                        </li>
                        <li class="active col-sm-2 ">
                           <a href="img/14.jpg" class="venobox">
                              <div class="block-img">
                                 <div class="background-img">
                                    <img alt="" src="img/14.jpg" style="display: none;">
                                 </div>
                              </div>
                           </a>
                        </li>
                        <li class="col-sm-2 ">
                           <a href="img/15.jpg" class="venobox">
                              <div class="block-img">
                                 <div class="background-img">
                                    <img alt="" src="img/15.jpg" style="display: none;">
                                 </div>
                              </div>
                           </a>
                        </li>
                        <li class="col-sm-2 ">
                           <a href="img/16.jpg" class="venobox">
                              <div class="block-img">
                                 <div class="background-img">
                                    <img alt="" src="img/16.jpg" style="display: none;">
                                 </div>
                              </div>
                           </a>
                        </li>
                        <li class="col-sm-2 ">
                           <a href="img/17.jpg" class="venobox">
                              <div class="block-img">
                                 <div class="background-img">
                                    <img alt="" src="img/17.jpg" style="display: none;">
                                 </div>
                              </div>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End gallery section--> --}}



         <footer class="pt-100  bg-dark">
            <section id="contact" class="top-footer pb-100">
               <!--Container-->
               <div class="container ">
                   <!--<div class="row icons" style="margin-bottom: 100px">
                       <div class="col-sm-3" >
                           <a href="https://www.telenav.com/" ><img src="img/telenav.png" alt="Telenav"></a>
                       </div>
                       <div class="col-sm-3">
                           <a href="https://www.accesa.eu/" ><img src="img/accesa.png" alt="Accesa"></a>
                       </div>
                       <div class="col-sm-3">
                           <a href="http://www.arobs.ro/" ><img src="img/arobs.png" alt="Arobs"></a>
                       </div>
                       <div class="col-sm-3">
                           <a href="https://altom.com/" ><img src="img/altom.png" alt="Altom"></a>
                       </div>
                   </div>-->
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2  text-center mt-50">
                       <h2 class="sub-title-1">Sponsorii eventimentului vor fi anunțați curând.</h2>
                    </div>
                 </div>
                  <div class="row pt-100">
                     <div class="col-sm-12 text-center">
                        <h2 class="sub-title-3 mb-30">Contact</h2>
                        <p class="">Societatea Hermes<br />Cantina Hașdeu, Complex Studențesc Hașdeu,
Strada Bogdan Petriceicu Hașdeu 45, Cluj-Napoca<br />Email: <a class="gradient-text" target="_blank" href="mailto:contact@societatea-hermes.ro">contact@societatea-hermes.ro</a></p>
                        <ul class="block-social mt-20">
                           <li><a href="https://www.facebook.com/SSMIUBB" target="_blank"><i class="icon-facebook"></i></a></li>
                        </ul>
                     </div>
                     <div class="col-sm-4">

                     </div>
                  </div>
               </div>
               <!--End container-->
            </section>
            <div class="bottom-footer bg-black pt-50 pb-50">
               <!--Container-->
               <div class="container ">
                  <div class="row">
                     <div class="col-md-6">
                        <p> &copy; {{date('Y')}} all rights reserved - an event of Societatea Hermes.</p>
                     </div>
                     <div class="col-md-6 ">
                        <ul class="block-legal">
                           <li><span><a class="gradient-text scroll" href="#wrapper">Go up!</a></span></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!--End container-->
            </div>
         </footer>
      </div>
      <!-- End wrapper-->
      <!--Javascript-->
      <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
      <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
      <script src="js/jquery.countdown.min.js" type="text/javascript"></script>
      <script src="js/smooth-scroll.js" type="text/javascript"></script>
      <script src="js/jquery.validate.min.js" type="text/javascript"></script>
      <script src="js/placeholders.min.js" type="text/javascript"></script>
      <script src="js/venobox.min.js" type="text/javascript"></script>
      <script src="js/script.js" type="text/javascript"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCQJf_OY-q2TPJmUNcvU6TkeKPct5PGKI&callback=initializeMap"></script>
      <!-- Google analytics -->
      <!-- End google analytics -->

      <script type="text/javascript">
            (function ()
            {
                'use strict';

                /**
                 * Main module
                 */
                angular
                    .module('ssmi',[])
                    .controller('CoreController', CoreController)
                    .run(runApp);


                /** @ngInject */
                function CoreController($http)
                {
                    // Data
                    var vm = this;

                    vm.team = {};

                    vm.showModal = function(type) {
                        $('#signupModal').modal('show');
                        vm.team = {};
                        vm.team.type = type;
                        vm.team.participants = [];
                        vm.addTeamMember();
                        vm.team.participants[0].is_lead = 1;
                    }

                    vm.addTeamMember = function() {
                        if((vm.team.type == 3 && vm.team.participants.length == 1) || vm.team.participants.length == 6) {
                            alert('Nu mai puteti adauga alti membrii!');
                            return;
                        }
                        vm.team.participants.push({
                            id: vm.team.participants.length+1,
                            full_name: '',
                            phone: '',
                            email: '',
                            is_lead: 0
                        });
                    }

                    vm.signup = function() {
                        $http({
                            method: 'POST',
                            url: '/api/team',
                            data: vm.team
                        })
                        .then(function successCallback(response) {
                            if(response.data.success == 1) {
                                alert('Inscrierea a fost efectuata cu succes!');
                                $('#signupModal').modal('hide');
                                vm.team = {};
                            } else {
                                alert(response.data.message);
                            }
                        });
                    }
                    //////////
                }

                function runApp($rootScope, $http) {

                    $rootScope.opRunning = false;
                    @yield('otherConfig')
                }



            })();


        </script>

    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" >
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <form name="addTeamForm">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Inscrie-te</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nume echipa</label>
                            <input type="text" name="name" ng-model="vm.team.name" required/>
                        </div>
                        <div ng-repeat="participant in vm.team.participants">
                            <hr />
                            <div ng-if="vm.team.type != 3">
                                <h2 ng-if="participant.id != 1 && participant.id < 6" class="text-center">Membru @{{participant.id}}</h2>
                                <h2 ng-if="participant.id == 1" class="text-center">Team leader</h2>
                                <h2 ng-if="participant.id == 6" class="text-center">Rezerva</h2>
                            </div>
                            <div class="form-group">
                                <label>Nume complet</label>
                                <input type="text" class="form-control" name="name" ng-model="participant.full_name" required/>
                            </div>
                            <div class="form-group">
                                <label>Numar de telefon</label>
                                <input type="text" class="form-control" name="name" ng-model="participant.phone" required/>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="name" ng-model="participant.email" required/>
                            </div>
                        </div>
                        <button class="btn btn-success" ng-click="vm.addTeamMember()" ng-if="vm.team.type != 3 && vm.team.participants.length < 6">Adauga membru al echipei</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" ng-disabled="opRunning">Inchide</button>
                        <button type="button" class="btn btn-success" ng-disabled="addTeamForm.$pristine || addTeamForm.$invalid || opRunning || (vm.team.type != 3 && vm.team.participants.length < 5)" ng-click="vm.signup()">
                            <span ng-if="!opRunning">Trimite</span>
                            <span ng-if="opRunning"><img class="loadImgBtn" src="assets/img/loading.gif"></span>
                        </button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

   </body>
</html>
