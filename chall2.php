 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
   var _0x325e=['135281yELDff','733841bMJBsY','ready','365071lKIDxF','412HqGwWt','1143869yyoRba','6XOLxzs','userAgent','3mKFJWA','139550ZyybUq','log','877yRCPnW','3680023VyiYdY','val','6sURNky','#userAgent','1yILubL'];var _0xf3cf=function(_0x346290,_0x154b2c){_0x346290=_0x346290-0xf9;var _0x325e25=_0x325e[_0x346290];return _0x325e25;};var _0x324015=_0xf3cf;(function(_0x519aa4,_0x18ea00){var _0x100297=_0xf3cf;while(!![]){try{var _0x3fdb81=-parseInt(_0x100297(0xf9))*-parseInt(_0x100297(0xfb))+parseInt(_0x100297(0x105))*-parseInt(_0x100297(0xfe))+parseInt(_0x100297(0x102))*parseInt(_0x100297(0xfd))+parseInt(_0x100297(0xff))+-parseInt(_0x100297(0x103))*-parseInt(_0x100297(0x100))+-parseInt(_0x100297(0xfa))*-parseInt(_0x100297(0x108))+-parseInt(_0x100297(0x106));if(_0x3fdb81===_0x18ea00)break;else _0x519aa4['push'](_0x519aa4['shift']());}catch(_0x1c7ca7){_0x519aa4['push'](_0x519aa4['shift']());}}}(_0x325e,0x8dbd2),$(document)[_0x324015(0xfc)](function(){var _0x413d27=_0x324015,_0x35f253=$(_0x413d27(0x109))[_0x413d27(0x107)](navigator[_0x413d27(0x101)]);console[_0x413d27(0x104)](_0x35f253);}));       
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
                  <span class="help-msg">Chall 2 — Clue : <span class="code">!!!!</span> </span>
                </div>
              </div>
              <div class="terminal-line">
                  <br>
                  <span class="success">Can here possibale HTML Injection?</span> <span class="directory"> on static Page without input fild??!!</span> 

                    <input type="hidden" id="userAgent" value="">
        <br>
    <br>
<br>
<span class="success">Happy</span> <span class="directory">hacking ^_^</span> 
<span class="success">Hint</span> <span class="directory">Is it static? ^_^</span> 
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