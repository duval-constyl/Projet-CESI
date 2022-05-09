<!DOCTYPE html>
<html>
    <head>
        <title>BDE CESI</title> 
        <link rel="icon" href="image/logo.png">
        <link rel="stylesheet" href="idea.css">
        <link rel="stylesheet" href="style idea2.css">
        <link rel="stylesheet" href="event.css"> 
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="connexion1.css">       
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

<!--formulaire de la boite idées-->
<!--initialisation du logo  du site-->
<div class="wrap-login100">
    <div class="zone">
      <form class="login100-form connexion-form" enctype="multipart/form-data">
        <!--initialisation du logo  du site-->  
          <div class="login100-form-title p-b-26">
          <img class="logo rounded-circle img-thumbnail" src="image/bde.jpg" alt="Logo du BDE" title="logo du BDE" width="20%" height="35%" class="d-inline-block align-top">
        </div>
         <!--connexion au site-->
         <div class="login100-form-title p-b-32">Leave Us a Comment
        </div> 
           <!--entrer de la suggestion-->
           <label for="subject"><b>your comment</b></label>
            <textarea id="subject" name="subject"placeholder="Questions, suggestions for improvements or anything, we listen to you......">

            </textarea>
</form> <!--bouton de connexion-->
          <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                  <div class="login100-form-bgbtn"></div>
                  <button class="login100-form-btn">
                      comment
                  </button>
              
          </div>

          <script>
              var feild = document.querySelector('textarea');
              var backUp = feild.getAttribute('placeholder');
              var btn = document.querySelector('.btn');
              var clear = document.getElementById('clear')

            feild.onfocus = function(){
                this.setAttribute('placeholder', '');
                this.style.borderColor = '#333';
                btn.style.display = 'block'
            }

            feild.onblur = function(){
                this.setAttribute('placeholder',backUp);
                this.style.borderColor = '#aaa'
            }

            clear.onclick = function(){
                btn.style.display = 'none';
                feild.value = '';
            }
          </script>
    </body>
</html>