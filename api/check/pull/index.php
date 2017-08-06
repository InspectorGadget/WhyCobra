<!DOCTYPE html>
<!--
Copyright (C) 2017 RTG
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title> CobraAPI </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        input {
            text-align: center;
        }

        table, th {
            text-align: center;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-default">

    <div class="container-fluid">

        <div class="navbar-header">

            <a class="navbar-brand" href="#"> CobraAPI </a>

        </div>

        <ul class="nav navbar-nav navbar-left">

            <li> <a href="../index.php"> Home </a> </li>
            <li class="active"> <a href="index.php"> Checker </a> </li>
            <li> <a href="buy/"> Purchase Plugins </a> </li>

        </ul>

    </div>

</nav>

<center>

    <br><br>

    <?php

        echo "<table width='30%' border='1'>";


        echo "<tr>";

        echo "<th> Registered Servers </th>";
        echo "<th> Credits </th>";

        echo "</tr>";

        $file = new SQLite3("../../../database/sqlite.db");
        $sql = "SELECT * FROM database";
        $res = $file->query($sql);

        while ($row = $res->fetchArray(1)) {

            echo "<tr>";
            echo "<td>" . $row['ip'] . "</td>";
            echo "<td>" . $row['credits'] . "</td>";
            echo "</tr>";

        }

        echo "</table>";


    ?>


</center>

</body>