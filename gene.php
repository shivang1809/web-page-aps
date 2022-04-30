<?php
require 'db.php';
$fptr = fopen("main.html","w");
fwrite($fptr,'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Staff Detail</title>
    <script src="nav.js"></script>
</head>
<body>
<header>
        <nav class="navbar">
            <ul><div class="name">
                <h1>Army Public School</h1>
                <h2>Jalandhar Cantt</h2>
                </div>
                <img src="./image/bar.png" class="bar" id="bar" width="50px" onclick="navFunction()">
                <img src="./image/bar.png" class="bar2" id="bar2" width="50px" onclick="navFunction1()">
                <div class="linkbox" id="linkbox">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                </div>
            </ul>
        </nav>
    </header>
    <div class="container">
        <table align="center">
            <tr>
                <th>Sr.No</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Qualification</th>
            </tr>
            <tr class="data" style="color: rgb(229, 50, 5);">
                <td>1</td>
                <td>Dr. Saksham Singh</td>
                <td>Principal </td>
                <td>MA (Hist) M. Ed, Ph.D, MBA (HR)</td>
            </tr>
            <tr class="data" style="color: rgb(229, 50, 5);">
                <td>2</td>
                <td>Ms Mandeep Kaur Talwar </td>
                <td>Vice Principal </td>
                <td>MA, B Ed</td>
            </tr>
            <tr>
                <th colspan="4" class="ecell">-</th>
            </tr>
            <tr>
                <th colspan="4"><u>Teaching Staff</u></th>
            </tr>
            <tr>
                <th>Sr.No</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Qualification</th>
            </tr>
            <tr>
                <th colspan="4" class="subcat"><u>PGTs<u></th>
            </tr>');
            fwrite($fptr,"\n");
            $sql = "SELECT * FROM `details` WHERE category='pgt'";
            $result = mysqli_query($conn, $sql);
            $srno = 1;
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['Name'];
                $desi = $row['Designation'];
                $qual = $row['Qualification'];
                fwrite($fptr, '<tr class="data">
                <td>'.$srno.'</td>
                <td>'.$name.'</td>
                <td>'.$desi.' </td>
                <td>'.$qual.'</td>
            </tr>');
            $srno = $srno+1;
            }
            fwrite($fptr,"\n");
            fwrite($fptr, '<tr>
            <th colspan="4" class="ecell">-</th>
        </tr>
        <tr>
            <th colspan="4" class="subcat"><u>TGTs<u></th>
        </tr>');
        fwrite($fptr,"\n");
            $sql = "SELECT * FROM `details` WHERE category='tgt'";
            $result = mysqli_query($conn, $sql);
            $srno = 1;
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['Name'];
                $desi = $row['Designation'];
                $qual = $row['Qualification'];
                fwrite($fptr, '<tr class="data">
                <td>'.$srno.'</td>
                <td>'.$name.'</td>
                <td>'.$desi.' </td>
                <td>'.$qual.'</td>
            </tr>');
            $srno = $srno+1;
            }
            fwrite($fptr,"\n");
            fwrite($fptr, '<tr>
            <th colspan="4" class="ecell">-</th>
        </tr>
        <tr>
            <th colspan="4" class="subcat"><u>PRTs<u></th>
        </tr>');
        fwrite($fptr,"\n");
            $sql = "SELECT * FROM `details` WHERE category='prt'";
            $result = mysqli_query($conn, $sql);
            $srno = 1;
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['Name'];
                $desi = $row['Designation'];
                $qual = $row['Qualification'];
                fwrite($fptr, '<tr class="data">
                <td>'.$srno.'</td>
                <td>'.$name.'</td>
                <td>'.$desi.' </td>
                <td>'.$qual.'</td>
            </tr>');
            $srno = $srno+1;
            }
            fwrite($fptr,"\n");
            fwrite($fptr, '<tr>
            <th colspan="4" class="ecell">-</th>
        </tr>
        <tr>
            <th colspan="4" class="subcat"><u>Adm Staff<u></th>
        </tr>');
        fwrite($fptr,"\n");
            $sql = "SELECT * FROM `details` WHERE category='as'";
            $result = mysqli_query($conn, $sql);
            $srno = 1;
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['Name'];
                $desi = $row['Designation'];
                $qual = $row['Qualification'];
                fwrite($fptr, '<tr class="data">
                <td>'.$srno.'</td>
                <td>'.$name.'</td>
                <td>'.$desi.' </td>
                <td>'.$qual.'</td>
            </tr>');
            $srno = $srno+1;
            }
            fwrite($fptr,"\n");
            fwrite($fptr, '<tr>
            <th colspan="4" class="ecell">-</th>
        </tr>
        <tr>
            <th colspan="4" class="subcat"><u>Non-Teaching Staff<u></th>
        </tr>');
        fwrite($fptr,"\n");
            $sql = "SELECT * FROM `details` WHERE category='nts'";
            $result = mysqli_query($conn, $sql);
            $srno = 1;
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['Name'];
                $desi = $row['Designation'];
                $qual = $row['Qualification'];
                fwrite($fptr, '<tr class="data">
                <td>'.$srno.'</td>
                <td>'.$name.'</td>
                <td>'.$desi.' </td>
                <td>'.$qual.'</td>
            </tr>');
            $srno = $srno+1;
            }
            fwrite($fptr,"\n");
            fwrite($fptr, '<tr>
            <th colspan="4" class="ecell">-</th>
        </tr>
        <tr>
            <th colspan="4" class="subcat"><u>Group \'D\' Staff<u></th>
        </tr>');
        fwrite($fptr,"\n");
            $sql = "SELECT * FROM `details` WHERE category='gd'";
            $result = mysqli_query($conn, $sql);
            $srno = 1;
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['Name'];
                $desi = $row['Designation'];
                $qual = $row['Qualification'];
                fwrite($fptr, '<tr class="data">
                <td>'.$srno.'</td>
                <td>'.$name.'</td>
                <td>'.$desi.' </td>
                <td>'.$qual.'</td>
            </tr>');
            $srno = $srno+1;
            }
            fwrite($fptr,"\n");
            fwrite($fptr, '<tr>
            <th colspan="4" class="ecell">-</th>
        </tr>
    </table>
</div>
<footer>
    <p>©APSJalandharCantt'.date("Y").'</p>
    <p class="credit">Designed By: Shivang Yadav</p>
</footer>
</body>

</html>');

fclose($fptr);
?>
        