
<html>
    <head>
        <title>LOG IN</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body>
    <?php
   $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url,'error')!==false)
      echo "<p class='tCenter'>Your username or password is incorrect!</p>";
    else  echo "<p class='pCenter'>Get in our world!</p>";    
    echo  "<div align='center'>
           <form class='signupform' action='includes/login.inc.php' method='post'>
                 <input id='s1' type='text' name='uid' placeholder='Username'><br>
                 <input id='s1' type='password' name='pwd' placeholder='Password'><br><button id='signup' type='submit'>Log in!</button>
            </form>
          </div>";
    ?> 
    </body>
</html>