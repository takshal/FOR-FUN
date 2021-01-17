<?php if(!(isset($_GET["ParamUrl"])) || !(isset($_GET["ParamHeight"])) || !(isset($_GET["ParamWidth"])))
{

    header("Location: chall3.php?ParamUrl=https://evil.com&ParamWidth=450&ParamHeight=450");

    exit;

}
function xss_check_4($data)
{
  
    // addslashes - returns a string with backslashes before characters that need to be quoted in database queries etc.
    // These characters are single quote ('), double quote ("), backslash (\) and NUL (the NULL byte).
    // Do NOT use this for XSS or HTML validations!!!
    
    return addslashes($data);
    
}


 ?>


###########
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
   $( document ).ready(function() {
       var uAgent = $('#userAgent').val(navigator.userAgent); //passes userAgent to hidden field #userAgent
       console.log(uAgent);
   });       
   </script>



<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>XSS Labs | Tojojo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css'>
<link rel="stylesheet" href="./style.css">
  </head>
  <body>
<!-- partial:index.partial.html -->
<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container">
      <div class="columns">
        
        <div class="column is-flex">
          <div class="column-child terminal shadow">
            <div class="terminal-bar dark-mode">
              <div class="icon-btn close"></div>
              <div class="icon-btn min"></div>
              <div class="icon-btn max"></div>
              <div class="terminal-bar-text is-hidden-mobile dark-mode-text">root@tojojo: ~</div>
            </div>
            <div class="terminal-window " onclick="document.getElementById('dummyKeyboard').focus();">
              <div class="terminal-output" id="terminalOutput">
                <div class="terminal-line">
                  <span class="help-msg">Chall 3 — Clue : <span class="code">Lok at url peremeter</span> </span>
                </div>
              </div>
              <div class="terminal-line">
                  <br>
                  <span class="success">Can here possibale To  Injection?</span> <span class="directory">add Another Iframe? </span> 
                  <br>
                  <br>
                  <br>
                    <iframe frameborder="0" src="https://evil.com" height="<?php echo xss_check_4($_GET["ParamHeight"])?>" width="<?php echo xss_check_4($_GET["ParamWidth"])?>"></iframe>
        <br>
    <br>
<br>
<span class="success">Happy</span> <span class="directory">hacking ^_^</span> 
<span class="success">Hint</span> <span class="directory">You can Bypass i Belive on you ^_^</span> 
              </div>
            </div>
            <br>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="content has-text-centered">
    <p>
        Support by <i class="fas fa-heart icon"></i> Tojojo.
      </p>
    </div>
  </footer>
</section>
<!-- partial -->
<script>
  function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>
<script src='https://use.fontawesome.com/releases/v5.3.1/js/all.js'></script><script  src="./script.js"></script>
</body>

</html>