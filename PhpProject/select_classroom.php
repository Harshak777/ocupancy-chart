

<?php
session_start();
include('connection.php');

$tid=$_SESSION['tid'];

        $sql = "SELECT * FROM teachers WHERE faculty_number='$tid'";
        $run_query=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($run_query);
        $name=$row['name'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Timetable companion</title>
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
    <a class="navbar-brand" href="faculty_edit.php">Faculty Area</a>
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
          <a class="nav-link" href="faculty_edit.php">
            <em class="fa fa-fw fa-dashboard"><em>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="timetable  ">
          <a class="nav-link" href="facultypage.php">
            <em class="fa fa-table"><em>
            <span class="nav-link-text">My Timetable</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="select_classroom.php">
            <em class="fa fa-fw fa-dashboard"><em>
            <span class="nav-link-text">Select class</span>
          </a>
        </li>
        <!-- <?php include'sidenav.php'; ?> -->
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <em class="fa fa-fw fa-angle-left"><em>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
         
          <li><a href="index.php"><?php echo $_SESSION['loggedin_name'];  ?></a></li>
             <em class="fa fa-fw fa-sign-out"><em><li>Logout</li></li> 
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        
         <li class="breadcrumb-item active"><?php echo $_SESSION['loggedin_name']; ?></li>
      </ol>
     
     <!-- center area -->
     



     <div class="page-header">
		<h1><?php echo  $name; ?></h1>
	</div>


  
    <div >
    <br>
    <style>
        table {
            margin-top: 10px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 70%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>



    <table aria-describedby="mydesc" id=table>
        
        <tr>

            <th id= "null"  >Room No</th>
            <th id= "null"  >Capacity</th>
            <th id= "null"  >Power Points</th>
            <th id= "null"  >Projector Availability</th>
            <th id= "null"  >Smart Class</th>
            <th id= "null"  >Speaker</th>
            <th id= "null"  >Section Alloted</th>
            <th id= "null" >Action</th>
        </tr>
        <?php
        include 'connection.php';
        $q = mysqli_query($conn,
            "SELECT * FROM classrooms ");
        while ($row = mysqli_fetch_assoc($q)) {
            echo "<tr><td>{$row['croom_no']}</td>
                    <td>{$row['c_strength']}</td>
                    <td>{$row['pp_no']}</td>
                    <td>{$row['projector']}</td>
                    <td>{$row['smart_class']}</td>
                    <td>{$row['speaker']}</td>
                    <td>{$row['sec_name']}</td>
                    <td><button>Select</button></td>
                    </tr>\n";
        }
        echo "<script>deleteHandlers();</script>";
        ?>
    </table>
</div>










    
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Jisort 2018</small>
        </div>
      </div>
    </footer>
    <a class="scroll-to-top rounded" href="#page-top">
      <em class="fa fa-angle-up"><em>
    </a>

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
            <a href="<?php echo PREPEND_PATH; ?>membership_profile.php" class="btn btn-primary btn-block"><em class="fa fa-user"><em> <strong>My profile</strong></a>
               <?php if(getLoggedAdmin()){ ?>
               <a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php" class="btn btn-danger btn-block navbar-btn btn-sm visible-xs btn-sm"><em class="fa fa-cog"><em> <strong><?php echo $Translation['admin area']; ?></strong></a>
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
