<html>
  <head>
    <meta name="viewport"
    content="width=device-width, initial-scale=1">
    <title>Panificio Belfiore</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBS9s1LE6Qx3C7Sv4WXK-TfTgBd5e9Cew0&callback=initMap&libraries=&v=weekly'async></script>
    <link rel='stylesheet' href='{{ url("css/home.css") }}'>
    <script src='{{ url("js/home.js") }}' defer></script>
    
  </head>
  <body>
    <header>
        <div id ="overlay"></div>
        @if (isset($nome_utente))
        <h1 strong>Ciao {{ $nome_utente }} !</h1>
        @else
        <a href="home">
                <h1 strong>Panificio Belfiore</h1> 
        </a>
        @endif
        <div class='logo'>
            <img id='logo' src="img/Logo.png">
            <h5 strong>Panificio Belfiore</h5> 
        </div>
    </header>
    
    <div class="container">
        <nav>
            @if (isset($nome_utente))
            <a href="logout">
                <span>Logout</span>
            </a>
            @else
            <a href="login">
                <span>Login</span>
            </a>
            @endif
        </nav>   
        <nav>
            <a href=#informazioni>
                <span>Informazioni</span>
            </a>
			<a href=#recensioni>
                <span>Recensioni</span>
            </a>
            <a href=#mappa>
                <span>Dove siamo</span>
            </a>
            
        </nav>

    </div>
    
    <main>
        <div class='a' id='Pane'>
            <div class="button">
                <img src="img/bread.png">
                <span>Pane</span>
            </div>
        </div>
        <div  class='a' id='Pizza'>
            <div class="button" >
                <img src="img/pizza.png">
                <span>Pizze</span>
            </div>
        </div>
        <div class='a' id='Biscotti'>
            <div class="button">
                <img src="img/cookie.png">
                <span>Biscotti</span>
            </div>
        </div>
        <div  class='a' id='Bevande'>
            <div class="button">
                <img src="img/beer.png">
                <span>Bevande</span>
            </div>
        </div>
        <div  class='a' id='Ingredienti'>
            <div class="button" id='Ingredienti'>
                <img src="img/vegetable.png">
                <span>Ingredienti</span>
            </div>
        </div>
    </main>
    <div class='preferiti hidden'></div>
    <div class='search hidden'>
        <input placeholder="Cerca"></input>
        <img src="img/search.png">
    </div>
    <div class='corrente hidden'></div>
    <h3 strong> I nostri prodotti</h3>
    <div class="photogallery">
        <img id='pane' src="img/pane.jpg">
        <img id='pizza' src="img/pizza-napoletana.jpg">
        <img id='biscotti' src="img/biscotti.jpg">
        <img id='bevande' src="img/cocacola.jpg">
        <img id='tavolacalda' src="img/tavolacalda.jpg">
    </div>
    <h3 strong id=informazioni>Informazioni</h3>
    <div id="info">
        <span>Via Matteo Renato Imbriani, 55, Catania</span><br>
        <span>095 447912</span>
    </div>
	<h3 strong id=recensioni>Recensioni</h3>
		<div class="recensioni">
			<div class="sinistra">
				<span id=stelle>
					{{ round($media, 2) }}	
				</span>

                @if (isset($nome_utente))
                <a href="writefeedback">
					<span>Clicca qui per lasciarne una!</span>
				</a>
                @else
                <a href="login">
					<span>Clicca qui per lasciarne una!</span>
				</a>
                @endif
				<span>Oppure</span>
				<a href="feedbacks">
					<span>Leggi tutte le recensioni</span>
				</a>
				
			</div>
			<div id='clienti'>
            @if( $recensioni->count() > 4)
					@for($i=0; $i< 5 ; $i++)
						<div id='recensione'>
						    <div id='recensioneinfo'>
					    	    <span id='num'>
					    	    {{ $recensioni->toArray()[$i]['stelle'] }}
					    	    </span>
						        <span>
                                {{ $recensioni[$i]->cliente()->first()->nome }} 
				        		</span>
				        		<p>
                                {{ $recensioni->toArray()[$i]['data'] }}
					    	    </p>
    						</div>
    						<p> {{ $recensioni->toArray()[$i]['testo']}} </p>
						</div>
					@endfor
					
					@else
						@for($i=0; $i< $recensioni->count() ; $i++)
						<div id='recensione'>
						    <div id='recensioneinfo'>
					    	    <span id='num'>
					    	    {{ $recensioni->toArray()[$i]['stelle'] }}
					    	    </span>
						        <span>
                                {{ $recensioni[$i]->cliente()->first()->nome }} 
				        		</span>
				        		<p>
                                {{ $recensioni->toArray()[$i]['data'] }}
					    	    </p>
    						</div>
    						<p> {{ $recensioni->toArray()[$i]['testo'] }} </p>
						</div>
					@endfor
				@endif
				
			</div>
			
		</div>
		
    <h3 strong id=mappa>Dove trovarci</h3>
    <div class="mappa">
        <div id="map"></div>
    </div>
    <div id='food image'></div>
    

    <footer>
        <span>
            Simone Belfiore<br>1000011355<br>Università degli studi di Catania
        </span>
    </footer>     
    
  </body>
</html>