<?php
include("include.php");
$nameid=$_GET['nameid'];
?>
<?php
SESSION_START();
if(isset($_POST["insert"]))
{
$drop5=$_POST['drop5'];
    $drop1=$_POST['drop1'];
    $drop2=$_POST['drop2'];
    $drop3=$_POST['drop3'];
    $date=$_POST['date'];
    $phone=$_POST['phone'];

//store a image in database3


$sql="INSERT INTO bridalmakeup (name,drop1,drop2,drop3,date,phone) VALUES ('$drop5','$drop1','$drop2','$drop3','$date',$phone)";
$res=mysqli_query($con,$sql);
if($res){
echo "$phone";
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
    $drop3=$_POST['drop3'];
    $date=$_POST['date'];
    $phone=$_POST['phone'];
$edit=$_SESSION['edit'];
// mysqli_query($con,"DELETE * FROM  webs where id='$delid'");
$sql="UPDATE babycare  set drop1='$drop1',drop2='$drop2',drop3='$drop3',drop4='$drop4',date='$date',phone='$phone' where id='$edit'";
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

        /* boxed */
    </style>
</head>

<body>
    <center>
        <h2>Bridal Makeup Artists and Wedding Makeup Artists in Bangalore</h2>
    </center>
    <br>
    <br>
    <br>

    <div class="container">
        <div class="boxed">

            <form action="bridalmakeup.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Select your services</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <br>
                        <select name="drop1" id="drop1">
                            <option value="Hairstyling + Draping">Hairstyling + Draping</option>
                            <option value=" Subtle Makeup + Hair + Draping "> Subtle Makeup + Hair + Draping </option>
                            <option value=" Detailed Makeup + Hair + Draping "> Detailed Makeup + Hair + Draping </option>
                            <option value=" Occasion Makeup + Hair + Draping "> Occasion Makeup + Hair + Draping </option>
                        </select>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Occasion Makeup + Hair + Draping</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    <br>
                        <select name="drop2" id="drop2">
                            <option value="Traditional products">Traditional products</option>
                            <option value="HD Products">HD Products</option>
                            <option value="Airbrush Technique">Airbrush Technique</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Makeup with HD Products Includes Hairstyling & Draping</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4" >
                    <br>
                    <select name="drop3" id="drop3">
                            <option value="1 person Rs. 5,000">1 person Rs. 5,000</option>
                            <option value="2 people 10% Off Rs. 9,000">2 people 10% Off Rs. 9,000</option>
                            <option value="3 people 15% Off Rs. 12,750">3 people 15% Off Rs. 12,750</option>
                            <option value="4 people 20% Off Rs. 16,000">4 people 20% Off Rs. 16,000</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Makeup date?</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4" >
                    <br>
                        <input id="date" type="date" name="date" required="">
                    </div>
                </div>
                    <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;"><h3>Phone Number:</h3></label>
                        </div>
                    </div>
                    <div class="col-sm-3"><br>
                        <input type="tell" style="width:150px" name="phone" required="">
                    </div>
                
                </div>
            
                <button type="submit" name="insert" id="insert" class="btn btn-default" style="width: 160px; height: 48px; float:right;   background-color: #212121;    color: #fff;">Submit</button>
                </form>
        </div>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>

</html>