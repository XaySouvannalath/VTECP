<link href="../css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="../js/bootstrap.js" type="text/javascript" rel="stylesheet">
<link href="../css/w3.css" type="text/css" rel="stylesheet">        
<link href="../css/slideshow.css" type="text/css" rel="stylesheet">   
<link href="../js/slideshow.js.js" type="text/javascript" rel="stylesheet">
<br>
<style>
    .glyphicon.glyphicon-log-in {
        font-size: 30px;
    }
    .glyphicon.glyphicon-log-out{
        font-size: 30px;
    }
    .glyphicon.glyphicon-registration-mark
    {
        font-size: 30px;
    }
    #panelhead{
        //color: #FF1493;
        background-color: 	#C71585;
         color: white;
               font-size: 120%;
               font-weight: 300;
                   
    }

    #setcenter
    {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
    }
     #body
 {
      background-image: url('pic/blur.jpg');
       // background-image: url("pic/welcome-to-crowne-plaza.jpg");
            background-repeat: round    ;
    background-attachment: fixed;
    
  
}
 #whitefont
           {
               color: white;
               font-size: 120%;
           }
</style>
<body id="body">
   
<form class="form-horizontal">

    <div class="container" id="setcenter">
        <div class="w3-card-4">
            <div class="modal-header" id="panelhead"><h2 class="glyphicon glyphicon-log-in">&nbsp;Login</h2></div>
            <br>
            <!-- Text input-->
            <div class="container">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="txtusername">Username:</label>  
                    <div class="col-md-4">
                        <input id="txtusername" name="txtusername" type="text" placeholder="enter username" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="txtpassword">Password:</label>
                    <div class="col-md-4">
                        <input id="txtpassword" name="txtpassword" type="password" placeholder="enter password" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="button1id"></label>
                    <div class="col-md-8">
                        <button id="button1id" name="button1id" class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                        <button id="btsignup"  name="btsignup" class="btn btn-info"><span class="glyphicon glyphicon-registration-mark" vertical-align: middle></span>Sign Up</button>
                    </div>
                </div>
                <br>
            </div>


            <div class="modal-footer">NBS</div>
        </div>
    </div> 
</form>
    </body>