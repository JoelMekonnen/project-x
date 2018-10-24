<html>
    <head>
        <title>Project-x: Self-management project</title>
        <meta name="viewport" content="width=device-width">
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>
        <div class = "whiteBox">
        </div>
        <div class = "content">
            <div class = "content-header">
                <h2>Manager</h2>
                <ul>
                 <li><a href="index.php?type=about"><img src="Icons/notification.png"width=30px height=30px  id = "About"></a></li>
                <li><a href="index.php"><img src="Icons/apps.png" width=30px height=30px  id = "Home"></a></li>
                <li><a href="index.php?type=login"><img src="Icons/next-page.png"width=30px height=30px onmouseover = "" id = "Login" onmouseover=""></a></li>
                <li><a href="index.php?type=signup"><img src="Icons/new-file.png" width=30px height=30px id = "Signup" onmouseover=""></a></li>
                </ul>
            </div>
            <div class = "content-body">
                <div class = "fullWidth">
                     <div id = "auto-content">
                         <?php  checkHome(); ?>
                    </div>
                </div>

                </div>
                <div class = "nav">
                  <ul>
                    <li><a href="#" id = "txt_Home">Home</a></li>
                    <li><a href="#" id = "txt_Login">Login</a></li>
                    <li><a href="#" id = "txt_Signup">Sign Up</a></li>
                    <li><a href="#" id = "txt_About">About-us</a></li>
                  </ul>
                </div>
            </div>
        <style>
        </style>
        <script src = "JS/min.js"></script>
    </body>
</html>
<?php
   function checkHome()
   {
       if(isset($_GET["type"]))
       {
           if($_GET["type"] == "login")
           {
              createForm("Login");
           }
           else if($_GET["type"] == "signup")
           {
               echo '<h1> singup </h1>';
           }
           else if($_GET["type"] == "about")
           {
               echo '<h1> about </h1>';
           }
       }


   }
   function createForm($type)
   {
      // this simply creates the Login Form
      if($type == "Login")
      {
    ?>
      <html>
          <body>
             <div class = "LoginBox">
                <div class = "justBorder">
                     <h3>Login</h3>
                 <form method = "post" action = "login.php" name = 'loginForm'>
              <div id = "username_box">  <img src = "./Icons/user.png" width=30 height=40>  <input type ="text" placeholder = "username" name = "txtUser" id = "txt_username"/></div><div id = "check_Status"></div><br>
                    <div id = "password_box">  <img src = "./Icons/padlock.png" width = 40 height = 30> <input type = "password" placeholder = "password" name = "txtUser" id = "txt_password"/><br></div>
             <input type = "image" id = "submit" src = "./Icons/next-page.png" width = 40  height = 40 value = "Login"/><br>
                     </form>
                </div>
            </div>
          </body>
          <style>
                #txt_username, #txt_password  {
                  border-top-style: none;
                  border-left-style: none;
                  border-right-style: none;
                  border-bottom-style: solid;
                  color: white;
                  background-color:transparent;
                  border-color: white;
                  border-width: 0.5;
                /*  margin-let:420px;
                  margin-top: 18px;*/
                  font-size: 20px;
                  width: 227px;
                  padding-left: 12px;
                  height: 32px;
                  /*border-radius: 12px;*/
              }
              #username_box img, #password_box img{
                width: 40px;
                height: 40px;
                position: relative;
                top: 7px;
              }
              #username_box, #password_box {
                margin-left: 392px;
              }

              .LoginBox{
                /*  margin-left: 28%;*/
                  background-color: rgba(128, 140, 150, 0.8);
                  width: 100%;
                  height: 388px;
                  border-top-left-radius:30px;
                  border-bottom-left-radius: 30px;
              }
              .LoginBox h3 {
                  margin: 0px;
                  padding-top: 100px;
                  padding-left: 470px;
                  color: white;
                 font-family: "source sans";
                 font-size: 41px;
              }
              #submit{
                margin-left: 500px;
                margin-top: 30px;
              }

          </style>
          <script>

              var myForms = document.forms.loginForm;
              myForms.onsubmit = function(){
                    if(myForms.txtUser.value == "")
                    {
                       document.getElementById("check_Status").innerHtml = "<h4>" + "please insert your username" + "</h4>";
                       return false;
                    }
                    else {
                      document.getElementById("check_Status").innerHtml = '';
                      return true;
                    }
              };
          </script>
      </html>
    <?php
      }
   }

?>
