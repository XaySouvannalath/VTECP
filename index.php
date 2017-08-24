
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="js/bootstrap.js" type="text/javascript" rel="stylesheet">
        <link href="css/w3.css" type="text/css" rel="stylesheet">        
        <link href="css/slideshow.css" type="text/css" rel="stylesheet">   
        <link href="js/slideshow.js.js" type="text/javascript" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link src="/js/jquery.min.js" type="text/javascript" rel="stylesheet">
        <link rel="icon" href="pic/search.ico">

        <link href="theme.css" rel="stylesheet">
    </head>
    <body >
        <script type="text/javascript">
            window.onload = function () {
                loadpage('home.php');
            }
            function loadpage(pagename) {
                var x = new XMLHttpRequest();
                x.open("get", pagename)
                x.onreadystatechange = function () {
                    var content = document.getElementById("ncontent");
                    content.innerHTML = x.responseText;
                }
                x.send(null);
            }
        </script>
        <?php
        // put your code here
        ?>


        <nav class="navbar navbar-default navbar-static-top top-bar fixed" id="navcolor">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand"><img class="modal-content" src="pic/crowneplazaicon.jpg" width="70"/></a>
                </div>
                <!-- Collection of nav links and other content for toggling -->
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#" id="whitefont" onclick="loadpage('home.php')">Home</a></li>
                        <li><a href="index_search2.php" id="whitefont">Search</a></li>
                        <li><a href="beindex.php" id="whitefont">Manage</a></li>
                        <li><a href="#" id="whitefont" onClick="loadpage('about.php')">About</a></li>
                        <li><a href="#" id="whitefont">Photo</a></li>
                        <li><a href="#" id="whitefont" onclick="loadpage('contact.php')">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">


                    </ul>

                </div>
            </div>
        </nav>

        <div class="container" id="" aling="center">
            <div class="row">
                <div class="w3-card-4 jumbotron panel-transparent panel-heading" id="panelbody"><br>
                    <h1 align="center"><label id="whitefont">Wissen</label></h1><hr>

                </div>

                <div class="slideshow-container w3-card-4">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="pic/slide1.jpg" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="pic/slide2.jpg" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="pic/slide3.jpg" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>
                <br>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                </div>

            </div>



        </div>
    </div>




    <!-- Script to Activate the Carousel -->

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 3000); // Change image every 2 seconds
        }

    </script>
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
