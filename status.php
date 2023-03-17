<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Status aanpassen</title>
        <style>
            body{
                font-size: 30px;
                background-image: url("depoverzicht.jpg");
                background-repeat: no-repeat;
                background-size: 100%;
            }
            a{
                position: absolute;
                top: 200px;
                left: 44%;
                text-decoration: none;
                padding: 5px;
                color: white;
                background-color: red;
                border: solid 1px black;
                box-shadow: 0px 0px 10px black;
            }

            a:hover{
                text-align: center;
                text-decoration: underline;
                padding: 3px;
                color: white;
                background-color: rgb(255, 0, 0);
                border: solid 2px black;
                box-shadow: 0px 0px 10px red;
            }

            h1{
                text-align: center;
                font-family: monospace;
                text-shadow: 0px 0px 25px black;
            }
        </style>
    </head>
    <body>
    <h1>Status aangepast</h1>
        <a href= "table.php">Terug naar overzicht</a>

          
                    <?php
                        $id = $_GET['rn'];
                        $staat = $_GET['tn'];
                        
                        if ($staat == 'Open'){
                            $conn = mysqli_connect("localhost", "root", "", "dep");
                            $query = "UPDATE test SET staat = 'Bezig' WHERE ID = $id";                              
                            $data=mysqli_query($conn,$query);  
                        }
                    
                        if ($staat == 'Bezig'){
                            $conn = mysqli_connect("localhost", "root", "", "dep");
                            $query = "UPDATE test SET staat = 'Afgehandeld' WHERE ID = $id";      
                            $data=mysqli_query($conn,$query);  
                        }

                        if ($staat == 'Afgehandeld'){
                            $conn = mysqli_connect("localhost", "root", "", "dep");
                            $query = "DELETE FROM test WHERE id = '$id'";      
                            $data=mysqli_query($conn,$query);  
                        }
                    ?>
                    
          
    </body>
</html>