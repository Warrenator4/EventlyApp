<div data-role="page" id="chats-view">
	
	<?php
		$PAGE_NAME = "Chats";
		include("header-menu.php");
	?>
	
	<div role="main" class="ui-content">
		<ul data-role="listview" data-count-theme="b">
			<li data-role="list-divider">My Chats</li>
			<li><a>
					<img class="img-thumb" style="background-image: url('images/sample-event-pic.jpg');"/>
					<h4>Awesome Night Club</h4>
					<p>You are in this chat</p>
					<span class="ui-li-count">12</span>
			</a></li>
			<li data-role="list-divider">Suggested Chats</li>
			<li><a>
					<img class="img-thumb" style="background-image: url('images/sample-event-pic.jpg');"/>
					<h4>Cool Night Club</h4>
					<p>You are at this event, join the chat!</p>
					<span class="ui-li-count">34</span>
			</a></li>
		</ul>
	</div>
</div>