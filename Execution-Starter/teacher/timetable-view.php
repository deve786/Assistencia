<?php

ob_start();
session_start();





?>
<?php
    include('connect.php');
    $result = mysqli_query($conn,"SELECT `mon1`, `mon2`, `mon3`, `mon4`, `mon5`, `mon6`, `tue1`, `tue2`, `tue3`, `tue4`, `tue5`, `tue6`, `wed1`, `wed2`, `wed3`, `wed4`, `wed5`, `wed6`, `thu1`, `thu2`, `thu3`, `thu4`, `thu5`, `thu6`, `fri1`, `fri2`, `fri3`, `fri4`, `fri5`, `fri6` FROM `timetable` WHERE 1;");
    $data = $result->fetch_assoc();
    
 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Asistencia - Time table</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome-all.min.css">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style-starter.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/admin/style.css">
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
                            <a class="nav-link" href="studentDashboard.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="attendance.php">Attendance</a>
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
    <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">Day/Time</th>
                <th scope="col">1st</th>
                <th scope="col">2nd</th>
                <th scope="col">3rd</th>
                <th scope="col">4th</th>
                <th scope="col">5th</th>
                <th scope="col">6th</th>
                </tr>
            </thead>
            <tbody>
        <tr>
            <th scope="row">Mon</th>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b>
                    <?php echo $data['mon1']; ?></b>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['mon2']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['mon3']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['mon4']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['mon5']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['mon6']; ?></b></div>
                </div>
            </td>
        
        </tr>
        <tr>
            <th scope="row">TUE</th>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['tue1']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['tue2']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['tue3']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['tue4']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['tue5']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['tue6']; ?></b></div>
                </div>
            </td>
        
        </tr>
        <tr>
            <th scope="row">WED</th>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['wed1']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center"><b><?php echo $data['wed2']; ?></b>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['wed3']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['wed4']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['wed5']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['wed6']; ?></b></div>
                </div>
            </td>
        
        </tr>
        <tr>
            <th scope="row">THU</th>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['thu1']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['thu2']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['thu3']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['thu4']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['thu5']; ?></b></select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['thu6']; ?></b></div>
                </div>
            </td>
        
        </tr>
        <tr>
            <th scope="row">FRI</th>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['fri1']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['fri2']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['fri3']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['fri4']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['fri5']; ?></b></div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1"><b><?php echo $data['fri6']; ?></b></div>
                </div>
            </td>
        
        </tr>
        
        
    </tbody>
    </table>
    </div>
</div>
 

   
    <!-- footer -->
    <footer class="w3l-footer-22 py-5">
        
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