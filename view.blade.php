<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sara mazal lessons">
    <meta name="keywords" content="HTML, CSS, JavaScript, mazal, icons">
    <meta name="author" content="Sara Mazal">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400;500&family=Raleway:wght@100;200;300;400;500&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    font-family: "ROBOTO", sans-serif;
  }
  
  .nav,
  .slider {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    position: relative;
    background-color: #1e1f26;
    text-align: center;
    padding: 0 2em;
  }
  
  .nav h1,
  .slider h1 {
    font-family: "Josefin Sans", sans-serif;
    font-size: 5vw;
    margin: 0;
    padding-bottom: 0.5rem;
    letter-spacing: 0.5rem;
    color: #03dac6;
    transition: all 0.3s ease;
    z-index: 3;
  }
  h1:hover {
    transform: translate3d(0, -10px, 22px);
    color: #ff0266;
  }
  
  .slider h2 {
    font-size: 2vw;
    letter-spacing: 0.3rem;
    font-family: "ROBOTO", sans-serif;
    font-weight: 300;
    color: #faebd7;
    z-index: 4;
  }
  h3.span {
    font-size: 2vw;
    letter-spacing: 0.3em;
    font-family: "ROBOTO", sans-serif;
    font-weight: 300;
    color: #faebd7;
    z-index: 4;
  }
  span:hover {
    color: #ff0266;
    font-weight: 500;
    font-size: 2.2vw;
  }
  
  a {
    text-decoration: none;
  }
  
  .nav-container {
    display: flex;
    flex-direction: row;
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 75px;
    box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
    background: #1e1f26;
    z-index: 10;
    transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
  }
  
  .nav-container--top-first {
    position: fixed;
    top: 75px;
    transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
  }
  
  .nav-container--top-second {
    position: fixed;
    top: 0;
  }
  .nav-tab {
    display: flex;
    justify-content: center;
    align-items: center;
    flex: 1;
    color: #03dac6;
    letter-spacing: 0.1rem;
    transition: all 0.5s ease;
    font-size: 2vw;
  }
  
  .nav-tab:hover {
    color: #1e1f26;
    background: #03dac6;
    transition: all 0.5s ease;
  }
  
  .nav-tab-slider {
    position: absolute;
    bottom: 0;
    width: 0;
    height: 2px;
    background: #03dac6;
    transition: left 0.3s ease;
  }
  .background {
    position: absolute;
    height: 90vh;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: auto;
  }
  @media (min-width: 800px) {
    .nav h1,
    .slider h1 {
      font-size: 5vw;
    }
  
    .nav h2,
    .slider h2 {
      font-size: 3vw;
    }
  
    .nav-tab {
      font-size: 3vw;
    }
  }
  
  @media screen only (min-width: 360px) {
    .nav h1,
    .slider h1 {
      font-size: 8vw;
    }
  
    .nav h2,
    .slider h2 {
      font-size: 2vw;
      letter-spacing: 0.2vw;
    }
  
    .nav-tab {
      font-size: 1.2vw;
    }
  }
  .background {
    position: absolute;
    height: 100vh;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 0;
  }
  .loader span {
    color: #faebd7;
    text-shadow: 0 0 0 #faebd7;
    -webkit-animation: loading 1s ease-in-out infinite alternate;
  }
  
  @-webkit-keyframes loading {
    to {
      text-shadow: 20px 0 70px #ff0266;
      color: #ff0266;
    }
  }
  .loader span:nth-child(2) {
    -webkit-animation-delay: 0.1s;
  }
  .loader span:nth-child(3) {
    -webkit-animation-delay: 0.2s;
  }
  .loader span:nth-child(4) {
    -webkit-animation-delay: 0.3s;
  }
  .loader span:nth-child(5) {
    -webkit-animation-delay: 0.4s;
  }
  .loader span:nth-child(6) {
    -webkit-animation-delay: 0.5s;
  }
  .loader span:nth-child(7) {
    -webkit-animation-delay: 0.6s;
  }
  .loader span:nth-child(8) {
    -webkit-animation-delay: 0.7s;
  }
  .loader span:nth-child(9) {
    -webkit-animation-delay: 0.8s;
  }
  
  .loader span:nth-child(10) {
    -webkit-animation-delay: 0.9s;
  }
  .loader span:nth-child(11) {
    -webkit-animation-delay: 1s;
  }
  .loader span:nth-child(12) {
    -webkit-animation-delay: 1.1s;
  }
  .loader span:nth-child(13) {
    -webkit-animation-delay: 1.2s;
  }
  .loader span:nth-child(14) {
    -webkit-animation-delay: 1.3s;
  }
  .loader span:nth-child(15) {
    -webkit-animation-delay: 1.4s;
  }
  .loader span:nth-child(16) {
    -webkit-animation-delay: 1.5s;
  }
  .loader span:nth-child(17) {
    -webkit-animation-delay: 1.6s;
  }
  .loader span:nth-child(18) {
    -webkit-animation-delay: 1.7s;
  }
  .loader span:nth-child(19) {
    -webkit-animation-delay: 1.8s;
  }
  .loader span:nth-child(20) {
    -webkit-animation-delay: 1.9s;
  }
  .loader span:nth-child(21) {
    -webkit-animation-delay: 2s;
  }
  .loader span:nth-child(22) {
    -webkit-animation-delay: 2.1s;
  }
  .main-content{
    position: absolute;
    width: 100%;
  }






  /* pikachu */
  .loading-pikachu {
    position: absolute;
    z-index: 1;
    /* background-color: #FFF; */
    width: 100%;
    display: fixed
}

.loading-pikachu img {
    display: block;
    min-height: 209px;
    min-width: 200px;
}

.mouse {
    width: 25px;
    height: 25px;
    border-radius: 100%;
    background-color: #fff782;
    position: absolute;
    animation: mouseAnimation .5s infinite ease-in-out alternate;
    left: 0;
    top: 0
}

@keyframes mouseAnimation {
    
    from {
        width: 25px;
        height: 25px
    }
    
    to {
        width: 15px;
        height: 15px
    }
    
}
/* end pikachu */



/* loading-wave */
.loading-wave {
  position: absolute;
  width: 100%;
  /* max-width: 700px; */
  margin: 0 auto;
  padding: 0;
  /* position: relative;  */
}

.loading-wave svg {
  width: 100%;
  height: 100%;
}

.loading-wave #pulsar{
  stroke-dasharray:281;
  -webkit-animation: dash 2.5s infinite linear forwards;
}

/*Animation*/
@-webkit-keyframes dash{ from{stroke-dashoffset:814;} to {stroke-dashoffset:-814;}}
/* end loading-wave */


.hidden{
  display: none;
}

.show{
  display: block;
}



*{
  overflow: hidden;
}


.loading-pikachu{
  animation: rmove-around 47s infinite;
}


@keyframes rmove-around {
  0%   {left:0px; top:0px;}
  1%   {left:-40px; top:0px;}
  2%   {left:-80px; top:0px;}
  3%   {left:-120px; top:0px;}
  4%   {left:-160px; top:0px;}
  5%   {left:-200px; top:0px;}
  6%   {left:-240px; top:0px;}
  7%   {left:-280px; top:0px;}
  8%   {left:-320px; top:0px;}
  9%   {left:-360px; top:0px;}
  10%   {left:-400px; top:0px;}
  11%   {left:-440px; top:0px;}
  12.5%  {left:-500px; top:0px;transform: scaleX(1)}
  12.6%  {left:-500px; top:0px;    transform: scaleX(-1)}
  13%  {left:-440px; top:0px;}
  14%  {left:-380px; top:0px;}
  15%  {left:-300px; top:0px;}
  16%  {left:-220px; top:0px;}
  17%  {left:-140px; top:0px;}
  18%  {left:-60px; top:0px;}
  19%  {left:20px; top:0px;}
  20%  {left:100px; top:0px;}
  21%  {left:180px; top:0px;}
  22%  {left:260px; top:0px;}
  23%  {left:340px; top:0px;}
  24%  {left:420px; top:0px;}
  25%  {left:500px; top:0px;    transform: scaleX(-1)}
  25.1%  {left:500px; top:0px; transform: scaleX(1)}
  26%  {left:420px; top:0px;}
  27%  {left:340px; top:0px;}
  28%  {left:260x; top:0px;}
  29%  {left:180px; top:0px;}
  30%  {left:100px; top:0px;}
  31%  {left:20px; top:0px;}
  31.1%  {left:20px; top:0px;}
  32%  {left:-60px; top:0px;}
  33%  {left:-140px; top:0px;}
  34%  {left:-220px; top:0px;}
  35%  {left:-300px; top:0px;}
  36%  {left:-380px; top:0px;}
  37%  {left:-460px; top:0px;}
  38%  {left:-500px; top:0px; transform: scaleX(1)}
  38.1%  {left:-500px; top:0px; transform: scaleX(-1)}
  39%  {left:-460px; top:0px;}
  40%  {left:-420px; top:0px;}
  41%  {left:-380x; top:0px;}
  42%  {left:-340px; top:0px;}
  43%  {left:-300px; top:0px;}
  44%  {left:-260px; top:0px;}
  45%  {left:-220px; top:0px;}
  46%  {left:-180px; top:0px;}
  47%  {left:-140px; top:0px;}
  48%  {left:-100px; top:0px;}
  49%  {left:-55px; top:0px;}
  50% {left:0px; top:0px;}
  50.1% {left:0px; top:0px;}
  51%   {left:40px; top:0px;}
  52%   {left:80px; top:0px;}
  53%   {left:120px; top:0px;}
  54%   {left:160px; top:0px;}
  55%   {left:200px; top:0px;}
  56%   {left:240px; top:0px;}
  57%   {left:280px; top:0px;}
  58%   {left:320px; top:0px;}
  59%   {left:360px; top:0px;}
  60%   {left:400px; top:0px;}
  61%   {left:440px; top:0px;}
  62%  {left:500px; top:0px;transform: scaleX(-1)}
  62.1%  {left:500px; top:0px;transform: scaleX(1)}
  63%  {left:440px; top:0px;}
  64%  {left:380px; top:0px;}
  65%  {left:300px; top:0px;}
  66%  {left:220px; top:0px;}
  67%  {left:140px; top:0px;}
  68%  {left:60px; top:0px;}
  69%  {left:-20px; top:0px;}
  70%  {left:-100px; top:0px;}
  71%  {left:-180px; top:0px;}
  72%  {left:-260px; top:0px;}
  73%  {left:-340px; top:0px;}
  74%  {left:-420px; top:0px;}
  75%  {left:-500px; top:0px;transform: scaleX(1)}
  75.1%  {left:-500px; top:0px; transform: scaleX(-1)}
  76%  {left:-420px; top:0px;}
  77%  {left:-340px; top:0px;}
  78%  {left:-260x; top:0px;}
  79%  {left:-180px; top:0px;}
  80%  {left:-100px; top:0px;}
  81%  {left:-20px; top:0px;}
  82%  {left:60px; top:0px;}
  83%  {left:140px; top:0px;}
  84%  {left:220px; top:0px;}
  85%  {left:300px; top:0px;}
  86%  {left:380px; top:0px;}
  87%  {left:460px; top:0px;}
  88%  {left:500px; top:0px; transform: scaleX(-1)}
  88.1%  {left:500px; top:0px; transform: scaleX(1)}
  89%  {left:460px; top:0px; }
  90%  {left:420px; top:0px; }
  91%  {left:380x; top:0px; }
  92%  {left:340px; top:0px; }
  93%  {left:300px; top:0px; }
  94%  {left:260px; top:0px; }
  95%  {left:220px; top:0px; }
  96%  {left:180px; top:0px; }
  97%  {left:140px; top:0px; }
  98%  {left:100px; top:0px; }
  99%  {left:55px; top:0px; }
  99.9% {left:0px; top:0px;}
  100% {left:0px; top:0px;}

}

@keyframes rotationzzzzzz {
  from { transform: rotate(0deg); }
  to { transform: rotate(359deg); }
}
    </style>
    <title>{{$mode}} Mode</title>
</head>
<body>
    <section class="nav main-content">
        <h1 id="convert-data" class="convert-data">CONVERT DATA</h1>
        <h3 class="span loader">
            <!-- {{request()->code}} -->
            <?php $code_user = request()->code ?>
           
            <span class="m">K</span>
            <span class="m">E</span> 
            <span class="m">N</span> 
            <span class="m">N</span> 
            <span class="m">O</span> 
            <span class="m">F</span> 
            <span class="m">I</span> 
            <span class="m">Z</span> 
            <span class="m">E</span>
            <span class="m">T</span> 
            <span class="m">&nbsp;</span> 
            <span class="m">D</span>
            <span class="m">E</span> 
            <span class="m">V</span> 
            <span class="m">E</span> 
            <span class="m">L</span> 
            <span class="m">O</span> 
            <span class="m">P</span> 
            <span class="m">E</span> 
            <span class="m">R</span>
            <span class="m">&nbsp;</span> 
            <span class="m">M</span> 
            <span class="m">O</span> 
            <span class="m">D</span> 
            <span class="m">E</span> 
        </h3>
        <!-- <div class="nav-container">
            <a href="#" class="nav-tab">SVELTE</a> 
            <a href="#" class="nav-tab">ESBUILD</a> 
            <a href="#" class="nav-tab">NEXT.JS</a> 
            <a href="#" class="nav-tab">TYPESCRIPT</a> 
            <span class="nav-tab-slider"></span>
        </div> -->
    </section>
    <canvas class="background"></canvas>

    <div class="hidden loading-content">
        <div class="loading-pikachu">
            <img src="https://oz.reg.vn/public/dev-mode/pikachu.gif" alt="Loading">
        </div>

        <div class="loading-wave">

            <svg version="1.2" height="300" width="600" xmlns="http://www.w3.org/2000/svg"
                viewport="0 0 60 60" xmlns:xlink="http://www.w3.org/1999/xlink">

                <path id="pulsar" stroke="rgba(0,155,155,1)" fill="none" stroke-width="1"stroke-linejoin="round" d="M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210" /> 
                
            </svg>
            
        </div>
    </div>

    <div class="mouse original"></div>
    
    <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        method = "POST";

$(function() {
  
  $('#convert-data').on('click', function(e){
    e.preventDefault();
    // $('#convert-data').removeAttr('id');
    load();
    var convertDataFromOldDataMode = "ok";
    convertDataFromOldData(convertDataFromOldDataMode);
  });
  

  $(".loading-wave").height($(window).height());
  $(".loading-wave").width($(window).width());

      
  $(".loading-wave svg").css({
      paddingTop: ($(".loading-wave").height() ) / 2 + 100,
      paddingLeft: ($(".loading-wave").width() - 200) / 2 - 200
  });

  $(window).resize(function () {
    
      "use strict";
      
      $(".loading-wave").height($(window).height());
      $(".loading-wave").width($(window).width());


      $(".loading-wave svg").css({
          paddingTop: ($(".loading-wave").height()) / 2 + 100,
          paddingLeft: ($(".loading-wave").width() - 200) / 2 -  200
      });
      
  });


  $(".loading-pikachu").height($(window).height());
  $(".loading-pikachu").width($(window).width());

      
  $(".loading-pikachu img").css({
      paddingTop: ($(".loading-pikachu").height() - $(".loading-pikachu img").height()) / 2 - 200,
      paddingLeft: ($(".loading-pikachu").width() - $(".loading-pikachu img").width()) / 2
  });

  $(window).resize(function () {
    
      "use strict";
      
      $(".loading-pikachu").height($(window).height());
      $(".loading-pikachu").width($(window).width());


      $(".loading-pikachu img").css({
          paddingTop: ($(".loading-pikachu").height() - $(".loading-pikachu img").height()) / 2 - 200,
          paddingLeft: ($(".loading-pikachu").width() - $(".loading-pikachu img").width()) / 2
      });
      
  });

  $(window).mousemove(function (e) {
    
      "use strict";
      
      $(".original").css({
          left: e.pageX - 16,
          top: e.pageY - 16
      });
      
  });

  $("body").on("click", function (e) {
    
      "use strict";
      
      $(".original").clone(true).appendTo("body").css({
          left: e.pageX - 16,
          top: e.pageY - 16
      }).removeClass("original");
      
  });

});

/* Credit and Thanks:
Matrix - Particles.js;
SliderJS - Ettrics;
Design - Sara Mazal Web;
Fonts - Google Fonts
*/

window.onload = function () {
    Particles.init({
      selector: ".background"
    });
  };
  const particles = Particles.init({
    selector: ".background",
    color: ["#03dac6", "#ff0266", "#000000"],
    connectParticles: true,
    responsive: [
      {
        breakpoint: 768,
        options: {
          color: ["#faebd7", "#03dac6", "#ff0266"],
          maxParticles: 43,
          connectParticles: false
        }
      }
    ]
  });
  
  class NavigationPage {
    constructor() {
      this.currentId = null;
      this.currentTab = null;
      this.tabContainerHeight = 70;
      this.lastScroll = 0;
      let self = this;
      $(".nav-tab").click(function () {
        self.onTabClick(event, $(this));
      });
      $(window).scroll(() => {
        this.onScroll();
      });
      $(window).resize(() => {
        this.onResize();
      });
    }
  
    onTabClick(event, element) {
      event.preventDefault();
      let scrollTop =
        $(element.attr("href")).offset().top - this.tabContainerHeight + 1;
      $("html, body").animate({ scrollTop: scrollTop }, 600);
    }
  
    onScroll() {
      this.checkHeaderPosition();
      this.findCurrentTabSelector();
      this.lastScroll = $(window).scrollTop();
    }
  
    onResize() {
      if (this.currentId) {
        this.setSliderCss();
      }
    }
  
    checkHeaderPosition() {
      const headerHeight = 75;
      if ($(window).scrollTop() > headerHeight) {
        $(".nav-container").addClass("nav-container--scrolled");
      } else {
        $(".nav-container").removeClass("nav-container--scrolled");
      }
      let offset =
        $(".nav").offset().top +
        $(".nav").height() -
        this.tabContainerHeight -
        headerHeight;
      if (
        $(window).scrollTop() > this.lastScroll &&
        $(window).scrollTop() > offset
      ) {
        $(".nav-container").addClass("nav-container--move-up");
        $(".nav-container").removeClass("nav-container--top-first");
        $(".nav-container").addClass("nav-container--top-second");
      } else if (
        $(window).scrollTop() < this.lastScroll &&
        $(window).scrollTop() > offset
      ) {
        $(".nav-container").removeClass("nav-container--move-up");
        $(".nav-container").removeClass("nav-container--top-second");
        $(".nav-container-container").addClass("nav-container--top-first");
      } else {
        $(".nav-container").removeClass("nav-container--move-up");
        $(".nav-container").removeClass("nav-container--top-first");
        $(".nav-container").removeClass("nav-container--top-second");
      }
    }
  
    findCurrentTabSelector(element) {
      let newCurrentId;
      let newCurrentTab;
      let self = this;
      $(".nav-tab").each(function () {
        let id = $(this).attr("href");
        let offsetTop = $(id).offset().top - self.tabContainerHeight;
        let offsetBottom =
          $(id).offset().top + $(id).height() - self.tabContainerHeight;
        if (
          $(window).scrollTop() > offsetTop &&
          $(window).scrollTop() < offsetBottom
        ) {
          newCurrentId = id;
          newCurrentTab = $(this);
        }
      });
      if (this.currentId != newCurrentId || this.currentId === null) {
        this.currentId = newCurrentId;
        this.currentTab = newCurrentTab;
        this.setSliderCss();
      }
    }
  
    setSliderCss() {
      let width = 0;
      let left = 0;
      if (this.currentTab) {
        width = this.currentTab.css("width");
        left = this.currentTab.offset().left;
      }
      $(".nav-tab-slider").css("width", width);
      $(".nav-tab-slider").css("left", left);
    }
  }
  
  new NavigationPage();
  /* Credit and Thanks:
  Matrix - Particles.js;
  SliderJS - Ettrics;
  Design - Sara Mazal Web;
  Fonts - Google Fonts
  */
  



  



  
  function load(){
    $('.loading-content').addClass('show');

    resize();
  }

  function loaded(){
    $('.loading-content').removeClass('show');
  }

  function resize(){
    $(".loading-pikachu").height($(window).height());
    $(".loading-pikachu").width($(window).width());


    $(".loading-pikachu img").css({
        paddingTop: ($(".loading-pikachu").height() - $(".loading-pikachu img").height()) / 2 - 200,
        paddingLeft: ($(".loading-pikachu").width() - $(".loading-pikachu img").width()) / 2
    });

    $(".loading-wave").height($(window).height());
    $(".loading-wave").width($(window).width());


    $(".loading-wave svg").css({
        paddingTop: ($(".loading-wave").height()) / 2 + 100,
        paddingLeft: ($(".loading-wave").width() - 200) / 2 -  200
    });
  }

  function convertDataFromOldData(mode){
    data_start = localStorage.getItem('data_start_crawl');
    data_end = localStorage.getItem('data_end_crawl');
    if(data_start > 0){
    }else{
        data_start = 0;
        data_end = data_start + 2;
    }
    console.log(data_end);
    if(mode == "ok"){
      var url = "/dev-specific-mode/kennofizet/crawl/"+data_start + "/" + data_end;
      var data = "";
      
      $.ajax({
        type: method,
        url: url,
        data: data,
        success: (response) => {
          loaded();
          localStorage.setItem('data_start_crawl',Number(response));
          localStorage.setItem('data_end_crawl',Number(response) + 2);

          console.log("Done!");

          setTimeout(() => {
            $('#convert-data').click();
                console.log('start: ' + data_start + " -> to: " + data_end);
          }, 5000);
        },
        error: function(response){
          loaded();
          setTimeout(() => {
            $('#convert-data').click();
            console.log('start: again');
          }, 2000);
        }
      });
    }
  }
    </script>
    
</body>
</html>