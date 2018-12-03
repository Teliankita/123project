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
// history.pushState(null,null,location.href);
// window.onpopstate=function(){
//     history.go(1);
// };
// </script>
 <!--end disable browser back button-->



</head>
<body>




   <!-- Fixed navbar -->
   <nav class="navbar navbar-default navbar-fixed-top" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Urban Clap</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                            <li class="dropdown">
                            <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Services
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="wboardb.php">Wedding</a>
                                </li>

                                <li>
                                    <a href="scityguid.php">City Guide</a>
                                </li>
                                <li>
                                    <a href="mboardb.php">Medical</a>
                                </li>
                                <li>
                                    <a href="htboardb.php">Home Tutors</a>
                                </li>
                                <li>
                                    <a href="hsboardb.php">Home Shift</a>
                                </li>

                                <li>
                                    <a href="bboardb.php">One Day Baby Care</a>
                                </li>
                                <!-- <li>
                                <a href="https://getbootstrap.com/examples/theme/#"></a>fgvhb</li>
                            <li>
                                <a href="https://getbootstrap.com/examples/theme/#">One more separated link</a>
                            </li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>

        <!-- navend -->


<div class="container">
    <h3 style="padding-top: 30px; text-align: center; text-decoration: underline; font-weight: bolder; color: #2e7af4">Admin Dashboard for Medical services in Banglore, Hassan & Mysure  </h3>
    <div class="row">
    <div class="col-md-1"></div>
        <div class="col-md-10">

                <table class="table table-striped table-hover table-responsive table-bordered">
                        <tr class="success">
                       <th>Medical</th>
                            <th>Event Type</th>
                            <th>Person</th>
                            <th>Budget</th>
                            <th>Date</th>
                            <th>Phone Number</th>
                        </tr>
 <?php
/* select and fetch the data*/
$query=mysqli_query($con,"SELECT * FROM medical");
$res=mysqli_num_rows($query); //count the number of rows 
//to show the data in a next page
    while($row = mysqli_fetch_assoc($query)) {
/* end select and fetch the data*/
              echo "<tr>
                            <td>{$row['name']}</td>
                            <td>{$row['drop1']}</td>
                            <td>{$row['drop2']}</td>
                            <td>{$row['drop3']}</td>
                           
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