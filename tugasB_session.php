<!DOCTYPE html>
<html>
<body>

<?php
	session_start(); ?>

<?php
	//Set session variable
		$_SESSION ["time"] = "hour";
		$_SESSION ["date"] = "day";
	?>

<?php
	date_default_timezone_set('Asia/Jakarta');
		$time = date("h:i a");
			echo "Time now is " . date("h:i a") . "<br>";
			echo "Date now is " .  date ("Y-m-d"). "<br>";
			echo "Today is " . date("l");

		echo "<p>The hour of the Google Chrome is " . $time; 
		echo ", and here is the message for you: </p>";

$time = date ("H");
	if (($time >=6) && ($time<=11)) 
		{
		echo "Have a Good Morning!";
	} 
	elseif (($time>=11) && ($time<=15)) 
		{
		echo "Have a Good Day!";
	} else 
		{
		echo "Have a Good Night!";
	}
?>
 
</body>
</html>