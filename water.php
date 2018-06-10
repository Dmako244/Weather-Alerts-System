<html>
<head>
    <title>WAS</title>
    <script  type="text/javascript" src="jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style type="text/css">
    
    
      
            /* css for toplayer*/
        h3 {
    display: block;
    font-size: 2.17em;
    color: black;
    font-family:cursive;
       
  
}
        h5{
    display: block;
    font-size: 1.9em;
    color: black;
       
  
}
 
        
        /*css for the top layer*/
        
        .video-container .title-container {
    z-index: 1000;
    position: absolute;
    top: 35%;
    width: 100%;
    text-align: center;
    color: #fff;
}
bootstrap.min-ea81a19….css:7
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
Inherited from div#home.homepage-hero-module.jumbotron
bootstrap.min-ea81a19….css:7

        
        /*css2*/
        
        
    
    .homepage-hero-module {
    border-right: none;
    border-left: none;
    position: relative;
}
.no-video .video-container video,
.touch .video-container video {
    display: none;
}
.no-video .video-container .poster,
.touch .video-container .poster {
    display: block !important;
}
.video-container {
    position: relative;
    bottom: 0%;
    left: 0%;
    height: 100%;
    width: 100%;
    overflow: hidden;
    background: #000;
}
.video-container .poster img {
    width: 100%;
    bottom: 0;
    position: absolute;
}
.video-container .filter {
    z-index: 100;
    position: absolute;
    background: rgba(0, 0, 0, 0.4);
    width: 100%;
}
.video-container video {
    position: absolute;
    z-index: 0;
    bottom: 0;
}
.video-container video.fillWidth {
    width: 100%;
}


    
    
    
    
    </style>
    
      
    
    
    
    </head>    
  

    
    <script type="text/javascript">
    
    //jQuery is required to run this code
$( document ).ready(function() {

    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

});

function scaleVideoContainer() {

    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);

}

function initBannerVideoSize(element){

    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
    windowHeight = $(window).height() + 5,
    videoWidth,
    videoHeight;

    // console.log(windowHeight);

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');

        $(this).width(windowWidth);

        if(windowWidth < 1000){
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

            $(this).width(videoWidth).height(videoHeight);
        }

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

    });
}
    
    
    
    
    
    </script>
    

    
    
    
    <body>
        
        <!--navbar-->
        
          <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="water.php">Home</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          
        <a class="nav-link" href="api-viamo.html">Send Voice Message <span class="sr-only">(current)</span></a>
          
          
      </li>
      <li class="nav-item">
                 <a class="nav-link" href="was.php">Current Weather Status</a>
                
      </li>
      
    </ul>
   
  </div>
</nav>
        
        
        
  
        
      <div class="homepage-hero-module">
    <div class="video-container">
        
        
         <!--coverr video-->
        <div class="title-container">
            <div class="headline">
             
                <h3 ><strong>Weather Alerts System</strong></h3>
                <h5 >Akwaaba</h5>
                
            </div>

            <div class="text-center" id="loadBannerVideoSpinner" style="background-color: rgba(0, 0, 0, 0.498039); padding: 10px; border-radius: 4px; display: none; margin-top: 20px;">
                <h5 class="text-thin text-primary">Loading Coverr... <i class="fa fa-circle-o-notch fa-spin"></i></h5>
            </div>
        </div>
        
        
        <div class="filter"></div>
        <video autoplay loop class="fillWidth">
            <source src="Coverr/Mini-boat.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src="Coverr/Mini-boat.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
        <div class="poster hidden">
            <img src="Coverr/Mini-boat.ogv"alt="">
        </div>
    </div>
</div>
        
        
    
    
    
    
    
    </body>





</html>