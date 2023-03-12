<?php

ob_start();
session_start();





?>
<?php
    include('connect.php');
    try{
      
    if(isset($_POST['submit'])){
        if(!empty($_POST['mon1']&&$_POST['mon2']&&$_POST['mon3']&&$_POST['mon4']&&$_POST['mon5']&&$_POST['mon6']&&
        $_POST['tue1']&&$_POST['tue2']&&$_POST['tue3']&&$_POST['tue4']&&$_POST['tue5']&&$_POST['tue6']&&
        $_POST['wed1']&&$_POST['wed2']&&$_POST['wed3']&&$_POST['wed4']&&$_POST['wed5']&&$_POST['wed6']&&
        $_POST['thu1']&&$_POST['thu2']&&$_POST['thu3']&&$_POST['thu4']&&$_POST['thu5']&&$_POST['thu6']&&
        $_POST['fri1']&&$_POST['fri2']&&$_POST['fri3']&&$_POST['fri4']&&$_POST['fri5']&&$_POST['fri6'])){
        $tru=mysqli_query($conn,"TRUNCATE TABLE timetable");
        $res = mysqli_query($conn,"insert INTO timetable(mon1,mon2,mon3,mon4,mon5,mon6,tue1,tue2,tue3,tue4,tue5,tue6,wed1,wed2,wed3,wed4,wed5,wed6,
thu1,thu2,thu3,thu4,thu5,thu6,
            fri1,fri2,fri3,fri4,fri5,fri6
        ) 
        values
        (
            '
            $_POST[mon1]','$_POST[mon2]','$_POST[mon3]','$_POST[mon4]','$_POST[mon5]','$_POST[mon6]','
            $_POST[tue1]','$_POST[tue2]','$_POST[tue3]','$_POST[tue4]','$_POST[tue5]','$_POST[tue6]','
            $_POST[wed1]','$_POST[wed2]','$_POST[wed3]','$_POST[wed4]','$_POST[wed5]','$_POST[wed6]','
            $_POST[thu1]','$_POST[thu2]','$_POST[thu3]','$_POST[thu4]','$_POST[thu5]','$_POST[thu6]','
            $_POST[fri1]','$_POST[fri2]','$_POST[fri3]','$_POST[fri4]','$_POST[fri5]','$_POST[fri6]
            
            '
            
        )
            ");
        $success_msg = "Succesfully Change";
      }
      else{
        $success_msg = "Require every field";
      }
    }
    

    }
  
  catch(Execption $e){
    $error_msg = $e->$getMessage();
  }
 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Asistencia - Teacher Registration</title>
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
                            <a class="nav-link" href="teacherDashboard.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="attendance.php">Attendance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./timetable-manage.php">Time Table</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="../logout.php">Logout</a>
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
    
  <form action="" method="post">

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
                    <div class="col-auto my-1">
                        
                        <select required name='mon1' class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select  name='mon2' class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='mon3' class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='mon4' class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='mon5' class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='mon6' class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
        
        </tr>
        <tr>
            <th scope="row">TUE</th>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='tue1'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='tue2'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='tue3'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='tue4'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='tue5'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='tue6'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
        
        </tr>
        <tr>
            <th scope="row">WED</th>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='wed1'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='wed2'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='wed3' class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='wed4'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='wed5'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='wed6'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
        
        </tr>
        <tr>
            <th scope="row">THU</th>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='thu1'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='thu2'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='thu3'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='thu4'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='thu5'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='thu6'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
        
        </tr>
        <tr>
            <th scope="row">FRI</th>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='fri1'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='fri2'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='fri3'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='fri4'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='fri5'  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        
                        <select required name='fri6' class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option disabled selected>Choose...</option>
                            <option value="Graphics">Graphics</option>
                            <option value="Cryptography">Cryptography</option>
                            <option value="Compiler">Compiler</option>
                            <option value="Elective 2">Elective 2</option>
                            <option value="Elective 3">Elective 3</option>
                            <option value="Mini Project">Mini Project</option>
                        </select>
                    </div>
                </div>
            </td>
        
        </tr>
        
        
    </tbody>
    </table>
 

  <center><br>
  <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Submit" name="submit" />
</center>

</form>
<div class="message">
                                            <?php
                                             if(isset($success_msg)) 
                                             echo $success_msg; 
                                             if(isset($error_msg)) 
                                             echo $error_msg; ?>
                                        </div>
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