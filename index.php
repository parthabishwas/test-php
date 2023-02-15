<!DOCTYPE html>
<html>
<head>
	<title>PHP Form</title>
	<style>
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		label {
			margin: 10px 0;
			font-weight: bold;
			font-size: 18px;
		}
		input[type="text"], input[type="tel"], input[type="email"] {
			padding: 5px;
			font-size: 16px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 10px;
			width: 100%;
			max-width: 300px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px;
			font-size: 18px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			width: 100%;
			max-width: 300px;
		}
		input[type="submit"]:hover {
			background-color: #45a049;
		}
		.success, .failure {
			margin: 10px 0;
			font-size: 18px;
			text-align: center;
			padding: 10px;
			border-radius: 5px;
			max-width: 300px;
		}
		.success {
			background-color: #d4edda;
			color: #155724;
			border: 1px solid #c3e6cb;
		}
		.failure {
			background-color: #f8d7da;
			color: #721c24;
			border: 1px solid #f5c6cb;
		}
	</style>
</head>
<body>
	<!-- <h1>PHP Form Example</h1> -->
	<form method="post" action="submit.php">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required>
		<label for="mobile">Mobile:</label>
		<input type="tel" name="mobile" id="mobile" required>
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
