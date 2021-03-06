<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TTap Dev Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="css/projects.css">
        <link rel="stylesheet" href="./css/plugin/slick/slick.css">
        <link rel="stylesheet" href="./css/plugin/slick/slick-theme.css">
        <link rel="stylesheet" href="/css/title.css">

        <!-- Js -->
        <!-- >script src="js/vendor/modernizr-2.6.2.min.js"></script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="./css/plugin/slick/slick.js"></script>

    </head >
    <body style="background-color:rgb(250, 250, 250)" onload="toggleSingleComplete('5')">

      <div id="titleScreen">
      <img id="title" src="Images/titlefinal3.png">

			<div id="cf3">
				<img class="bottom" src="Images/T1/Tri1 pink.png">
				<img class="top" src="Images/T1/Tri1 white.png">
			</div>

          <div id="cf4">
            <img class="bottom" src="Images/T2/Tri2 white.png">
            <img class="top" src="Images/T2/Tri2 gray.png">
          </div>

          <div id="cf5">
            <img class="bottom" src="Images/T3/Tri3 pink.png">
            <img class="top" src="Images/T3/Tri3 white.png">
          </div>

          <div id="cf6">
            <img class="bottom" src="Images/T4/Tri4 gray.png">
            <img class="top" src="Images/T4/Tri4 pink.png">
          </div>

          <div id="cf7">
            <img class="bottom" src="Images/T5/Tri5 gray.png">
            <img class="top" src="Images/T5/Tri5 pink.png">
          </div>

    <div class="arrow">
                  <span></span>
                  <span></span>
                  <span></span>

    </div>
  </div>

        <div class="w3-row w3-center w3-dark-grey w3-padding-16">
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">14+</span><br>
                Partners
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">55+</span><br>
                Projects Done
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">89+</span><br>
                Happy Clients
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">150+</span><br>
                Meetings
            </div>
        </div>

        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>

		<ul class="timeline" id="timeline">
			<li class="li complete" id="1">
				<div class="timestamp">
					<span class="author">Web Application</span>
					<span class="date">11 May 2017<span>
				</div>
				<div id="one"
					class="status"
					onMouseover="this.style.opacity=0.8"
					style="cursor: pointer;"
					onMouseout="this.style.opacity=1"
					onclick="toggleSingleComplete('1')"
				>
					<h4> Web Application </h4>
				</div>
			</li>
			<li class="li complete" id="2">
				<div class="timestamp">
					<span class="author">Online Game</span>
					<span class="date">11 January 2018<span>
				</div>
				<div id="two"
					class="status"
					onMouseover="this.style.opacity=0.8"
					style="cursor: pointer;"
					onMouseout="this.style.opacity=1"
					onclick="toggleSingleComplete('2')"
				>
					<h4> Online Game </h4>
				</div>
			</li>
			<li class="li complete" id="3">
				<div class="timestamp">
					<span class="author">Online Shopping</span>
					<span class="date">11 August 2018<span>
				</div>
				<div id="three"
					class="status"
					onMouseover="this.style.opacity=0.8"
					style="cursor: pointer;"
					onMouseout="this.style.opacity=1"
					onclick="toggleSingleComplete('3')"
				>
					<h4> ShopOnline </h4>
				</div>
			</li>
			<li class="li complete" id="4">
				<div class="timestamp">
					<span class="author">Crytocurrency</span>
					<span class="date">14 March 2019<span>
				</div>
				<div id="four"
					class="status"
					onMouseover="this.style.opacity=0.8"
					style="cursor: pointer;"
					onMouseout="this.style.opacity=1"
					onclick="toggleSingleComplete('4')"
				>
					<h4> Bitcoin Salesman </h4>
				</div>
			</li>
			<li class="li complete" id="5">
				<div class="timestamp">
					<span class="author">Library Aggretator</span>
					<span class="date">25 July 2019<span>
				</div>
				<div id="five"
					class="status"
					onMouseover="this.style.opacity=0.8"
					style="cursor: pointer;"
					onMouseout="this.style.opacity=1"
					onclick="toggleSingleComplete('5')"
				>
					<h4> Book Store </h4>
				</div>
			</li>
		</ul>
		<div style="background-image: url(images/3.jpg); background-repeat: no-repeat; background-size: cover;background-attachment: fixed;">
		<div id="projects" class="allproj">
			<div id="proj1" class="proj">
				<h1>The Web Application</h1>
						<p id="h"> Due to the exponential growth in technological advandces and the social media workforce, Our company roots itself in the combination of both passions.
  	</p>
  	
			</div>
			<div id="proj2" class="proj">
				<h1>The Game Online</h1>
				<p id="h"> Teenager wins big by Playing Fortnite. You too can stand a chance to compete against the best gamers known in the Gaming world.
  	</p>
			</div>
			<div id="proj3" class="proj">
				<h1>The Online Shopping</h1>
				<p id="h"> TTAP Dev offers the best deals on the latest technological trends. 
  	</p>
			</div>
			<div id="proj4" class="proj">
				<h1>The Crypto Currency</h1> 
			<p id="h"> Crypto-mining, crypto-investment and even crypto-jacking( If you know, you know;) can be done here!
  	</p> </div>
			<div id="proj5" class="proj">
				<h1>The Digital Library</h1>
				<p id="h"> For the latest books click below.
  	</p>
			</div>
		</div>

	<div class="ttap">
  <div class="cube">
  	<div class="face home">
  		<img  height="350" width="275" style="float: left;" src="images/proj.jpg">
  		<img style="height: 200px; width: 300px; margin: 20px; " src="images/cons.jpg" alt="construction">
  		

  	

  	</div>

    <div class="face wa">
  			<img style="height: 200px; width: 300px; margin-top: 20px; margin-right: 50px" src="images/speed.jpg" alt=" Stock working">
  			<img style="height: 200px; width: 300px; margin-top: 10px; "src="images/web.jpg" alt="web">
  	</div>

    <div class="face og">

<img style="height: 200px; width: 300px; margin-top: 20px; margin-right: 100px" src="images/game.jpg" alt="gaming">
    <img src="images/pc.jpg" alt="pc gaming">

    </div>
    
    <div class="face os">online shop
<img style="height: 200px; width: 220px; margin-top: 15px; margin-right: 11px"src="images/os.jpg" alt="trolley on keyboard">

    </div>
    
    <div class="face cc">crypto currency</div>
    <div class="face dl">bottom</div>
    
  </div>
</div>
</div>

		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src="js/index.js"></script>

		<div id="division">
		<div id="aboutus"><p style="margin-top: 16px;font-weight: bold;">About us...</p>
		
	<p>We are a self-made content creation company comprised of a group of individuals working in the Information Technology field. Our wbsite aims to deliver the lastest and most relevent content pertaining to the worlds of web applications, online gaming, online shopping, digital libraries and crypto currency.</p>
		</div>
		<div id="employ">
			<div class="emp"><img src="Images/tk.jpg" class="images" alt="TK"> <p>Tlou Lebelo</p></div>
			<div class="emp"><img src="Images/tshego.jpg" class="images" alt="Tshego"> <p>Tshegofatso Manthata</p></div>
			<div class="emp"><img src="Images/alex.jpg" class="images" alt="Alex"> <p>Alexander Schmid</p></div>
			<div class="emp"><img src="Images/percy.jpg" class="images" alt="Percy"> <p>Percy Rapudi</p></div>
		</div>
	</div>
    </body>
</html>
