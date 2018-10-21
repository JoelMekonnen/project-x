  // lets add hover functionality
  // let us save some space
  function AddHover(Elem1, Elem2)
  {
      Elem1.onmouseover = function() {
      Elem1.className = "highLight";
      Elem2.className = "underline"; 
  }
  Elem1.onmouseout = function() {
      Elem1.className = "reset_bg";
      Elem2.className = "reset_un";
  }
  }
 // lets add Hover
 var Home = document.getElementById("Home");
 var Login = document.getElementById("Login");
 var signup = document.getElementById("Signup");
 var About = document.getElementById("About");

 var txt_home = document.getElementById("txt_Home");
 var txt_login = document.getElementById("txt_Login");
 var txt_about = document.getElementById("txt_About");
 var txt_signup = document.getElementById("txt_Signup");
AddHover(Home, txt_home);
AddHover(Login, txt_login);
AddHover(signup, txt_signup);
AddHover(About, txt_about);
