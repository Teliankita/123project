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
            <th>guests</th>
            <th>budget</th>
            <th>date</th>
            <th>phone</th>
            <th colspan='2'>Actions</th>
</tr>
<?php
include("include.php");
$phone=$_GET['phone'];
?>
<?php
SESSION_START();

//delete query
if(isset($_REQUEST["delid"]))
{
    $delid=$_REQUEST["delid"];
    // mysqli_query($con,"DELETE * FROM  webs where id='$delid'");
    $sql="DELETE FROM babycare where id='$delid'";
    $res=mysqli_query($con,$sql);
    if($res){
    }
}
//end delete query
 if(isset($_GET["edit"]))
 {
     $_SESSION['edit']=$_GET['edit'];
     $edit=$_SESSION['edit'];
 }

//select query
$query=mysqli_query($con,"SELECT * FROM babycare where phone='".$phone."'");
while ($row = mysqli_fetch_array($query)) { 
echo"<tr>
<td>".$row['id']."</td>
<td>".$row['drop1']."</td>
<td>".$row['drop2']."</td>
<td>".$row['date']."</td>
<td>".$row['phone']."</td>
<td>
<a href='aupdate.php?delid=".$row['id']."'>Delete</a>
</td>
<td>
<a href='babycare.php?edit=".$row['id']."'>Edit</a>
</td>
</tr>";
}
  ?>
  </option>
</select>
</table>
</body>
</html>