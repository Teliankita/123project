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

$sql = "INSERT INTO 5image values('NULL','$f1','$name')";
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST" enctype="multipart/form-data">
<h1>images 1</h1>
<input type="file" name="file1">
<h1>Name</h1>
<input type="text" name="name">
    <input type="submit" name="submit" value="upload">
    <a href="company.php"><input type="delete" name="delete" value="delete"></a>
    </form>
</body>
</html>