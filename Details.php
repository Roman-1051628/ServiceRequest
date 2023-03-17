<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Details</title>
      

        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 30px;
                background-image: url("depoverzicht.jpg");
                background-repeat: no-repeat;
                background-size: 100%;
            }

            #Submit{
                position: absolute;
                bottom: 25px;
                left: 70%;
                text-align: center;
                text-decoration: none;
                padding: 5px;
                color: white;
                background-color: green;
                border: solid 1px black;
                box-shadow: 0px 0px 10px black;
                font-size: 30px;
            }
            #Submit:hover{
                text-align: center;
                text-decoration: underline;
                padding: 3px;
                color: white;
                background-color: rgb(0, 255, 0);
                border: solid 2px black;
                box-shadow: 0px 0px 10px green;
            }
            #oplossing{
                border: solid 1px black;
                box-shadow: 0px 0px 10px black;
                font-size: 30px;
                position: absolute;
                bottom: 30px;
                left: 5%;
            }

            #afgehandeld{
                border: solid 1px black;
                box-shadow: 0px 0px 10px black;
                font-size: 30px;
                position: absolute;
                bottom: 30px;
                left: 35%;
            }

            a{
                position: absolute;
                bottom: 25px;
                left: 80%;
                text-align: center;
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
                position: relative;
                top: -20px;
                text-align: center;
                font-family: monospace;
                text-shadow: 0px 0px 25px black;
            }

            table{
                box-shadow: 0px 0px 20px black;
                position: relative;
                top: -50px;
                left: 5vw;
                padding: 5px;
                border: solid 1px white;
                background-color: rgb(0,0,0, 0.7);
                color: white;
                min-width: 90vw;
            }
            td{
                text-shadow: 0px 0px 5px black;
             
                vertical-align: top;
                text-align: left;
            
            }
            
            tr{
                border: solid 0px 0px 1px 0px white;
            }
            
            .outcome{
                position: relative;
                
            }
            #details{
                max-width: 50vw;
            }
       
        </style>
    </head>
    <body>
    
        <h1>Details</h1>
   
        <table>
            
            <tr>
                <td>Naam:</td>
                <td class="outcome"><?php echo $_GET['fullName']; ?></td>
            </tr>
            <tr>
                <td>Contact:</td>
                <td class="outcome"><?php echo $_GET['nummer']; ?></td>
            </tr>
            <tr>
                <td>Bedrijf:</td>
                <td class="outcome"><?php echo $_GET['company']; ?></td>
            </tr>   
            <tr>
                <td>Probleem:</td>
                <td class="outcome"><?php echo $_GET['problem']; ?></td>
            </tr>
            <tr>
                <td>Urgentie:</td>
                <td class="outcome"><?php echo $_GET['urgentie']; ?></td>
            </tr>
            <tr>   
                <td>Details:</td>
                <td id="details" class="outcome"><?php echo $_GET['details']; ?></td>
            </tr>
            <tr>
                <td>Status:</td>
                <td class="outcome"><?php echo $_GET['status']; ?></td>
            </tr>
            <tr> 
                <td>Afgehandeld door:</td>
                <td class="outcome"><?php echo $_GET['door']; ?></td>
            </tr>
            <tr>
                <td>Oplossing:</td>
                <td class="outcome"><?php echo $_GET['oplossing']; ?></td>
            </tr>
                <form action="afgehandeld.php?tn=<?php echo $_GET['id']; ?>" method="POST">
                    <input type="text" id="afgehandeld" name="afgehandeld" placeholder="Afgehandeld door:">
                    <input type="text" id="oplossing" name="oplossing" placeholder="Oplossing:">
                    <input type="submit" name="submit" id="Submit">
                </form>
            
            
            <a href= "table.php">Terug naar overzicht</a>
            
            
        </table>   
    </body>
</html>