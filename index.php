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
              echo '<h1> Login </h1>';
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
   function createForm()
   {
       
   }
  
?>