<?php // Check if form was submitted:
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LesdusUAAAAAKVX-45eWuQy_kJ8osVHj-lE0T7y';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5) {
        	$name = $_POST['name'];
			$email = $_POST['email'];
			$message  = $_POST['message'];


			$content = '
			<strong>Name :</strong> '.$name.'
			<br>
			<strong>Mail :</strong> '.$email.'
			<br>
			<strong>Content :</strong> '.$message;

			$sent = mail('valentin.doche@hotmail.com', 'Contact Form from valentindoche.com', $content, "FROM: Valentin Doche FORM <noreply@valentindoche.com>\r\nContent-Type: text/html; charset=UTF-8\r\n");

			header("location:/");
    } else {
        header("location:/");
    }

} ?>