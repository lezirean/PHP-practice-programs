<html>
<body>
	<form action = "" method = "POST">
	
	Enter your name here: <input type = "text" value = "" name = "fullname">
		<br/>
	Event: <select name = "event">
		<option></option>
		<option value = "morning">Morning</option>
		<option value = "night">Night</option>
		
		</select>
	
	<br/>
		<input type = "submit" value = "Greet" name ="greet_btn">
	</form>
	
	<?php
	
		if(isset($_POST['greet_btn'])) {
			
			$name = $_POST['fullname'];
			$event = $_POST['event'];
				
			if($event == "morning"){
				echo "Good Morning ".$name." take your breakfast";
				
			}elseif($event == "night"){
				echo "Good Night ".$name." sleep well";
				
			}else{
				
				echo "Please select an event";
				
			}
			
		};
	
	?>
	
	
	
</body>
</html>