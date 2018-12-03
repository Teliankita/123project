
<?php
include("include.php");
?>
<?php
if(isset($_POST["insert"]))
{
$cname=$_POST['cname'];
$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

//store a image in database3
$sql="INSERT INTO acompany (cname,image) VALUES ('$cname','$file')";
$res=mysqli_query($con,$sql);
if($res){

}

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <form id="addsponser" action="admincomp.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" style="font-size:15px;color:black;">Enter Company Name</label>
                        <input type="text" class="form-control" id="cname" name="cname" placeholder="enter location name">
                    </div>
                    <div class="form-group">
                        <label for="email2" style="font-size:15px;color:white;">Images</label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="No Of File Choosen">
                    </div>
                    <button type="submit" name="insert" id="insert" class="btn btn-default" style="width: 160px; height: 48px;   background-color: #212121;    color: #fff;">Submit</button>
                </form>
            </div>
        </div>
    </div>



    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>

</html>