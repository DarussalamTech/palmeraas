<!DOCTYPE HTML>
<html>
<head>

<title>Location - Palmeras Resturant Riyadh</title>
<meta name="description" content="Palmeras is located at a prime location in Riyadh with access from various highways. The Spanish Cuisine with a Saudi address is a certain delight.">
<meta name="keywords" content="palmeras location, palmeras restaurant riyadh, spanish restaurant riyadh, palmeras restaurant riyadh address,  بالميراس مطعم الرياض">
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
<!----------GOOGLE MAP-------->
<script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>
<script src="js/jquery.loading-indicator.min.js"></script>
<script>
var myCenter=new google.maps.LatLng(24.7082831,46.6789153);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:18,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  icon:'images/map_icon.png',
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
 <script>
        document.createElement('header');
        document.createElement('nav');
        document.createElement('section');
        document.createElement('article');
        document.createElement('aside');
        document.createElement('footer');
        document.createElement('hgroup');
        </script>
</head>
<body>
<div id="wraper">
    <?php include_once('header.php');?>
    <div id="book-table">
        <div class="left-story">
        	<div class="text-book-table">
                LOCATION
            </div>
        	<div id="googleMap" style="width:315px;height:640px;"></div>
        </div>
        <div class="right-story">
        	<h2>Location</h2>
            <article class="book-table-article location_para">Here we are! The map is all set to let you know where<br>we are pinned on it and certainly not far</article>
            <p class="book-table-para">If you want a cuisine at Palmeras</p> <br><br>
            <p class="book-table-para"> La Palmeras<br>
                                        Khalid Ibn Yazid Ibn Muawiyah,<br>
                                        Al Olaya Riyadh 66939<br>
                                        Saudi Arabia</p>
                                        <p class="address_icon"><span><img src="images/telephone_icon.png" alt="palmeras phone"></span>+966 (0) 501383122 <font>(Restaurant Manager)</font></p>
                                        <p class="address_icon"><span><img src="images/fax-icon.png" alt="palmeras Fax"></span>+966 (11) 4615160</p>
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