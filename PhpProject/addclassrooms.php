<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
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
<body>

<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="addteachers.php">ADD TEACHERS</a></li>
                <li><a href="addstudents.php">ADD STUDENTS</a></li>
                <li><a href="addsection.php">ADD SECTION</a></li>
                <li><a href="addsubjects.php">ADD SUBJECTS</a></li>
                <li><a href="addclassrooms.php">ADD CLASSROOMS</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">ALLOTMENT
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href=allotsubjects.php>THEORY COURSES</a>
                        </li>
                        <li>
                            <a href=allotpracticals.php>PRACTICAL COURSES</a>
                        </li>
                        <li>
                            <a href=allotclasses.php>CLASSROOMS</a>
                        </li>
                    </ul>
                </li>
                <li><a href="generatetimetable.php">GENERATE TIMETABLE</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">LOGOUT</a></li>
            </ul>

        </div>
    </div>
</div>
<!--NAVBAR SECTION END-->
<br>

<div 
     style="margin-top:10%">
    <button
        id="classroommanual" class="btn btn-success btn-lg">ADD CLASSROOM
    </button>
   
</div>

<div>
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


<script>
    function deleteHandlers() {
        var table = document.getElementById("classroomstable");
        var rows = table.getElementsByTagName("tr");
        for (i = 0; i < rows.length; i++) {
            var currentRow = table.rows[i];
            //var b = currentRow.getElementsByTagName("td")[0];
            var createDeleteHandler =
                function (row) {
                    return function () {
                        var cell = row.getElementsByTagName("td")[0];
                        var id = cell.innerHTML;
                        var x;
                        if (confirm("Are You Sure?") == true) {
                            window.location.href = "deleteclassroom.php?croom_no=" + id;

                        }

                    };
                };
            currentRow.cells[7].onclick = createDeleteHandler(currentRow);
        }
    }
</script>


<table id="classroomstable">
        <caption><strong>ADDED CLASSROOMS</strong></caption>
        <tr>

            <th id="room">Room No</th>
            <th id="capacity"  >Capacity</th>
            <th id="power"  >Power Points</th>
            <th id="project"  >Projector Availability</th>
            <th id="smart"  >Smart Class</th>
            <th id="speaker"  >Speaker</th>
            <th id="section"  >Section Alloted</th>
            <th id="action" >Action</th>
        </tr>
        <tbody>
        <?php
        include 'connection.php';
        $q = mysqli_query($conn,
            "SELECT * FROM classrooms");
        while ($row = mysqli_fetch_assoc($q)) {
            echo "<tr><td>{$row['croom_no']}</td>
                    <td>{$row['c_strength']}</td>
                    <td>{$row['pp_no']}</td>
                    <td>{$row['projector']}</td>
                    <td>{$row['smart_class']}</td>
                    <td>{$row['speaker']}</td>
                    <td>{$row['sec_name']}</td>
                    <td><button>Delete</button></td>
                    </tr>\n";
        }
        echo "<script>deleteHandlers();</script>";
        ?>
        </tbody>
    </table>
</div>


<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Add Classroom</h2>
        </div>
        <div class="modal-body" id="EnterClassroom">
            <!--Admin Login Form-->
            <div style="display:none" id="addClassroomForm">
                <form action="addclassroomFormValidation.php" method="POST">
                    <div class="form-group">
                    <div class="form-group">
                        <label for="classroomname">Room No</label>
                        <input type="text" class="form-control" id="classroomname" name="CN"
                               placeholder="A203,B101">
                    </div>
                    
                    <div class="form-group">
                        <label for="classroomname">Class Strength</label>
                        <input type="text" class="form-control" id="classroomname" name="CS"
                               placeholder="strength">
                    </div>
                    <div class="form-group">
                        <label for="classroomname">No of Power Points in the Class</label>
                        <input type="number" class="form-control" id="classroomname" name="CPP"
                               placeholder=" ">
                    </div>
                   
                    <div class="form-group">
                        <label for="calssroomname">Projector</label>

                        <select class="form-control" id="Projector" name="CP">
                            <option selected disabled>Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    <div class="form-group">
                        <label for="classroomname">Smart Class</label>
                        <select class="form-control" id="smartclass" name="SC">
                            <option selected disabled>Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="classroomname">sepkers</label>
                        <select class="form-control" id="speakers" name="SK">
                            <option selected disabled>Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>






                    <div >
                        <input type="submit" class="btn btn-default" name="ADD" value="ADD">
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
        </div>
    </div>
</div>

<script>
    
    var modal = document.getElementById('myModal');

    var addclassroomBtn = document.getElementById("classroommanual");
    var heading = document.getElementById("popupHead");
    var classroomForm = document.getElementById("addClassroomForm");
    var span = document.getElementsByClassName("close")[0];


    addclassroomBtn.onclick = function () {
        modal.style.display = "block";
        
        classroomForm.style.display = "block";
        


    }

    span.onclick = function () {
        modal.style.display = "none";
        
        classroomForm.style.display = "none";

    }

    
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>





</div>

<script src="assets/js/jquery-1.10.2.js"></script>

<script src="assets/js/bootstrap.js"></script>

<script src="assets/js/jquery.flexslider.js"></script>

<script src="assets/js/scrollReveal.js"></script>

<script src="assets/js/jquery.easing.min.js"></script>

<script src="assets/js/custom.js"></script>
</body>
</html>
