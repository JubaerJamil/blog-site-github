<?php
// register.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$content = $_POST['content'];
	
	// Validation checks
	if (empty($name) || empty($email) || empty($subject) || empty($content) ) {
		echo "All fields are required and must not be empty.";
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Invalid email address.";
	} else {
		echo "<p>Your message has been successfully send. Thanks for your message</p>";
	}
}
