<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title><?php echo $privatePageTitle ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Template by Colorlib" />
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
        <meta name="author" content="Colorlib" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="images/favicon.png" />
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css"  href='css/clear.css' />
        <link rel="stylesheet" type="text/css"  href='css/common.css' />
        <link rel="stylesheet" type="text/css"  href='css/font-awesome.min.css' />
        <link rel="stylesheet" type="text/css"  href='css/carouFredSel.css' />
        <link rel="stylesheet" type="text/css"  href='css/sm-clean.css' />
        <link rel="stylesheet" type="text/css"  href='css/style.css' />

        <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->

    </head>


    <body class="home blog page <?php echo $privatePageClass ?>">
        <div class="doc-loader"></div>
        <?php echo $publicHeader; ?>

        <div class="block content-1170 center-relative">
            <div class="blog-holder block center-relative">
                <?php echo $privateBanner; ?>

                <?php echo $privatePageContent; ?>

            </div>
        </div>


        <!--Footer-->
        <?php echo $publicFooter; ?>

        <div class="fixed scroll-top">
            <img src="./images/back_to_top.png" alt="Go Top">
        </div>


        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
        <script type="text/javascript" src="js/queryloader2.min.js"></script>
        <script type="text/javascript" src="js/jquery.carouFredSel-6.0.0-packed.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

    </body>
</html>
