<div data-role="page" id="profile-view">
	
	<?php
		$PAGE_NAME = "Profile";
		include("header-menu.php");
	?>
	
	<div class="well">
		<div class="profile-image" style="background-image: url('images/profile-sample.png');"></div>
	</div>
	
	<div role="main" class="ui-content">
		<div class="user-name-banner">
			<h2>JohnSmith007</h2>
		</div>
		<div class="user-details">
			<hr>
			<p><b>First Name:</b> John</p>
			<p><b>Last Name:</b> Smith</p>
			<p><b>Email:</b> jsmith007@gmail.com</p>
			<p><b>Locale:</b> Kitchener, ON</p>
			<p><b>Description:</b> Just a rad dude with a boring name.</p>
			<hr>
			<p><b>Account Status:</b> Standard User</p>
		</div>
	</div>
	
	<div data-role="footer" data-position="fixed">
		<a data-role="button" data-icon="edit" href="#">Edit Profile</a>
	</div>
</div>