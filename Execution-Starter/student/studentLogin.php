<?php
//establishing connection with db and things
include ('connect.php');
if(isset($_POST['login']))
{
	//start of try block
   
	try{
       
		//checking empty fields
		if(empty($_POST['username'])){
			throw new Exception("Username is required!");
			
		}
		if(empty($_POST['password'])){
			throw new Exception("Password is required!");
			
		}

		//checking login info into database
		$row=0;
		$result=mysqli_query($conn,"select * from students where student_username='$_POST[username]' and student_password='$_POST[password]'");

		$row=mysqli_num_rows($result);
        
		if($row>0){
			session_start();
			$_SESSION['name']="oasis";
			header('location: studentDashboard.php');
		}

			else{
			throw new Exception("Username,Password or Role is wrong, try again!");
			
			header('location: login.php');
		}
	}

	//end of try block
	catch(Exception $e){
		$error_msg=$e->getMessage();
	}
	//end of try-catch
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Asistencia - student Login</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome-all.min.css">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style-starter.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/admin/style.css">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand d-flex align-items-center" href="../index.html">
                        <span class="lostyle-1">A</span>
                        sistencia
                    </a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/adminLogin.php">Admin Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../teacher/teacherLogin.php">Teacher Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contact.php">Contact</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->

    <!-- banner section -->
    <section class="banner-19">
        <div class="banner-layer">
            <img id="banner" src="../assets/images/admin.jpg">
            <div class="main-content-top">
                <div class="container">
                    <div class="main-content">
                        <!-- if logo is image enable this   
                        <a class="logo" href="index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                        <div class="w3l-signinform">
                            <!-- container -->
                            <div class="wrapper">
                                <!-- main content -->
                                <div class="w3l-form-info">
                                    <div class="w3_info">
                                        <h1>Student Login</h1>
                                        
                                        
                                        <form method="post" >
                                            <div class="input-group">
                                                <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                                <input type="text" placeholder="Username"  name="username">
                                            </div>
                                            <div class="input-group two-groop">
                                                <span><i class="fa fa-key" aria-hidden="true"></i></span>
                                                <input type="Password" placeholder="Password"  name="password">
                                            </div>
                                            
                                            <button class="btn btn-primary btn-block" type="submit" name='login'>Log In</button>
                                        </form>
                                    
                                        
                                        <?php
                                            //printing error message
                                            if(isset($error_msg))
                                            {
                                                echo $error_msg;
                                            }
                                        ?>
                                    </form>
                                    <!-- <iframe name="myIframe">
                                    </iframe> -->
                                    </div>
                                    
                                        
                                </div>
                                <!-- //main content -->
                            </div>
                            <!-- //container -->
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

 

   
    <!-- footer -->
    <footer class="w3l-footer-22 py-5">
        
        <!-- copyright -->
        <div class="copyright-footer text-center">
            <div class="container">
                <div class="columns">
                    <p>@2022 Alright Reserved By
                        <a href="../index.html" > Asistencia</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- //copyright -->
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script src="../assets/js/goToTop.js">
        
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    

    
    <!-- Dark/Light Mode -->
    <script src="../assets/js/theme-change.js"></script>
    <!-- //Dark/Light Mode -->

    <!-- MENU-JS -->
    <script src="../assets/js/menu.js">
        
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script src="../assets/js/scroll.js">
        
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>