<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Service Overzicht</title>
        <style>
            body{
                background-image: url("depoverzicht.jpg");
                background-repeat: no-repeat;
                background-size: 100%;
            }
        
            h1{
                color: black;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 200%;
                position: absolute;
                top: 35px;
                left: 200px;
                text-shadow: 0px 5px 10px rgb(0, 0, 0, 0.7);
                border-style: solid;
                border-width: 1px;
                padding: 5px;
                box-shadow: 0px 0px 10px black;
                background-color: white;
                opacity: 80%;
            }

            #klaar{
                position: relative;
                bottom: 1.5px;
                border-radius: 3px;
                text-decoration: none;
                padding: 1px 3px;
                color: white;
                background-color: green;
                font-size: 12px;
            }

            #klaar:hover{
                text-decoration: underline;
                padding: 1px 3px;
                color: white;
                background-color: rgb(0, 255, 50);
            }
            
            #start{
                position: relative;
                top: 1.5px;
                width: 13px;
                height: 13px;
                border: 0px;
                padding: 0px;
                
            }
            #change{
                text-decoration: none;
                border: 0px;
                padding: 0px;
            }

            #logo{
                position: relative;
                width: 150px;
                height: 150px;
                margin: 5px;
                box-shadow: 0px 0px 20px black;
            }

            table{
            
                border-collapse: collapse;
                width: 100%;
                color: black;
                font-family: monospace;
                font-size: 15px;
                text-align: left;
                box-shadow: 0px 0px 10px black;
            }

            th{
                margin: 0px 0px 0px 2px;
                padding: 5px 5px 5px 0px;
                background: rgb(0, 179, 255, 0.9);
                color: black;
                text-shadow: 0px 0px 20px black;
            }

            tr{
                padding: 5px 5px 5px 10px;
                border: solid black 1px;
                color: white; 
                background-color: rgb(0, 0, 0, 0.6);
            }
            
       

            #details{
                text-decoration: none;
                color: white;
            }
            
            #details:hover{
                text-decoration: underline;
                color: white;   
            }
        </style>
    </head>
    <body>
        <div=>
            <img id="logo" src="deplogo.jpg">
            <h1>dEP service overzicht</h1>
        </div>
        <table>
            <tr class= "header">
                <th>Datum</th>
                <th>Naam</th>
                <th>Telefoonnummer</th>
                <th>Bedrijf</th>
                <th>Probleem</th>
                <th>Urgentie</th>
                <th>Details</th>
                <th id="test">Status</th>
                <th>Actie</th>
            </tr>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "dep");
            $sql = "SELECT datum, id, fullName, nummer, company, problem, urgentie, details, staat, door, oplossing FROM test";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result-> fetch_assoc()){
                echo "<tr>
                        <td>" . $row["datum"] . "</td>
                        <td>" . $row["fullName"] . "</td>
                        <td>" . $row["nummer"] . "</td>
                        <td>" . $row["company"] . "</td>
                        <td>" . $row["problem"] . "</td>
                        <td>" . $row["urgentie"] . "</td>
                        <td><a id='details', href='details.php?datum=$row[datum]&fullName=$row[fullName]&nummer=$row[nummer]&company=$row[company]&problem=$row[problem]&urgentie=$row[urgentie]&details=$row[details]&status=$row[staat]&door=$row[door]&id=$row[id]&oplossing=$row[oplossing]'>[show]</td>
                        <td id= 'staat'>" . $row["staat"] . "</td>
                        <td><a id='klaar', href='status.php?rn=$row[id]&tn=$row[staat]', onclick='return status()'>Volgende</td>
                    </tr>";
                }
            }
            else {
                echo 'no results';
            }
            $conn-> close();
        ?>
            <script>
                function status(){
                    return confirm('Wil je dit aanpassen?');
                    } 
               
            </script>
        </table>
    </body>
</html>