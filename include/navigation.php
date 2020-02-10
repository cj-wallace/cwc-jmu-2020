<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
    <div class="container"><a class="navbar-brand" href="/">JMU CWC</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div
                class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" role="presentation"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item <?php if ($CURRENT_PAGE == "Team") {?>active<?php }?>" role="presentation"><a class="nav-link" href="/team">Our Team</a></li>
                <li class="nav-item <?php if ($CURRENT_PAGE == "Links") {?>active<?php }?>" role="presentation"><a class="nav-link" href="/links">Links</a></li>
            </ul>
        </div>
    </div>
</nav>