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
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
<script type="text/javascript" src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.loading-indicator.min.js"></script>

<?php include_once('menu_pages_info.php');?>

</head>
<body>
<div id="wraper">
    <?php include_once('header.php');?>
    <div id="book-table">
        <div class="text-book-table">
            MENU
        </div>
        <?php include_once('left_menu.php');?>   
        <div class="right_menu_detail">
            <img id="upper_section" src="images/soup_1.png" alt="soup">
            <div class="menu_detail_text_div" id="lower_section">
                <p class="main_p">Two selection from our soup of the day</p>
                <h3>Cream Soup</h3>
                    <p>Cream Soups are thickened with béchamel sauce and veloutés are thickened with eggs, butter and cream.</p>
                <h3>Clear Soup</h3>
                <p>Soothing clear soups are made with flavorful meats, vegetables and broths as well as grain cereals.</p>
            </div>
        </div>  
        <div style="clear:both"></div>   
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
<script type="text/javascript">
    $(function(){
      $('#testDiv').slimscroll({
        size: '15px'
      });

      $('#testDiv2').slimScroll({
          position: 'left'
      });

      $('#testDiv3').slimScroll({
          color: '#00f'
      });

      $('#testDiv4').slimScroll({
          alwaysVisible: true
      });

      $('#testDiv5').slimScroll({
          distance: '20px',
          opacity: 1
      });

    });
</script>
</body>
</html>