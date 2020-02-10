<?php include("../include/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include(PATH_ROOT . "/include/head.php");?>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="/">Admin Page</a>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="/">Home</a></li>
            </ul>
        </div>
    </nav>
    <div class="container" id="admin-login">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <p>Please login to access admin controls</p>
                <form method="post">
                    <h2 class="sr-only">Login Form</h2>
                    <div class="illustration"></div>
                    <div class="form-group"><input class="form-control" type="email" name="user" placeholder="Username"></div>
                    <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div>
                </form>
                <form id="loginForm" name="sentMessage" novalidate="novalidate">
                    <div class="control-group"></div>
                    <div id="success"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="container" id="admin-control">
        <div class="row">
            <div class="col">
                <p>New Post</p>
                <form>
                    <div class="form-group" id="post-form"><input class="form-control" type="text" id="post-title" placeholder="Post Title"><input type="file" id="post-image"><input class="form-control" id="form-date" type="date"><input class="form-control" type="text" id="post-desc" placeholder="Description">
                        <button
                            class="btn btn-primary" id="post-submit" placeholder="Post Title">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <p>New Event</p>
                <form>
                    <div class="form-group" id="event-group" placeholder="Description"><input class="form-control" type="text" id="event-title" placeholder="Event Title"><input class="form-control" id="event-date" placeholder="Description" type="date"><input class="form-control" id="event-desc" type="text" placeholder="Description">
                        <button
                            class="btn btn-primary" id="event-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>New Link</p>
                <form>
                    <div class="form-group" id="link-form" placeholder="Post Title"><input class="form-control" type="text" id="post-title" placeholder="Post Title"><input type="file" id="link-image"><input class="form-control" id="link-date" type="date"><input class="form-control" type="text-input" id="link-desc"
                            placeholder="Description"><button class="btn btn-primary" id="link-submit" type="button">Submit</button></div>
                </form>
            </div>
            <div class="col">
                <p>Edit Member</p>
                <form>
                    <div class="form-group" id="post-form"><select class="form-control" id="member-select"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select>
                        <input
                            class="form-control" type="text" id="member-name" placeholder="Full Name"><input class="form-control" type="text" id="member-major" placeholder="Major"><input class="form-control" type="number" id="member-age" placeholder="Age"><input class="form-control" type="number" id="member-grad" placeholder="Graduation Year">
                            <input
                                type="file" id="member-image"><input class="form-control" type="text" id="member-bio" placeholder="Bio"><button class="btn btn-primary" id="member-submit" placeholder="Bio">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <?php include PATH_ROOT . "include/script.php" ?>
</body>

</html>