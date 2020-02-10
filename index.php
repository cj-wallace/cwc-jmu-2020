<?php include("include/config.php");?>
<!DOCTYPE html>
<html>

<head>
    <?php include("include/head.php"); ?>
</head>

<body>

    <?php include("include/navigation.php");?>

    <header class="masthead" style="background-image:url('include/assets/img/home-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1>JMU CWC 2020</h1><span class="subheading">James Madison University Team Website</span></div>
                </div>
            </div>
        </div>
    </header>
    <div class="intro">
        <h2 class="text-center">Welcome to the JMU CWC Website!</h2>
        <p class="text-center">Here you&nbsp;can find information about the Collegiate Wind Conference, and the JMU team in particular!<br></p>
    </div>
    <div></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8">
                <div class="post-preview">
                    <a href="#">
                        <h2 class="post-title">Post Title</h2>
                        <img class="post-image">
                        <h3 class="post-subtitle">Subtitle Here</h3>
                    </a>
                    <p class="post-meta">Posted on January 30th, 2020</p>
                </div>
                <hr>
                <div class="clearfix">
                    <nav id="page-select" class="float-right">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item page-num"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-4">
                <h1>Social Media</h1>
                <hr>
                <iframe src="https://www.instagram.com/p/B8K0_kWHdPd/embed" allowtransparency="true" frameborder="0" scrolling="no" width="320" height="550"></iframe>
                <hr>
                <div class="fb-page" data-href="https://www.facebook.com/jmucwc/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/jmucwc/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/jmucwc/">JMU: Collegiate Wind Competition</a></blockquote></div>
                <hr>
                <a class="twitter-timeline" href="https://twitter.com/JMUCWC?ref_src=twsrc%5Etfw">Tweets by JMUCWC</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
    <?php include("include/footer.php"); ?>
    <?php include("include/script.php"); ?>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
</body>

</html>