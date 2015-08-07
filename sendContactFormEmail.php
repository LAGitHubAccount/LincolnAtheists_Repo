<!DOCTYPE HTML>
<!--
        Dopetrope by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Lincoln Atheists|Title</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.dropotron.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-layers.min.js"></script>
        <script src="js/init.js"></script>
        <script type="text/javascript" src="js/lib/jquery-1.11.1.min.js" ></script>
        <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-desktop.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    </head>
    <body class="no-sidebar">

        <!-- Header -->
        <div id="header-wrapper">
            <div id="header">

                <!-- Logo -->
                <header>
                    <h1>Header</h1>
                </header>

                <!-- Nav -->
                <?php include 'load/nav.php'; ?>


            </div>
        </div>

        <!-- Main -->
        <div id="main-wrapper">
            <div class="container">

                <!-- Content -->
                <article class="box post">
                    <a href="#" class="image featured"><img src="images/pic01.svg" alt="" /></a>
                    <header>
                        <h2>No Sidebar</h2>
                        <p>Lorem ipsum dolor sit amet feugiat</p>
                    </header>
                    <?php
                    $to = "rcmcmaster@gmail.com";
                    $subject = "Test Subject";
                    $msg = "Test email.";
                    $headers = "From: ryan@lincolnatheists.org";
                    mail($to,$subject,$msg,$headers);
                    ?>
                </article>

            </div>
        </div>

        <!-- Footer -->
        <?php include 'load/footer.php'; ?>

    </body>
</html>