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
            document.getElementById("fontijn"+a).src = "plons.jpg";
            }
            
            function vuur() {
            document.getElementById("fakkel").src = "vuur.png";
            }
        </script>
    </head>
    <body>
        
        <?php
        for($x=1; $x <=10; $x++){
            echo "<img onclick=plons(".$x.") id=fontijn".$x." src=golven.png width=25 height=25>";

        }

        ?>
        <img onclick="plons($x)" id="fontijn" src="golven.png" width="25" height="25">
         <img onclick="vuur()" id="fakkel" src="golven.png" width="25" height="25">
