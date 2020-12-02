// form overlay

function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}

document.querySelector(".signup-form").style = "display:none;";
document.querySelector(".signup").style = "background-color:rgba(0,0,0,0.2);";

// signup
document.querySelector(".signup").addEventListener("click", function () {
  document.querySelector(".login-form").style = "display:none;";
  document.querySelector(".login").style = "background-color:rgba(0,0,0,0.2);";
  document.querySelector(".signup-form").style = "display:block;";
  document.querySelector(".signup").style = "background:#111;";
});

// login
document.querySelector(".login").addEventListener("click", function () {
  document.querySelector(".signup-form").style = "display:none;";
  document.querySelector(".signup").style =  "background-color:rgba(0,0,0,0.2);";
  document.querySelector(".login-form").style = "display:block;";
  document.querySelector(".login").style = "background:#111;";
});
