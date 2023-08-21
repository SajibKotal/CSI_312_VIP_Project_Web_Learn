<?php 

if(isset($_POST['submit'])){


    $host      =      'localhost';
    $dbname    =      'test-db';
    $dbuser    =      'root';
    $dbpass    =      '';
    $tbname    =      'email_list';


	$conn = mysqli_connect($host,$dbuser,$dbpass,$dbname);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
 
	//Email
	$query_email = "SELECT * FROM `$tbname` WHERE email ='$email' ";

	$result_email = $conn->query($query_email);

	$client_email = $result_email->fetch_array();

	if($client_email)
	{
	$msg='<div class="msg-mailsb msg-mail-red">Your email '.$email.' already exists. Please check email</div> ';

	}else { 
	$sql = "INSERT INTO `email_list` (`id`, `name`, `email`) VALUES (NULL, '$name', '$email')";

	$conn->query($sql);
	
	$msg= '<div class="msg-mailsb msg-mail-green">
						Thanks '.$name.' for Share Your Email '.$email.' .<br>
						Please wait we send a special offer for you.<br>
						<span class="mailsub-goback-btn"><a href="javascript:window.history.go(-1);">Click here</a></span>  return to the recent page you were browsing.
					</div> ';
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course page</title>

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
    <link rel="stylesheet" href="css/course-page.css">
    <script src="jquery.js"></script>
</head> 
<body>


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
            <li><a href="#">All courses</a></li>
          </ul>
        </div>
        
        </li>

        <li><a href="index.html">Review</a></li>
        <li><a href="index.html">Contact</a></li>

        <li>

            <div class="dropdown"><a   id="dropdownMenuLink" data-toggle="dropdown"><i class="fas fa-user-circle"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="loginTolearning.php"><i class="fas fa-user-plus"></i>  register</a></li>
                <li><a href="loginTolearning.php"><i class="fas fa-sign-in-alt"></i>   log in</a></li>
            
              </ul>
            </div>
            
            </li>

    
    </ul>
</nav>

<div class="fas fa-bars"></div>

</header>

<!-- header section ends -->



<!-- course section starts  -->

<section id="course" class="course">
<h1 class="heading">our courses</h1>
<h3 class="title">upgrade your skills with newest courses</h3>
 
  <nav id="search" class="navbar navbar-light ">
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>

   </nav>

   <nav  aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
      <li class="page-item"><a class="page-link" href="index.html">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
   </nav>



<div class="box-container">

    <div class="box">
        <span class="badge badge-pill badge-success">Free</span>
        <i id="html" class="fab fa-html5"></i>
        <h3>html5</h3>
        <p>HTML is the standard markup language for Web pages</p>
        <a href="Html_template.html"><button>Learn now</button></a>
    </div>

    <div class="box">
        <span class="badge badge-pill badge-success">Free</span>
        <i id="css" class="fab fa-css3-alt"></i>
        <h3>css3</h3>
        <p>CSS stands for Cascading Style Sheets,it's use to style a Web page </p>
        <a href="Css-Template.html"><button>Learn now</button></a>
    </div>

    <div class="box">
        <span class="badge badge-pill badge-primary">990 Tk</span>
        <i id="js" class="fab fa-js-square"></i>
        <h3>javascript</h3>
        <p>JavaScript is the programming language of the Web. </p>
        <a href="js-template.html"><button>Enroll now</button></a>
    </div>

    <div class="box">
        <span class="badge badge-pill badge-warning">1500 TK.</span>
        <i id="java" class="fab fa-java"></i>
        <h3>java</h3>
        <p>Java is a high-level programming language. </p>
        <a href="#course"><button>Enroll now</button></a>
    </div>

    <div class="box">
        <span class="badge badge-pill badge-secondary">550 Tk.</span>
        <i id="bull" class="fab fa-bootstrap"></i>
        <h3>Bootstrap</h3>
        <p>Bootstrap is a free CSS framework.Bootstrap 4 version,</p>
        <a href="#course"><button>Enroll now</button></a>
    </div>

    <div class="box">
        <span class="badge badge-pill badge-info">1000 Tk.</span>
        <i id="paint" class="fas fa-paint-brush"></i>
        <h3>graphic design</h3>
        <p>Graphic design is the art of creating exciting visual content</p>
        <a href="#course"><button>Enroll now</button></a>
    </div>


        <div class="box">
            <span class="badge badge-pill badge-warning">200 Tk.</span>
          <img src="image/python.png">
            <h3>python</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet,</p>
            <a href="#course"><button>Enroll now</button></a>
        </div>

    

            <div class="box">
                <span class="badge badge-pill badge-dark">200 Tk.</span>
                <i id="php" class="fab fa-php"></i>
                <h3>php</h3>
                <p>Python can be used on a server to create web applications.</p>
                <a href="#course"><button>Enroll now</button></a>
            </div>

        

                <div class="box">
                    <span class="badge badge-pill badge-success">1500 Tk.</span>
                    <i id="database" class="fas fa-database"></i>
                    <h3>database</h3>
                    <p>database is an organized collection of structured information, or data,</p>
                    <a href="#course"><button>Enroll now</button></a>
                </div>
               
                <div class="box">
                    <span class="badge badge-pill badge-warning">1150 Tk.</span>
                    <img src="image/c_L.png" >
                    <h3>C</h3>
                    <p>C is a powerful general-purpose programming language.</p>
                    <a href="#course"><button>Enroll now</button></a>
                </div>
              
                <div class="box">
                    <span class="badge badge-pill badge-warning">1150 Tk.</span>
                    <img src="image/c++.png" >
                    <h3>C++</h3>
                    <p>C++ is a powerful general-purpose programming language.</p>
                    <a href="#course"><button>Enroll now</button></a>
                </div>
               
                <div class="box">
                    <span class="badge badge-pill badge-warning">1150 Tk.</span>
                    <img src="image/c.svg" >
                    <h3>C#</h3>
                    <p>C# is used to develop web apps, desktop apps, mobile apps, games,</p>
                    <a href="#course"><button>Enroll now</button></a>
                </div>
</div>

</section>

<!-- course section ends -->

<section id="sub" class="sub">
    <div class="form">
        <form action="" method="POST" accept-charset="utf-8">
        <h5>If this helpfull for you please click the subscribtion bar</h5>
        
			<p><?php if(isset($_POST['submit'])){  echo $msg; } ?></p>

				<input type="text" name="name" placeholder="Enter your name" required>

				<input type="email" name="email" placeholder="Enter your email" required>

				<input type="submit" name="submit" value="submit">
				
			</form>
        
    </div>
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