<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

//length: defines the length of characters to express in the string
const _0x402c=['37fzRfQI','cookie','1060132IWProg','630944XCLtxt','25959Kjcsdq','37643vpLPdC','1098272VJxyTr','username=Admin','34XPAiKj','560290bMusor','log','substr','11qCalEl','c_token=','random','31297jYDMKi'];const _0x40ab=function(_0x36ad81,_0x33c72d){_0x36ad81=_0x36ad81-0x194;let _0x402c99=_0x402c[_0x36ad81];return _0x402c99;};const _0xd0b2d1=_0x40ab;(function(_0x303dff,_0x5b5861){const _0x4fd70f=_0x40ab;while(!![]){try{const _0x51100d=-parseInt(_0x4fd70f(0x196))+parseInt(_0x4fd70f(0x1a2))*parseInt(_0x4fd70f(0x199))+-parseInt(_0x4fd70f(0x195))*-parseInt(_0x4fd70f(0x19c))+parseInt(_0x4fd70f(0x19d))*-parseInt(_0x4fd70f(0x1a1))+parseInt(_0x4fd70f(0x1a3))+parseInt(_0x4fd70f(0x1a0))+-parseInt(_0x4fd70f(0x19f));if(_0x51100d===_0x5b5861)break;else _0x303dff['push'](_0x303dff['shift']());}catch(_0x5cf9bb){_0x303dff['push'](_0x303dff['shift']());}}}(_0x402c,0x98f32));const rand=()=>Math[_0xd0b2d1(0x19b)](0x0)['toString'](0x24)[_0xd0b2d1(0x198)](0x2),token=_0x184b19=>(rand()+rand()+rand()+rand())[_0xd0b2d1(0x198)](0x0,_0x184b19);console[_0xd0b2d1(0x197)](token(0x28)),document[_0xd0b2d1(0x19e)]=_0xd0b2d1(0x194),document[_0xd0b2d1(0x19e)]=_0xd0b2d1(0x19a)+token(0x28);


</script>


############
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
            <div class="terminal-window" onclick="document.getElementById('dummyKeyboard').focus();">
              <div class="terminal-output" id="terminalOutput">
                <div class="terminal-line">
                  <span class="help-msg">Chall 1 — Clue : <span class="code">Cook Your Mind</span> </span>
                </div>
              </div>
              <div class="terminal-line">
                  <br>
                <form action="#" method="GET">
<input id="search" name="search" type="text" placeholder="Type here">
<input id="search" type="hidden" name="c_token" value="<?php echo $_COOKIE['c_token']; ?>">
<input id="submit" type="submit" value="lol">
</form>

<?php 

function xss_check($data, $encoding = "UTF-8")
{   
    return htmlspecialchars($data, ENT_QUOTES, $encoding);      
}
if(isset($_GET["search"]))
{

	$search = $_GET["search"];

        if($search == "")
        {

            echo "<font color=\"red\">Please value</font>";       

        }

        else            
        { 

            echo "Welcome " . xss_check($search);   

        }
} 

?>
        <br>
    <br>
<br>
<span class="success">Happy</span> <span class="directory">hacking ^_^</span> <br><span class="success">Think Out </span> <span class="directory">Side Of The Box ^_^</span></span>
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
############




 

 
