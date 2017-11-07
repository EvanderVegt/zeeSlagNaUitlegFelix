<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Zeeslag
        </title>
        <script>
            
            
           
    
                        
            function plons(a) {
                document.getElementById("fontijn" + a).src = "plons.jpg";
                
            }

            function vuur(b) {
                document.getElementById("fakkel" + b).src = "vuur.png";
            }
        </script>
    </head>
    <body>

        <table id="table1">
            <?php
            for ($x = 0; $x <= 9; $x++) {
                echo "<tr><img onclick=vuur(" . $x . ") id=fakkel" . $x . " src=golven.png width=35 height=35></tr>\n";

                for ($y = 0; $y <= 9; $y++) {
                    echo "<td><img onclick=plons($x$y) id=fontijn" . $x.$y . " src=golven.png width=35 height=35>\n";
                }
                echo"</td>";
            }
            ?>
        </table>




    <!---<img onclick="plons($x)" id="fontijn" src="golven.png" width="25" height="25">
     <img onclick="vuur()" id="fakkel" src="golven.png" width="25" height="25">
 </<body>