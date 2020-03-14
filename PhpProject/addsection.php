<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>TimeTable Management System</title>
    
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
   
    <link href="assets/css/style.css" rel="stylesheet"/>
    
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

<br>

<div align="center" style="margin-top:80px">
    <form name="import" method="post" enctype="multipart/form-data">
        <input type="file" name="file"/>
        <input type="submit" name="teacherexcel" id="teacherexcel" class="btn btn-info btn-lg" value="IMPORT EXCEL"/>
    </form>
    <?php

    ?>
</div>
<div align="center" style="margin-top:20px">
    <button id="teachermanual" class="btn btn-success btn-lg">ADD SECTION</button>
</div>

<div id="myModal" class="modal">

    
    <div class="modal-content" style="margin-top: -60px">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Add Section</h2>
        </div>
        <div class="modal-body" id="EnterTeacher">
            
            <div style="display:none" id="addTeacherForm">
                <form action="addSectionValid.php" method="POST">
                    


                    <div class="form-group">
                        <label for="sectionname">Section Name</label>

                        <select class="form-control" id="section" name="SN">
                            <option selected disabled>Select</option>
                            <option value="csea">CSE-A</option>
                            <option value="cseb">CSE-B</option>
                            <option value="csec">CSE-C</option>
                            <option value="csed">CSE-D</option>
                            <option value="csee">CSE-E</option>
                            <option value="csef">CSE-F</option>


                        </select>
                    </div class="form-group">


    <div class="form-group">
<?php     include 'connection.php';
 ?>
    <label for="class_room_no">Class Room No</label>
        <select name="CR" class="list-group-item">
            <option selected disabled>Select ClassRoom</option>
            <?php
            $q = mysqli_query($conn,
                "SELECT croom_no FROM classrooms ");
            while ($row = mysqli_fetch_assoc($q)) {
                echo " \"<option value=\"{$row['croom_no']}\">{$row['croom_no']}</option>\"";
            }
            ?>

        </select>
        
    </div  class="form-group" >




                    <div class="form-group">
                        <label for="TF">Section Strength</label>
                        <input type="text" class="form-control" id="facultyno" name="SS" placeholder="No of Student in Section">
                    </div>
                   

                    <div align="right">
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

    
    var addteacherBtn = document.getElementById("teachermanual");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("addTeacherForm");
    
    var span = document.getElementsByClassName("close")[0];

    

    addteacherBtn.onclick = function () {
        modal.style.display = "block";
        
        facultyForm.style.display = "block";
        


    }

    
    span.onclick = function () {
        modal.style.display = "none";
        
        facultyForm.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


<div>
    <br>
    <style>
        table {
            margin-top: 10px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            margin-left: 30px;
            width: 90%;
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
            var table = document.getElementById("sectiontable");
            var rows = table.getElementsByTagName("tr");
            for (i = 0; i < rows.length; i++) {
                var currentRow = table.rows[i];
               
                var createDeleteHandler =
                    function (row) {
                        return function () {
                            var cell = row.getElementsByTagName("td")[0];
                            var id = cell.innerHTML;
                            var x;
                            if (confirm("Are You Sure?") == true) {
                                window.location.href = "deletesection.php?name=" + id;

                            }

                        };
                    };
                currentRow.cells[3].onclick = createDeleteHandler(currentRow);
            }
        }
    </script>

    <table id="sectiontable" style="margin-left: 80px">
        <caption><strong>Section Information </strong></caption>
        <tr>
            <th width="130">Section Name</th>
            <th width=290>Section Strength</th>
           
            <th width="190">Class Room No </th>
            
            <th width="40">Action</th>
        </tr>
        <tbody>
        <?php
        include 'connection.php';
        $q = mysqli_query($conn,
            "SELECT * FROM sections ORDER BY sec_id ASC");

        while ($row = mysqli_fetch_assoc($q)) {
            echo "<tr><td>{$row['sec_name']}</td>
                    <td>{$row['sec_strength']}</td>
                    <td>{$row['class_name']}</td>
                    <td><button>Delete</button></td>
                    </tr>\n";
        }
        echo "<script>deleteHandlers();</script>";
        ?>
        </tbody>
    </table>

</div>



<script src="assets/js/jquery-1.10.2.js"></script>

<script src="assets/js/bootstrap.js"></script>

<script src="assets/js/jquery.flexslider.js"></script>

<script src="assets/js/scrollReveal.js"></script>

<script src="assets/js/jquery.easing.min.js"></script>

<script src="assets/js/custom.js"></script>
</body>
</html>
