<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login As</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- custom css file link  -->
    <!--<link rel="stylesheet" href="style.css">-->
    <link rel="javascript" href="js/main.js">
    <link rel="stylesheet" href="css/loginTolearning.css">
    <script src="jquery.js"></script>
</head> 
<body style="background-image:url('learn\ 2.jpg')";>


<!-- header section starts  -->

<header class="header-active">

<a href="#" class="logo"><i class="fas fa-graduation-cap"></i>WEB Learn </a>

<nav class="navbar">
    <ul class="flex">
        <li><a href="index.html" >Home</a></li>
        <li><a href="index.html">About</a></li>
        <li><a href="index.html">Teacher</a></li>
        <li>

        <div class="dropdown"><a   id="dropdownMenuLink" data-toggle="dropdown" class="active">Course</a>
            <ul class="dropdown-menu">
            <li><a href="#course">HTML</a></li>
            <li><a href="#course">CSS</a></li>
            <li><a href="#course">JavaScript</a></li>
            <li class="divider"></li>
            <li><a href="allCourse.php">All courses</a></li>
          </ul>
        </div>
        
        </li>

        <li><a href="index.html">Review</a></li>
        <li><a href="index.html">Contact</a></li>

        <li>

            <div class="dropdown"><a   id="dropdownMenuLink" data-toggle="dropdown"><i class="fas fa-user-circle"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                <li><a href=""><i class="fas fa-user-plus"></i>  register</a></li>
                <li><a href=""><i class="fas fa-sign-in-alt"></i>   log in</a></li>
            
              </ul>
            </div>
            
            </li>

    
    </ul>
</nav>

<div class="fas fa-bars"></div>

</header>

<!-- header section ends -->


<!-- course section starts  -->

<section class="f">
  <form>
    <fieldset>
        <legend>Login to web learn</legend>
        <ul>  
        <li><a id ="button" class="b" href="Teacher-login.php">As a Teacher</a></li>

      <li><a id ="button" class="button" href="login.php">As a Student</a></li>
      <li><a id ="button" class="button" href="Admin-login.php">As a Admin</a></li>
    </ul>
</fieldset>
  </form>
</section>



<!-- course section ends -->

<section id="sub" class="sub">
    
</section>


<section class="footer">

<div class="icons">
    <a href="#" class="fab fa-facebook-f"></a>
    <a href="#" class="fab fa-twitter"></a>
    <a href="#" class="fab fa-instagram"></a>
    <a href="#" class="fab fa-github"></a>
    <a href="#" class="fab fa-youtube"></a>
</div>

<div class="credit">Created by <span>Sajib & Mehedi</span> | © 2021, all rights reserved.</div>

</section>














<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="main.js"></script>

    
</body>
</html>