<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bookstore</title>

        <!-- Favicon -->
        <link rel="icon" href="img/favicon.png" type="image/png" />
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Icon CSS-->
        <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/linearicons/linearicons-1.0.0.css">
        <!-- Animations CSS-->
        <link rel="stylesheet" href="vendors/wow-js/animate.css">
        <!-- owl_carousel-->
        <link rel="stylesheet" href="vendors/owl_carousel/owl.carousel.css">

        <!-- Theme style CSS -->
        <link href="css/style.css" rel="stylesheet">
<!--        <link href="css/responsive.css" rel="stylesheet">  -->

    </head>
    <body>
        <!--==========Main Header==========-->
        <header class="main_header_area">
            <nav class="navbar navbar-default navbar-fixed-top" id="main_navbar">
                <div class="container-fluid searchForm">
                    <form action="#" class="row">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="lnr lnr-magnifier"></i></span>
                            <input type="search" name="search" class="form-control" placeholder="Search for books...">
                            <span class="input-group-addon form_hide"><i class="lnr lnr-cross"></i></span>
                        </div>
                    </form>
                </div>
                <div class="container">
                    <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="col-md-2 p0">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                                <img src="img/logo.png" alt="">
                                <img src="img/logo-2.png" alt="">
                            </a>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="col-md-9 p0">
                            <ul class="nav navbar-nav main_nav">
                                <li><a href="#">Fiction</a></li>
                                <li><a href="#">Non-Fiction</a></li>
                                <li><a href="#">Children's Books</a></li>
                                <li><a href="#">Academic</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-1 p0">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#" class="nav_searchFrom"><i class="lnr lnr-magnifier"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- /.navbar-collapse -->
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </header>

        <!--==========Slider area==========-->
        <section class="slider_area row m0">
            <div class="slider_inner">
                <div class="camera_caption">
                    <h2 class="wow fadeInUp animated">Discover Your Next Favorite Book</h2>
                    <h5 class="wow fadeIn animated" data-wow-delay=".3s">Explore a world of stories and knowledge</h5>
                    <a class="learn_mor wow fadeInU" data-wow-delay=".6s" href="#book-list">Browse Now!</a>
                </div>
            </div>
        </section>

        <!--==========Book List Area==========-->
        <section class="best_business_area row">
            <div class="check_tittle wow fadeInUp" data-wow-delay=".7s" id="#book-list">
                <h2>Book List</h2>
            </div>
            <div class="row it_works">

              <?php
                  $dbHost = getenv('DB_HOST');
                  $dbUser = getenv('DB_USER');
                  $dbPassword = getenv('DB_PASSWORD');
                  $dbName = getenv('DB_NAME');

                  $link = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

                  if ($link) {
                      $res = mysqli_query($link, "SELECT * FROM books;");
                      while ($row = mysqli_fetch_assoc($res)) { ?>

                          <div class='col-md-3 col-sm-6 business_content'>
                              <?php echo '<img src=\'img/' . $row['ImageUrl'] . '\' alt=\'\'>' ?>
                              <div class='media'>
                                  <div class='media-body'>
                                      <?php echo '<a href="#">' . $row['Title'] . '</a>' ?>
                                      <?php echo '<p>Author: ' . $row['Author'] . '</p>' ?>
                                      <?php echo '<p>Price: ' . $row['Price'] . '$</p>' ?>
                                  </div>
                              </div>
                          </div>

              <?php
                      }
                  } else {
              ?>
                  <!-- Error message for database connection issues -->
                  <div style='width: 100%'>
                      <?php echo '<h1>Database Connection Error</h1>'; ?>
                      <?php echo mysqli_connect_errno() . ':' . mysqli_connect_error(); ?>
                  </div>

              <?php
                  }
              ?>

            </div><!-- End Book List -->
        </section>

        <!-- Footer -->
        <footer class='footer_area row'>
            ...
            <!-- Copyright Section -->
            © Copyright 2025 Bookstore | All Rights Reserved
        </footer>

        <!-- Scripts -->
        <!-- jQuery -->
        ...
    </body>
</html>

