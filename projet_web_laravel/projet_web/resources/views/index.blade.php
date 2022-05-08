<!DOCTYPE html>
<html>
    <head>
        <title>BDE CESI</title> 
        <link rel="icon" href="image/logo.png">
        <link rel="stylesheet" href="style.css">
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
            <div class="face-text">
                <h1>Students Office</h1>
                <p>Participate to differnts activity and event in your campus & buy food stuff</p>
                <div class="face-btn">
                    <a href="#">BUY STUFF</a>
                </div>
            </div>
        </section>

        <!--here we are to create the menu tap bar which will help us in navigating in ours site-->
        <div id="sideNav">
            <nav> 
                <ul>
                    <li><a href="/comment">HOME</a></li>
                    <li><a href="#">EVENT</a>
                        <ul><li><a href="/event" id="pars">Participate</a></li></ul></li>
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
                    <a href="https://fr-fr.facebook.com/"><span id="facebk"><i class="fa fa-facebook"></i></span></a>
                    <a href="https://www.google.cm/"><span id="google"><i class="fa fa-google"></i></span></a>
                </p>
            </div>
        </div>
        <div id="menuBtn">
            <img src="icon/menu.png" id="menu">
        </div>



        <!--here we are to create ours event slide where we will include likes and comment actions-->
        <section id="event">
            <div class="titleText">
                <p>EVENTS & ACTIVITIES</p>
                <h2>During our school curriculum we practice and participate to different activities</h2>
            </div>
            <div class="event-box"><!--here each event box represent a picture, heading and an event description-->
                <div class="single-event">
                    <img src="image/diver.jfif" >
                    <div class="overlay"></div><!--this class is to an opacity effet when we touch a picture-->
                    <div class="event-desc">
                        <h3>Diversity Week</h3>
                        <hr>
                        <p>During this week, we register and participate to activities such as handball Championship, 
                            cooking a variety of meal of different areas and also learning thier culture.</p>
                    </div>
                </div>
                <div class="single-event">
                    <img src="image/soire.jfif" >
                    <div class="overlay"></div>
                    <div class="event-desc">
                        <h3>Welcoming Event</h3>
                        <hr>
                        <p>This event is especially for new members(students) in school in other for them to know each other
                            and attribute to them godfathers  .</p>
                    </div>
                </div>
                <div class="single-event">
                    <img src="image/football.jfif" width="90%">
                    <div class="overlay"></div>
                    <div class="event-desc">
                        <h3>Football Championship</h3>
                        <hr>
                        <p>This done at the beginning of every academic year where promotion will play football against
                            each other and at the end we give a price to the first of the Championship.</p>
                    </div>
                </div>
                <div class="single-event">
                    <img src="image/pool1.jfif" width="90%">
                    <div class="overlay"></div>
                    <div class="event-desc">
                        <h3>Pool Party</h3>
                        <hr>
                        <p>Always done at the end of every to 2 month to help students to interact with each other.</p>
                    </div>
                </div>
            </div>
        </section>
        



        <!--about the members of the BDE, we are to description the members of the BDE-->

        <section id="about">
            <div class="titleText">
                <p>ABOUT US</p>
                <h1>Members of the BDE</h1>
            </div>
            <div class="about-row"><!--we create a row for the members-->
                <div class="about-col">
                    <div class="user">
                        <img src="image/ph1.jpg">
                        <div class="user-info">
                            <h4>CONSTYL DUVAL</h4>
                            <small>constyl.fotso@2025.ucac-icam.com</small>
                        </div>
                    </div>
                    <p>Mr Fotso Duval President of the student Office, All decision made by the school administration to students passes 
                        throught him.Responsable of planifing events & activities in different clubs on the campus. In charge of sharing money 
                        to different clubs for events ands activities to take place    </p>
                </div>
                <div class="about-col"><!--each member is on its column described by it's activities and gmail contact-->
                    <div class="user">
                        <img src="image/ph3.jpg">
                        <div class="user-info">
                            <h4>BALOG GEORGES</h4>
                            <small>georges.balog@2025.ucac-icam.com</small>
                        </div>
                    </div>
                    <p>Mr Georges Balog in charge of event, the right-hand of the president. Also in charge taking care of 
                        the student of site, capable of posting,modifying or deleting event, activities in the site also of 
                    deleting or modifying students comment and pictures posted on the site. </p>
                </div>
                <div class="about-col">
                    <div class="user">
                        <img src="image/ph2.jpg">
                        <div class="user-info">
                            <h4>STEEVEN CABREL</h4>
                            <small>cabrel.tadie@2025.ucac-icam.com</small>
                        </div>
                    </div>
                    <p>Mr Tadie Cabrel in charge of the student office store. Responsible for the sales of all products. Available  at 
                        any time, just complet your command and at the second he will come and deliver it to you.
                    </p>
                </div>
            </div>
        </section>



<!--this section includes the footer (contact) of the BDE site-->
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
                <a href="https://fr-fr.facebook.com/"><span id="facebook"><i class="fa fa-facebook"></i></span></a>
                <a href="https://www.instagram.com/"><span id="instagram"><i class="fa fa-instagram"></i></span></a>
                <a href="https://twitter.com/"><span id="twitter"><i class="fa fa-twitter"></i></span></a>
                <a href="https://www.youtube.com/"><span id="youtube"><i class="fa fa-youtube-play"></i> </span></a>
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