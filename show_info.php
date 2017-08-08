
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Back End</title>
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
        <!-- Custom CSS -->
        <link href="css/modern-business.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <style>
        body {
		background-color: #93CCEA;
	background-image: url(../picture/w2.jpg);
	background-size: contain;
background-repeat: repeat;

 
		}
#content{

	}
        </style>
    </head>

    <body>
    <script type="text/javascript">
	window.onload = function(){
loadpage("home.php");
	}
	 function loadpage(pagename){
              var x = new XMLHttpRequest();
              x.open("get", pagename)
              x.onreadystatechange = function(){
                  var content = document.getElementById("showcontent");
                  content.innerHTML = x.responseText;
              }
              x.send(null);
          }
	</script>
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="nav"  >
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img class="modal-content" width="80px" height="80px" src="../picture/logo.jpg"/></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                       <a href="#" onClick="loadpage('home.php')" class="">Home</a>
                    </li>
                   <li>
                       <a href="#" onClick="loadpage('frm_project.php')" class="">Project</a>
                    </li>
                    <li>
                       <a href="#" onClick="loadpage('view_pro.php')" class="">View Project</a>
                    </li>
                    <li>
                       <a href="#" onClick="loadpage('frm_employee.php')" class="">Employee</a>
                    </li>
                    <li>
                       <a href="#" onClick="loadpage('frm_employee.php')" class="">View Employee</a>
                    </li>
                    <li>
                       <a href="#" onClick="loadpage('Project_Image.php')" class="">Update Phase of Project</a>
                    </li>
                    <li>
                       <a href="#" onClick="loadpage('View_Project_Phase.php')" class="">View Phase of Project</a>
                    </li>

                    <li>
                       <a href="#" onClick="" class="">Log Out</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br>
    <br>
    <br>
    <div class="container" >
        <div class="row">
            <nav class="col-sm-3">
      <ol class="nav nav-pills nav-stacked modal-content"  data-offset-top="205">
 		<li class="modal-header">Menu</li>   
        <li onClick="loadpage('home.php')"><a align="center" href="#project">Home</a></li>
        <li onClick="loadpage('frm_project.php')"><a align="center" href="#project">Project</a></li>
        <li onClick="loadpage('view_pro.php')"><a href="#" >View Project</a></li>
        <li onClick="loadpage('frm_employee.php')"><a href="#section3">Employee</a></li>
        <li onClick="loadpage('frm_employee.php')"><a href="#section3">View Employee</a></li>
        <li onClick="loadpage('Project_Image.php')"><a href="#section3">Update Phase of Project</a></li>
        <li onClick="loadpage('View_Project_Phase.php')"><a href="#section3">View Phase of Project</a></li>
        <li ><a href="frm_login.php">Log Out</a></li>
        <li class="modal-footer">KFT (Lao)</li> 
          
      </ol>
    </nav>
    <br>
            <div class="col-md-9" id="showcontent">
            </div>
        </div>
        
       

    </div>
    <br>
<div class="panel-footer" style="background: #3168A9; background-image:url(../picture/Background%20RED.jpg)">
	<h1 align="center">KFT</h1>
    <h1 align="center">Copyright&copy; KFT Construction Sole Engineering</h1>
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

