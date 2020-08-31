<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		input[type=text],[type=email],textarea
		{
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			margin-top: 6px;
			margin-bottom: 16px;
			box-sizing: border-box;
		}
		input[type=submit]
		{
			background-color: #23f2Eb;
			color: white;
			padding: 12px 20px;
			border: none;
		}
		.contactform
		{
			position: relative;
			border-radius: 50px;
			background-color: #f2f2f2;
			padding: 5px;
			display: block;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: auto;
			margin-top: 3%;
			animation-name: stiky;
			animation-iteration-count: infinite;
			width: 50%;
			animation-duration: 3s;
		}
		.contactform:hover
		{
			animation-name: stiky;
			animation-iteration-count: infinite;
			animation-duration: 15s;
		}
		.column
		{
			float: center;
			
			margin-top: 6px;
			padding: 20px;
			display: block;
		}
		@keyframes stiky
		{
			0%
			{
				background-color:#D78DDB; 
			}

			20%
			{
				background-color: #7AF2C3;
			}

			40%
			{
				background-color: #759Cec;
			}

			60%
			{
				background-color:#23f2eb; 
			}

			80%
			{
				background-color: #f27723;
			}

			100%
			{
				background-color: #ad3bd7;
			}
		}

	</style>
	<title>Contact Us Form</title>
</head>
<body>
	<div class="contactform">
		<div style="text-align: center;">
			<h1>Contact us form to connect edge programmers</h1>
				<p>Please fill all the entries to necessary</p>
		</div>
		<div class="row">
			<div class="column">
				<form action="store.php" method="post">
					<label for="First Name">First Name</label>
					<input type="text" name="firstname">

					<label for="LastName">Last Name</label>
					<input type="text" name="lastname">

					<label for="Email">Email</label>
					<input type="email" name="email">

					<label for="subject">subject</label>
					<input type="text" name="subject">

					<label for="First Name">Message</label>
					<textarea name="message" style="height: 170px;"></textarea>
					<input type="submit" name="submit" value="submit">
				</form>
				
			</div>
			
		</div>
	</div>

</body>
</html>