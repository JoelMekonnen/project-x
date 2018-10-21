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
                 <form method = "post" action = "login.php">
                  <input type ="text" placeholder = "username" id = "txt_username"/><br>
                     <input type = "password" placeholder = "password" id = "txt_password"/><br>
                <input type = "submit" id = "submit" value = "Login"/><br>
                     </form>
                </div>
            </div>
          </body>
          <style>
             
              #txt_username, #txt_password {
                  border-style: solid;
                  color: black;
                  background-color:transparent;
                  border-color: black;
                  border-width: 0.5;
                  margin-left: 140px;
                  margin-top: 18px;
                  font-size: 15px;
                  width: 227px;
                  padding-left: 12px;
                  height: 30px;
                  border-radius: 12px;
              }

              .LoginBox{
                  margin-left: 28%;
                  background-color: rgba(221, 221, 221, 0.5);
                  width: 550px;
                  height: 300px;
                  border-radius: 30px;
              }
              .LoginBox h3 {
                  margin: 0px;
                  padding-top: 100px;
                  padding-left: 200px;
                 font-family: "source sans";
                 font-size: 30px;
              }
          </style>
      </html>
    <?php
      }
   }
  
?>