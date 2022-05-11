<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Products - Red store</title>
    <link rel="stylesheet" href="style boutique.css" />
    <link rel="icon" href="image/logo.png">

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <a href="index.html">
            <img src="images/Logo_cesi.png" alt="" width="125px"
          /></a>
        </div>
        <nav>
          <ul id="MenuItems">
          <li><a href="/index">HOME</a></li>
                    <li><a href="/event">EVENT</a></li>
                    <li><a href="#about">ABOUT US</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <li><a href="/boutique">STORE</a></li>
                    <li><a href="/box_visiteurs">SUGGESTION BOX</a></li>

            <!-- TODo: 22:20 -->
          </ul>
        </nav>
        <a href="/cartl"
          ><img src="images/cart.png" alt="" width="30px" height="30px"
        /></a>
        <img
          src="images/menu.png"
          alt=""
          class="menu-icon"
          onclick="menutoggle()"
        />
      </div>
    </div>

    <!-- Cart Items Details -->
    <div class="small-container cart-page">
      <table>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/buy-1.jpg" alt="" />
              <div>
                <p>Red Printed T-shirt</p>
                <small>Price: $50.00</small>
                <br />
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="nunber" value="1" /></td>
          <td>$50.00</td>
        </tr>

        <tr>
          <td>
            <div class="cart-info">
              <img src="images/buy-2.jpg" alt="" />
              <div>
                <p>Red Printed T-shirt</p>
                <small>Price: $50.00</small>
                <br />
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="nunber" value="1" /></td>
          <td>$50.00</td>
        </tr>

        <tr>
          <td>
            <div class="cart-info">
              <img src="images/buy-3.jpg" alt="" />
              <div>
                <p>Red Printed T-shirt</p>
                <small>Price: $50.00</small>
                <br />
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="nunber" value="1" /></td>
          <td>$50.00</td>
        </tr>
      </table>

      <div class="total-price">
        <table>
          <tr>
            <td>Subtotal</td>
            <td>$200.00</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>$30.00</td>
          </tr>
          <tr>
            <td>Total</td>
            <td>$230.00</td>
          </tr>
        </table>
      </div>
    </div>
      
    <!-- Footer -->
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
    <!-- JS for Toggle menu -->
    <script>
      var MenuItems = document.getElementById("MenuItems");

      MenuItems.style.maxHeight = "0px";

      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>
  </body>
</html>
