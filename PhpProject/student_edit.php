

<?php
session_start();
include('connection.php');

$sid=$_SESSION['sid'];

        $sql = "SELECT * FROM student_info WHERE sid='$sid'";
        $run_query=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($run_query);
        $name=$row['sname'];



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
            <em class="fa fa-fw fa-dashboard"><em>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="timetable  ">
          <a class="nav-link" href="dashbord_student.php">
            <em class="fa fa-table"><em>
            <span class="nav-link-text">My Timetable</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="timetable  ">
          <a class="nav-link" href="dashbord_student_class.php">
            <em class="fa fa-table"><em>
            <span class="nav-link-text">My Classroom Timetable</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="timetable  ">
          <a class="nav-link" href="notify.php">
          <em class="fa fa-fw fa-whatsapp"><em>
            <span class="nav-link-text">Notifications</span>
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
          <li><a href="index.php"><?php echo $name;   ?></a></li>
             <em class="fa fa-fw fa-sign-out"><em><li>Logout</li></li> 
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
     <div class="page-header">
		<h1><?php echo  $name; ?></h1>
	</div>
 

  <div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">
						<em class="glyphicon glyphicon-info-sign"><em>
						<!-- <?php echo '<h3>Your info</h3>' ?> -->
					</h3>
				</div>
        <form action = 'update.php' method = 'POST'>
				<div class="panel-body">
					
          <div class="form-group">
							<label for="name"><?php echo 'Your Name' ?></label>
							<emnput type="email" id="email" name="sname" value="<?php echo $row['sname']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="email"><?php echo 'Email' ?></label>
							<emnput type="email" id="email" name="semail" value="<?php echo $row['semail']; ?>" class="form-control">
						</div>
            <div class="form-group">
							<label for="email"><?php echo 'Password' ?></label>
							<emnput type="email" id="email" name="spassword" value="<?php echo $row['spassword']; ?>" class="form-control">
						</div>
            <div class="form-group">
							<label for="email"><?php echo 'Contact No :' ?></label>
							<emnput type="email" id="email" name="snumber" value="<?php echo $row['snumber']; ?>" class="form-control">
						</div>
            <div class="form-group">
							<label for="email"><?php echo 'Roll NO :' ?></label>
							<emnput type="email" id="email" name="sroll" value="<?php echo $row['sroll']; ?>" class="form-control">
						</div>
            <div class="form-group">
							<label for="email"><?php echo 'Address' ?></label>
							<emnput type="email" id="email" name="saddr" value="<?php echo $row['saddr']; ?>" class="form-control">
						</div>
            
            <div class="form-group">
							<label for="email"><?php echo 'Date Of Birth' ?></label>
							<emnput type="email" id="email" name="sdob" value="<?php echo $row['sdob']; ?>" class="form-control">
						</div>
            <div class="form-group">
							<label for="email"><?php echo 'Branch' ?></label>
							<emnput type="email" id="email" name="sbranch" value="<?php echo $row['sbranch']; ?>" class="form-control">
						</div>
            <div class="form-group">
							<label for="email"><?php echo 'SEM' ?></label>
							<emnput type="email" id="email" name="ssem" value="<?php echo $row['ssem']; ?>" class="form-control">
						</div>
            <div class="col-md-4 col-md-offset-4">
								<button id="update-profile" class="btn btn-success btn-block" type="button"><em class="glyphicon glyphicon-ok"><em> <?php echo 'Update profile' ?></button>
							</div>


						

						<div class="row">
           
							
              </form>
						</div>
					</fieldset>
				</div>
			</div>


     








    
    </div>

    
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <em class="fa fa-angle-up"><em>
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
