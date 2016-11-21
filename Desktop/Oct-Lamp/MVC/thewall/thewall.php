<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Wall</title>
</head>
<body>
	<h1>Coding Dojo Wall</h1>
	<h2>Welcome Name<h2>
	<a href="">Log Off</a>
	<hr>
	<form action="?" method="POST">
		
		<fieldset>
			
		<input type="hidden" name="action" value="message">
		<label><textarea name="message"></textarea></label>
		<button>Post a Message</button>

		</fieldset>
		</form>

		<div class="messages">

		</div>

			<div class="comments">

			<form action="?" method="POST">
			<fieldset>
				
				<input type="hidden" name="action" value="comments">
				<label><textarea name="comment"></textarea></label>
				<button>Post a comment</button>
	
			</fieldset>
		</form>


			</div>
</body>
</html>