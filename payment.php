<?php
//"connect the database
include("include.php");
?>
<?php
// only admin can lohin the page
if(isset($_POST['uname']))
 $uname=$_POST['uname'];
 if(isset($_POST['pawd']))
 $pawd=$_POST['pawd'];
 if(isset($_POST['login'])){
    $uname=$_POST['uname'];
    $pawd=$_POST['pawd'];
$query=mysqli_query($con,"SELECT * FROM regis WHERE name='$uname' and pwd='$pawd'");
    if(mysqli_num_rows($query)>0){
  header("location:pay.php");
    }
    // end to terive the name and password
else{
   header("location:payment.php");
 }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <title>Payment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
        //  history.pushState(null, null, "/");     
    </script>
</head>

<body>
    <!-- <div class="boxed"> -->
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background: #fff;color:#000000;">
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
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                   
                    <li>
                        <a href="login.php">Login</a>
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
    <br>
    <br>
    <!--End of Navbar-->
    <center>
    <div class="container">
       
                <div class="box1">
                    <br>
                    <h2>Existing user Login</h2>
                    <br>
                    <form action="payment.php" method="POST">
                        <div clas="from-group">
                            <label for="name">username</label>
                            <input type="text" class="form-control" name="uname" style="width:200px"required/>
                        </div>
                        <div clas="from-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" style="width:200px" name="pawd" required />
                        </div>
                        <br>
                        <button onclick="myFunction()">
                        <input type="submit" name="login" value="Sign In"></button>
                    </form>
                </div>
                <br>
            </div>
    </div>
    </div>
    </center>    
 <!-- Footer -->
 <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>All pages</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="index.php;"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="blog.php;"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="login.php;"><i class="fa fa-angle-double-right"></i>Login</a></li>
                        <li><a href="signup.php;"><i class="fa fa-angle-double-right"></i>Register</a></li>
                        <li><a href="contact.php;"><i class="fa fa-angle-double-right"></i>Contact</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Services</h5>
                    <ul class="list-unstyled quick-links">
                    <li> <a href="sbaby.php"> <i class="fa fa-angle-double-right"></i>One Day Baby Care</a> </li>
                        <li><a href="index.php;"><i class="fa fa-angle-double-right"></i>Paint</a></li>
                        <li><a href="index.php;"><i class="fa fa-angle-double-right"></i>Veicial </a></li>
                        <br>
                       </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Services</h5>
                    <ul class="list-unstyled quick-links">
                    <li><a href="swedding.php"> <i class="fa fa-angle-double-right"></i>Wedding</a></li>
                    <li><a href="scityguid.php"> <i class="fa fa-angle-double-right"></i>City Guide</a></li>
                            <li><a href="smedical.php"> <i class="fa fa-angle-double-right"></i>Medical</a> </li>
                            <li><a href="shometution.php"> <i class="fa fa-angle-double-right"></i>Home Tutors</a> </li>
                            <li> <a href="shomeshift.php"> <i class="fa fa-angle-double-right"></i>Home Shift</a> </li>
                       <!-- <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <hr>
            </div>

        </div>
    </section>
    <!-- ./Footer -->
    <script>
function myFunction() {
    alert("Hello! You are Success Fully Login Your Account!");
}
</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
</body>

</html>