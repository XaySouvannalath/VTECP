<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Search</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
        <link rel="stylesheet" href="theme.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <style>  
            .ami {
                width: 130px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: white;
                background-image: url('searchicon.png');
                background-position: 10px 10px; 
                background-repeat: no-repeat;
                padding: 12px 20px 12px 40px;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;
            }

            .ami:focus {
                width: 100%;




            }
            .navv{
                height: 50px;
            }
* {
    margin: 0;
}
html, body {
    height: 100%;
}
.wrapper {
    min-height: 100%;
    height: auto !important;
    height: 100%;
    margin: 0 auto -155px; /* the bottom margin is the negative value of the footer's height */
}
.footer, .push {
    height: 155px; /* .push must be the same height as .footer */
}
        </style>
    </head>
    <body>
        <nav class="tablebody  nav-wrapper "  id="navcolor">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">


                    <ul class="nav navbar-nav">



                        <!--<div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon tablehead" id="">Search</span>
                                <input type="text" name="search_text" id="search_text" placeholder="Search Position" class="form-control waves-purple tablehead" />
                            </div>
                        </div>-->
                    </ul>
                    <div class="nav-wrapper">
                        <form>
                            <div class="input-field">
                                <input class="ami" name="search_text" id="search_text" placeholder="Search Position"" type="search" required>
                                <label class="label-icon" for="search"><i class="material-icons"></i></label>
                                <i class="material-icons">close</i>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Collection of nav links and other content for toggling -->
                <div id="navbarCollapse" class="collapse navbar-collapse">


                </div>
            </div>
        </nav>

        <div class="container">

            <!--  <br>
              <br />
              <h1 align="center" class="tablehead">Click Check Course!</h1><br />
  
              <form>
                  <input class="ami" type="text" name="search" placeholder="Search..">
              </form>
            -->
            <div id="result"></div>
        </div>
        <!--<footer class="modal-footer"  style="background-color: #ffffff;" >
            <center><img src="pic/brandbar.png"></center>
        </footer>-->
        <div class="wrapper">
  <p>Your website content here.</p>
  <div class="push"></div>
</div>
<div class="footer">
  <p>Copyright (c) 2008</p>
</div>
    </body>
</html>


<script>
    $(document).ready(function () {

        //load_data();

        function load_data(query)
        {
            $.ajax({
                url: "fetch_search.php",
                method: "POST",
                data: {query: query},
                success: function (data)
                {
                    $('#result').html(data);
                }
            });
        }
        $('#search_text').keyup(function () {
            var search = $(this).val();
            if (search != '')
            {
                load_data(search);
            }
            else
            {
                $('#result').html('');
            }
        });
    });
</script>