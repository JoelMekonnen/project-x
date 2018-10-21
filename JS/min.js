  // lets add hover functionality
  // let us save some space
  function AddHover(Elem1, Elem2)
  {
      Elem1.onmouseover = function() {
      Elem1.style.borderTopStyle = "solid";
      Elem1.style.borderBottomStyle = "solid";
      Elem1.style.borderWidth = "0.5px";
      Elem1.style.paddingTop = "10px";
      Elem1.style.paddingBottom = "10px";
     
      
      Elem2.style.borderTopStyle = "solid";
      Elem2.style.borderBottomStyle = "solid";
      Elem2.style.borderWidth = "0.5px";
      Elem2.style.paddingTop = "5px";
      Elem2.style.paddingBottom = "5px";
      
    
  }
  Elem1.onmouseout = function(){
      Elem1.style.borderTopStyle = "none";
      Elem1.style.borderBottomStyle = "none";
      Elem1.style.padding = "0px";
      
     
      Elem2.style.borderTopStyle = "none";
      Elem2.style.borderBottomStyle = "none";
      Elem2.style.padding = "0px";
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
