<!DOCTYPE HTML>
<html>
<head>

<title>Palmeras Riyadh</title>
<link rel="Shortcut Icon" href="images/favicon.png">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/pictureflip.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/scroller.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/jquery.loading-indicator.css" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.loading-indicator.min.js"></script>
</head>
<body>
<div id="wraper">
    <?php include_once('header.php');?>
    <div id="book-table">
        <div class="left-story">
        	<div class="text-book-table">
                BOOK A TABLE
            </div>
        	<img src="images/book-a-table.png" alt="Book a Table" />
        </div>
        <div class="right-story">
        	<h2>Book a Table</h2>
            <section>Booking a table is no hassle, however, contacting in advance can be helpful to enjoy</section>
            <article class="book-table-article">Spanish and Mediterranean Cuisines</article>
            <p class="book-table-para">We are just a phone<br />call away for our visitors<br />and admirers</p>
            <form action="" method="post">
        	<label>Name:</label>				<input type="text" name="Name"><br>
            <label>Type of Guest:</label>		<input type="checkbox" name="Corporate" value="Corporate"><span>Corporate</span>
												<input type="checkbox" name="Family" value="Family" style="margin-left:35px;"><span>Family</span><br>
            <label>Number of Persons:</label>	<input type="text" name="number of person"><br>
            <label>Comments:</label>			<textarea name="comments" ></textarea><br>
            <input type="button" name="button" value="BOOK">
        </form>
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