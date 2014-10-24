<!DOCTYPE HTML>
<html>
<head>

<title>Gallery - Palmeras Resturant Riyadh</title>
<meta name="description" content="Gallery of Palmeras defines the exquisite cuisine and the pictures of Spanish dishes add to the fun. The mouth watering joy is the real Mediterranean charm.">
<meta name="keywords" content="palmeras restaurant riyadh gallery, palmeras restaurant riyadh pictures, palmeras restaurant gallery, best spanish restaurant in riyadh,  بالميراس مطعم الرياض">
<link rel="Shortcut Icon" href="images/favicon.png">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/scroller.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/jquery.loading-indicator.css" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.loading-indicator.min.js"></script>
 <script>
        document.createElement('header');
        document.createElement('nav');
        document.createElement('section');
        document.createElement('article');
        document.createElement('aside');
        document.createElement('footer');
        document.createElement('hgroup');
        </script>
   <!--[if IE]>
	<link rel="stylesheet" type="text/css" href="css/all-ie-only.css" />
   <![endif]-->
</head>
<body>
<div id="wraper">
    <?php include_once('header.php');?>
    <div id="book-table">
        <div class="left-story">
        	<div class="text-book-table">
                OUR GALLERY
            </div>
        </div>
        <div id="wrapper">
			<div id="carousel">
                <img src="images/image_gallery/image_1.jpg" alt="rally1"/>
				<img src="images/image_gallery/image_2.jpg" alt="rally2"/>
				<img src="images/image_gallery/image_3.jpg" alt="rally3"/>
				<img src="images/image_gallery/image_4.jpg" alt="rally4"/>
                <img src="images/image_gallery/image_5.jpg" alt="rally1"/>
				<img src="images/image_gallery/image_6.jpg" alt="rally2"/>
				<img src="images/image_gallery/image_7.jpg" alt="rally3"/>
				<img src="images/image_gallery/image_8.jpg" alt="rally4"/>
                <img src="images/image_gallery/image_9.jpg" alt="rally1"/>
				<img src="images/image_gallery/image_10.jpg" alt="rally2"/>
				<img src="images/image_gallery/image_11.jpg" alt="rally3"/>
				<img src="images/image_gallery/image_12.jpg" alt="rally4"/>
                <img src="images/image_gallery/image_13.jpg" alt="rally1"/>
				<img src="images/image_gallery/image_14.jpg" alt="rally2"/>
				<img src="images/image_gallery/image_15.jpg" alt="rally3"/>
				<img src="images/image_gallery/image_16.jpg" alt="rally4"/>.
                <img src="images/image_gallery/image_17.jpg" alt="rally4"/>
                <img src="images/image_gallery/image_18.jpg" alt="rally1"/>
				<img src="images/image_gallery/image_19.jpg" alt="rally2"/>
				<img src="images/image_gallery/image_20.jpg" alt="rally3"/>
				<img src="images/image_gallery/image_21.jpg" alt="rally4"/>
                <img src="images/image_gallery/image_1.jpg" alt="rally4"/>
			</div>
			<div id="pager"></div>
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
<script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function() {
				$('#carousel').carouFredSel({
					items: 1,
					auto: false,
					scroll: {
						fx: 'none'
					},
					pagination: {
						container: '#pager',
						event: 'click',
						anchorBuilder: function(nr) {
							var src = $(this).attr('src').replace('/large/', '/small/');
							return '<div class="image_hover_box"><img src="'+ src +'" border="0" /><div class="img_hover_style"></div></div>';
						}
					}
				});
			});
		</script>
<script type="text/javascript">
    $(function(){
      $('#testDiv').slimscroll({
        size: '15px'
      });

      $('#testDiv2').slimScroll({
          position: 'left'
      });

      $('.testDiv3').slimScroll({
          color: '#00f'
      });

      $('#testDiv4').slimScroll({
          alwaysVisible: true
      });
	  
	  $('#pager').slimScroll({
          alwaysVisible: true
      });

      $('#testDiv5').slimScroll({
          distance: '20px',
          opacity: 1
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