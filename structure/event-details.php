<div data-role="page" id="event-details">
	
	<?php
		$PAGE_NAME = "Event Details";
		include("header-menu.php");
	?>
	
	<div class="event-header">
		<a href="#popupBasic" data-position-to="window" data-rel="popup" data-transition="pop">
			<div class="event-banner" style="background-image: url('images/banner-sample.jpg');">
			</div>
		</a>
		<div data-role="popup" id="popupBasic" class="photopopup" data-overlay-theme="b" data-theme="b" data-tolerance="30,15">
			<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
			<img src="images/banner-sample.jpg" />
		</div>
	</div>
	
	<div role="main" class="ui-content">
		<div class="event-title">
			<h1>Event Name</h1>
			<hr>
		</div>
		
		<table class="event-table">
			<tr>
				<td>
					<b>Date</b>
				</td>
				<td>
					Sunday, December 25
				</td>
			</tr>
			<tr>
				<td>
					<b>Location</b>
				</td>
				<td>
					Cool Club, Downtown
				</td>
			</tr>
			<tr>
				<td>
					<b>Start Time</b>
				</td>
				<td>
					8:00 PM
				</td>
			</tr>
			<tr>
				<td>
					<b>End Time</b>
				</td>
				<td>
					3:00 AM
				</td>
			</tr>
			<tr>
				<td>
					<b>Attending DJs</b>
				</td>
				<td style="text-align: center;">
					<a href="#djList" data-rel="popup" data-transition="slideup" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a">View List</a>
					<div data-role="popup" id="djList" data-theme="b">
						<ul data-role="listview" data-inset="true" style="min-width:210px;">
							<li data-role="list-divider">DJs</li>
							<li><a href="#">Deejay 1</a></li>
							<li><a href="#">Deejay 2</a></li>
						</ul>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<b>Description</b>
				</td>
				<td style="text-align: justify;">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
					when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</td>
			</tr>
		</table>
	</div>
	
	<div data-role="footer">
		<div data-role="controlgroup">
			<a href="#" class="ui-btn ui-corner-all ui-icon-bullets ui-btn-icon-left">Join Event</a>
			<a href="#" class="ui-btn ui-corner-all ui-icon-comment ui-btn-icon-left">Join Event and Chat</a>
			<a href="#" class="ui-btn ui-corner-all ui-icon-eye ui-btn-icon-left">View Codes</a>
		</div>
	</div>
	
</div>