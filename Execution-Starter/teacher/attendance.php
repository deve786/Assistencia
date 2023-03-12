<?php

ob_start();
session_start();




if($_SESSION['name']!='oasis')
{
  header('location: ../index.html');
}
?>
<?php
    include('connect.php');
    try{
      
    if(isset($_POST['att'])){
       

      $course = $_POST['whichcourse'];

      foreach ($_POST['st_status'] as $i => $st_status) {
        
        $stat_id = $_POST['student_id'][$i];
        $dp = date('Y-m-d');
        $course = $_POST['whichcourse'];
        
        $stat = mysqli_query($conn,"insert into attendance(student_id,course,st_status,stat_date) values('$stat_id','$course','$st_status','$dp')");
        
        $att_msg = "Attendance Recorded.";
        

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
                            <a class="nav-link" href="teacherDashboard.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="addStudent.php">Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="attendance.php">Attendance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="timetable.html">Time Table</a>
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
  <h3>Attendance of <?php echo date('Y-m-d'); ?></h3>
  <br>

  
  
  <form action="" method="post" class="form-horizontal col-md-6 col-md-offset-3">

   <div class="form-group">

             <!-- <label>Select Batch</label>
              
              <select name="whichbatch" id="input1">
                    <option name="eight" value="38">38</option>
                    <option name="seven" value="37">37</option>
              </select>-->


              <label>Enter Batch</label>
              <input class="inp-batch" type="text" name="whichbatch" id="input2" placeholder="Only 2020"><br>
              <input type="submit" class="btn btn-primary col-md-2 col-md-offset-5" value="Show!" name="batch" />
            </div>
             
   

  </form>

  <br>
  <form action="" method="post">

    <div class="form-group">

      <label >Select Subject</label>
            <select name="whichcourse" id="input1">
            <option  value="gra">Graphics</option>
       <option  value="crypt">Cryptography</option>
      <option  value="bd">Big Data</option>
      <option  value="iot">IoT</option>
      <option  value="mini">Mini Project</option>
      
            </select>

    </div>

  <table class="table table-stripped">
    <thead>
      <tr>
        <th scope="col">Reg. No.</th>
        <th scope="col">Name</th>
        
        <th scope="col">Batch</th>
        
        <th scope="col">Username</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
 <?php
    include "connect.php";
  if(isset($_POST['batch'])){

   $i=0;
   $radio = 0;
   $batch = $_POST['whichbatch'];
   $all_query = mysqli_query($conn,"select * from students where student_batch='$batch' order by student_id asc");

   while ($data = mysqli_fetch_array($all_query)) {
     $i++;
   ?>
<body>
   <tr>
     <td><?php echo $data['student_id']; ?> <input type="hidden" name="student_id[]" value="<?php echo $data['student_id']; ?>"> </td>
     <td><?php echo $data['student_name']; ?></td>
     
     <td><?php echo $data['student_batch']; ?></td>
     
     <td><?php echo $data['student_username']; ?></td>
     <td>
       <label>Present</label>
       <input type="radio" name="st_status[<?php echo $radio; ?>]" value="Present" >
       <label>Absent </label>
       <input type="radio" name="st_status[<?php echo $radio; ?>]" value="Absent" >
     </td>
   </tr>
</body>

   <?php

      $radio++;
    } 
}
    ?>
  </table>

  <center><br>
  <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Save!" name="att" />
</center>
<center><p><?php if(isset($att_msg)) echo $att_msg; if(isset($error_msg)) echo $error_msg; ?></p></center> 
</form>
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