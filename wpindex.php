<?php
SESSION_START();
include("include.php");
$nameid=$_GET['nameid'];
?>
<?php
if(isset($_POST["insert"]))
{
$drop5=$_POST['drop5'];
$date=$_POST['date'];
$drop2=$_POST['drop2'];
$drop3=$_POST['drop3'];
$drop4=$_POST['drop4'];
$drop6=$_POST['drop6'];
$phone=$_POST['phone'];

//store a image in database3


$sql="INSERT INTO wphotohsn (name,date,drop2,drop3,drop4,drop6,phone) VALUES ('$drop5','$date','$drop2','$drop3','$drop4','$drop6','$phone')";
$res=mysqli_query($con,$sql);
if($res){  
}
}
if(isset($_GET["edit"]))
 {
     $_SESSION['edit']=$_GET['edit'];
     $edit=$_SESSION['edit'];
 }
if(isset($_POST['update'])){
    $drop1=$_POST['drop1'];
    $drop2=$_POST['drop2'];
    $date=$_POST['date'];
    $phone=$_POST['phone'];
$edit=$_SESSION['edit'];
// mysqli_query($con,"DELETE * FROM  webs where id='$delid'");
$sql="UPDATE mwplan  set drop1='$drop1',drop2='$drop2',date='$date',phone='$phone' where id='$edit'";
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
    <style>
        body {
            padding: 50px;
        }

        /* box */

        .boxed {
            background-color: #fff;
            max-width: 1000px;
            margin: 0 auto !important;
            border-left: solid 1px #ccc;
            border-right: solid 1px #ccc;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .4), inset 0 0 2px rgba(255, 255, 255, .75);
        }


        .row {
            margin-right: 0px;
            margin-left: 0px;
        }
.bg1{
    background-image: url('img/nature1.jpg');
    color:blue;
}

        /* boxed */
    </style>
</head>

<body class="bg1">
<?php 
                $sql="SELECT * FROM serviceimg1 WHERE id='".$nameid."'";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                ?>
               <center> <?php  echo '<h2>'.$row['name'].'</h2>'; ?></a> </center>                    
                        <br>  
                <?php } ?>
    <br>
    <br>
    <br>

    <div class="container">
        <div class="boxed">

            <form action="wphoto.php?nameid=<?php echo $nameid ?>" method="POST" enctype="multipart/form-data" onsubmit="return myfun()">
            <br>
            <br>
            <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Wedding Photographer:</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <br>
                        <select name="drop5" id="drop5">
                        <option> <?php 
                $sql="SELECT * FROM serviceimg1 WHERE id='".$nameid."'";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                ?>
               <center> <?php  echo '<h2>'.$row['name'].'</h2>'; ?></a> </center>                    
                        <br>  
                <?php } ?></option>
                        </select>
                    </div>
                </div>   
            <hr>
            <br>
                               <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>What all functions do you require the photographer for?</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4" >
                        <select name="drop2" id="drop2"  style="width:170px" >
                        <?php

$query=mysqli_query($con,"SELECT * FROM photoque");
while ($row = mysqli_fetch_array($query))
{
?>
                               <option> <?php echo $row["fname"]; ?></option>
                               <?php } ?>

                        </select>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Your Budget per event:</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4" >
                        <select name="drop3" id="drop3"  style="width:170px" >
                        <?php

$query=mysqli_query($con,"SELECT * FROM photoque");
while ($row = mysqli_fetch_array($query))
{
?>
                               <option> <?php echo $row["budget"]; ?></option>
                               <?php } ?>

                        </select>
                    </div>
                </div>

                <hr>
          
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;"><h3>Cinematography video required:</h3></label>
                        </div>
                    </div>
                    <div class="col-sm-4" >
                        <select name="drop4" id="drop4"  style="width:170px" >
                        <?php

$query=mysqli_query($con,"SELECT * FROM photoque");
while ($row = mysqli_fetch_array($query))
{
?>
                               <option> <?php echo $row["fvideo"]; ?></option>
                               <?php } ?>

                        </select>
                </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;"><h3>Expected number of guests:</h3></label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                    <select name="drop6" id="drop6"  style="width:170px" >
                    <?php

$query=mysqli_query($con,"SELECT * FROM photoque");
while ($row = mysqli_fetch_array($query))
{
?>
                               <option> <?php echo $row["guest"]; ?></option>
                               <?php } ?>

                        </select>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Wedding/Event Date</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <br>
                        <div class="col-sm-4" style="width:170px">
                        <input id="date" type="date" name="date" required="">
                    </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;"><h3>Phone Number:</h3></label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                       <input type="phone number" class="form-control" id="phone" name="phone" value="">
                       <span id="message" style="color:red"></span>
                   
                    </div>
</div>
                    <br>
                </div>
                <div class="form-group">
                        <a href="update1.php?phone=<?php echo $_POST['phone']?>"><b><i style="color:black;font-size:120%">Delete  and edit Category</i></b></a>
                    </div>
                <button type='Update' class='btn btn-default' name='update'>Update</button>
                <button type="submit" name="insert" id="insert" class="btn btn-default" style="width: 160px; height: 48px; float:right;   background-color: #212121;    color: #fff;">Submit</button>
                </form>
                <a href="index.php"><button type="submit" class="btn btn-default" style="width: 160px; height: 48px; float:left;   background-color: #212121;    color: #fff;">Back</button></a>
        </div>
    </div>
 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
function myfun(){
    var a = document.getElementById("phone").value;
    if(a==""){
        document.getElementById("message").innerHTML="**pls fill mobile number";
        return false;
    }
    if(isNaN(a)){
        document.getElementById("message").innerHTML="**enter only numeric values";
        return false;
    }
    if(a.length<10) {
        document.getElementById("message").innerHTML="**mobile number must be 10 digit";
        return false;
    }
    if(a.length>10){
        document.getElementById("message").innerHTML="**mobile number must be 10 digit";
        return false;
    }
    }
</script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>

</html>