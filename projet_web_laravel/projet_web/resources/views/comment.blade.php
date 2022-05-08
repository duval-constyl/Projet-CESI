<!DOCTYPE html>
<html>
    <head>
        <title>BDE CESI</title> 
        <link rel="icon" href="image/logo.png">
        <link rel="stylesheet" href="event.css">
    </head>
    <body>
        <div class="container">
            <h2>Leave Us a Comment</h2>
            <form>
             <textarea placeholder='Add Your Comment'></textarea>
              <div class="btn">
                <input type="submit" value='Comment'>
                <button id='clear' href='#'>Cancel</button>
              </div>
            </form>
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