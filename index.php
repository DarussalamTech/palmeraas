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
    <!--Google Web Master Tracking -->
    <meta name="google-site-verification" content="NkxDmxefHFsAm_1GPPi-sviILu4I0s81ekkYnxsoVJU" />

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
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
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
    <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
      });
    });
    </script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55240282-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>