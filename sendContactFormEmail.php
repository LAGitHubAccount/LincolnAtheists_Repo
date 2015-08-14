<!DOCTYPE HTML>
<!--
        Dopetrope by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Lincoln Atheists|Title</title>
        <?php include 'include/head.php'; ?>
    </head>
    <body class="no-sidebar">
        <div id="page-wrapper">

            <!-- Header -->
            <div id="header-wrapper">
                <div id="header">

                    <!-- Logo -->
                    <header>
                        <h1>Header</h1>
                    </header>

                    <!-- Nav -->
                    <?php include 'include/nav.php'; ?>


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
                        mail($to, $subject, $msg, $headers);
                        ?>
                    </article>

                </div>
            </div>

            <!-- Footer -->
            <?php include 'include/footer.php'; ?>
        </div>
    </body>
</html>