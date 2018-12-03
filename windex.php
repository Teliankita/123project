<?php
$user="root";
$pass="";
$host="localhost";
$dbname="urbanclap";

$con=mysqli_connect($host,$user,$pass,$dbname);
if(!$con)
{
    die("connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
$f1 =$_FILES['file1']['name'];
$name=$_POST['name'];

$sql = "INSERT INTO image values('NULL','$f1','$name')";
if(mysqli_query($con,$sql))
{
    move_uploaded_file($_FILES['file1']['tmp_name'], "Pictures/$f1");

    echo "sussfully";
}
else{
    echo "error";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">


</head>
<style>
    
/* box */
.boxed {
    background-color: #fff;
    max-width: 1200px;
    margin: 0 auto !important;
    border-left: solid 1px #ccc;
    border-right: solid 1px #ccc;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .4), inset 0 0 2px rgba(255, 255, 255, .75);
}
/* boxed */
    </style>
<body>
  
     <br>
     <br>
<!-- banner -->
<div class="boxed">
     <!-- Fixed navbar -->
     <nav class="navbar navbar-default navbar-fixed-top" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                    aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" >Urban Clap</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                                <a href="windex.php">Wedding</a>
                            </li>
                           
                          
                            <li>
                                <a href="mindex.php">Medical</a>
                            </li>
                            <li>
                                <a href="htindex.php">Home Tutors</a>
                            </li>
                            <li>
                                <a href="hsindex.php">Home Shift</a>
                            </li>
                            
                            <li>
                                <a href="bindex.php">One Day Baby Care</a>
                            </li>
                   
                        </ul>
                   
               
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
<!-- end navbar -->
<center style="padding:100px;">

<form action="index.php" method="POST" enctype="multipart/form-data">
<h1>images 1</h1>
<br>
<input type="file" name="file1">
<br>
<h1>Name</h1>
<br>

<input type="text" name="name">
    <input type="submit" name="submit" value="upload">
    
     <a href="wcompany.php"><input type="delete" name="delete" value="Delete and View"></a>
    <br>
    <br>
    <br>
    <br>
    </form>
    </center>
    </div>
    </div>
    
</body>
</html>