<div class="container">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Team") {?>active<?php }?>" href="/team/">Team</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Events") {?>active<?php }?>" href="/events/index.php">Events</a>
	  </li>
		<li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Links") {?>active<?php }?>" href="/links/index.php">Links</a>
	  </li>
	</ul>
</div>