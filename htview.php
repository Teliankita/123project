<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

       



</head>
<body>


    <table border='1'>
        <tr>
        <th>id</th>
        <th>name</th>
            <th>guests</th>
            <th>budget</th>
            <th>date</th>
            <th>phone</th>
</tr>

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
$name=$_GET['name'];
?>
<?php
//select query
$query=mysqli_query($con,"SELECT * FROM hometutors WHERE name='".$name."'");
while ($row = mysqli_fetch_array($query)) { 
echo"<tr>
<td>".$row['id']."</td>
<td>".$row['name']."</td>
<td>".$row['drop1']."</td>
<td>".$row['drop2']."</td>
<td>".$row['date']."</td>
<td>".$row['phone']."</td>
</tr>";
}
  ?>
  </option>
</select>
</table>
</body>
</html>