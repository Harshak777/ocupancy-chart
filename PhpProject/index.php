<?php
include 'connection.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>TimeTable Management System</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>

</head>
<body color : lightcoral>
<div class="navbar navbar-inverse navbar-fixed-top "  id="menu">
<div class="logo-img text-center" aligin = "center"><a href="/"  id="logo"
                                                 title="Return to the Amrita Vishwa Vidyapeetham home page"><img
                                        src="assets/img/nvimg1.jpg" class="img-reponsive"
                                        alt="Amrita Vishwa Vidyapeetham"></a>
                                        <h1 >Occupancy Chart Generation and Room Allocation for CSE Dept.</h1>

                                        </div>
<!-- </div> -->
    <div class="container">
        <div >
        </div>
    </div>
</div>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="margin-bottom: 160px">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="assets/img/img.jpg" alt="Chania">
        </div>

       
    </div>
</div>
<script type="text/javascript">
    function genpdf() {
        var doc = new jsPDF();

        doc.addHTML(document.getElementById('TT'), function () {
            doc.save('demo timetable.pdf');
        });
        window.alert("Downloaded!");
    }
</script>
<div  STYLE="margin-top: 30px">
    <button data-scroll-reveal="enter from the bottom after 0.2s"
            id="teacherLoginBtn" class="btn btn-info btn-lg">TEACHER LOGIN
    </button>
    <button data-scroll-reveal="enter from the bottom after 0.2s"
            id="studentLoginBtn" class="btn btn-info btn-lg">STUDENT LOGIN
    </button>
    <button data-scroll-reveal="enter from the bottom after 0.2s"
            id="adminLoginBtn" class="btn btn-success btn-lg">ADMIN LOGIN
    </button>
</div>
<br>
<div >
    <form data-scroll-reveal="enter from the bottom after 0.2s" action="studentvalidation.php" method="post">
        <select id="select_semester" name="select_semester" class="list-group-item">
            <option selected disabled>Select Semester</option>
            <option value="3"> B.Tech II Year ( Semester III )</option>
            <option value="4"> B.Tech II Year ( Semester IV )</option>
            <option value="5"> B.Tech III Year ( Semester V )</option>
            <option value="6"> B.Tech III Year ( Semester VI )</option>
            <option value="7"> B.Tech IV Year ( Semester VII )</option>
            <option value="8"> B.Tech IV Year ( Semester VIII )</option>
        </select>
        <button type="submit" class="btn btn-info btn-lg" style="margin-top: 10px">Download</button>
    </form>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Modal Header</h2>
        </div>
        <div class="modal-body" id="LoginType">
            <!--Admin Login Form-->
            <div style="display:none" id="adminForm">
                <form action="adminFormvalidation.php" method="POST">
                    <div class="form-group">
                        <label for="adminname">Username</label>
                        <input type="text" class="form-control" id="adminname" name="UN" placeholder="Username ...">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="PASS"
                               placeholder="Password ...">
                    </div>
                    <div >
                        <input type="submit" class="btn btn-default" name="LOGIN" value="LOGIN">
                    </div>
                </form>
            </div>
        </div>
        <!-- Student Login Form -->
        <div style="display:none" id="studentForm">
                <form action="studentLogin.php" method="POST">
                    <div class="form-group">
                        <label for="studentroll">Student RollNo</label>
                        <input type="text" class="form-control" id="studentroll" name="sroll" placeholder="RollNo ...">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="spassword"
                               placeholder="Password ...">
                    </div>
                    <div >
                        <input type="submit" class="btn btn-default" name="LOGIN" value="LOGIN">
                    </div>
                </form>
            </div>


        <!--Faculty Login Form-->
        <div style="display:none" id="facultyForm">
            <form action="facultyformvalidation.php" method="POST" style="overflow: hidden">
                <div class="form-group">
                    <label for="facultyno">Faculty No.</label>
                    <input type="text" class="form-control" id="facultyno" name="FN" placeholder="Faculty No. ...">
                </div>
                <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                               placeholder="Password ...">
                    </div>
                <div >
                    <button type="submit" class="btn btn-default" name="LOGIN">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    var modal = document.getElementById('myModal');

    var teacherLoginBtn = document.getElementById("teacherLoginBtn");
    var studentLoginBtn = document.getElementById("studentLoginBtn");
    var adminLoginBtn = document.getElementById("adminLoginBtn");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("facultyForm");
    var studentForm = document.getElementById("studentForm");
    var adminForm = document.getElementById("adminForm");

    var span = document.getElementsByClassName("close")[0];

    adminLoginBtn.onclick = function () {
        modal.style.display = "block";
        heading.innerHTML = "Admin Login";
        adminForm.style.display = "block";
        facultyForm.style.display = "none";
        studentForm.style.display = "none";


    }
    teacherLoginBtn.onclick = function () {
        modal.style.display = "block";
        heading.innerHTML = "Faculty Login";
        facultyForm.style.display = "block";
        adminForm.style.display = "none";
        studentForm.style.display = "none";



    }

    studentLoginBtn.onclick = function () {
        modal.style.display = "block";
        heading.innerHTML = "student Login";
        adminForm.style.display = "none";
        studentForm.style.display = "block";
        facultyForm.style.display = "none ";



    }

    span.onclick = function () {
        modal.style.display = "none";
        adminForm.style.display = "none";
        facultyForm.style.display = "none";

    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


<div class="container">
    <div class="row set-row-pad">
        <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 "
             data-scroll-reveal="enter from the bottom after 0.4s">

            <h2><strong>My Location </strong></h2>
            <hr/>
            <div>
                <h4>Amrita University,
                    Coimbatore,
                </h4>
                <h4>India - 641112</h4>
                <h4><strong>Call:</strong> 9133140732 </h4>
                <h4><strong>Email: </strong>vijayjonathan143@gmail.com</h4>
            </div>


        </div>
        <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1"
             data-scroll-reveal="enter from the bottom after 0.4s">

            <h2><strong>Social Conectivity </strong></h2>
            <hr/>
            <div>
                <a href="#"> <img src="assets/img/Social/facebook.png" alt=""/> </a>
                <a href="#"> <img src="assets/img/Social/google-plus.png" alt=""/></a>
                <a href="#"> <img src="assets/img/Social/twitter.png" alt=""/></a>
            </div>
        </div>


    </div>
</div>
<!-- CONTACT SECTION END-->
<div id="footer">
--></div>
<!-- FOOTER SECTION END-->

<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>
<!--  Flexslider Scripts -->
<script src="assets/js/jquery.flexslider.js"></script>
<!--  Scrolling Reveal Script -->
<script src="assets/js/scrollReveal.js"></script>
<!--  Scroll Scripts -->
<script src="assets/js/jquery.easing.min.js"></script>
<!--  Custom Scripts -->
<script src="assets/js/custom.js"></script>
</div>
</body>
</html>
