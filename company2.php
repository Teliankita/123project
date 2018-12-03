
<?php
$user="root";
$pass="";
$host="localhost";
$dbname="urbanclap";

$con=mysqli_connect($host,$user,$pass,$dbname);
if(!$con)
{
    die("connection failed: " . mysqli_connect_error());
}
?>
<!-- // include("include.php");
// ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
  
     <br>
     <br>
<!-- banner -->
<div class="boxed">
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
                    <li>
                        <a href="signup.php">Signup</a>
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

<header class="header">
    <br>
    <h1 class="header__title">ONE DAY BABY CARE SERVICE </h1><br>
    
    <!-- <a href="http://praliedutzel.com/a-guide-to-hero-images/" target="_blank"style="width:200px;"  class="btn btn-default" ><h4>Create</h4></a> -->
</ul>
  </header>
        <!-- services image -->
        <div class=" row">
            <br>
            <!-- <div class=" col-sm-4" > -->
                <!-- <div class="col-xs-12 img-outer" style="margin: 20px 0;">
                    <div class="hovereffect"> -->
                    <?php 
                $sql="SELECT * FROM 1image";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                ?>
                          <div class="col-md-4" class="z-img">
                        <img src="<?php echo 'Pictures/'. $row['file1']; ?>" alt="<?php echo 'Pictures/'. $row['file2'] ?>" height="200" width="200" /> 
                    <a href="qbabycare.php?nameid=<?php echo $row['id']; ?>">    <?php  echo '<h2>'.$row['name'].'</h2>'; ?></a>
                        </div>
                     
                        <br>  
                <?php } ?>
               
                    <!-- </div>
                </div> -->
            <!-- </div> -->

      
      
           
        <!-- like -->

<hr>
    
    </div>
    <footer class="container " style="padding:32px;font-size:20px;background-color:black;color:#fff; width:100%;">
        <aside id="footer-widgets" style="background: #000000;color:#fff;">
           <div class="row">
                <center>
                    <a href="https://www.facebook.com" target="_blank">
                        <i class="fab fa-facebook-square"> </i>
                    </a>

                    <a href="https://www.instagram.com" target="_blank">
                        <i class="fab fa-instagram"> </i>
                    </a>

                    <a href="https://twitter.com" target="_blank">
                        <i class="fab fa-twitter-square"> </i>
                    </a>

                    <a href="https://www.linkedin.com" target="_blank">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>

                    <a href="https://www.gmail.com" target="_blank">
                        <i class="fas fa-envelope-square"></i>
                    </a>
                </center>
            </div>
       </aside>
           
     </footer>
    <script>
        
        // img
        $(document).ready(function () {
            $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function () {
                var $this = $(this),
                    c = $this.data('count');
                if (!c) c = 0;
                c++;
                $this.data('count', c);
                $('#' + this.id + '-bs3').html(c);
            });
            $(document).delegate('*[data-toggle="lightbox"]', 'click', function (event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
        });

        $(document).ready(function () {
            $('.hovereffect').hover(function () {
                $(this).children('.z-text').css('top', '0').fadeToggle(600);
            });
        });

    </script>
</body>

</html>