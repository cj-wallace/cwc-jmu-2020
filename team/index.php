<?php include("../include/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include(PATH_ROOT . "/include/head.php");?>
</head>

<body>

<?php include(PATH_ROOT . "/include/navigation.php");?>

<header class="masthead" style="background-image:url('../include/assets/img/about-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1>JMU Team</h1><span class="subheading">Meet the team!</span></div>
                </div>
            </div>
        </div>
    </header>
    <div class="projects-clean">
        <div class="container">
            <div class="row projects">
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid member-image" src="../include/assets/img/desk.jpg">
                    <h3 class="name member-name">Project Name</h3>
                    <p class="description member-major">Major</p>
                    <p class="description member-age">Age</p>
                    <p class="description member-year">Graduation Year</p>
                    <p class="description member-desc">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <?php include(PATH_ROOT . "/include/footer.php"); ?>
    <?php include(PATH_ROOT . "/include/script.php"); ?>
</body>

</html>