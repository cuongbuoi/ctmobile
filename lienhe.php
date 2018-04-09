
<!DOCTYPE html>
<html lang="en">

 <head> <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
    <meta name="author" content="INSPIRO" /> 
    <meta name="description" content="Themeforest Template Polo"> 
    <!-- Document title --> 
    <title>Chi tiết sản phẩm</title> 
    <!-- Stylesheets & Fonts --> 
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" /> 
    <link href="css/plugins.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
  	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <link href="css/style.css" rel="stylesheet"> 
    <link href="css/responsive.css" rel="stylesheet"> 
    <link href="css/custom.css" rel="stylesheet"> 
    
</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header -->
        <?php include_once("module/navbar.php");?>
        <!-- Header -->


        <!-- Content -->
        <?php include_once("module/lienhe-content.php");?>
        <!-- end: Content -->


        <!-- Footer -->
        <?php include_once("module/footer.php");?>
        <!-- Footer -->
    </div>
    <!-- end: Wrapper -->

    <!-- Go to top button -->
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a><!--Plugins-->
 <script src="js/jquery.js"></script>
 <script src="js/plugins.js"></script>

<!--Template functions-->
 <script src="js/functions.js"></script>
 <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>

</body>
<script>
    $(document).ready(function(){
     $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: false,
      arrows: false,
      centerMode: true,
      focusOnSelect: true
    });
    
});
</script>
</html>
