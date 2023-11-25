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
    <?php
    function return_home()
    {
        header("location:index.php");
    }
    if (!isset($_POST['mssv']) || !isset($_FILES['files']) || !isset($_POST['name'])) {
        return_home();
    }
    $mssv = $_POST['mssv'];
    $name = $_POST['name'];
    $file = $_FILES['files'];

    if ($file['error'] !== 0) {
        return_home();
    }

    $errorMessage = "";
    $primaryName = $file["name"];
    $type = $file["type"];
    $location = $file["tmp_name"];
    $size = $file["size"] / 1024.0;

    include_once('./allowed_file_type.php');
    if (!in_array($type, $allowedTypes)) {
        $errorMessage = "Khong chap nhan file $type";
    }
    if ($size > 1024 * 2) {
        $errorMessage = "Kich thuoc file lon hon 1Mb";
    }

    if ($errorMessage == "") {
        $now = date("ymd.His");
        $nowView = date("y/m/d H:i:s");
        $fileName = $now . "_" . trim($primaryName);

        $newLocation = "./nop-bai/$fileName";
        move_uploaded_file($location, $newLocation);

        $db = fopen("lophoc.data", "a");
        fwrite($db, "$mssv;$name;$nowView;$fileName;$type;$newLocation\n");
        fclose($db);
    }



    ?>

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

                <main>
                    <section class="contact-form">
                        <div class="container-fluid">
                            <div class="heading mb-5 text-center">
                                <h2>Thông tin nộp bài</h2>
                            </div>
                            <?php
                            if ($errorMessage == "") {
                            ?>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Họ Tên: <?php echo $name; ?></li>
                                    <li class="list-group-item">MSSV: <?php echo $mssv; ?></li>
                                    <li class="list-group-item">Tên File: <?php echo $primaryName; ?></li>
                                    <li class="list-group-item">Loại file: <?php echo $type; ?></li>
                                    <li class="list-group-item">Kích thước: <?php echo $size; ?>Kb</li>
                                </ul>
                            <?php
                            } else {
                                echo "<p>$errorMessage</p>";
                            }
                            ?>
                        </div>
                    </section>
                    <?php include_once('./ds_nop_bai.php'); ?>

                </main>
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