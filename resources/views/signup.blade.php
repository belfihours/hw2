<html>
	<head>
		<meta name="viewport"
		content="width=device-width, initial-scale=1">
		<title>PB - Signup</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
		<link rel='stylesheet' href='{{ url("css/signup.css") }}'>
        <script src='{{ url("js/checkcamps.js") }}' defer></script>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
			<div id ="overlay"></div>
        <h1 strong>Panificio Belfiore<br><br>Signup</h1>
        <div class='logo'>
            <img id='logo' src="img/Logo.png">
            <h5 strong>Panificio Belfiore</h1> 
        </div>
		</header>
		
		<h3 strong>Registrati</h3>
		
		<div id = 'credenziali'>
		
			<form action='signup' method='post'>
                <input type='hidden' name='_token' value='{{ $csrf_token }}'>
				<label>Nome   <input type='text' id='name' name='nome' value='{{ $old_name }}'></label>
				<label>Cognome   <input type='text' id='surname' name='cognome' value='{{ $old_surname }}'></label>
				<label>Nome Utente   <input type='text' id='username' name='nome_utente' value='{{ $old_username }}'></label>
				<label>Password   <input type='password' id='password' name='password' ></label>
				<label>Conferma Password   <input type='password' id='password_c' name='password_c' ></label>
                <div class='label'>  &nbsp;<input type='submit' name='invio' value='Iscriviti' ></div>
			</form>
			@if (isset($errore))
            <div class='error'>{{ $errore }}</div>
            @endif
		</div>
		
		<footer>
			<span>
				Simone Belfiore<br>1000011355<br>Università degli studi di Catania
			</span>
		</footer>
	</body>
	
</html>