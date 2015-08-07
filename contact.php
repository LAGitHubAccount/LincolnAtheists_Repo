<!DOCTYPE HTML>
<!--
        Dopetrope by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Lincoln Atheists|Contact</title>
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
                    <h1>Contact Lincoln Atheists</h1>
                </header>

                <!-- Nav -->
                <?php include 'load/nav.php';?>


            </div>
        </div>

        <!-- Main -->
        <div id="main-wrapper">
            <div class="container">

                <!-- Content -->
                <article class="box post">
                    <a href="#" class="image featured"><img src="images/pic01.svg" alt="" /></a>
                    <header>
                        <h2>Contact Form</h2>
                        <p>Suggestion, comment, question, we would love to hear from you.</p>
                    </header>
                    <form name="contactform" method="post" action="sendContactFormEmail.php">
                        <table>
                            <tr>
                                <td> 
                                    <label for="first_name">First Name *</label>
                                </td> 
                                <td> 
                                    <input type="text" name="first_name" maxlength="50" size="30"> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="last_name">Last Name *</label> 
                                </td> 
                                <td> 
                                    <input type="text" name="last_name" maxlength="50" size="30"> 
                                </td>
                            </tr>
                            <tr> 
                                <td> 
                                    <label for="home_address">Home Address</label> 
                                </td> 
                                <td> 
                                    <textarea name="home_address" maxlength="100" cols="25" Rows="4"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <label for="email">Email Address *</label> 
                                </td> 
                                <td> 
                                    <input type="text" name="email" maxlength="80" size="30"> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="telephone">Telephone Number</label>
                                </td>
                                <td> 
                                    <input type="text" name="telephone" maxlength="30" size="30"> 
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <label for="comments">Comments *</label> 
                                </td> 
                                <td> 
                                    <textarea name="comments" maxlength="1000" cols="25" rows="6"></textarea> 
                                </td>
                            </tr>
                            <tr> 
                                <td colspan="2" style="text-align:center"> * - Denotes a required field
                                    <input type="submit" value="Submit"> 
                                </td>
                            </tr>
                        </table>
                    </form>
                </article>

            </div>
        </div>

        <!-- Footer -->
<?php include 'load/footer.php';?>

    </body>
</html>