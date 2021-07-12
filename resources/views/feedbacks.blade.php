<html>
	<head>
		<meta name="viewport"
		content="width=device-width, initial-scale=1">
		<title>PB - Feedback</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
		<link rel='stylesheet' href='{{ url("css/feedbacks.css") }}'>
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
		
		<h3 strong>Tutti i Feedback</h3>
		
		<div class = "container">
		<p> Qui puoi federe tutti i Feedback</p>


                @for($i=0; $i< $recensioni->count(); $i++)
						<div id='recensione'>
						    	<div class='br'>
					    	    <span id='num'>
					    	    {{ $recensioni->toArray()[$i]['stelle'] }}
					    	    </span>
						        <span>
                                {{ $recensioni[$i]->cliente()->first()->nome }} 
				        		</span>
				        		<span >
                                {{ $recensioni->toArray()[$i]['data'] }}
								</span>
								</div>
								<div class='br'>
    							<span id='testo'> {{ $recensioni->toArray()[$i]['testo']}} </span>
								</div>
						</div>
				@endfor
        





		</div>
		
		<footer>
			<span>
				Simone Belfiore<br>1000011355<br>Università degli studi di Catania
			</span>
		</footer>
	</body>
	
</html>