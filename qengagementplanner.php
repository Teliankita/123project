<?php
include("include.php");
?>
<?php
if(isset($_POST["insert"]))
{
    $drop1=$_POST['drop1'];
    $drop2=$_POST['drop2'];
    $date=$_POST['date'];
    $drop3=$_POST['drop3'];
    $drop4=$_POST['drop4'];
    $phone=$_POST['phone'];
    

//store a image in database3


$sql="INSERT INTO engagementplanner (drop1,drop2,date,drop3,drop4,phone) VALUES ('$drop1','$drop2','$date','$drop3','$drop4',$phone)";
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
        <h1>Best Engagement Planners in Bangalore</h1>
    </center>
    <br>
    <br>
    <br>

    <div class="container">
        <div class="boxed">

            <form action="engagementplanner.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Where are you planning to have your engagement?</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <br>
                        <select name="drop1" id="drop1">
                            <option value="Bangalore">Bangalore</option>
                            <option value="Destination Wedding"> Destination Engagement </option>
                        </select>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>How many guests are you expecting at the engagement? (approx.)</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    <br>
                        <select name="drop2" id="drop2">
                            <option value="100-200">100-200</option>
                            <option value="200-400"> 200-400 </option>
                            <option value="400-600"> 400-600 </option>
                            <option value="600-1000"> 600-1000 </option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>When is the engagement?</h3>
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
                            <label for="team" style="color:black;">
                                <h3>What is the budget/scale of the engagement?</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4" ><br>
                        <select name="drop3" id="drop3"  style="width:170px" >
                            <option value="Basic Rs.5,00,000-10,00,000">Basic Rs.5,00,000-10,00,000</option>
                            <option value="Budget Rs.10,00,000-20,00,000"> Budget Rs.10,00,000-20,00,000</option>
                            <option value="Standard Rs.20,00,000-30,00,000">Standard Rs.20,00,000-30,00,000</option>
                            <option value="Premium >Rs.30,00,000">Premium >Rs.30,00,000</option>
                        </select>
                    </div>
                </div>
                    <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;"><h3>Where do you want the service?</h3></label>
                        </div>
                    </div>
                    
                    <div class="col-sm-3"><br>
                    <select name="drop4" id="drop4"  style="width:170px" >
                            <option value="200-250 people">Bangalore</option>
                            <option value="250-500 people">Outstation engagement: I will cover artist's travel expenses</option>
                        </select>
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