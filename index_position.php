<?php
include './classQuery.php';
myDatabase();
//echo getAutoID("Course", "tb_course", "CSE", -3);
include 'db.php';
$sqldepartment = "select * from tb_department";
$sqlbanding = 'select * from tb_banding';
$objDepartment = mysqli_query($connect, $sqldepartment);
$objBanding = mysqli_query($connect, $sqlbanding);
?>
<html>

    <head>
        <title>Position</title>

      
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"
              />
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
                    <li><a href="index_position.php" class="active" id="whitefont"  >Position</a></li>
                    <li><a href="index_coursetype.php" id="whitefont">Course Type</a></li>
                    <li><a href="index_course.php" id="whitefont" >Course</a></li>
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
        <div class="container w3-card-4 " id="panelbody">
            <br>
            <img class="panel" align="center" src="pic/position.png" alt="position" width="100">
            <label class="" style="font-size: xx-large;" id="whitefont">Position</label> 
            <div class="table-responsive ">
                <br />
                <div align="right">
                    <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-info">Add</button>

                    <a class="btn btn-info" href="index.php">Home</a>
                </div>
                <br />

                <table id="user_data" class="table  table-responsive">
                    <thead>
                        <tr>
                            <th  class="tablehead">Position ID.</th>
                            <th class="tablehead">Department Name</th>
                            <th class="tablehead">Position Name</th>
                            <th class="tablehead">Banding No.</th>
                            <th class="tablehead">Option</th>
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
                    <input type="text" name="PositionID" id="PositionID" class="form-control" readonly="true" />
                    <br />
                    <label>Select Department</label>
                    <select name="DepartmentID" id="DepartmentID" class="form-control">  
                        <?php while ($row = mysqli_fetch_array($objDepartment)) { ?>
                            <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>  
                        <?php } ?> 
                    </select>
                    <br />
                    <label>Enter Position Name</label>
                    <input type="text" name="PositionName" id="PositionName" class="form-control" />
                    <br />
                    <label>Select Banding</label>
                    <select name="BandingID" id="BandingID" class="form-control">  
                        <?php while ($row2 = mysqli_fetch_array($objBanding)) { ?>
                            <option value="<?php echo $row2[0]; ?>"><?php echo $row2[1]; ?></option>  
                        <?php } ?> 
                    </select>
                    <br />
                    <input type="hidden" name="position_id" id="position_id" />
                    <input type="submit" value="Insert" name="insert" id="insert" class="btn btn-success insert" />
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
            var newid = '<?php echo getAutoID("PositionID", "tb_position", "PST", -3); ?>';
            $('#insert').val("Insert");
            $('#insert_form')[0].reset();
            $('#PositionID').val(newid);
        });
        fetch_data();

        function fetch_data() {

            var dataTable = $('#user_data').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: "fetch_position.php",
                    type: "POST"
                }
            });
        }
        $(document).on('click', '.delete', function () {
            var id = $(this).attr("id");
            // alert(id);
            if (confirm("Are you sure you want to remove this ID. = '" + id + "'?")) {
                $.ajax({
                    url: "delete_position.php",
                    method: "POST",
                    data: {
                        id: id
                    },
                    success: function (data) {
                        $('#alert_message').html('<div class="alert alert-success">' +
                                data + '</div>');
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
                var PositionID = $('#PositionID').val();
                var DepartmentID = $('#DepartmentID').val();
                var PositionName = $('#PositionName').val();
                var BandingID = $('#BandingID').val();
                // alert(PositionID + ' ' + DepartmentID + ' ' + PositionName + ' ' + BandingID);
                if (PositionName != '')
                {
                    $.ajax({
                        url: "insert_position.php",
                        method: "POST",
                        data: {
                            PositionID: PositionID,
                            DepartmentID: DepartmentID,
                            PositionName: PositionName,
                            BandingID: BandingID
                        },
                        beforeSend: function () {
                            $('#insert').val("Inserting");
                        },
                        success: function (data) {
                            $('#alert_message').html('<div class="alert alert-success">' +
                                    data + '</div>');
                            $('#add_data_Modal').modal('hide');
                            $('#insert_form')[0].reset();
                            $('#user_data').DataTable().destroy();
                            fetch_data();
                        }

                    });
                    setInterval(function () {

                        $('#alert_message').html('');
                    }, 5000);

                } else {
                    event.preventDefault();

                    alert("Position Name is required");
                }
            }
            else if ($('#insert').val() == "Update")
            {
                var position_id = $(this).attr("id");
                var PositionID = $('#PositionID').val();
                var DepartmentID = $('#DepartmentID').val();
                var PositionName = $('#PositionName').val();
                var BandingID = $('#BandingID').val();
                //  alert('this is update');
                $.ajax({
                    url: "update_position.php",
                    method: "POST",
                    data: {PositionID: PositionID, DepartmentID: DepartmentID, PositionName: PositionName, BandingID: BandingID},
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
            var position_id = $(this).attr("id");
            $('#insert').val("Update");
            //   $('#PositionID').val(position_id);
            //   alert(position_id);
            $.ajax({
                url: "fetch_position_for_update.php",
                method: "POST",
                data: {
                    position_id: position_id
                },
                dataType: "json",
                success: function (data) {
                    $('#PositionID').val(data.PositionID);
                    $('#DepartmentID').val(data.DepartmentID);
                    $('#PositionName').val(data.PositionName);
                    $('#BandingID').val(data.BandingID);
                    $('#course_id').val(data.id);
                    $('#insert').val("Update");
                    $('#add_data_Modal').modal('show');
                }
            });
        });
    });
</script>