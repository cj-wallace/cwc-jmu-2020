<?php include("../include/config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include(PATH_ROOT . "/include/head.php");?>
</head>

<body>

<?php include(PATH_ROOT . "/include/navigation.php");?>

<header class="masthead" style="background-image: url(&quot;assets/img/desk.jpg&quot;);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1>Links</h1><span class="subheading">See below for important CWC links and pages!</span></div>
                </div>
            </div>
        </div>
    </header>
    <div class="projects-horizontal">
        <div class="container">
            <div class="row projects">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="../include/assets/img/desk.jpg"></a></div>
                        <div class="col">
                            <a class="link" href="#">
                                <h3 class="name">Link Title</h3>
                            </a>
                            <p class="description link-desc">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <?php include(PATH_ROOT . "/include/footer.php"); ?>
    <?php include(PATH_ROOT . "/include/script.php"); ?>
</body>

</html>