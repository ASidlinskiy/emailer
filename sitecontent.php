<html>

<head>
	<title>Mass Hack Emailer</title>
	<link rel="stylesheet" type="text/css" href="stylesforemailer.css">
</head>

<body>
	<?php
	if (isset($_GET["to"])){

		$to = $_GET["to"];
		$subject = $_GET["subject"];
		$from = $_GET["from"];
		$body = $_GET["body"];
		$times = $_GET['times'];

		for ($i=1;$i<=$times;$i++){
			mail($to, $subject, $body, 'FROM: '. $from . $i);
		}
		
		$n = $i - 1;
		
		if ($n == 0){
			echo 
			'<div class="overallwrap">
			<h1>No emails were sent.</h1></br>';
		}
		else{
			echo 
				'<div class="overallwrap"><h1>'. $n;

				if ($n == 1) {
					echo ' email was';
				}
				else{
					echo ' emails were';
				}

				echo ' sent to '. $to . '.';

				if ($from != ""){
					echo ' The sender will be '. $from .' </h1></br>';
				}
				else{
					echo '</h1>';
				}
		}
			
			echo 
				'<div class="bottombuttons">
					<div class="overallwrap">
						<ul>
							<li><a href="sitecontent.php">Back to Emailer</a></li>
							<li><a href="index.php">Back to Home</a></li>
						</ul>
					</div>
				</div>';
	}
	else{
		echo
		'<div class="overallwrap">
			<h1>Mass Emailer</h1>
			<form>
				Fill in all of the following fields with appropriate values and click the Submit button.</br>
				<p>To: <input name="to" type="text"></p>
				<p>Subject: <input name="subject" type="text"></p>
				<p>From: <input name="from" type="text"></p>
				<p>Body: <textarea name="body" type="text" size="500"></textarea></p>
				<p>How many emails: <input name="times" type="text"></p>
				<p><input name="send" type="submit" method="GET"></p>
			</form>
		</div>';
		echo 
			'<div class="overallwrap">
				<div class="bottombuttons">
					<ul>
						<li><a href="index.php">Back to Home</a></li>
					</ul>
				</div>
			</div>';
	}
?>
</body>
</html>