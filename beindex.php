<html>
    <head>
        <title>Management</title>
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="js/bootstrap.js" type="text/javascript" rel="stylesheet">
        <link href="css/w3.css" type="text/css" rel="stylesheet">        
        <link href="css/slideshow.css" type="text/css" rel="stylesheet">   
        <link href="js/slideshow.js.js" type="text/javascript" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link src="/js/jquery.min.js" type="text/javascript" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="js/bootstrap.js" type="text/javascript" rel="stylesheet">
<link href="css/w3.css" type="text/css" rel="stylesheet">        
<link href="css/slideshow.css" type="text/css" rel="stylesheet">   
<link href="js/slideshow.js.js" type="text/javascript" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link src="/js/jquery.min.js" type="text/javascript" rel="stylesheet">

        <style>
            #navcolor{
                background-color: #C71585;   
            }
            #whitefont
            {
                color: white;
                font-size: 120%;
            }
        </style>
    </head>
    <body>
 <script type="text/javascript">
            window.onload = function () {
                loadpage('behome.php');
            }
            function loadpage(pagename) {
                var x = new XMLHttpRequest();
                x.open("get", pagename)
                x.onreadystatechange = function () {
                    var content = document.getElementById("kk");
                    content.innerHTML = x.responseText;
                }
                x.send(null);
            }
              $('#form').submit(function() {
   $('#notice').show();
   setTimeout(function() { 
       $('#notice').fadeOut(); 
   }, 5000);
});
        </script>
        <nav class="navbar navbar-default navbar-static-top top-bar fixed w3-card-4" id="navcolor">
            <h1 id="whitefont" align="center">Database Management</h1>
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" onclick="loadpage('behome.php')" class="navbar-brand"><img class="modal-content" src="pic/crowneplazaicon.jpg" width="100"/></a>
                </div>
                <!-- Collection of nav links and other content for toggling -->
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="frm_department.php" id="whitefont" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="modal-content" src="pic/department.png" width="40"/><br><br>Department</a></li>

                        <li><a href="#" id="whitefont" onClick="loadpage('frm_banding.php')">&nbsp;&nbsp;&nbsp;<img class="modal-content" src="pic/banding.png" width="40"/><br><br>Banding</a></li>

                        <li><a href="#" id="whitefont" onclick="loadpage('frm_position.php')">&nbsp;&nbsp;<img class="modal-content" src="pic/position.png" width="40"/><br><br>Position</a></li>
                        <li><a href="#" id="whitefont" onclick="loadpage('frm_coursetype.php')">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="modal-content" src="pic/coursetype.png" width="40"/><br><br>Course Type</a></li>
                        <li><a href="#" id="whitefont" onclick="loadpage('frm_course.php')">&nbsp;&nbsp;<img class="modal-content" src="pic/course.png" width="40"/><br><br>Course</a></li>
                        <li><a href="#" id="whitefont" onclick="loadpage('frm_training.php')">&nbsp;&nbsp;<img class="modal-content" src="pic/training.png" width="40"/><br><br>Training</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="user/frm_login.php"  id="whitefont"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>

                    </ul>

                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="panel" >
                        <div class="panel-heading w3-card-4" ><h4  align="center" class="">
                                <div class="panel-title "  >  <label >Database Management</label></div>
                            </h4></div>
                        <div class="nav nav-pills nav-stacked w3-card-4">
                            <li> <a  href="frm_department.php" >&nbsp;Department</a> </li>
                            <li><a  href="#" >&nbsp;Banding</a></li> 
                            <li><a href="#" >&nbsp;Position</a></li>
                            <li><a href="#" >&nbsp;Course Type</a></li>
                            <li><a  href="#" >&nbsp;Course</a></li>
                            <li> <a  href="#" >&nbsp;Training</a></li>
                            

                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="w3-card-4">
                        <div class="w3-jumbo" id="notice">
                            Hello Admin
                        </div>
                    </div>
                    <hr>
                    <div class="w3-card-4" id="kk">
                        
                        
                    </div>
                </div>
            </div>
        </div>
        
        <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    </body>
</html>