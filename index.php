<!DOCTYPE html>
<html>
  <head>
    <title>IEEE Uttar Pradesh -- Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="_/css/bootstrap-theme.min.css">
    <link href="_/css/site.css" rel="stylesheet" type="text/css" />
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  </head>
  <body class="home" id="home">

		<section class="container">
      <?php include "_/components/php/header.php"; ?>
      <div class="content row" >
        <section class="main col col-lg-8">
          <?php include "mycarousel.php"; ?>
        </section>
        <section class="sidebar col col-lg-4"> 
          <?php include "news_slider.php"; ?>
        </section>
				<section class="main col col-lg-8"> 
          <p><h1>Upcoming Events</h1> </p>
          <section class="main col col-lg-6">
            <?php include "_/components/php/aside-events.php"; ?>
            <?php include "_/components/php/event_modal.php"; ?>    
          </section>
          <section class="main col col-lg-6">
            <?php include "_/components/php/aside-events1.php" ;?>    
          </section>
				</section><!-- main -->
				<section class="sidebar col col-lg-4"> 
          <?php include "_/components/php/aside-accordion.php"; ?>
          <?php include "_/components/php/aside-register.php"; ?>      
				</section><!-- sidebar -->
			</div><!-- content -->    
          <?php include "_/components/php/footer.php"; ?>
		</section><!-- container -->
    <script src="_/js/bootstrap.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="_/js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
    <script src="_/js/myscript.js"></script>
    <script src="_/js/search.js"></script>
  </body>
</html>    