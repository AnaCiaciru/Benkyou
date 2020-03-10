<?php include 'header.php';
?>
<html>
	<head>
		<title> Home </title>
        <link rel="stylesheet" type="text/css" href="css/home.css">
   </head>
<body>
     <?php
          $sql="SELECT * FROM user";
          $result=mysqli_query($conn, $sql);
          $datas=array();
          if(mysqli_num_rows($result)>0)
            { $id=$_SESSION['id'];
              while($row=mysqli_fetch_assoc($result))
              {  if($row['id']==$id)
                    $name=$row['first']; }
            }
   echo "
    <div class='container'>
       <p id='pe'>Hello, $name!</p>
    <br><br>    
       <img id='food' src='food.jpg'>
       <div class='top-left'>Japan is very proud of its four very distinctive seasons and each season marks the beginning of more delicious offerings. This is very evident in supermarkets, hotels and inns and restaurants where menus are frequently changed to reflect what is available and what is in season.
        </div>
    </div> ";  
    ?>
<p>    
   <span style="cfont-family: 'Comic Sans MS'; font-size:30px; color:#7A175E; margin-left:20px;margin-right:20px">History</span> <br>   
The modern forms of manga and anime date back to drawing styles and techniques that emerged after World War Two. Whilst the country has modernised and changed significantly since, many aspects of Japanese culture and values have remained the same, meaning that the characters and stories are still very much relevant to audiences of all ages today. 
</p>    

  <p><span style="cfont-family: 'Comic Sans MS'; font-size:30px; color:#7A175E; margin-left:20px;margin-right:20px">Manga & anime </span> <br> 
As manga (Japanese comics) and anime (Japanese animation) have become integral parts of modern Japanese life and culture, there is no way of escaping their influence wherever you go in the country. Without either of them, Japan would definitely not be the colourful and intriguing country that it is.
</p>
        
    <p><span style="cfont-family: 'Comic Sans MS'; font-size:30px; color:#7A175E; margin-left:20px;margin-right:20px">Manga & anime today</span> <br> 
You don't necessarily need to be an otaku (nerd) to dip your toe into this side of Japanese culture. Manga and anime characters can be found literally everywhere: advertising, fashion, omiyage (souvenirs), food, stationery and the all important mobile phone accessory are just a few examples.
</p>
        <br>
<p id="pe1">“What a strange thing! to be alive beneath cherry blossoms.” 
    <br>― Kobayashi Issa, Poems </p>
            <br>
<p id="pe2">“It is impossible to remain indifferent to Japanese culture. It is a different civilisation where all you have learnt must be forgotten. It is a great intellectual challenge and a gorgeous sensual experience.” 
    <br>― Alain Ducasse</p>
    
<div class="cont">    
   <img src="samurai.jpg" id="sam">    
   <div class="samu">
       Synonymous with samurai bravery is the katana, or samurai sword, and bushido dictated that this curved, slender blade was the soul of a warrior. Images of samurai depict them with their masterfully crafted weapons of war and together with the shorter blade of a wakizashi, this pair, known as the daisho, represented the social status and personal honour of the samurai.

In the mid-1600s, Miyamoto Musashi, the highly revered and undefeated swordsman and samurai, wrote Go Rin Sho, or The Book of Five Rings. Widely published today, his teachings on military strategy and tactics draw heavily on Tibetan and Zen philosophy and he advocated the use of both the katana and the wakizashi simultaneously in battle.
   </div>
    <img id="teatru" src="teatru.jpg">
   <p id="pe3"><span style="cfont-family: 'Comic Sans MS'; font-size:30px; color:#D80000; margin-left:20px;margin-right:20px">A night at the theatre </span> <br> You're in Tokyo with InsideJapan Tours - why not take in the theatre? If you are shopping or just window-shopping in Ginza in the heart of Tokyo, you are only a few minutes' walk from the Shimbashi Embujo. 

Here you can arrive around 4pm, drink in the atmosphere of excited crowds of theatre-goers milling around the many stalls selling theatrical souvenirs, then sit in a comfortable seat watching the amazing performance on stage and listening to an English translation through an earphone. The long interval gives you time for a full meal at one of the theatre restaurants.

Most months of the year the theatre you will watch will be Kabuki, one of Japan's three main traditional theatre genres. Kabuki began in the seventeenth century and quickly developed a highly stylised type of acting that has been popular ever since.

All parts in Kabuki are played by men and some of its greatest actors specialise in playing female characters. Kabuki stars are part of Japan's celebrity culture and you will often see their faces on advertising billboards or in TV commercials.

Apart from Kabuki, the puppet theatre (Bunraku), with each puppet being manipulated by three puppeteers, also dates from the seventeenth century, and Noh, a more stately form of danced theatre in which many main actors wear wooden masks, can  trace its history back to the fourteenth century.</p> 

<p id="pe4"><a style="color:#3E0606" href="greetings.php">Click here to find out about <span style="color:#060650">Japanese Greetings</span>  </a></p>    
</div> 
    
</body>    
</html>