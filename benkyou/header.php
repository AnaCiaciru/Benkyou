<?php
 session_start();
 include 'conect.php'
?>
<html>
 <head>
    <link rel="stylesheet" type="text/css" href="css/header.css">
     <script src="jquery-3.2.1.min.js"></script>
     <script src="header.js"></script>
       <style>
ul {list-style-type: none;
    overflow: hidden;
}

ul li
{    color: #32021B;
     text-align: center;
     font-family: "Comic Sans MS";
     font-size: 20px;
     margin-right: 2px;
}

ul li a
   {display: block;
    text-align: center;
    padding: 7px 10px;
    text-decoration: none;
    color: #D7A4FF;
    }

 .dec
{margin-top: 30px;
 float: right;
 margin-right: 10px;
}

#lis
{margin-left: 10px;
 margin-top:18px;
 float:right;
}

ul li ul li
{display: none;}

ul li:hover ul li
{display: block;}

.k
{border: 2px solid black;
 background-color: #858585;
 opacity: 0.8;
 float: left;
 margin-top:18px;
}

#logoo
{ height: 50px;
  margin-bottom: -23px;
  margin-top: 0px;
  margin-left: 70px;
}
</style>
 </head>
<body>
     <nav id="nav">
           <ul>
               <li id="logo">
                <img id="logoo" src="logoo.png"> <br>  <b>Benkyou</b></li>
            <li class="k"><a href="home.php">Home</a></li>
            <li class="k"><a href="words.php">Words</a></li>
            <li class="k"><a href="learn.php">Learn Japanese</a></li>
            <li class="k"><a href="music.php">Music</a></li>
            <li class="k"><a href="gallery.php">Gallery</a></li>
        <li>
        <form class='dec' action='includes/logout.inc.php'>
                   <button><img src='dec.png' height='20' width:'20'>Logout</button>
        </form>
         </li>
        <li id="lis">
         <?php
          $sql="SELECT * FROM user";
          $result=mysqli_query($conn, $sql);
        /*  if(mysqli_num_rows($result)>0)
          { $id=$_SESSION['id'];
            while($row=mysqli_fetch_assoc($result))
                if($row['id']==$id)
                   {$sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
			        $resultImg = mysqli_query($conn, $sqlImg);
			        while ($rowImg = mysqli_fetch_assoc($resultImg))
                      { echo "<form class='user'>";
                        if ($rowImg['status']==0)
                          {$filename="uploads/image".$id."*";
                           $fileinfo=glob($filename);
                           $fileext=explode(".",$fileinfo[0]);
                           $fileactualext=$fileext[1];

                           echo "<a href='profil.php'>
                            <img src='uploads/image".$id.".".$fileactualext."?".mt_rand()."' height='40' width='40'>
                            </a>";
                          }
                       else */
                          echo "<a href='profil.php'>
                             <img src='uploads/image.jpg' height='40' width='40'></a>";
                       echo "</form>";
                      //}
                  // }
        //  }
                ?>   </li>
        </ul>
     </nav>
   <div class="slider">
		<figure>
			<div class="slide">
				<img src="images/1.jpg">

            </div>
			<div class="slide">
				<img src="images/2.png">

			</div>

			<div class="slide">
				<img src="images/3.jpg">
			</div>

			<div class="slide">
				<img src="images/4.jpg">

			</div>

			<div class="slide">
				<img src="images/5.jpg">

			</div>
            <div class="slide">
				<img src="images/6.jpg">
			</div>
		</figure>
	</div>
<nav id="cv"> </nav>
</body>
</html>
