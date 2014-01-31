<!DOCTYPE html>
<html>
    <head>
        <title>UMAK-CCS Alumni Tracking System</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
        <!--[if IE 6]>
        <link rel="stylesheet" type="text/css" href="styles/ie6.css" />
        <![endif]-->
    </head>
    <body>
        <div id="page">
            <div id="header">
            <div id="section">
                <div><a href="{{ URL::to('/') }}"><img src="assets/images/logo.gif" alt="" /></a></div>
                <span>ats-support@umak.com.ph <br />
                <br />
                + 800 000 000 0000</span> 
            </div>
            <ul>
                <li class="@if( $title == 'Home') current @endif"><a href="index">Home</a></li>
                <li class="@if( $title == 'About') current @endif"><a href="about">About Us</a></li>
                <li class="@if( $title == 'Alumni') current @endif"><a href="alumni">Alumni</a></li>
                <li class="@if( $title == 'Announcements') current @endif"><a href="announcements">Announcements</a></li>
                <li class="@if( $title == 'School Calendar') current @endif"><a href="school-calendar">School Calendar</a></li>
                <li class="@if( $title == 'Contacts') current @endif"><a href="contacts">Contact us</a></li>
            </ul>
                <div id="tagline">
                    <div>
                        <p>&nbsp;</p>
                        <h1>&nbsp;</h1>
                        <h1>&nbsp;</h1>
                        <h1>&nbsp;</h1>
                        <form name="form1" method="post" action="">
                            <input type="image" name="imageField" id="imageField" src="assets/images/blank.png">
                            <input type="image" name="imageField2" id="imageField2" src="assets/images/blank.png">
                            <input type="image" name="imageField3" id="imageField3" src="assets/images/blank.png">
                            <a href="login2.html">
                                <image src="assets/images/login.png">
                            </a>
                            <a href="register.html">
                                <image src="assets/images/signup.png">
                        </form>
                    </div>
                </div>
            </div>
            <div id="footer">
            <div>
            <div id="connect"> <a href="#"><img src="assets/images/icon-facebook.gif" alt="" /></a> <a href="#"><img src="assets/images/icon-twitter.gif" alt="" /></a> <a href="#"><img src="assets/images/icon-youtube.gif" alt="" /></a> </div>
            <div class="section">
            <ul>
            <li><a href="index2.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="admissions.html">Admissions</a></li>
            <li><a href="announcement.html">Announcement</a></li>
            <li><a href="career.html">Career</a></li>
            <li class="last"><a href="contact-us.html">Contact us</a></li>
            </ul>
            <p>Copyright &copy; AITSM</p>
            </div>
            </div>
            </div>
        </div>
</html>