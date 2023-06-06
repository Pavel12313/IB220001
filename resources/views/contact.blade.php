<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>

	<h1>Contact Us</h1>

	<form method="POST" action="{{ route('contact.submit') }}">
		@csrf
		<label for="name">Name</label>
		<input type="text" name="name" id="name" required>
		<br>

		<label for="email">Email</label>
		<input type="email" name="email" id="email" required>
		<br>

		<label for="message">Message</label>
		<textarea name="message" id="message" required></textarea>
		<br>

		<button type="submit">Send</button>
	</form>
	<a href="{{ route('about.page') }}">About</a>

</body>
</html>
