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
    $age=$_POST['age'];
    $drop3=$_POST['drop3'];
    $date=$_POST['date'];
    $phone=$_POST['phone'];

//store a image in database3


$sql="INSERT INTO medical (name,drop1,drop2,age,drop3,date,phone) VALUES ('$drop5','$drop1','$drop2','$age','$drop3','$date',$phone)";
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
    $age=$_POST['age'];
    $drop3=$_POST['drop3'];
     $date=$_POST['date'];
    $phone=$_POST['phone'];
$edit=$_SESSION['edit'];
// mysqli_query($con,"DELETE * FROM  webs where id='$delid'");
$sql="UPDATE medical  set drop1='$drop1',drop2='$drop2',drop3='$drop3',date='$date',age='age',phone='$phone' where id='$edit'";
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
<?php 
                $sql="SELECT * FROM 6image WHERE id='".$nameid."'";
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
            <form action="qmedical.php?nameid=<?php echo $nameid ?>" method="POST" enctype="multipart/form-data" onsubmit="return myfun()">
                <div class="row">
                <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Company Name</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <br>
                        <select name="drop5" id="drop5">
                        <option>
                           <?php 
                $sql="SELECT * FROM 3image WHERE id='".$nameid."'";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                ?>
               <center> <?php  echo '<h2>'.$row['name'].'</h2>'; ?></a> </center>                    
                        <br>  
                <?php } ?></option>
                        </select>
                    </div>
                
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Where do you want the service?</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <br>
                        <select name="drop1" id="drop1">
                            <option value="Home">Home</option>
                            <option value="Office">Office</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>How many members do you need the service?</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4" ><br>
                        <select name="drop2" id="drop2"  style="width:170px" >
                            <option value="1 member">1 member</option>
                            <option value="2 members">2 members</option>
                            <option value="More than 2 members">More than 2 members</option>
                        </select>
                    </div>
                </div>
                    <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;"><h3>Age of the member or child who need service?</h3></label>
                        </div>
                    </div>
                    
                    <div class="col-sm-3"><br>
                        <input type="tell" style="width:150px" name="age" required="">
                    </div>
                    </div>
                    <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;"><h3>Approximate budget for service</h3></label>
                        </div>
                    </div>
                    
                    <div class="col-sm-3"><br>
                    <select name="drop3" id="drop3"  style="width:170px" >
                            <option value="Depends on the service">Depends on the service</option>
                            <option value="starts from Rs.500">starts from Rs.500</option>
                        </select>
                    </div>
                    </div>
                    <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Service require date?</h3>
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
            
                <div class="form-group">
                <center>
                        <a href="aupdate5.php?phone=<?php echo $_POST['phone']?>"><b><i style="color:black;font-size:120%">Delete  and edit Category</i></b></a></center>
                    </div>
   <button type="submit" name="insert" class="btn btn-default" style="width: 160px; height: 48px; float:right;   background-color: #212121;    color: #fff;">Submit</button></a>
                <button type='Update' class='btn btn-default' name='update' style="width: 160px; height: 48px; float:right;   background-color: #212121;    color: #fff;">Update</button>
                </form>
             
                <a href="index.php"><button type="submit" class="btn btn-default" style="width: 160px; height: 48px; float:left;   background-color: #212121;    color: #fff;">Back</button></a>
        </div> </form>
        </div>
    </div>
    <center>
   <a href="payment.php"><button type="submit" class="btn btn-default" style="width: 160px; height: 48px;    background-color: #212121;    color: #fff;">Conform Pay</button></a>
   </center>
    
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