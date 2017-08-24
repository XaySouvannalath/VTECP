<?php
include 'db.php';
$query_select_course = "select PositionID, PositionName from tb_position";
$query_select_position = "select CourseID, CourseName from tb_course";
$query_selet_positionName = "select PositionID,PositionName, COUNT(PositionID) as Total_Course FROM view_training2 
group by PositionID";


$objResult = mysqli_query($connect, $query_select_course);
$objResultPosition = mysqli_query($connect, $query_select_position);
$objResultPositionName = mysqli_query($connect, $query_selet_positionName);
?>
<html>
    <head>
        <title>Training Management</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
        <link href="theme.css" rel="stylesheet">
    </head>
    <body>
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
                    <li><a href="index_department.php" class="active" id="whitefont"  >Department</a></li>
                    <li><a href="index_banding.php" id="whitefont">Banding</a></li>
                    <li><a href="index_position.php" id="whitefont"  >Position</a></li>
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

        <div class="container">

            <br>
            <div class="row">


                <div class="col-sm-4" >
                    <div class="panel" id="panelbody" >
                        <div class="panel panel-heading getwhitefont text-center" id="panelbody">
                            Sum Position for Course 
                        </div>
                        <div style="padding: 10px;" class="  countcourse" id="">

                        </div>

                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="w3-card-4 panel " id="panelbody" >
                        <div class="panel panel-heading getwhitefont text-center" id="panelbody">
                            Manage Data
                        </div>
                        <div class="panel panel-body panelsai" id=" ">
                            <form method="post" id="framework_form">
                                <div class="form-group">
                                    <div >

                                        <div class="panel panel-body panelsai" id="">
                                            <label class="tablehead">Select Course</label>  
                                            <select name="CourseID" id="CourseID" class="form-control">  
                                                <?php while ($row1 = mysqli_fetch_array($objResultPosition)) { ?>
                                                    <option value="<?php echo $row1['CourseID']; ?>"><?php echo $row1['CourseName']; ?></option>

                                                <?php } ?> 
                                            </select>  
                                            <br>
                                        </div>
                                        <br>
                                    </div>
                                    <label class="tablehead">Select Position</label>
                                    <div class="form-group">
                                        <select id="framework" name="framework[]" multiple class="form-control " >
                                            <?php while ($row = mysqli_fetch_array($objResult)) { ?>
                                                <option value="<?php echo $row['PositionID']; ?>"><?php echo $row['PositionName']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-info btn-block" name="submit" value="Submit" />

                                </div>

                            </form>

                        </div>

                    </div>
                    <br>

                    <div class="panel" id="panelbody">

                        <div class="panel panel-heading getwhitefont text-center" id="panelbody">
                            Show Data
                        </div>
                        <div class="panel-body" id="loadtable">

                        </div>
                    </div>
                </div>
            </div>




        </div>
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
    <body>
        <script>

            $(document).ready(function () {
               load_data($('#CourseID').val());
                show_sum_position_for_course();
                function show_sum_position_for_course()
                {
                    $('.countcourse').load('show_sum_position_for_course.php');
                }
                function load_data(query)
                {

                    $.ajax({
                        url: "fetch_training_by_course.php",
                        method: "POST",
                        data: {query: query},
                        success: function (data)

                        {
                            $('#loadtable').html(data);
                        }
                    });
                }


                $('#CourseID').change(function () {
                    var search = $('#CourseID').val();
                    load_data(search);
                });



                //$('#btadd').click(function () {
                //      var cc = $('#getcourse').val();
                //   alert(cc);
                //   });
                //   
                // 
                $(document).on('click', '#btadd1', function () {
                    var cc = $('#btadd1').val();
                    //    alert(cc);
                });

                $('#PositionID').change(function () {
                    var getPositionID = $('#PositionID').val();
                    //    var p =$('#hh').val()
                    // $('#getPosition1').val(p);


                    // var kkk = $('#ok').val();
                    //       alert(kkk) ;
                    //  $('#kk').val(kkk);

                    var keyword = $(this).val();
                    //alert(keyword);
                    $.ajax(
                            {
                                url: 'fetch_training.php',
                                type: 'POST',
                                data: 'request=' + keyword,
                                beforeSend: function ()
                                {
                                    $("#table-container").html('Working...');

                                },
                                success: function (data)
                                {
                                    $("#table-container").html(data);
                                },
                            });
                });




                $(document).on('click', '.btn_delete', function () {
                    var id = $(this).data("id3");
                    if (confirm("Are you sure you want to delete this?"))
                            // alert(id);
                            {
                                $.ajax({
                                    url: "delete_training.php",
                                    method: "POST",
                                    data: {id: id},
                                    dataType: "text",
                                    success: function (data) {
                                        //   alert(data);
                                        //  fetch_data();
                                        var search = $('#CourseID').val();
                                        load_data(search);
                                        show_sum_position_for_course();
                                    }
                                });
                                var keyword = $(this).val();
                                $.ajax(
                                        {
                                            url: 'fetch_training.php',
                                            type: 'POST',
                                            data: 'request=' + keyword,
                                            beforeSend: function ()
                                            {
                                                $("#table-container").html('Working...');

                                            },
                                            success: function (data)
                                            {
                                                $("#table-container").html(data);
                                            },
                                        });
                            }
                });






                //    $('#yourid').attr('id')
                /**
                 //  $('#Course').change(function () {
                 var cc = $('#Course').val();
                 alert(cc);
                 });
                 $('input[name=Course]').click(function () {
                 
                 //    var courseName =   $("input[name=Course]").val();
                 // alert(courseName);
                 // alert($('#getCourse').text());
                 //  alert($('#getCourse1').val());
                 //     alert(courseName);
                 //  allert($("input[name=Course]").text());
                 // alert($("input[name=Course]").val().toString());
                 
                 
                 
                 
                 });
                 
                 $('#course_id').click(function(){
                 alert($('#course_id').val());
                 });
                 
                 //Materialize.updateTextFields();
                 //  Mater
                 
                 
                 **/
                $('#framework').multiselect({
                    nonSelectedText: 'Select Position',
                    enableFiltering: true,
                    enableCaseInsensitiveFiltering: true,
                    buttonWidth: '100%'
                });

                $('#framework_form').on('submit', function (event) {
                    event.preventDefault();
                    var form_data = $(this).serialize();
                    //  alert(form_data);
                    $.ajax({
                        url: "insert_training_by_course.php",
                        method: "POST",
                        data: form_data,
                        success: function (data)
                        {
                            $('#framework option:selected').each(function () {
                                $(this).prop('selected', false);
                            });
                            $('#framework').multiselect('refresh');
                            //   alert(data);
                            //var search = $('#CourseID').val();
                            load_data($('#CourseID').val());
                            show_sum_position_for_course();
                        }
                    });
                });




                $("#fetchval").on('change', function () {
                    var keyword = $(this).val();
                    $.ajax(
                            {
                                url: 'fetch.php',
                                type: 'POST',
                                data: 'request=' + keyword,
                                beforeSend: function ()
                                {
                                    $("#table-container").html('Working...');

                                },
                                success: function (data)
                                {
                                    $("#table-container").html(data);
                                },
                            });
                });
            });

        </script>
</html>