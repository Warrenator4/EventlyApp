<div data-role="page" id="edit-profile">
	
	<?php
		$PAGE_NAME = "Edit Profile";
		include("header-menu.php");
	?>
	
	<div class="well">
		<div class="profile-image" style="background-image: url('images/profile-sample.png');"></div>		
	</div>
	<div>
		<br>
		<form id="edit-profile-picture-form" action="" method="GET">
			<label>Edit Profile Picture: </label>
			<input type="file" name="user-picture" accept="image/x-png,image/jpeg">
			<input type="submit" form="edit-profile-picture-form" data-icon="check" value="Update Profile Picture">
		</form>
	</div>
	
	<div role="main" class="ui-content">
		<div class="user-name-banner">
			<h2>JohnSmith007</h2>
		</div>
		<div>
			<hr>
			<form id="edit-profile-form" action="" method="GET">
				<label>Username:</label>
				<input type="text" id="username">
				<label>First Name:</label>
				<input type="text" id="first-name">
				<label>Last Name:</label>
				<input type="text" id="last-name">
				<label>Email:</label>
				<input type="text" id="email">
				<fieldset data-role="controlgroup" data-mini="true"></fieldset>
					<legend>Country:</legend>
					<input type="radio" name="country" value="Canada" id="radio-canada" checked="checked">
					<label for="radio-canada">Canada</label>
					<!--<input type="radio" name="country" value="United States">United States <br>
					<input type="radio" name="country" value="Mexico">Mexico -->
				</fieldset>
				<fieldset data-role="controlgroup" data-mini="true">
					<legend>Province/Territories</legend>
					<input type="radio" name="province" value="Alberta" id="radio-alberta">
					<label for="radio-alberta">Alberta</label>
					<input type="radio" name="province" value="British-Columbia" id="radio-british-columbia">
					<label for="radio-british-columbia">British Columbia</label>
					<input type="radio" name="province" value="Manitoba" id="radio-manitoba">
					<label for="radio-manitoba">Manitoba</label>
					<input type="radio" name="province" value="New-Brunswick" id="radio-new-brunswick">
					<label for="radio-new-brunswick">New Brunswick</label>
					<input type="radio" name="province" value="Newfoundland-Labrador" id="radio-newfoundland-labrador">
					<label for="radio-newfoundland-labrador">Newfoundland and Labrador</label>
					<input type="radio" name="province" value="Northwest-Territories" id="radio-northwest-territories">
					<label for="radio-northwest-territories">Northwest Territories</label>
					<input type="radio" name="province" value="Nova-Scotia" id="radio-nova-scotia">
					<label for="radio-nova-scotia">Nova Scotia</label>
					<input type="radio" name="province" value="Nunavut" id="radio-nunavut">
					<label for="radio-nunavut">Nunavut</label>
					<input type="radio" name="province" value="Ontario" id="radio-ontario">
					<label for="radio-ontario">Ontario</label>
					<input type="radio" name="province" value="Prince-Edward-Island" id="radio-prince-edward-island">
					<label for="radio-prince-edward-island">Prince Edward Island</label>
					<input type="radio" name="province" value="Quebec" id="radio-quebec">
					<label for="radio-quebec">Quebec</label>
					<input type="radio" name="province" value="Saskatchewan" id="radio-saskatchewan">
					<label for="radio-saskatchewan">Saskatchewan</label>
					<input type="radio" name="province" value="Yukon" id="radio-yukon">
					<label for="radio-yukon">Yukon</label>
				</fieldset>
				<br>

				<label>City:</label>	
				<input type="text" id="city">
				<label>Postal Code:</label>
				<input type="text" id="postal-code">
				<br>
				<label>Profile Description:</label>
				<textarea rows="4" cols="50" placeholder="Personal Descirption about yourself, music tastes, favorite Djs, venues and locations."></textarea>
            </form>
		</div>
	</div>
	
	<div data-role="footer" data-position="fixed">
		<input type="submit" form="edit-profile-form" data-icon="check" value="Save Profile Changes">
	</div>
</div>