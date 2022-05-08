<!DOCTYPE html>
<html>
    <head>
        <title>BDE CESI</title> 
        <link rel="icon" href="image/logo.png">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="event.css">
        <link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./assets/vendors/fontawesome/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <meta name="viewport" content="width =device-width, initial-scale =1">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+script|Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/asset/vendors/FileSaver.js-master">
        <script src="https://kit.fontawesome.com/61a9b3dfaa.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    </head>

    <body>
        <!--Home page: here is what appears at the home page-->
        <section id="face">
            <img src="image/logo.png" id="BDE">

            <div class="face-text">
                <h1>Events & Activities</h1>
                <p>Participate to differnts activities and events </p>
                <div class="face-btn">
                    <a href="#">Add Event</a>
                </div>
            </div>
            
        </section>

        <!--here we are to create the menu tap bar which will help us in navigating in ours site-->
        <div id="sideNav">
            <nav> 
                <ul>
                <li><a href="/index">HOME</a></li>
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

        <section id="middle">
            <div class="titleText">
                <p>Events and Activities</p>
                <h1>Different activities that occured and that are to occur on campus</h1>
            </div>
            <div class="middle-row">
                <div class="middle-col">
                    <div class="dots">
                        <ul><li><img src="image/dot.jpg" class="dot">
                            <ul>
                                <li><a href="/event">Participate</a></li>
                                <li><a href="">Modifier</a></li>
                                <li><a href="">Supprimer</a></li>
                            </ul> 
                        </li></ul>
                    </div>
                    <div class="event">
                        <img src="image/anniv.png" class="img-event">
                        <div class="event-info">
                            <h4>Futur event</h4>
                            <small>douala, 27/07/2022</small>
                        </div>
                    </div>
                    <p>We are to organise and celebrate the thirtieth anniversary of the school.</p>
                    <div class="icon-col">
                        <img src="icon/vide.png" class="like" onclick="likebutton()">
                        <img src="icon/commenter.png" class="comment">
                        <img src="icon/save.png" class="save">
                    </div>
                </div>
                <div class="middle-col">
                    <div class="dots">
                        <ul><li><img src="image/dot.jpg" class="dot">
                            <ul>
                                <li><a href="/event">Participate</a></li>
                                <li><a href="">Modifier</a></li>
                                <li><a href="">Supprimer</a></li>
                            </ul> 
                        </li></ul>
                    </div>
                    <div class="event">
                        <img src="image/diver.jfif" class="img-event" >
                        <div class="event-info">
                            <h4>Passed event</h4>
                            <small>douala, 04/12/2021</small>
                        </div>
                    </div>
                    <p>During this week, we are to learn diversity culture of students on the campus. Groupe students for the 
                        same tribe or country and ask them to participate to different activities. </p>
                    <div class="icon-col">
                        <img src="icon/vide.png" class="like" onclick="likebutton()">
                        <img src="icon/commenter.png" class="comment">
                        <img src="icon/save.png" class="save">
                    </div>
                </div>
                <div class="middle-col">
                    <div class="dots">
                        <ul><li><img src="image/dot.jpg" class="dot">
                            <ul>
                                <li><a href="/event">Participate</a></li>
                                <li><a href="">Modifier</a></li>
                                <li><a href="">Supprimer</a></li>
                            </ul> 
                        </li></ul>
                    </div>
                    <div class="event">
                        <img src="image/football.jfif" class="img-event">
                        <div class="event-info">
                            <h4>Passed event</h4>
                            <small>douala, 27/09/2021</small>
                        </div>
                    </div>
                    <p>This done at the beginning of every academic year where promotion will play football against
                        each other and at the end we give a price to the first of the Championship. </p>
                    <div class="icon-col">
                        <img src="icon/vide.png" class="like" onclick="likebutton()">
                        <img src="icon/commenter.png" class="comment">
                        <img src="icon/save.png" class="save">
                    </div>
                </div>
                <div class="middle-col">
                    <div class="dots">
                        <ul><li><img src="image/dot.jpg" class="dot">
                            <ul>
                                <li><a href="">Participate</a></li>
                                <li><a href="">Modifier</a></li>
                                <li><a href="">Supprimer</a></li>
                            </ul> 
                        </li></ul>
                    </div>
                    <div class="event">
                        <img src="image/tech.jfif" class="img-event">
                        <div class="event-info">
                            <h4>Futur event</h4>
                            <small>douala, 18/06/2022</small>
                        </div>
                    </div>
                    <p>Technology tournament,the school organises a competition for other school in other to price 
                        the best innovating technology. </p>
                    <div class="icon-col">
                        <img src="icon/vide.png" class="like" onclick="likebutton()">
                        <img src="icon/commenter.png" class="comment">
                        <img src="icon/save.png" class="save">
                    </div>
                </div>
                <div class="middle-col">
                    <div class="dots">
                        <ul><li><img src="image/dot.jpg" class="dot">
                            <ul>
                                <li><a href="">Participate</a></li>
                                <li><a href="">Modifier</a></li>
                                <li><a href="">Supprimer</a></li>
                            </ul> 
                        </li></ul>
                    </div>
                    <div class="event">
                        <img src="image/soire.jfif" class="img-event">
                        <div class="event-info">
                            <h4>Futur event</h4>
                            <small>douala, 20/10/2021</small>
                        </div>
                    </div>
                    <p>This event is especially for new members(students) in school in other for them to know each other
                        and attribute to them godfathers  .</p>
                    <div class="icon-col">
                        <img src="icon/vide.png" class="like" onclick="likebutton()">
                        <img src="icon/commenter.png" class="comment">
                        <img src="icon/save.png" class="save">
                    </div>
                </div>
                <div class="middle-col">
                    <div class="dots">
                        <ul><li><img src="image/dot.jpg" class="dot">
                            <ul>
                                <li><a href="">Participate</a></li>
                                <li><a href="">Modifier</a></li>
                                <li><a href="">Supprimer</a></li>
                            </ul> 
                        </li></ul>
                    </div>
                    <div class="event">
                        <img src="image/pool1.jfif" class="img-event">
                        <div class="event-info">
                            <h4>Passe event</h4>
                            <small>douala, 03/02/2022</small>
                        </div>
                    </div>
                    <p>Always done at the end of every to 2 month to help students to interact with each other. </p>
                    <div class="icon-col">
                        <img src="icon/vide.png" class="like" onclick="likebutton()">
                        <img src="icon/commenter.png" class="comment">
                        <img src="icon/save.png" class="save" onclick="getFileName()">
                    </div>
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
                <p>&copy; bde.cesi@2022.ucac-icam.com | Designed by Groupe 1</p> 

            </div>
    
        </section>

        <script>
            var menuBtn = document.getElementById("menuBtn")
            var sideNav = document.getElementById("sideNav")
            var menu = document.getElementById("menu")
            var face = document.getElementById("face")
            var about = document.getElementById("about")
            var event = document.getElementById("middle")
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

            function likebutton(){
                let like = document.querySelector('.like')
                if(like.src.match("icon/vide.png")) {
                    like.src = "icon/rouge.png"
                }
                else{
                    like.src = "icon/vide.png"
                }
                
            }

                let btnDownload = document.querySelector('.save');
                let img = document.querySelector('.img-event');
                // Must use FileSaver.js 2.0.2 because 2.0.3 has issues.
                btnDownload.addEventListener('click', () => {
                    let imagePath = img.getAttribute('.img-event');
                    let fileName = getFileName(imagePath);
                    saveAs(imagePath, fileName);
                });
                function getFileName(str) {
                    return str.substring(str.lastIndexOf('/') + 1)
                }
          
            
        </script>
        <script src="./asset/vendors/FileSaver.js-2.0.4"></script>
        <script src="www/FileSaver.js"></script>

    </body>
</html>