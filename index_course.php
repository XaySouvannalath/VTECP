
<?php
include 'db.php';
include 'classQuery.php';
//myDatabase();
//echo getAutoID("Course", "tb_course", "CSE", -3);

$sql = "select * from tb_coursetype";
$objResult = mysqli_query($connect, $sql);
?>
<html>
    <head>
        <title>Course</title>

      
    </head>
    <body>
          <link href="theme.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
     <nav class="navbar navbar-default navbar-static-top top-bar fixed" id="navcolor">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" id="whitefont"></span>
                    <span class="icon-bar" id="whitefont"></span>
                    <span class="icon-bar" id="whitefont"></span>
                </button>
                <a href="#" class="navbar-brand"><img class="modal-content" src="pic/crowneplazaicon.jpg" width="70"/></a>
            </div>
            <!-- Collection of nav links and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php" id="whitefont"  >Home</a></li>
                    <li><a href="index_department.php"  id="whitefont"  >Department</a></li>
                    <li><a href="index_banding.php" id="whitefont">Banding</a></li>
                    <li><a href="index_position.php" id="whitefont"  >Position</a></li>
                    <li><a href="index_coursetype.php" id="whitefont">Course Type</a></li>
                    <li><a href="index_course.php" class="active" id="whitefont" >Course</a></li>
                    <li id=" " class="dropdown">
                        <a class="dropdown-toggle" id="whitefont" data-toggle="dropdown" href="#">Training
                            <span class="caret"></span></a>
                        <ul style="background-color: #c71585;" class="dropdown-menu">
                            <li ><a href="index_training.php" id="whitefont">Add Training Course by Position</a></li>
                            <li ><a href="index_training_by_course.php" id="whitefont">Add Training Course by Course</a></li>

                        </ul>
                    </li>
                    <li><a href="index_search2.php" id="whitefont" >Search</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                </ul>
            </div>
        </div>
    </nav>
    <br>
        <div class="container  " id="panelbody">
            <br>
            <img class="panel" align="center" src="pic/Course.png" alt="course" width="100">
        <label class="" style="font-size: xx-large;" id="whitefont">Course</label> 
        <br />
            <div class="table-responsive ">
                <br />
                <div align="right">
                    <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-info">Add</button>
                    <a class="btn btn-info" href="index.php">Home</a>
                </div>
                <br />

                <table id="user_data" class="table   table-responsive">
                    <thead>
                        <tr>
                            <th class="tablehead">Course ID.</th>
                            <th class="tablehead">Course Type Name</th>
                            <th class="tablehead">Course Name</th>
                            <th class="tablehead">When to Train</th>
                    
                            <th class="tablehead"></th>
                            <th width="100"></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
     <br>
    <footer class="page-footer"  style="background-color: #A00062;">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text" id="whitefont">LIFE AT CROWNE PLAZA</h5>
                    <p class="grey-text text-lighten-4" id="whitefont">All my experience at Crowne Plaza Vientiane is here!</p>
                </div>
                
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <h5 id="whitefont">Coded by Saiyavong</h5>
                <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
        </div>
    </footer>
    </body>
</html>
<div id="dataModal" class="modal fade">  
    <div class="modal-dialog">  
        <div class="modal-content">  
            <div class="modal-header">  
                <button type="button" class="close" data-dismiss="modal">&times;</button>  
                <h4 class="modal-title">Course Details</h4>  
            </div>  
            <div class="modal-body" id="course_detail">  
            </div>  
            <div class="modal-footer">  
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
            </div>  
        </div>  
    </div>  
</div>

<div id="add_data_Modal" class="modal fade">  
    <div class="modal-dialog">  
        <div class="modal-content">  
            <div class="modal-header">  
                <div id="alert_message"></div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>  
                <h4 class="modal-title">PHP Ajax Update MySQL Data Through Bootstrap Modal</h4>  
            </div>  
            <div class="modal-body">  
                <form method="post" name="insert_form" id="insert_form" enctype="multipart/form-data">  
                    <label>Auto ID. Has Been Set.</label>  
                    <input type="text" name="CourseID" id="CourseID" class="form-control" readonly="true" />  
                    <br />  
                    <label>Select Course Type</label>  
                    <select name="CourseTypeID" id="CourseTypeID" class="form-control">  
                        <?php while ($row = mysqli_fetch_array($objResult)) { ?>
                            <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>  
                        <?php } ?> 
                    </select>  
                    <br />  
                    <label>Enter Course Name</label>  
                    <input type="text" name="CourseName" id="CourseName" class="form-control" />  
                    <br />  
                    <label>Enter When to train</label>  
                    <input type="text" placeholder="You can leave blank on this section." name="WhenTrain" id="WhenTrain" class="form-control" />  
                    <br />  
                    <input type="hidden" name="course_id" id="course_id" />  
                    <input type="submit" value="Insert"  name="insert" id="insert" class="btn btn-success insert"/>
                </form>  
            </div>  
            <div class="modal-footer">  
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
            </div>  
        </div>  
    </div>  
</div> 
<script type="text/javascript">
    $(document).ready(function () {
        $('#add').click(function () {
            var newid = "<?php echo getAutoID("CourseID", "tb_course", "CSE", -3); ?>";
            $('#insert').val("Insert");
            $('#insert_form')[0].reset();
            $('#CourseID').val(newid);
        });
        fetch_data();
        function fetch_data()
        {

            var dataTable = $('#user_data').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: "fetch_course.php",
                    type: "POST"
                }
            });
        }
        $(document).on('click', '.delete', function () {
            var id = $(this).attr("id");
            // alert(id);
            if (confirm("Are you sure you want to remove this ID. = '" + id + "'?"))
            {
                $.ajax({
                    url: "delete_course.php",
                    method: "POST",
                    data: {id: id},
                    success: function (data) {
                        $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
                        $('#user_data').DataTable().destroy();
                        fetch_data();
                    }
                });
                setInterval(function () {
                    $('#alert_message').html('');
                }, 5000);
            }
        });
         $('#insert').click(function (event) {
            if ($('#insert').val() == 'Insert') {
                var CourseID = $('#CourseID').val();
                var CourseName = $('#CourseName').val();
                var CourseTypeID = $('#CourseTypeID').val();
                var WhenTrain = $('#WhenTrain').val();
                //  alert(CourseName + CourseID + CourseTypeID + WhenTrain);
                // alert(CourseID);
                if (CourseName != '')
                {
                    $.ajax({
                        url: "insert_course.php",
                        method: "POST",
                        data: {
                            CourseID: CourseID,
                            CourseTypeID: CourseTypeID, 
                            CourseName: CourseName,
                            WhenTrain: WhenTrain
                        },
                        beforeSend: function () {
                            $('#insert').val("Inserting");
                        },
                        success: function (data)
                        {
                            $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
                            $('#add_data_Modal').modal('hide');
                            $('#insert_form')[0].reset();
                            $('#user_data').DataTable().destroy();
                            fetch_data();
                        }

                    });
                    setInterval(function () {

                        $('#alert_message').html('');
                    }, 5000);
                }
                else
                {
                    event.preventDefault();
                    alert("Course Name is required");
                }
            }
            else if($('#insert').val()== "Update")
            {
                var course_id = $(this).attr("id");
                var CourseID = $('#CourseID').val();
                var CourseTypeID = $('#CourseTypeID').val();
                var CourseName = $('#CourseName').val();
                var WhenTrain = $('#WhenTrain').val();
                $.ajax({
                    url: "update_course.php",
                    method: "POST",
                    data: {CourseID: CourseID, CourseTypeID: CourseTypeID, CourseName: CourseName, WhenTrain: WhenTrain},
                    success: function (data)
                    {

                        $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
                        $('#add_data_Modal').modal('hide');
                        $('#insert_form')[0].reset();
                        $('#user_data').DataTable().destroy();
                        fetch_data();
                    }
                });
                 setInterval(function () {
                    $('#alert_message').html('');
                }, 5000);
            }
        });
        //Update
        $(document).on('click', '.edit', function () {
            var course_id = $(this).attr("id");
            $.ajax({
                url: "fetch_course_for_update.php",
                method: "POST",
                data: {course_id: course_id},
                dataType: "json",
                success: function (data) {
                    $('#CourseID').val(data.CourseID);
                    $('#CourseTypeID').val(data.CourseTypeID);
                    $('#CourseTypeID').text(data.CourseTypeName);
                    $('#CourseName').val(data.CourseName);
                    $('#WhenTrain').val(data.WhenTrain);
                    $('#course_id').val(data.id);
                    $('#insert').val("Update");
                    $('#add_data_Modal').modal('show');
                }
            });
        });
    });
</script>