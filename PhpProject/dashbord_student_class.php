

<?php
session_start();
include('connection.php');

$sid=$_SESSION['sid'];

        $sql = "SELECT * FROM student_info WHERE sid='$sid'";
        $run_query=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($run_query);
        $name=$row['sname'];
        $ssec=$row['ssec'];
        $cc = "SELECT * FROM classrooms WHERE sec_name='$ssec'";
        $run_query2=mysqli_query($conn,$cc);
        $crow=mysqli_fetch_array($run_query2);
        $class=$crow['croom_no'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Student Timetable companion</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="dashbord_student.php">Student Area</a>
    <a href="/"  id="logo"
                                                 title="Return to the Amrita Vishwa Vidyapeetham home page"><emmg
                                        src="assets/img/amrita.jpg" class="img-reponsive"
                                        alt="Amrita Vishwa Vidyapeetham"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="student_edit.php">
            <em class="fa fa-fw fa-dashboard"></em>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="timetable  ">
          <a class="nav-link" href="dashbord_student.php">
            <em class="fa fa-table"></em>
            <span class="nav-link-text">My Section Timetable</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="timetable  ">
          <a class="nav-link" href="dashbord_student_class.php">
            <em class="fa fa-table"></em>
            <span class="nav-link-text">My Classroom Timetable</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="timetable  ">
          <a class="nav-link" href="notify.php">
          <em class="fa fa-fw fa-whatsapp"></em>
            <span class="nav-link-text">Notifications</span>
          </a>
        </li>
        <!-- <?php include'sidenav.php'; ?> -->
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <em class="fa fa-fw fa-angle-left"></em>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
           <?php echo $name; ?>
          <li><a href="index.php"><?php echo $name; ?></a></li>
             <em class="fa fa-fw fa-sign-out"></em><li>Logout</li></li> 
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashbord_student.php">Dashboard</a>
        </li>
         <li class="breadcrumb-item active"><?php echo $name; ?></li>
      </ol>
     
     <!-- center area -->
     <style>
        table {
            margin-top: 20px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 2px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #ffffff;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
     <div id="TT" style="background-color: #FFFFFF">
        <table  cellspacing="3"  id="timetable">
            <caption><strong><br><br>
                   
                </strong></caption>
            <tr>
                <th id = "null" style="text-align:center">WEEKDAYS</th>
                <th id = "null" style="text-align:center">8:00-8:50</th>
                <th id = "null" style="text-align:center">8:55-9:45</th>
                <th id = "null" style="text-align:center">9:50-10:40</th>
                <th id = "null" style="text-align:center">10:45-11:35</th>
                <th id = "null" style="text-align:center">11:40-12:30</th>
                <th id = "null" style="text-align:center">12:30-1:30</th>
                <th id = "null" style="text-align:center">1:30-4:00</th>
            </tr>
            <tr>
                <?php
                $table = 't014';
                $q = mysqli_query($conn,
                "SELECT * FROM $class ");
                $qq = mysqli_query($conn,
                "SELECT * FROM subjects");
            $days = array('MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY');
            $i = -1;
            $str = "<br>";
                
                while ($row = mysqli_fetch_assoc($q)) {
                  $i++;

                  echo "
           <tr><th style=\"text-align:center\">$days[$i]</th>
           <th style=\"text-align:center\">{$row['period1']}</th>
          <th style=\"text-align:center\">{$row['period2']}</th>
          <th style=\"text-align:center\">{$row['period3']}</th>
           <th style=\"text-align:center\">{$row['period4']}</th>
            <th style=\"text-align:center\">{$row['period5']}</th>
            <th style=\"text-align:center\">LUNCH</th>
            <th style=\"text-align:center\">{$row['period6']}</th>
          </tr>\n";
              }
               
                ?>
    </div>











    <!-- /.content-wrapper-->
    
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <em class="fa fa-angle-up"></em>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-header">

            <h5 class="modal-title" id="exampleModalLabel">Hello <?php echo getLoggedMemberID(); ?></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Here are some quick options:
            <a href="<?php echo PREPEND_PATH; ?>membership_profile.php" class="btn btn-primary btn-block"><em class="fa fa-user"></em> <strong>My profile</strong></a>
               <?php if(getLoggedAdmin()){ ?>
               <a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php" class="btn btn-danger btn-block navbar-btn btn-sm visible-xs btn-sm"><em class="fa fa-cog"></em> <strong><?php echo $Translation['admin area']; ?></strong></a>
               <?php } ?>
               <?php if(!$_GET['signIn'] && !$_GET['loginFailed']){ ?>
               <?php if(getLoggedMemberID() == $adminConfig['anonymousMember']){ ?>
               <p class="navbar-text navbar-right">&nbsp;</p>
               <a href="<?php echo PREPEND_PATH; ?>index.php?signIn=1" class="btn btn-success navbar-btn btn-sm navbar-right"><strong><?php echo $Translation['sign in']; ?></strong></a>
               <p class="navbar-text navbar-right">
                <?php echo $Translation['not signed in']; ?>
              </p>
              <?php }else{ ?>
              <ul class="nav navbar-nav navbar-right hidden-xs" style="min-width: 330px;">
              </ul>
              <ul class="nav navbar-nav visible-xs">
              </ul>
              <?php } ?>
              <?php } ?>
            <!--login/logout area ends-->
          </div>

          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Back</button>
            <a class="btn btn-primary" href="index.php?signOut=1">Logout</a>
          </div>
          
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
