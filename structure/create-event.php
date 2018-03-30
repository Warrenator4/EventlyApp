<div data-role="page" id="create-event">
	
        <?php
            $PAGE_NAME = "Create Event";
            include("header-menu.php");
        ?>        
        
        <div role="main" class="ui-content">
                <h3>Enter the following details about the event</h3>
                <hr>
                <form id="create-event-form" action="" method="GET">
                   <label>Event Name:</label>
                   <input type="text" id="event-name">
                   <label>Venue Name:</label>
                   <input type="text" id="venue-name">
                   <label>Location Address:</label>   
                   <input type="text" id="location-address"> 
                   <label>Event Description:</label>
                   <textarea id="event-description" placeholder=""></textarea>
                   <label>Date of event:</label>
                   <input type="date" id="event-date">
                   <label>Event Start Time:</label>
                   <input type="time" id="event-start-time">
                   <label>Event End Time:</label>
                   <input type="time" id="event-end-time">
                   <label>VIP Service Email:</label>
                   <input type="email" id="vip-email">
                   <label>Bottle Service Phone Number:</label>
                   <input type="text" id="bottle-service-phone">
                   <label>Music Type:</label>
                   <input type="text" id="event-music-type">
                   <label>Dress Code:</label>
                   <input type="text" id="dress-code">
                   <label>Age Demographic</label>
                   <input type="text" id="age-demographic">
                </form>
            
        </div>
        
        <div data-role="footer" data-position="fixed">
                <input type="submit" form="create-event-form" data-icon="check" value="Save & Create Event">
        </div>
    </div>