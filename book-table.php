<?php
if(isset($_REQUEST['booking']))
{
    require_once('phpmailer/PHPMailerAutoload.php');

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Set who the message is to be sent from
    $mail->setFrom('replyto@palmerasksa.com', 'Palmeras Booking');

    $mail->addReplyTo('noreply@palmerasksa.com', 'Palmeras');

    $mail->addAddress("rm@palmerasksa.com", "Palmeras");
    //$mail->addAddress($_REQUEST['email'], "Palmeras");

    $mail->Subject = 'New Booking request From ' . $_REQUEST['name'];
    $html_message = '
    <html>
            <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                    <title>New Booking request Details</title>
            </head>
            <body>
                    <div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
                            <h1>New Booking request Details</h1>
                            <div align="center">
                            <a href="http://palmerasksa.com"><img src="images/phpmailer.png" height="90" width="340" alt="Palmeras Home Link"></a>
                            </div>
                            <p>Name : <strong>' . $_REQUEST["name"] . '</strong>.</p>
                            <p>Email : <strong>' . $_REQUEST["email"] . '</strong>.</p>
                            <p>Phone No : <strong>' . $_REQUEST["telephone"] . '</strong>.</p>
                            <p>Time : <strong>' . $_REQUEST["hour"] . ' : ' . $_REQUEST["minutes"] . ' : ' . $_REQUEST["time_format"] . '</strong>.</p>
                            <p>Date : <strong>' . $_REQUEST["date"] . '</strong>.</p>
                            <p>Males : <strong>' . $_REQUEST["male"] . '</strong>.</p>
                            <p>Females : <strong>' . $_REQUEST["female"] . '</strong>.</p>	    		 	
                            <p>Booking Type : <strong>' . $_REQUEST["type"] . '</strong>.</p>	    		 	
                    </div>
            </body>
    </html>';
    $mail->msgHTML($html_message);
    //Replace the plain text body with one created manually
    $mail->AltBody = 'New Booking From Palmeras';
    //Attach an image file
    $mail->addAttachment('images/logo.png');

    $client_msg = "";
    //send the message, check for errors
    if (!$mail->send()) {
        $client_msg = "Problem Occurred, Your booking hasnot received! Please Try again or Contact to Palmeras Administration" . $mail->ErrorInfo;
    } else {
        $client_msg = "Your Booking request has been received, We will contact you back with confirmation";
    }
}

?>

<html>
    <head>
        <title>Book a Table - Palmeras Resturant Riyadh</title>
        <meta name="description" content="Booking for a Spanish luxury in Kingdom of Saudi Arabia is at Palmeras’ website. It requires no hassle for any corporate or individual bookings.">
        <meta name="keywords" content="palmeras restaurant riyadh booking, palmeras restaurant riyadh reservation,  بالميراس مطعم الرياض">
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
        <script>
            document.createElement('header');
            document.createElement('nav');
            document.createElement('section');
            document.createElement('article');
            document.createElement('aside');
            document.createElement('footer');
            document.createElement('hgroup');
        </script>
        <link rel="stylesheet" href="css/BeatPicker.min.css"/>
        <script src="js/BeatPicker.min.js"></script>

        <script type="text/javascript">
            function validate_booking()
            {
                validation_msg = true;
                if (document.forms["booking_form"]["name"].value.length == 0) {
                    validation_msg = false;
                    alert("Name is missing!");
                }
                else if (document.forms["booking_form"]["email"].value.length == 0) {
                    validation_msg = false;
                    alert("Email is missing!");
                }
                else if(!is_valid_phone())
                {
                    validation_msg = false;
                }
                else if (document.forms["booking_form"]["date"].value.length == 0) {
                    validation_msg = false;
                    alert("Date is missing!");
                }
                else if(!is_valid_email())
                {    
                    validation_msg = false;
                }
                return validation_msg;
            }

            function is_valid_email() {
                var email = document.forms["booking_form"]["email"].value;
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }

            function is_valid_phone()
            {
                var error = true;
                fld = document.forms["booking_form"]["telephone"];
                var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');
                
                if (fld.value.length == 0) {
                    alert("You didn't enter a phone number.");
                    error = false;
                } else if (isNaN(parseInt(stripped))) {
                    alert("The phone number contains illegal characters");
                    error = false;
                } /*else if (!(stripped.length == 10)) {
                    alert("The phone number is the wrong length. Make sure you included an area code");
                    error = false;
                }*/
                return error;
            }
        </script>    
    </head>
    <body>
        <div id="wraper">
            <?php include_once('header.php'); ?>
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
                    <p class="book-table-para">We are just a phone call away for our visitors and admirers</p>
                    <p class="address_icon"><span><img src="images/telephone_icon.png" alt="palmeras phone"></span>+966 (11) 4641977</p>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="booking_form" method="post" onsubmit="return validate_booking();">
                        <label>Name:</label>                                   
                        <input type="text" name="name" placeholder="Full Name...">
                        <label class="time_label">Type:</label>                
                        <select style="width:105px !important;" name="type">
                            <option selected="selected">Individuals</option>
                            <option>Family</option>
                            <option>Company</option>
                        </select>	<br>
                        <label>Email:</label>		
                        <input type="email" name="email" placeholder="Valid Email...">
                        <label class="time_label">Phone No:</label>		
                        <input type="tel" name="telephone" placeholder="Phone No..."><br>
                        <label>Date:</label>		
                        <input type="text" data-beatpicker="true" data-beatpicker-disable="{from:[<?php echo date('Y,m,d', strtotime($date .' -1 day'));?>],to:'<'}" name="date" placeholder="Click to Select.."/>

                        <label class="time_label">Time:</label>	
                        <select name="hour">
                            <option selected="selected">01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                        </select>	
                        <select name="minutes">
                            <option selected="selected">00</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                            <option>32</option>
                            <option>33</option>
                            <option>34</option>
                            <option>35</option>
                            <option>36</option>
                            <option>37</option>
                            <option>38</option>
                            <option>39</option>
                            <option>40</option>
                            <option>41</option>
                            <option>42</option>
                            <option>43</option>
                            <option>44</option>
                            <option>45</option>
                            <option>46</option>
                            <option>47</option>
                            <option>48</option>
                            <option>49</option>
                            <option>50</option>
                            <option>51</option>
                            <option>52</option>
                            <option>53</option>
                            <option>54</option>
                            <option>55</option>
                            <option>56</option>
                            <option>57</option>
                            <option>58</option>
                            <option>59</option>
                        </select>
                        <select name="time_format">
                            <option selected="selected">AM</option>
                            <option>PM</option>
                        </select>	
                        <br>
                        <!-- <label>Number of Persons:</label>	
                            <select name="number of person">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                        </select>-->
                        <label>Males:</label>	
                        <select style="width:44.6px !important;" name="male">
                            <option selected="selected">0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                        </select>
                        <label style="margin: 0 -10px 0 10px !important;">Females:</label>	
                        <select style="width:44.6px !important;" name="female">
                            <option selected="selected">0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                        </select>
                        <br>
                        <input class="booking_button" type="submit" name="booking" value="BOOK">
                    </form>
                    <article class="book-table-article"><?php echo $client_msg; ?></article>
                </div>
            </div>
            <?php include_once('footer.php'); ?>
        </div>
        <script>
            homeLoader = $('body').loadingIndicator({
                useImage: false,
            }).data("loadingIndicator");

            $(window).load(function() {
                $(".loading-indicator-wrapper").hide();
            });
        </script>
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-55240282-1', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>