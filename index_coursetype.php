<?php
include './classQuery.php';
myDatabase();
//echo getAutoID("CourseTypeID", "tb_coursetype", "CT", -3);
?>
<html>
    <head>
        <title>Course Type</title>

         <link href="theme.css" rel="stylesheet">
    </head>
    <body>
                <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                    <li><a href="index_coursetype.php" class="active" id="whitefont">Course Type</a></li>
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
    <br>
        <div class="container " id="panelbody">
             <br>
             <img class="panel" align="center" src="pic/Coursetype.png" alt="coursetype" width="100">
        <label class="" style="font-size: xx-large;" id="whitefont">Course Type</label> 
            <br />
            <div class="table-responsive ">
                <br />
                <div align="right">
                    <button type="button" name="add" id="add" class="btn btn-info">Add</button>
                    <a class="btn btn-info" href="index.php">Home</a>
                </div>
                <br />
                <div id="alert_message"></div>
                <table id="user_data" class="table   table-responsive">
                    <thead>
                        <tr>
                            <th class="tablehead">Course Type ID.</th>
                            <th class="tablehead">Course Type Name</th>
                            <th class="tablehead">Option</th>
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
<script type="text/javascript">
    $(document).ready(function () {
        //fetch_data();
        fetch_data();
        function fetch_data()
        {

            var dataTable = $('#user_data').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: "fetch_coursetype.php",
                    type: "POST"
                }
            });
        }
        // fetch_data();
        // // function update_data(DepartmentID, column_name, value)
        //  {

        //   }

        $(document).on('blur', '.update', function () {
            var CourseTypeID = $(this).data("id");
            var column_name = $(this).data("column");
            //  alert(CourseTypeID);
            var value = $(this).text();
            //update_data(DepartmentID, column_name, value);
            $.ajax({
                url: "update_coursetype.php",
                method: "POST",
                data: {CourseTypeID: CourseTypeID, column_name: column_name, value: value},
                success: function (data)
                {
                    $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
                    $('#user_data').DataTable().destroy();
                    fetch_data();
                }
            });
            setInterval(function () {
                $('#alert_message').html('');
            }, 5000);
        });

        $('#add').click(function () {
            var html = '<tr id="insert_record">';
            html += '<td class="whitefont" id="data1"><?php echo getAutoID("CourseTypeID", "tb_coursetype", "CT", -3); ?></td>';
            html += '<td contenteditable id="data2"></td>';
            html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
            html += '<td><button type="button" name="cancel" id="cancel" class="btn btn-danger btn-xs">Cancel</button></td>';
            html += '</tr>';
            $('#data2').focus();
            $('#user_data tbody').prepend(html);
        });

     //   $('#cancel').click(function () {
          
       // });
        
        $(document).on('click', '#cancel', function(){
             $('#user_data').DataTable().destroy();
            fetch_data();
        });

        $(document).on('click', '#insert', function () {
            var CourseTypeID = $('#data1').text();
            var CourseTypeName = $('#data2').text();
            if (CourseTypeID != '' && CourseTypeName != '')
            {
                $.ajax({
                    url: "insert_coursetype.php",
                    method: "POST",
                    data: {CourseTypeID: CourseTypeID, CourseTypeName: CourseTypeName},
                    success: function (data)
                    {
                        $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
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
                alert("Both Fields is required");
            }
        });

        $(document).on('click', '.delete', function () {
            var id = $(this).attr("id");
            if (confirm("Are you sure you want to remove this?"))
            {
                $.ajax({
                    url: "delete_coursetype.php",
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
    });
</script>