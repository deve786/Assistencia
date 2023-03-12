<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: ../index.html');
}
require('connect.php');
$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    
    // Delete specified feedback row from database
    $sql = "DELETE FROM feedback WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        $success_msg = "Feedback delete successfully.";
    } else {
        echo "Error deleting feedback: " . mysqli_error($conn);
    }
}
?>
<!doctype html>
<html lang="en">
   

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Asistencia - Feedback</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome-all.min.css">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style-starter.css">
    <!-- <link rel="stylesheet" type="text/css" href="../assets/css/admin/style.css"> -->
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
</head>

<body style="background-color:grey">
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
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
                            <a class="nav-link" href="teacherDashboard.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="timetable-view.php">Time Table</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
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

    <div class="row">

  <div class="content">
    <h3>Feedback</h3>
    <br>
    <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">From</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                </tr>
            </thead>

            <tbody>
                
           <?php
            if (mysqli_num_rows($result) > 0 )    {
	    
	    while($row = mysqli_fetch_assoc($result)) {
            if($row['feedbackto']=='teacher' ){
	        echo "<tr>
            
            <td>".$row["name"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["feedback"]."</td>
            <td><form method='post'><button type='submit' name='delete' value='".$row["id"]."'>Delete</button></form></td>
            </tr>";
            }
        }
         
	    echo "</table>";
	} else {
	    echo "No feedback data found";
	}
         ?>   
        
    </tbody>
    </table>
    <div class="message">
                                            <?php if(isset($success_msg)) echo $success_msg; if(isset($error_msg)) echo $error_msg; ?>
                                        </div>
  </div>

</div>

 

   
    <!-- footer -->
    <footer id="foot" class="w3l-footer-22 py-5">
        
        <!-- copyright -->
        <div class="copyright-footer text-center">
            <div class="container">
                <div class="columns">
                    <p>@2022 Alright Reserved By
                        <a href="index.html" target="_blank"> Asistencia</a>
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