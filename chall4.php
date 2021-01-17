
<html>
  <head><title>Toxic DOM</title></head>
  <body>
    <script>
      const postMessageHandler = function(msg) {
  let action = msg.data.action;
  if(action === 'exec') {
    eval(msg.data.payload);
  } else if (action === 'addImage') {
    document.write('<img href='+ msg.data.source + '>');
  } else if (action === 'addHtml') {
    document.write(msg.data.html);
  } else {
    console.debug('unsupported command');
  }
};

window.addEventListener('message', postMessageHandler, false);

    </script>
  </body>
</html>




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
                  <span class="help-msg">Chall 4 — Clue : <span class="code">Post Message</span> </span>
                </div>
              </div>
              <div class="terminal-line">
                  <br>
               <h2> lol Nothing on page</h2>
        <br>
    <br>
<br>
<span class="success">Happy</span> <span class="directory">hacking ^_^</span> <br><span class="success">Think Out </span> <span class="directory">Side Of The Box this is PostMessage vurnablity ^_^</span></span>
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
