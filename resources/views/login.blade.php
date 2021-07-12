<html>
	<head>
		<meta name="viewport"
		content="width=device-width, initial-scale=1">
		<title>PB - Login</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
        <link rel='stylesheet' href='{{ url("css/login.css") }}'>
        <script src='{{ url("js/checkcamps.js") }}' defer></script>
	</head>
	<body>
		<header>
			<div id ="overlay"></div>
        <h1 strong>Panificio Belfiore<br><br>Login</h1>
        <div class='logo'>
            <img id='logo' src="img/Logo.png">
            <h5 strong>Panificio Belfiore</h1> 
        </div>
		</header>
		
		<h3 strong>Login</h3>
		
		<div id = 'credenziali'>
		
			<form action='login' method='post'>
                <input type='hidden' name='_token' value='{{ $csrf_token }}'>
				<label>Username <input type='text' id='username' name= 'username' value='{{ $old_username }}'></label>
                <label>Password <input type='password' id='password' name= 'password'></label>
				<div class='label'>  &nbsp;<input type='submit' name='invio' value='Login' ></div>
				
			</form>
			@if(isset($old_username) )
    	    <div class='error'>Credenziali non valide</div>
            @endif
			<p>Non sei registrato? <a href="signup">Clicca qui</a> per iscriverti!</p>
		</div>
		
		<footer>
			<span>
				Simone Belfiore<br>1000011355<br>Università degli studi di Catania
			</span>
		</footer>
	</body>
	
</html>