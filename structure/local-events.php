<div data-role="page" id="local-events">
	
	<?php
		$PAGE_NAME = "Local Events";
		include("header-menu.php");
	?>
	
	<div role="main" class="ui-content">
		<ul data-role="listview">
			<li><a href="#event-details">
					<img class="img-thumb" style="background-image: url('images/sample-event-pic.jpg');"/>
					<h4>Kitchener</h4>
					<p>Awesome Night Club</p>
			</a></li>
		</ul>
	</div>
	<div data-role="footer" data-position="fixed">
            <a data-role="button" data-icon="edit" href="#create-event">Create an Event</a>
    </div>
</div>