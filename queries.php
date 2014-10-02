<!DOCTYPE HTML>
<html>
<head>

<title>Queries -- Palmeras Riyadh</title>
<link rel="Shortcut Icon" href="images/favicon.png">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/pictureflip.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/scroller.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/jquery.loading-indicator.css" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
<script src="js/jquery-1.11.0.min.js"></script>
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
<script type="text/javascript" src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.loading-indicator.min.js"></script>
</head>
<body>
<div id="wraper">
    <?php include_once('header.php');?>
    <div id="book-table">
        <div class="left-story">
        	<div class="text-book-table">
                QUERIES
            </div>
        	<img src="images/quries_03.png" alt="quries" />
        </div>
        <div class="right-story">
        	<h2>For Queries</h2>
            <article class="book-table-article">Get in touch with us to know it all about<br>You can drop us a message at: e-mail<br>Or you can call us at: Phone</article>
            <p class="book-table-para">We will make sure to get back to<br>you as our earliest.</p>
        </div>
    </div>
    <?php include_once('footer.php');?>
</div>
 <script>
  homeLoader = $('body').loadingIndicator({
                  useImage: false,
        }).data("loadingIndicator");
  
  $( window ).load(function() {
   $(".loading-indicator-wrapper").hide();
  });
 </script>
</body>
</html>