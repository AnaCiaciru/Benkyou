<html> 
    <head>
        <title>SIGN UP</title>
        <link rel="stylesheet" type="text/css" href="css/signup.css">
    </head>
    <body>
<?php
    $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url,'error=empty')!==false)
       {echo "<p class='tCenter'>Nu ai completat tot!</p>";}
    else
      if(strpos($url,'error=username')!==false)
         { echo "<p class='tCenter'>Numele de utilizator exista deja!</p>"; }
      else
          if(strpos($url,'error=email')!==false)
             { echo "<p class='tCenter'>Exista un cont cu acest email!</p>"; }
          else
              if(strpos($url,'error=password')!==false)
                 { echo "<p align='center' class='tCenter'>Parolele nu coincid!</p>"; }
     else echo "<p class='pCenter'>Register</p>";
        echo "<div align='center'> 
         <form class='signupform' action='includes/signup.inc.php' method='post'>
                  <input id='s1' type='text' name='first' placeholder='First name'>
                  <input id='s1' type='text' name='last' placeholder='Last name'><br>
                  <input id='s1' type='text' name='uid' placeholder='Username'><br>
                  <input id='s1' type='password' name='pwd' placeholder='Password'><br>
                  <input id='s1' type='password' name='pwd2' placeholder='Password'><br>
                  <input id='s1' type='email' name='email' placeholder='E-mail'><br>
                  <button id='signup' type='submit'>Sign up! </button>
         </form> 
     </div>";
?>
    </body>
</html>