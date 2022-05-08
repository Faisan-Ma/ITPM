<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Hospital Management</title>
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	 <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">
    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  </head>

<section id="header"  class="cd-secondary-nav">
	<nav class="navbar navbar-default"><a href="index.php">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
              <img src="images/2.jpg" width="15%"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a><span class="liner_1">  HEALTHY  </span><span class="liner_2">LANKA</span></a>
            </div>
        <!-- /.container-fluid -->
    </nav>
</section>
<a href="index.php"><img src="images/1.jpg" width="100%"></a>

<section id="footer_main" class="clearfix">
	 <div class="col-sm-12 space_all">
	  <div class="footer_main_1"><br>
	  <h2> <center><a href="adminlogin.php">Admin Login</a> || <a href="doctorlogin.php">Doctor Login</a></center></h2>
	<br> 
  </div>
	 </div>
</section>
</body>

<script type="text/javascript">
	// Generated by CoffeeScript 1.7.1
$(document).ready(function() {
  $(".carousel").carousel({
    interval: 2000
  });
  $(".carousel").on("slid", function() {
    var to_slide;
    to_slide = $(".carousel-item.active").attr("data-slide-no");
    $(".myCarousel-target.active").removeClass("active");
    $(".carousel-indicators [data-slide-to=" + to_slide + "]").addClass("active");
  });
  $(".myCarousel-target").on("click", function() {
    $(this).preventDefault();
    $(".carousel").carousel(parseInt($(this).attr("data-slide-to")));
    $(".myCarousel-target.active").removeClass("active");
    $(this).addClass("active");
  });
});
	</script>      
</html>
