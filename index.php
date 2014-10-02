<!DOCTYPE HTML>
<html>
<head>
    <title>Palmeras Riyadh</title>
    <link rel="Shortcut Icon" href="images/favicon.png">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.loading-indicator.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width">
</head>
<body>
<div id="wraper">

    <?php include_once('header.php');?>
    
    <div id="book-table">
        <div class="left-story">
            <div class="text-book-table">
                WELCOME
            </div>
        </div>
    	<div class="container">
            <div id="slides">
                <img src="images/slider_1.jpg" alt="slider 1">
                <img src="images/slider_2.jpg" alt="slider 2">
                <img src="images/slider_3.jpg" alt="slider 3">
            </div>
      </div>
    </div>
     
    <?php include_once('footer.php');?>
    
</div>

  <!-- End SlidesJS Required -->

	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <!-- SlidesJS Required: Link to jquery.slides.js -->
    <script src="js/jquery.slides.min.js"></script>
    <script src="js/jquery.loading-indicator.min.js"></script>
    <script>
    homeLoader = $('body').loadingIndicator({
                  useImage: false,
        }).data("loadingIndicator");
    
    $( window ).load(function() {
    $(".loading-indicator-wrapper").hide();
    });
    </script>
    <!-- End SlidesJS Required -->
    
    <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
    <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
      });
    });
    </script>
  <!-- End SlidesJS Required -->
</body>
</html>