<?php 
  include 'header.php';
  include_once 'conect.php';
?>
<html>
	<head>
		<title> Profil </title>
        <link rel="stylesheet" type="text/css" href="css/profil.css">
   </head>
<body>      
<?php
          $sql="SELECT * FROM user";
          $result=mysqli_query($conn, $sql);
          if(mysqli_num_rows($result)>0)
          { $id=$_SESSION['id'];
            while($row=mysqli_fetch_assoc($result))
                if($row['id']==$id)
                   {$sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
                    $name=$row['first'];
                    echo "<ul><li id='comm'><img src='chibiP.png' style='width:150px; float:right'>Welcome to Benkyou, $name!<br> We want you to have a good time with us and learn more Japanese!
          <br>
          楽しんでください。</li>";
			        $resultImg = mysqli_query($conn, $sqlImg);
			        while ($rowImg = mysqli_fetch_assoc($resultImg)) 
                      { echo "<li><form class='user'>";
                        if ($rowImg['status']==0) 
                          {$filename="uploads/image".$id."*";
                           $fileinfo=glob($filename);
                           $fileext=explode(".",$fileinfo[0]);
                           $fileactualext=$fileext[1];

                           echo "<img id='img' src='uploads/image".$id.".".$fileactualext."?".mt_rand()."' height='300' width='300'>";
                          }
                       else 
                          echo "<img id='img' src='uploads/image.jpg' height='300' width='300'>";
                       echo "</form></li></ul>";
                      }
                   }
          }
        ?>  
     <form action="upload.php" method="POST" enctype="multipart/form-data">
          <input style="margin-left:30px" type="file" name="file" id="file">
          <button type="submit" name="submit" id="sub">Upload</button>
     </form> 
    <form action="delete.php" method="POST">
          <button style="margin-left:80px" type="submit" name="submit">Delete profile image</button>
     </form>
    <br><br>
</body>    
</html>