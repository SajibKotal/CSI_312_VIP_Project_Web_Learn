<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./Teacher-index.php";
    header("Location: $url");
}

?>
<HTML>
<HEAD>
<TITLE>Teacher Profile</TITLE>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">



<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />

    
  
    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="profile/css/style.css">
    <link rel="stylesheet" href="profile/css/night-mode.css">
    <link rel="stylesheet" href="profile/css/framework.css">
    <link rel="stylesheet" href="profile/css/bootstrap.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    



</HEAD>
<BODY style="background-color:lavenderblush";>
	 <!-- Wrapper -->
     <div id="wrapper">


<!-- Header Container
   ================================================== -->
   <header class="header header-horizontal">

       <div class="container">
           <nav uk-navbar>

               <!-- left Side Content -->
               <div class="uk-navbar-left">

                   <!-- menu icon -->
                   <span class="mmenu-trigger">
                       <button class="hamburger hamburger--collapse" type="button">
                           <span class="hamburger-box">
                               <span class="hamburger-inner"></span>
                           </span>
                       </button>
                   </span>

                   <!-- logo -->
                   <a href="dashboard.html" class="logo">
                       <!-- <img src="http://demo.foxthemes.net/courseplusv3.3/assets/images/logo-dark.svg" alt=""> -->
                       <span> Courseplus</span>
                   </a>

                   <!-- Main Navigation -->

                  <nav id="navigation">
                       <ul id="responsive">
                           <li><a href="#">Web Learn</a> </li>
                          <!-- <li><a href="#">Explore</a></li>-->
                           <!--<li><a href="book.html">Book</a> </li>-->
                           <!--<li><a href="blog-1.html">Blog</a> </li>-->
                           <!--<li><a href="#">Pages</a>-->
                              <!-- <ul class="dropdown-nav">
                                   
                                   <li><a href="page-contact.html">Contact</a></li>
                                   <li><a href="#">Account</a>
                                       <ul class="dropdown-nav">
                                           <li><a href="page-login.html">login</a></li>
                                           <li><a href="page-register.html">register</a></li>
                                       </ul>
                                   </li>
                                   
                               </ul>
                           </li>-->
                       </ul>
                   </nav>
                   <!-- Main Navigation / End -->

               </div>


               <!--  Right Side Content   -->

               <div class="uk-navbar-right">

                   <div class="header-widget">

                       

                       <!-- User icons close mobile-->
                       <span class="icon-feather-x icon-small uk-hidden@s"
                           uk-toggle="target: .header-widget ; cls: is-active"> </span>


                       <a href="#" class="header-widget-icon"
                           uk-tooltip="title: My Courses ; pos: bottom ;offset:21">
                          <i class="fa fa-youtube-play" aria-hidden="true" style="font-size: 21px;"></i>

                       </a>

                       <!-- courses dropdown List -->
                       <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small"
                           class="dropdown-notifications my-courses-dropdown">

                           <!-- notivication header -->
                           <div class="dropdown-notifications-headline">
                               <h4>Your Courses</h4>
                               <a href="#">
                                   <i class="icon-feather-settings"
                                       uk-tooltip="title: Notifications settings ; pos: left"></i>
                               </a>
                           </div>

                           <!-- notification contents -->
                           <div class="dropdown-notifications-content" data-simplebar>

                               <!-- notiviation list -->
                               <ul>
                                   <li class="notifications-not-read">
                                       <a href="course-intro.html">
                                           <span class="notification-image">
                                               <img src="profile/images/course/1.png" alt=""> </span>
                                           <span class="notification-text">
                                               <span class="course-title">Ultimate Web Designer & Web Developer
                                               </span>
                                               <span class="course-number">6/35 </span>
                                               <span class="course-progressbar">
                                                   <span class="course-progressbar-filler"
                                                       style="width:95%"></span>
                                               </span>
                                           </span>

                                           <!-- option menu -->
                                           <span class="btn-option">
                                               <i class="icon-feather-more-vertical"></i>
                                           </span>
                                           <div class="dropdown-option-nav"
                                               uk-dropdown="pos: bottom-right ;mode : hover">
                                               <ul>
                                                   <li>
                                                       <span>
                                                           <i class="icon-material-outline-dashboard"></i>
                                                           Course Dashboard</span>
                                                   </li>
                                                   <li>
                                                       <span>
                                                           <i class="icon-feather-video"></i>
                                                           Resume Course</span>
                                                   </li>
                                                   <li>
                                                       <span>
                                                           <i class="icon-feather-x"></i>
                                                           Remove Course</span>
                                                   </li>
                                               </ul>
                                           </div>
                                       </a>

                                   </li>
                                   <li>
                                       <a href="course-intro.html">
                                           <span class="notification-image">
                                               <img src="profile/images/course/3.png" alt=""> </span>
                                           <span class="notification-text">
                                               <span class="course-title">The Complete JavaScript Course Build Real
                                                   Projects !</span>
                                               <span class="course-number">6/35 </span>
                                               <span class="course-progressbar">
                                                   <span class="course-progressbar-filler"
                                                       style="width:95%"></span>
                                               </span>
                                           </span>

                                           <!-- option menu -->
                                           <span class="btn-option">
                                               <i class="icon-feather-more-vertical"></i>
                                           </span>
                                           <div class="dropdown-option-nav"
                                               uk-dropdown="pos: bottom-right ;mode : hover">
                                               <ul>
                                                   <li>
                                                       <span>
                                                           <i class="icon-material-outline-dashboard"></i>
                                                           Course Dashboard</span>
                                                   </li>
                                                   <li>
                                                       <span>
                                                           <i class="icon-feather-video"></i>
                                                           Resume Course</span>
                                                   </li>
                                                   <li>
                                                       <span>
                                                           <i class="icon-feather-x"></i>
                                                           Remove Course</span>
                                                   </li>
                                               </ul>
                                           </div>

                                       </a>
                                   </li>
                                   <li>
                                       <a href="course-intro.html">
                                           <span class="notification-image">
                                               <img src="profile/images/course/2.png" alt=""> </span>
                                           <span class="notification-text">
                                               <span class="course-title">Learn Angular Fundamentals From The
                                                   Beginning</span>
                                               <span class="course-number">6/35 </span>
                                               <span class="course-progressbar">
                                                   <span class="course-progressbar-filler"
                                                       style="width:95%"></span>
                                               </span>
                                           </span>

                                           <!-- option menu -->
                                           <span class="btn-option">
                                               <i class="icon-feather-more-vertical"></i>
                                           </span>
                                           <div class="dropdown-option-nav"
                                               uk-dropdown="pos: bottom-right ;mode : hover">
                                               <ul>
                                                   <li>
                                                       <span>
                                                           <i class="icon-material-outline-dashboard"></i>
                                                           Course Dashboard</span>
                                                   </li>
                                                   <li>
                                                       <span>
                                                           <i class="icon-feather-video"></i>
                                                           Resume Course</span>
                                                   </li>
                                                   <li>
                                                       <span>
                                                           <i class="icon-feather-x"></i>
                                                           Remove Course</span>
                                                   </li>
                                               </ul>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="course-intro.html">
                                           <span class="notification-image">
                                               <img src="profile/images/course/1.png" alt=""> </span>
                                           <span class="notification-text">
                                               <span class="course-title">Ultimate Web Designer & Web Developer
                                               </span>
                                               <span class="course-number">6/35 </span>
                                               <span class="course-progressbar">
                                                   <span class="course-progressbar-filler"
                                                       style="width:95%"></span>
                                               </span>
                                           </span>

                                           <!-- option menu -->
                                           <span class="btn-option">
                                               <i class="icon-feather-more-vertical"></i>
                                           </span>
                                           <div class="dropdown-option-nav"
                                               uk-dropdown="pos: top-right ;mode : hover">
                                               <ul>
                                                   <li>
                                                       <span>
                                                           <i class="icon-material-outline-dashboard"></i>
                                                           Course Dashboard</span>
                                                   </li>
                                                   <li>
                                                       <span>
                                                           <i class="icon-feather-video"></i>
                                                           Resume Course</span>
                                                   </li>
                                                   <li>
                                                       <span>
                                                           <i class="icon-feather-x"></i>
                                                           Remove Course</span>
                                                   </li>
                                               </ul>
                                           </div>
                                       </a>
                                   </li>
                               </ul>

                           </div>
                           <div class="dropdown-notifications-footer">
                               <a href="#"> sell all</a>
                           </div>
                       </div>

                       <!-- notificiation icon  -->

                       <a href="#" class="header-widget-icon"
                           uk-tooltip="title: Notificiation ; pos: bottom ;offset:21">
                           <i class="fa fa-bell" aria-hidden="true" style="font-size: 20px;"></i>
                           <span>4</span>
                       </a>

                       <!-- notificiation dropdown -->
                       <div uk-dropdown="pos: top-right;mode:click ; animation: uk-animation-slide-bottom-small"
                           class="dropdown-notifications">

                           <!-- notivication header -->
                           <div class="dropdown-notifications-headline">
                               <h4>Notifications </h4>
                               <a href="#">
                                   <i class="icon-feather-settings"
                                       uk-tooltip="title: Notifications settings ; pos: left"></i>
                               </a>
                           </div>

                           <!-- notification contents -->
                           <div class="dropdown-notifications-content" data-simplebar>

                               <!-- notiviation list -->
                               <ul>
                                   <li class="notifications-not-read">
                                       <a href="#">
                                           <span class="notification-icon btn btn-soft-danger disabled">
                                               <i class="icon-feather-thumbs-up"></i></span>
                                           <span class="notification-text">
                                               <strong>Mehadi</strong> Like Your Comment On Course
                                               <span class="text-primary">Javascript Introduction </span>
                                               <br> <span class="time-ago"> 9 hours ago </span>
                                           </span>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-icon btn btn-soft-primary disabled">
                                               <i class="icon-feather-message-circle"></i></span>
                                           <span class="notification-text">
                                               <strong>Safi Rasel</strong> Replay Your Comments in
                                               <span class="text-primary">Programming for Games</span>
                                               <br> <span class="time-ago"> 12 hours ago </span>
                                           </span>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-icon btn btn-soft-success disabled">
                                               <i class="icon-feather-star"></i></span>
                                           <span class="notification-text">
                                               <strong>Adnan</strong> Added New Review In Course
                                               <span class="text-primary">Full Stack PHP Developer</span>
                                               <br> <span class="time-ago"> 19 hours ago </span>
                                           </span>
                                       </a>
                                   </li>
                                   <li class="notifications-not-read">
                                       <a href="#">
                                           <span class="notification-icon btn btn-soft-danger disabled">
                                               <i class="icon-feather-share-2"></i></span>
                                           <span class="notification-text">
                                               <strong>Manik Hossain</strong> Shared Your Discussion On Course
                                               <span class="text-primary">Css Flex Box </span>
                                               <br> <span class="time-ago"> Yesterday </span>
                                           </span>
                                       </a>
                                   </li>
                               </ul>

                           </div>


                       </div>


                       <!-- Message  -->

                       <a href="#" class="header-widget-icon" uk-tooltip="title: Message ; pos: bottom ;offset:21">
                           <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px;"></i>
                           <span>1</span>
                       </a>

                       <!-- Message  notificiation dropdown -->
                       <div uk-dropdown=" pos: top-right;mode:click" class="dropdown-notifications">

                           <!-- notivication header -->
                           <div class="dropdown-notifications-headline">
                               <h4>Messages</h4>
                               <a href="#">
                                   <i class="icon-feather-settings"
                                       uk-tooltip="title: Message settings ; pos: left"></i>
                               </a>
                           </div>

                           <!-- notification contents -->
                           <div class="dropdown-notifications-content" data-simplebar>

                               <!-- notiviation list -->
                               <ul>
                                   <li class="notifications-not-read">
                                       <a href="#">
                                           <span class="notification-avatar">
                                               <img src="profile/images/avatars/SR.jpg" alt="">
                                           </span>
                                           <div class="notification-text notification-msg-text">
                                               <strong>Safi Rasel</strong>
                                               <p>Okay.. Thanks for The Answer I will be waiting for your...
                                               </p>
                                               <span class="time-ago"> 2 hours ago </span>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar">
                                               <img src="profile/images/avatars/avatar-3.jpg" alt="">
                                           </span>
                                           <div class="notification-text notification-msg-text">
                                               <strong>Manik hossain</strong>
                                               <p> he will explain you how to keep the HTML structure and all
                                                   that...</p>
                                               <span class="time-ago"> 7 hours ago </span>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar">
                                               <img src="profile/images/avatars/bayzid.jpg" alt="">
                                           </span>
                                           <div class="notification-text notification-msg-text">
                                               <strong>Bayzid Bostami</strong>
                                               <p> Bayzid Bostami just joined Messenger! Be the first to send a
                                                   welcome message..</p>
                                               <span class="time-ago"> 19 hours ago </span>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar">
                                               <img src="profile/images/avatars/avatar-4.jpg" alt="">
                                           </span>
                                           <div class="notification-text notification-msg-text">
                                               <strong>Md.Mugdho</strong>
                                               <p> Okay.. Thanks for The Answer I will be waiting for your...
                                               </p>
                                               <span class="time-ago"> Yesterday </span>
                                           </div>
                                       </a>
                                   </li>
                               </ul>

                           </div>
                           <div class="dropdown-notifications-footer">
                               <a href="#"> sell all <i class="icon-line-awesome-long-arrow-right"></i> </a>
                           </div>
                       </div>


                       <!-- profile-icon-->

                       <a href="#" class="header-widget-icon profile-icon">
                           <img src="profile/images/avatars/fb.jpg" alt="" class="header-profile-icon">
                       </a>

                       <div uk-dropdown="pos: top-right ;mode:click" class="dropdown-notifications small">

                           <!-- User Name / Avatar -->
                           <a href="profile-1.html">

                               <div class="dropdown-user-details">
                                   <div class="dropdown-user-avatar">
                                       <img src="profile/images/avatars/fb.jpg" alt="">
                                   </div>
                                   <div class="dropdown-user-name">
                                       <?php echo $username;?><span>Teacher</span>
                                   </div>
                               </div>

                           </a>

                           <!-- User menu -->

                           <ul class="dropdown-user-menu">
                               <li>
                                   <a href="#">
                                       <i class="icon-material-outline-dashboard"></i> Dashboard</a>
                               </li>
                               <li><a href="#">
                                       <i class="icon-feather-bookmark"></i> Bookmark </a>
                               </li>
                               <li><a href="profile-edit.html">
                                       <i class="icon-feather-settings"></i> Account Settings</a>
                               </li>
                               <li><a href="#" style="color:#62d76b">
                                       <i class="icon-feather-star"></i> Upgrade To Premium</a>
                               </li>
                               <li>
                                   <a href="#" id="night-mode" class="btn-night-mode">
                                       <i class="icon-feather-moon"></i> Dark mode
                                       <span class="btn-night-mode-switch">
                                           <span class="uk-switch-button"></span>
                                       </span>
                                   </a>
                               </li>
                               <li class="menu-divider">
                               <li><a href="#">
                                       <i class="icon-feather-help-circle"></i> Help</a>
                               </li>
                               <li><a href="loginTolearning.php">
                                       <i class="icon-feather-log-out"></i> Sign Out</a>
                               </li>
                           </ul>


                       </div>


                   </div>



                   <!-- icon search-->
                   <a class="uk-navbar-toggle uk-hidden@s"
                       uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#">
                       <i class="uil-search icon-small"></i>
                   </a>

                   <!-- User icons -->
                   <a href="#" class="uil-user icon-small uk-hidden@s"
                       uk-toggle="target: .header-widget ; cls: is-active">
                   </a>

               </div>
               <!-- End Right Side Content / End -->


           </nav>

       </div>
       <!-- container  / End -->

   </header>

   <!-- overlay seach on mobile-->
   <div class="nav-overlay uk-navbar-left uk-position-relative uk-flex-1 bg-grey uk-light p-2" hidden
       style="z-index: 10000;">
       <div class="uk-navbar-item uk-width-expand" style="min-height: 60px;">
           <form class="uk-search uk-search-navbar uk-width-1-1">
               <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
           </form>
       </div>
       <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade"
           href="#"></a>
   </div>



<!-- Content
   ================================================== -->
<div class="page-content">

   <div class="page-content-inner">

       <div uk-grid>
           <div class="uk-width-medium@m">

               <div class="profile-cards" uk-sticky="offset: 90; bottom: true; media: @m;top:2">

                   <div class="user-profile-photo">
                       <img src="profile/images/avatars/fb.jpg" alt="">
                   </div>

                   <h4> <?php echo $username;?> </h4>
                   <p class="uk-text-small">Senior Professor </p>

                   <div class="social-icons">
                       <a href="#"> <i class="icon-brand-facebook-f"></i> </a>
                       <a href="#"><i class="icon-brand-twitter"></i></a>
                       <a href="#"> <i class="icon-brand-linkedin"></i></a>
                   </div>

                  

                   
               </div>


           </div>
        

<!-- footer
   ================================================== -->

   <div class="footer"; style="margin-top: 20rem";>
           <div class="container">
               <div uk-grid>
                   <div class="uk-width-1-3@m">
                       <a href="home.html" class="uk-logo">
                           <!-- logo icon -->
                           <i class="uil-graduation-hat"> </i>
                           Courseplus
                       </a>
                       <!-- <p class="footer-description"> Launch your site in style with Courseplus, Create rich layouts A
                           unique and beautiful collection of UI elements that are all flexible and modular.</p> -->
                   </div>
                   <div class="uk-width-expand@s uk-width-1-2">
                       <div class="footer-links pl-lg-8">
                           <h5>Explore </h5>
                           <ul>
                               <li><a href="course-card.html"> Courses </a></li>
                               <li><a href="course-path.html"> Track </a></li>
                               <li><a href="blog-card.html"> Blog </a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="uk-width-expand@s uk-width-1-2">
                       <div class="footer-links pl-lg-8">
                           <h5> Account </h5>
                           <ul>
                               <li><a href="profile-1.html"> Profile </a></li>
                               <li><a href="#"> Settings </a></li>
                               <li><a href="#"> Projects </a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="uk-width-expand@s uk-width-1-2">
                       <div class="footer-links pl-lg-8">
                           <h5> Resources</h5>
                           <ul>
                               <li><a href="#"> Contact </a></li>
                               <li><a href="page-Privacy.html"> Privacy Policy </a></li>
                               <li><a href="page-term.html"> Terms of Use </a></li>
                           </ul>
                       </div>
                   </div>
               </div>
               <hr>
               <div class="uk-grid-collapse" uk-grid>
                   <div class="uk-width-expand@s uk-first-column">
                       <p> Created by Sajib Kotal & Mehedi || © 2021  All Rights Reserved. </p>
                   </div>
                   <div class="uk-width-auto@s">
                       <nav class="footer-nav-icon">
                           <ul>
                               <li><a href="#"><i class="icon-brand-facebook"></i></a></li>
                               <li><a href="#"><i class="icon-brand-dribbble"></i></a></li>
                               <li><a href="#"><i class="icon-brand-youtube"></i></a></li>
                               <li><a href="#"><i class="icon-brand-twitter"></i></a></li>
                           </ul>
                       </nav>
                   </div>
               </div>
           </div>
       </div>

</div>


<!-- For Night mode -->
<script>
   (function (window, document, undefined) {
       'use strict';
       if (!('localStorage' in window)) return;
       var nightMode = localStorage.getItem('gmtNightMode');
       if (nightMode) {
           document.documentElement.className += ' night-mode';
       }
   })(window, document);


   (function (window, document, undefined) {

       'use strict';

       // Feature test
       if (!('localStorage' in window)) return;

       // Get our newly insert toggle
       var nightMode = document.querySelector('#night-mode');
       if (!nightMode) return;

       // When clicked, toggle night mode on or off
       nightMode.addEventListener('click', function (event) {
           event.preventDefault();
           document.documentElement.classList.toggle('night-mode');
           if (document.documentElement.classList.contains('night-mode')) {
               localStorage.setItem('gmtNightMode', true);
               return;
           }
           localStorage.removeItem('gmtNightMode');
       }, false);

   })(window, document);
</script>


<!-- javaScripts
================================================== -->
<script src="profile/js/framework.js"></script>
<script src="profile/js/jquery-3.3.1.min.js"></script>
<script src="profile/js/mmenu.min.js"></script>
<script src="profile/js/simplebar.js"></script>
<script src="profile/js/main.js"></script>

</BODY>
</HTML>
