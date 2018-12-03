
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
     if($uname=="admin" && $pawd=="admin"){
       header("location:adminprofile.php");
    }
              //end admon can only login the page
              elseif($uname=="vendor" && $pawd="vendor")
              {
                header("location:windex.php");
              }
             //retrive name and password from the database
            else{
    $uname=$_POST['uname'];
    $pawd=$_POST['pawd'];
$query=mysqli_query($con,"SELECT * FROM regis WHERE name='$uname' and pwd='$pawd'");
    if(mysqli_num_rows($query)>0){
  // header("location:index.php");
  echo "<script> alert('You has successfully Done.')</script>";
    }
    // end to terive the name and password
else{
   header("location:login.php");
 }

}
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>
   /* bannerindex page */

    .bgimage {
        width: 100%;
        height: 600px;
        /* background-color:#c6ffb3; */
        background: url("img/n1.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }

    .bgimage h5 {
        color: #fff;
        text-shadow: 1px 1px #333;
    }

    /* banner end */
  body {
    margin: 0;
    padding: 0;
    /* background-color: #f5f5f5; */
    width:100%;
    background-size: cover; */
     font-family: sans-serif;
  }
  
  .box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 19rem;
    padding: 2.0rem;
    box-sizing: border-box;
    background: rgba(0, 0, 0, 0.6);
    border-radius: 0.625rem;
  }
  
  .box h2 {
    margin: 0 0 1.875rem;
    padding: 0;
    color: #fff;
    text-align: center;
  }
  
  .box .inputBox {
    position: relative;
  }
  
  .box .inputBox input {
    width: 90%;
    padding: 0.625rem 0;
    font-size: 1rem;
    color: #fff;
    letter-spacing: 0.062rem;
    margin-bottom: 1.875rem;
    border: none;
    border-bottom: 0.065rem solid #fff;
    outline: none;
    background: transparent;
  }
  
  .box .inputBox label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 0.625rem 0;
    font-size: 1rem;
    color: #fff;
    pointer-events: none;
    transition: 0.5s;
  }
  
  .box .inputBox input:focus ~ label,
  .box .inputBox input:valid ~ label,
  .box .inputBox input:not([value=""]) ~ label {
    top: -1.125rem;
    left: 0;
    color: #03a9f4;
    font-size: 0.75rem;
  }
  
  .box input[type="submit"] {
    border: none;
    outline: none;
    color: #fff;
    background-color: #03a9f4;
    padding: 0.625rem 1.25rem;
    cursor: pointer;
    border-radius: 0.312rem;
    font-size: 1rem;
  }
  
  .box input[type="submit"]:hover {
    background-color: #1cb1f5;
  }
  
/* end login page */


  </style>
<body>
        <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background: #fff;color:#000000;">
        <div class="container">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="index.php">Urban Clap</a>
            </div>
            
            <!--/.nav-collapse -->
        </div>
    </nav>

    <!-- navend -->
    <section class="bgimage">
        <div class="container-fluid">

  <form action="login.php" method="POST">
    <div class="box">
      <h2>Login</h2>
      <div class="inputBox">
        <input type="text" name="uname" required value="">
        <label>username</label>
      </div>
      <div class="inputBox">
        <input type="password" name="pawd" required value="">
        <label>password</label>
      </div>
      <button onclick="myFunction()">
      <input type="submit" name="login" value="Sign In"> </button>
    </div>
  </form>
  </div> 
    </section>
   
    <script>
function myFunction() {
    alert("Hello! You are Success Fully Login Your Account!");
}
</script>
</body>

</html>