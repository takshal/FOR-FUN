const BLACKLISTED_KEY_CODES = [38];
const COMMANDS = {
  help:
    'Supported commands: <span class="code">about</span>,<span class="code">experience,</span> <span class="code">ls</span>, <span class="code">join</span>, <span class="code">contact</span>',
  ls:
    'List of chall : <br><br> ~ <a href="/xss-labs/chall1.php">Chall 1 | coock(easy)  </a><br> ~ <a href="/xss-labs/chall2.php">Chall 2 | Jems Bond 007 </a><br>~ <a href="/xss-labs/chall3.php">Chall 3 | Frame </a><br>~ <a href="/xss-labs/chall4.php">Chall 4 | Post </a><br>',
  about:
    'XSS Labs | Tojojo<br>Cross-site scripting and HTML injection  labs for web application security enthusiasts, <br>This website is made for practice, please dont hack',
  join:
    'Lets contribute with us, just enter your github username via email takshal@amigo.org.in with subject "JOIN Tojojo"',
  experience: "No Experience😥",
  contact:
    "You can contact us on any of following links:<br><a href='#' class='success link'>Facebook</a> ,<a href='#' class='success link'>Instagram</a>",
};
let userInput, terminalOutput;

const app = () => {
  userInput = document.getElementById("userInput");
  terminalOutput = document.getElementById("terminalOutput");
  document.getElementById("dummyKeyboard").focus();
  console.log("Application loaded");
};

const execute = function executeCommand(input) {
  let output;
  input = input.toLowerCase();
  if (input.length === 0) {
    return;
  }
  output = `<div class="terminal-line"><span class="success">➜</span> <span class="directory">~</span> ${input}</div>`;
  if (!COMMANDS.hasOwnProperty(input)) {
    output += `<div class="terminal-line">no such command: ${input}</div>`;
    console.log("Oops! no such command");
  } else {
    output += COMMANDS[input];
  }

  terminalOutput.innerHTML = `${
    terminalOutput.innerHTML
  }<div class="terminal-line">${output}</div>`;
  terminalOutput.scrollTop = terminalOutput.scrollHeight;
};

const key = function keyEvent(e) {
  const input = userInput.innerHTML;

  if (BLACKLISTED_KEY_CODES.includes(e.keyCode)) {
    return;
  }

  if (e.key === "Enter") {
    execute(input);
    userInput.innerHTML = "";
    return;
  }

  userInput.innerHTML = input + e.key;
};

const backspace = function backSpaceKeyEvent(e) {
  if (e.keyCode !== 8 && e.keyCode !== 46) {
    return;
  }
  userInput.innerHTML = userInput.innerHTML.slice(
    0,
    userInput.innerHTML.length - 1
  );
};

document.addEventListener("keydown", backspace);
document.addEventListener("keypress", key);
document.addEventListener("DOMContentLoaded", app);