<!DOCTYPE html>
<html>
    <head>
        <style> 
            .ami{
                width: 130px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: white;
                background-image: url();
                background-position: 10px 10px; 
                background-repeat: no-repeat;
                padding: 12px 20px 12px 40px;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;
            }

            .ami:focus {
                width: 100%;
            }
            .card {
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                width: 20%;
                border-radius: 5px;
                height: 10%;
                float: left;
                    
            }

            .card:hover {
                box-shadow: 0 20px 30px 20px rgba(0,0,0,0.2);
            }
               
            img {
                border-radius: 5px 5px 0 0;
            }

            .container {
                padding: 2px 16px;
            }
            #ok:hover{
                 box-shadow: 0 5px 50px 5px rgba(0,0,0,0.2);
                // box-shadow: 
            }
             
        </style>
    </head>
    <body>

        <p>Animated search form:</p>

        <form>
            <input class="ami" id="ok" type="text" name="search" placeholder="Search..">
        </form>
        <br>
        <h2>Round Card</h2>
        <div class="container">
         
            <div class="row">
                
                   <div class="col-lg-4">
                                <div class="card">
            <img src="pic/position.png" alt="Avatar" style="width:100%">
          <div class="container">
            <h4><b>Jane Doe</b></h4> 
            <p>Interior Designer</p> 
          </div>
        </div>
                        
            </div>
                <div class="col-lg-4">
                    <div class="card">
            <img src="pic/position.png" alt="Avatar" style="width:100%">
          <div class="container">
            <h4><b>Jane Doe</b></h4> 
            <p>Interior Designer</p> 
          </div>
        </div>
                </div>
               
            </div>
        </div>
        
      
        
        
                     
        
                    
    </body>
</html>
