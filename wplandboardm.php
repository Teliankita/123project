<?php
include("include.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <title>Admin Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script>
<!--disable browser back button-->
<script type="text/javascript">
history.pushState(null,null,location.href);
window.onpopstate=function(){
    history.go(1);
};
</script>
<!--end disable browser back button-->

<style>

.sidenav {
    width: 130px;
    position: fixed;
    z-index: 1;
    top: 20px;
    left: 10px;
    background: #eee;
    overflow-x: hidden;
    padding: 8px 0;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 15px;
    color: #2196F3;
    display: block;
}

.sidenav a:hover {
    color: #064579;
}
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

</head>
<body>


<div class="sidenav">
  <a href="wplandboardb.php">Wedding Planner in Banglore</a>
  <a href="wplandboardm.php">Wedding Planner in Mysuru</a>

</div>


<div class="container">
    <h3 style="padding-top: 30px; text-align: center; text-decoration: underline; font-weight: bolder; color: #2e7af4">Admin Dashboard for Best Wedding Planer in Banglore    </h3>
    <div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-10">

                <table class="table table-striped table-hover table-responsive table-bordered">
                        <tr class="success">
                       <th>Wedding Planner</th>
                            <th>Event Type</th>
                            <th>Budget</th>
                            <th>Date</th>
                            <th>Phone Number</th>
                        </tr>
 <?php
/* select and fetch the data*/
$query=mysqli_query($con,"SELECT * FROM mwplan");
$res=mysqli_num_rows($query); //count the number of rows 
//to show the data in a next page
    while($row = mysqli_fetch_assoc($query)) {
/* end select and fetch the data*/
              echo "<tr>
                            <td>{$row['drop5']}</td>
                            <td>{$row['drop1']}</td>
                            <td>{$row['drop2']}</td>
                            <td>{$row['date']}</td>
                            <td>{$row['phone']}</td>
                        </tr>";
}
             echo"</table>";
?>

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