<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Tuan 6</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <div class="logo">
                        <a href="./">BT6</a>
                    </div>
                </header>

                <!-- Banner -->
                <section class="main-banner">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="banner-caption">
                                                <h4><em>Trần Minh Đức</em><br>
                                                    20810206
                                                </h4>
                                                <span>AWESOME HTML5 &amp; CSS3 TEMPLATE</span>
                                                <p>Do you know that <strong>Ramayana</strong> is a free to use Bootstrap 4 CSS template by <strong>templatemo</strong>? You can edit and add more pages as you wanted for your personal or corporate websites.</p>
                                                <div class="primary-button">
                                                    <a href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Contact Form -->
                <section class="contact-form">
                    <div class="container-fluid">
                        <div class="heading mb-5 text-center">
                            <h2>Nộp bài</h2>
                        </div>
                        <form id="contact" action="./xu_ly_form.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="name" require type="text" class="form-control" id="name" placeholder="Họ Tên" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="mssv" require type="text" class="form-control" id="mssv" placeholder="MSSV" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <input type="file" require class="form-control-file" style="height: 60px;" name="files">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                <?php include_once('./ds_nop_bai.php'); ?>
            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">

            <div class="inner">

                <!-- Menu -->
                <nav id="menu">
                    <ul>
                        <li><a href="./">Homepage</a></li>
                        <li><a href="/">My Host</a></li>
                    </ul>
                </nav>

                <!-- Featured Posts -->
                <div class="featured-posts">
                    <div class="heading">
                        <h2>Featured Posts</h2>
                    </div>
                    <div class="owl-carousel owl-theme">
                        <a href="#">
                            <div class="featured-item">
                                <img src="assets/images/featured_post_01.jpg" alt="featured one">
                                <p>Aliquam egestas convallis eros sed gravida. Curabitur consequat sit.</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="featured-item">
                                <img src="assets/images/featured_post_01.jpg" alt="featured two">
                                <p>Donec a scelerisque massa. Aliquam non iaculis quam. Duis arcu turpis.</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="featured-item">
                                <img src="assets/images/featured_post_01.jpg" alt="featured three">
                                <p>Suspendisse ac convallis urna, vitae luctus ante. Donec sit amet.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Footer -->
                <footer id="footer">
                    <p class="copyright">Copyright &copy; 2023 Tran Minh Duc - 20810206
                </footer>

            </div>
        </div>

    </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>
</body>


</body>

</html>