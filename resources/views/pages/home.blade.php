@extends('layouts.default')

@section('content')

<head>
  <title> Kristopher Calpe </title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <style>

  a {
    color: inherit;
    text-decoration: inherit;
  }

  body {
    margin: 0;
    padding: 0;
    font-family: 'Open Sans', sans-serif;
    line-height: 1.5;
  }
  ::selection {
    background-color: #f7ca18;
    color: #1b1b1b;
  }
  nav {
    opacity: 85%;
    z-index: 999;
    width: 100%;
    background-color: #0b0b0b;
    position: fixed;
    bottom: 0;
    height: 100px;
    overflow: hidden;
  }
  nav ul {
    position: absolute;
    top: 0;
    left: 0%;
    list-style-type: none;
    padding: 0;
    margin: 0;
    width: 140vw;
  }
  nav li {
    margin: 0;
    float: left;
    display: inline-block;
    height: 98px;
    margin-bottom: 2px;
    line-height: 100px;
    width: 20vw;
    text-align: center;
    color: #555555;
    transition: background-color 0.5s 0.2s ease, color 0.3s ease;
    cursor: pointer;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 4px;
    font-weight: 800;
    transform: translateX(100%);
  }
  nav li.active {
    background-color: #151515;
    color: #efefef;
  }
  nav li.active::after {
    content: "";
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #f7ca18;
  }
  nav li:nth-child(1) {
    animation: pop 0.5s 0.15s 1 forwards;
  }
  nav li:nth-child(2) {
    animation: pop 0.5s 0.3s 1 forwards;
  }
  nav li:nth-child(3) {
    animation: pop 0.5s 0.45s 1 forwards;
  }
  nav li:nth-child(4) {
    animation: pop 0.5s 0.6s 1 forwards;
  }
  nav li:nth-child(5) {
    animation: pop 0.5s 0.75s 1 forwards;
  }
  nav li:nth-child(6) {
    animation: pop 0.5s 0.9s 1 forwards;
  }
  nav li:nth-child(7) {
    animation: pop 0.5s 1.05s 1 forwards;
  }
  nav li:hover {
    color: #ffffff;
  }
  nav li:active {
    background-color: #222222;
  }
  nav li:nth-child(1):hover ~ .slide {
    left: 0;
  }
  nav li:nth-child(2):hover ~ .slide {
    left: 20vw;
  }
  nav li:nth-child(3):hover ~ .slide {
    left: 40vw;
  }
  nav li:nth-child(4):hover ~ .slide {
    left: 60vw;
  }
  nav li:nth-child(5):hover ~ .slide {
    left: 80vw;
  }
  nav li:nth-child(6):hover ~ .slide {
    left: 100vw;
  }
  nav li:nth-child(7):hover ~ .slide {
    left: 120vw;
  }
  nav li.slide {
    position: absolute;
    left: -40vw;
    top: 0;
    background-color: #ffffff;
    z-index: -1;
    height: 2px;
    margin-top: 98px;
    transition: left 0.4s ease;
    transform: translateY(0);
  }
  section {
    background-color: #1b1b1b;
    height: 100vh;
    display: flex;
  }
  section .title, .about {
    max-width: 60%;
    width: 100%;
    align-self: center;
    transform: translateY(-50px);
    margin: 0 auto;
    overflow: hidden;
    padding-bottom: 10px;
  }
  section .about, .contact{
    transform: translateY(-250px) !important;
  }
  section .title span, .about span, h1 {
    display: inline-block;
    font-size: 5vw;
    color: white;
    width: 100%;
    text-transform: uppercase;
    transform: translateX(-100%);
    animation: byBottom 1s ease both;
    font-weight: 600;
    letter-spacing: 0.25vw;
  }
  .about span{
    font-size: 50px;
  }
  section .title span:last-child, .about span:last-child, h1 {
    font-size: 1rem;
    animation: byBottom 1s 0.25s ease both;
  }
  section .title span a, h1 a{
    position: relative;
    display: inline-block;
    margin-left: 0.5rem;
    text-decoration: none;
    color: #f7ca18;
  }
  section .title span a::after, h1::after {
    content: "";
    height: 2px;
    background-color: #f7ca18;
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 0;
    animation: linkAfter 0.5s 1s ease both;
  }

  #highlight{
    color: #ffed75;
  }
  #highlight a{
    pointer-events: none;
  }
  #highlight::after{
    content: "";
    height: 0px;
    background-color: #f7ca18;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    animation: linkAfter 0.5s 1s ease both;
  }

  @-moz-keyframes pop {
    0% {
      transform: translateY(100%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-webkit-keyframes pop {
    0% {
      transform: translateY(100%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-o-keyframes pop {
    0% {
      transform: translateY(100%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @keyframes pop {
    0% {
      transform: translateY(100%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-moz-keyframes byBottom {
    0% {
      transform: translateY(150%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-webkit-keyframes byBottom {
    0% {
      transform: translateY(150%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-o-keyframes byBottom {
    0% {
      transform: translateY(150%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @keyframes byBottom {
    0% {
      transform: translateY(150%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-moz-keyframes linkAfter {
    0% {
      width: 0;
    }
    100% {
      width: 30px;
    }
  }
  @-webkit-keyframes linkAfter {
    0% {
      width: 0;
    }
    100% {
      width: 30px;
    }
  }
  @-o-keyframes linkAfter {
    0% {
      width: 0;
    }
    100% {
      width: 30px;
    }
  }
  @keyframes linkAfter {
    0% {
      width: 0;
    }
    100% {
      width: 30px;
    }
  }

  </style>

</head>

<body>

  <nav>
    <ul>
      <a href="#title"><li class="active" id="titleli">Home</li></a>
      <a href="#about"><li id="aboutli">About me</li></a>
      <a href="#LaravelIntro"><li id="laravelli">Laravel Intro</li></a>
      <a href="#CS202"><li id="csli">Load Balancing</li></a>
      <a href="#contact"><li id="contactli">Contact me</li></a>
      <li class="slide"></li>
    </ul>
  </nav>

  <script>
  (function($){
    elementWidth = $('ul').width(),
    containerWidth = $('nav').width(),
    difference = elementWidth-containerWidth,
    finalWidth = difference * 1.5,
    element = $('ul');

    $('li').on('click', function(){
      $('li').removeClass('active');
      $(this).addClass('active');
    });

  })(jQuery);
  $(window).scroll(function() {
   var aboutT = $('#about').offset().top,
       aboutH = $('#about').outerHeight(),
       laravelT = $('#LaravelIntro').offset().top,
       laravelH = $('#LaravelIntro').outerHeight(),
       loadbT = $('#CS202').offset().top,
       loadbH = $('#CS202').outerHeight(),
       windowH = $(window).height(),
       windowS = $(this).scrollTop(),
       cT = $('#contact').offset().top,
       cH = $('#contact').outerHeight();

   if(windowS > 2700){
       $('#contactli').addClass('active');
       $('#aboutli').removeClass('active');
       $('#laravelli').removeClass('active');
       $('#csli').removeClass('active');
       $('#titleli').removeClass('active');
   }
   else if (windowS > (cT+cH-windowH-750)){
       $('#csli').addClass('active'); //load balancing
       $('#titleli').removeClass('active');
       $('#laravelli').removeClass('active');
       $('#aboutli').removeClass('active');
       $('#contactli').removeClass('active');
   }
   else if (windowS > (cT+cH-windowH-1500)) {
       $('#laravelli').addClass('active'); //laravel intro
       $('#aboutli').removeClass('active');
       $('#titleli').removeClass('active');
       $('#csli').removeClass('active');
       $('#contactli').removeClass('active');
   }
   else if (windowS > (aboutT+aboutH-windowH-725)) {
       $('#aboutli').addClass('active'); //about
       $('#titleli').removeClass('active');
       $('#laravelli').removeClass('active');
       $('#csli').removeClass('active');
       $('#contactli').removeClass('active');
   }
   else if (windowS == 0) {
       $('#titleli').addClass('active');
       $('#aboutli').removeClass('active');
       $('#laravelli').removeClass('active');
       $('#csli').removeClass('active');
       $('#contactli').removeClass('active');
   }


  });
</script>

  <section id="title">
    <div class="title">
      <span>Kristopher Calpe</span>
      <span>Crypto Holder and<a target="_blank" href="http://kristophercalpe.tech">Web Administrator</a></span>
  </div>
  </section>

  <section id="about">
    <div class="title">
      <span>About</span>
      <span>I am a programmer, crypto hodler, and a web. developer. I like coding and investing to stuffs that I trust.<span><br/>
      <span>◗ My<a id="highlight">childhood dream </a> was to become an astronaut and a soldier to protect my country.<span>
      <span>◗ My<a id="highlight">dream place to visit</a> is Tokyo, Japan and Paris, France.<span>
      <span>◗ I see myself<a id="highlight">5 years from now</a> being a CEO of my own company and traveling around the world.<span><br/><br/>
      <span><a href="https://drive.google.com/file/d/1eyAzv04lvx7iVrSrF_UTe44JD7z0mCIk/view" target="_blank">Learn More </a> |<a href="http://kristophercalpe.tech/#webdevelopment" target="_blank">Projects</a> </span>
    </div>
  </section>

  <section id="LaravelIntro">
    <div class="title">
      <span>Laravel Intro</span>
      <span>Crypto Holder and<a target="_blank" href="http://kristophercalpe.tech">Web Administrator</a></span>
  </div>
  </section>

  <section id="CS202">
    <div class="title">
      <span>Load Balancing</span>
      <span>Crypto Holder and<a target="_blank" href="http://kristophercalpe.tech">Web Administrator</a></span>
  </div>
  </section>

  <section id="contact">
    <div class="title">
      <span>Contact</span>
      <span>Let's talk<span><br/><br/>
      <span><a href="tel:09123456789">Phone </a> |<a href="mailto:contact@kristophercalpe.tech" target="_blank">Email</a> |<a href="https://ph.linkedin.com/in/kristopher-calpe-4b6a50202" target="_blank">LinkedIn</a> </span>
    </div>
  </section>

</div>

</body>
</html>

@stop
