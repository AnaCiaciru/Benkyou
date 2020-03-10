 <html>
    <head>
        <link href="css/conect.css" rel="stylesheet">
    </head>
    <body>
<?php

session_start();
include '../conect.php';

$first=$_POST['first'];
$last=$_POST['last'];
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
$pwd2=$_POST['pwd2'];
$email=$_POST['email'];

if(empty($first))
  {header("Location: ../signup.php?error=empty");
   exit(); }
if(empty($last))
  {header("Location: ../signup.php?error=empty");
   exit();}
if(empty($uid))
  {header("Location: ../signup.php?error=empty");
   exit();}
if(empty($pwd))
  {header("Location: ../signup.php?error=empty");
   exit();}
if(empty($pwd2))
  {header("Location: ../signup.php?error=empty");
   exit();}
if(empty($email))
  {header("Location: ../signup.php?error=empty");
   exit();}
else
  { $sql="SELECT uid FROM user WHERE uid='$uid' ";
    $sql2="SELECT email FROM user WHERE email='$email' ";

    $result=mysqli_query($conn, $sql);
    $result2=mysqli_query($conn, $sql2);

    $emailcheck=mysqli_num_rows($result2);
    $uidcheck=mysqli_num_rows($result);

    if($pwd!=$pwd2)
        { header("Location: ../signup.php?error=password");
       exit(); }

    if($uidcheck>0)
        { header("Location: ../signup.php?error=username");
          exit(); }

    if($emailcheck>0)
        { header("Location: ../signup.php?error=email");
          exit();}

    else
        { $sql="INSERT INTO user(first, last, uid, pwd, email)
          VALUES('$first', '$last', '$uid', '$pwd', '$email'); ";

          $result=mysqli_query($conn, $sql);

          if(! $result ) {
            die('Could not enter data: ' . mysql_error());
         }
           $sql="SELECT * FROM user WHERE uid='$uid' AND first='$first' ";
           $result=mysqli_query($conn, $sql);

          if(mysqli_num_rows($result)>0)
            while($row=mysqli_fetch_assoc($result))
            {  $userid=$row['id'];
               $sql="INSERT INTO profileimg(userid,status)
               VALUES('$userid', 1)";
               mysqli_query($conn, $sql);
               header("Location: ../login.php");
            }
        }
  }

?>
   </body>
</html>
