<html>
	<head>
		<meta name="viewport"
		content="width=device-width, initial-scale=1">
		<title>PB - Feedback</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
		<link rel='stylesheet' href='{{ url("css/writefeedback.css") }}'>
        <script src='{{ url("js/checkcamps.js") }}' defer></script>
		
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
			<div id ="overlay"></div>
        <a href="home">
                <h1 strong>Panificio Belfiore</h1> 
        </a>
        <div class='logo'>
            <img id='logo' src="img/Logo.png">
            <h5 strong>Panificio Belfiore</h1> 
        </div>
		</header>
		
		<h3 strong>Feedback</h3>
		
		<div>
		
			<form action='writefeedback' method='post'>
				<input type='hidden' name='_token' value='{{ $csrf_token }}'>
				<label>Stelle<select name='stelle_r'>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
						</select>
			
				</label>
				<label id="testo_r">Recensione   <textarea rows='3' name='text_r'></textarea></label>
                <div class='label'>  &nbsp;<input type='submit' name='invio' value='Invia Feedback' ></div>
			</form>
		</div>
		
		
		<footer>
			<span>
				Simone Belfiore<br>1000011355<br>Università degli studi di Catania
			</span>
		</footer>
	</body>
	
</html>