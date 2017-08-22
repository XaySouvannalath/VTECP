<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Search</title>
        <link href="theme.css" rel="stylesheet">
        <link href="search_theme.css" rel="stylesheet">

        <style>

        </style>
    </head>
    <body>
                    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/x-icon" href="pic/search1600.png" />
        <br>

        <div class="container  ">

            <br>
            <div class="jumbotron card" id="panelbody">

                <form>
                    <img src="pic/search.ico" width="10%"><input class="ami inputsearch inline" name="search_text" id="search_text" type="search"   placeholder="Search by Position..."  >
                    <div id="myProgress">
                <div id="myBar"></div>
                    </div>
                </form>
            </div>
            <br>



            <div   id="result"></div><br

        </div>
    </div>
    <br>


</div>
</div>









</body>
<script>

$('#myBar')

    $(document).ready(function () {
        $('#myBar').hide();
        if ($('#search_text').val() == '') {
            $('#result').html('');
        }
        else {
            load_data($('#search_text').val());
        }


        function load_data(query)
        {
            $.ajax({
                url: "fetch_search2.php",
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
                $('#myBar').show();
                move();
                load_data(search);
                 
            }
            else
            {
                $('#myBar').show();
                 move();
                $('#result').html('');
                
            }
        });


        function move() {
            var elem = document.getElementById("myBar");
            var width = 1;
            var id = setInterval(frame, 2);
            function frame() {
                if (width >= 100) {
                    clearInterval(id);
                    $('#myBar').hide();
                } else {
                    width++;
                    elem.style.width = width + '%';
                }
            }
        }
         

    });
</script>
</html>
