
<?php
include("include.php");
?>
<?php
if(isset($_POST['drop1']))
$drop1=$_POST['drop1'];
if(isset($_POST['login'])){
    if($drop1=="Manglore"){
        header("location:wphotocomp1.php");
    }
    elseif($drop1=="Hassan")
    {

            header("location:wphotocomp2.php");
        }
    else{
        header("location:company2.php");
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
    <title>location</title>
    <style>
        body {
            padding: 50px;
        }

        /* box */

        .boxed {
            background-color: #fff;
            max-width: 550px;
            margin: 0 auto !important;
            border-left: solid 1px #ccc;
            border-right: solid 1px #ccc;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .4), inset 0 0 2px rgba(255, 255, 255, .75);
        }

        /* boxed */
    </style>
</head>
<body>
    <center>
        <h1>Select Your Location</h1>
    </center>
    <div class="container">
        <div class="boxed">
<br>
<br>
            <form action="wphotolocation.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                <div class="col-sm-2"></div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                            <center>
                                <h3>Enter Your Location</h3></center>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                    <br>
                        <select name="drop1" id="drop1" required="">
                        <?php

$query=mysqli_query($con,"SELECT * FROM aphotolocation");
while ($row = mysqli_fetch_array($query))
{
?>
                            <option> <?php echo $row["lname"]; ?></option>
<?php } ?>

                        </select>
                        
                    </div>
                </div>
                <br>
                    <br>
                    <input type="submit" name="login" value="submit">
         </form>
     </div>
 </div>
 </body>
 </html>
