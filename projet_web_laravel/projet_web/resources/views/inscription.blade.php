<!DOCTYPE html>
<html>
    <head>
        <title>BDE CESI</title> 
		<link rel="icon" href="image/logo.png">
        <link rel="stylesheet" href="style idea2.css">
        <link rel="stylesheet" href="connexion.css">
        <link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
        <meta name="viewport" content="width =device-width, initial-scale =1">
        <link href="https://fonts.googleapis.com/css?
        family=Kaushan+script|Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <script src="https://kit.fontawesome.com/61a9b3dfaa.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    </head>

    <body>
        <!--Home page: here is what appears at the home page-->
        <section id="face">
            <img src="image/logo.png" id="BDE">

            <!--<div class="face-text">
                <h1>Students Office</h1>
                <p>Participate to differnts activity and event in your campus & buy food stuff</p>
                <div class="face-btn">
                    <a href="#">BUY STUFF</a>
                </div>
            </div>-->
<!--creation du formulaire d'inscription-->
<div class="wrap-login100">
	<div class="zone">		
	<!--<div class="container-login100">-->
	<form class="login100-form inscription-form" enctype="multipart/form-data">
		<div class="login100-form-title p-b-26">

		<!--</div><div class="wrap-login101 m-b-10">-->
			<!--insertion du logo du bde pour le  formulaire d'inscription-->
			<img class="logo rounded-circle img-thumbnail" src="image/bde.jpg" alt="Logo du BDE" title="logo du BDE" width="20%" height="35%" class="d-inline-block align-top">
                    </div>
		<!--insertion du titre du  formulaire d'inscription-->
                    <div class="login100-form-title p-b-32">Inscription</div>
					<br>
					<div class="youremail"><p>Last Name</p></div>   
					<!--insertion du nom-->
                  <div class="wrap-input100 validate-input" data-validate = "Enter your second name">
						<input class="input100" type="text" name="nom_inscription">
						<span class="focus-input100" data-placeholder=""></span>	
					</div>
                    <div class="nom_error input-error"></div>
					<div class="youremail"><p>First Name</p></div> 
					<!--insertion du prenom-->
                    <div class="wrap-input100 validate-input" data-validate = "enter your first name">
						<input class="input100" type="text" name="prenom_inscription">
						<span class="focus-input100" data-placeholder=""></span>	
					</div>
                    <div class="prenom_error input-error"></div>
					<div class="youremail"><p>E-mail</p></div> 
                    <!--insertion de l'addresse e-mail-->
                    <div class="wrap-input100 validate-input" data-validate = "Enter your e-mail">
						<input class="input100" type="email" name="email_inscription">
						<span class="focus-input100" data-placeholder=""></span>	
					</div>
                    <div class="email_error input-error"></div>
					<div class="youremail"><p>Password</p></div> 
					<!--insertion du mot de passe-->
                    <div class="wrap-input100 validate-input" data-validate="Enter your password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password_inscription">
						<span class="focus-input100" data-placeholder=""></span>
					</div>
                    <div class="password_error input-error"></div>
					<div class="youremail"><p>Confirm Password</p></div> 
					<!--insertion du mot de passe-->
                    <div class="wrap-input100 validate-input" data-validate="Enter your password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password_confirmation">
						<span class="focus-input100" data-placeholder=""></span>
					</div>
                    <div class="password_error input-error"></div>

					<div id="password_instructions" class="m-b-16">
					<div class="youremail"><p>User</p></div> 
					<!--insertion du prenom-->
                    <div class="wrap-input100 validate-input" data-validate = "enter your first name">
						<input class="input100" type="text" name="user">
						<span class="focus-input100" data-placeholder=""></span>	
					</div>	
					
                    
    
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn"><li><a href="/inscription2">NEXT</a></li>

								
							</button>
						</div>
					</div>

		</form>
		</div>
	   </div>
	</section>

	<!--here we are to create the menu tap bar which will help us in navigating in ours site-->
	<div id="sideNav">
		<nav> 
			<ul>
				<li><a href="/index">HOME</a></li>
				<li><a href="/event">EVENT</a></li>
				<li><a href="#about">ABOUT US</a></li>
				<li><a href="#contact">CONTACT</a></li>
				<li><a href="#">STORE</a></li>
				<li><a href="/box_visiteurs">SUGGESTION BOX</a></li>
			</ul>
		</nav>
		<div class="connect">
			<ul>
				<li><a href="/connexion">LOG IN</a></li>
			</ul>
			<p>If you DON'T<br> have an account <br><a href="/inscription">Sign Up</a> here OR use<br>
				<span id="facebk"><i class="fa fa-facebook"></i></span>
				<span id="google"><i class="fa fa-google"></i></span>
			</p>
		</div>
	</div>
	<div id="menuBtn">
		<img src="icon/menu.png" id="menu">
	</div>

 </div>
 <section id="contact">
	<img src="image/bde.png" class="contact-img">
	<div class="titleText">
		<p>CONTACT</p>
	</div>
	<div class="contact-row">
		<div class="contact-left"><!--create a column on the left side which include opening hour -->
			<h1>CESI Student Office</h1>
			<P> Buy your food stuff or article, take part and give idees in different activities on the 
				campus  </P>
			<p><i class="fa fa-clock-o"></i>Monday to Friday - 5pm to 10pm</p>
			<p><i class="fa fa-clock-o"></i>Saturday to Sunday - 8am to 4pm</p>
		</div>
		<div class="contact-right"><!--create a column on the right side which include contact information-->
			<h1>Infoline</h1>
			<p>#Yansoki, Yassa, Douala <span id="map"><i class="fa fa-map-marker"></i></span></p>
			<p>bde.cesi@2022.ucac-icam.com <span id="paper"><i class="fa fa-paper-plane"></i></span></p>
			<P>+237 691986518 / 658978782 <span id="phone"><i class="fa fa-phone"></i></span></P>
		</div>
	</div>
	<div class="social-links"><!--this class include ours different social media pages-->
		<span id="facebook"><i class="fa fa-facebook"></i></span>
		<span id="instagram"><i class="fa fa-instagram"></i></span>
		<span id="twitter"><i class="fa fa-twitter"></i></span>
		<span id="youtube"><i class="fa fa-youtube-play"></i> </span>
		<p>&copy; bde.cesi@2022.ucac-icam.com | Designed by Groupe 1©
                <a href="/mentionslegales">Legal Notice</a>></p> 
	</div>

</section>
 <script>
	var menuBtn = document.getElementById("menuBtn")
	var sideNav = document.getElementById("sideNav")
	var menu = document.getElementById("menu")
	var face = document.getElementById("face")
	var about = document.getElementById("about")
	var event = document.getElementById("event")
	var contact = document.getElementById("contact")
	

	sideNav.style.right == "-180px";

	menuBtn.onclick = function(){
		if(sideNav.style.right == "-180px"){
			sideNav.style.right = "0"; 
			menu.src = "icon/reject.png";
		}
		else{
			sideNav.style.right = "-180px";
			menu.src = "icon/menu.png";
		}

	}
	face.onclick= function(){
		sideNav.style.right = "-180px"; 
		menu.src = "icon/menu.png";
	}
	about.onclick= function(){
		sideNav.style.right = "-180px"; 
		menu.src = "icon/menu.png";
	}

	event.onclick= function(){
		sideNav.style.right = "-180px"; 
		menu.src = "icon/menu.png";
	}

	contact.onclick= function(){
		sideNav.style.right = "-180px"; 
		menu.src = "icon/menu.png";
	}


	var scroll = new SmoothScroll('a[href*="#"]', {
		speed: 1500,
		speedAsDuration: true
		});

	
</script>

</body>
</html>     


