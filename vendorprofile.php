<!DOCTYPE html>
<html lang="en">

<head>
    <title> Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css" />
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body {
    margin:0;
    padding:0;
    font-family:sans-serif;
    background:#fbfbfb;
}
.card {
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    width:300px;
    min-height:400px;
    background:#fff;
    box-shadow:0 20px 50px rgba(0,0,0,.1);
    border-radius:10px;
    transition:0.5s;
}
.card:hover {
    box-shadow:0 30px 70px rgba(0,0,0,.2);
}
.card .box {
    position:absolute;
    top:50%;
    left:0;
    transform:translateY(-50%);
    text-align:center;
    padding:20px;
    box-sizing:border-box;
    width:100%;
}
.card .box .img {
    width:120px;
    height:110px;
    margin:0 auto;
    border-radius:50%;
    overflow:hidden;
}
.card .box .img img {
    width:100%;
    height:100%;
}
.card .box h2 {
    font-size:20px;
    color:#262626;
    margin:20px auto;
}
.card .box h2 span {
    font-size:14px;
    background:#e91e63;
    color:#fff;
    display:inline-block;
    padding:4px 10px;
    border-radius:15px;
}
.card .box p {
    color:#262626;
}
.card .box span {
    display:inline-flex;
}
.card .box ul {
    margin:0;
    padding:0;
}
.card .box ul li {
    list-style:none;
    float:left;
}
.card .box ul li a {
    display:block;
    color:#aaa;
    margin:0 10px;
    font-size:20px;
    transition:0.5s;
    text-align:center;
}
.card .box ul li:hover a {
    color:#e91e63;
    transform:rotateY(360deg);
}
/* .container{
    margin-left:-15px;
    margin-right:-15px;
} */
</style>
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="bcompany.php" class="w3-bar-item w3-button">One Day Baby Care</a>
  <a href="hscompany.php" class="w3-bar-item w3-button">Home Shift</a>
  <a href="htcompany.php" class="w3-bar-item w3-button">Home Tutors</a>
  <a href="mcompany.php" class="w3-bar-item w3-button">Medical</a>
  <a href="wcompany.php" class="w3-bar-item w3-button">Wedding</a>
 
</div>
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
  <div class="w3-container">
    <h1>Vendor Page</h1>
  </div>
</div>
    <!-- navend -->
<div class="card">
    <div class="box">
        <div class="img">
            <img src="https://www.planwallpaper.com/static/images/cool-wallpaper-5_G6Qe1wU.jpg">
        </div>
        <h2>Prakash Prajapati<br><span>Web Graphic Designer</span></h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et.</p>
        <span>
            <ul>
                <li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="https://www.google-plus.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedincom"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </span>
        <a href="windex.php">
        <button type="submit" name="insert" id="insert" class="btn btn-default" style="width: 140px; height: 38px; float:right;   background-color: #212121;    color: #fff;">BacK</button>
   </a>
    </div>
</div>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html>