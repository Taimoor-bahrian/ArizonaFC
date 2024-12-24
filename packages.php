<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>


<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="style.css"/>

</head>
<body bgcolor="#000000">
<div>
 &nbsp; &nbsp; &nbsp; &nbsp; <a class="btn btn-success" href="admin/login.php" style="color: white">Admin Login </a>  
 
<marquee class="marquee" direction="down" behavior="slide"   >
<h1 class="h1" align="center"   >       <img src="Ice_Fishing_logo.png" class="img"    / > ARIZZONA FISHING CLUB </h1></marquee>
</div>
<div>
<ul>
<li><a  href="index.html">HOME</a></li>
 <li> <a  href="boats.html">BOATS</a></li>
 <li> <a  href="equip.html">EQUIPMENTS</a></li>
 <li> <a class="active" href="packages.php">PACKAGES</a></li>
 <li> <a  href="about.html">ABOUT US</a></li>
 <li> <a  href="contact.html">CONTACT US</a></li>
 <li> <a  href="lisence.html">LISENCE</a></li>
 <li><a href= "bookpackage.php" style="color: black; background-color: white;">Book a Package</a></li>

</ul>
</div>


<div style="margin-left:25%; padding:10px 16px; height:60px;" >
    <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
         
            <img src="turbo1.jpg" style="width:900px;height:450px">
          </div>
          <div class="flip-box-back">
            <h2 align="center">FAMILY BOAT</h2>
            <h3>this one of the best boat of our list. This boat is the best boat in the world because it's a Sensation! Light weight, easy to tow, extremely light and fuel efficient. best boat and best time spend with family. book the boat and make your day memorable.
        </h3>
        
                <h2 align="center"> BEST SPECIFICATION </h2>
                
                <h3>Length   7m </h3>
                <h3> Weight      1600kg</h3> 
                <h3>  Pax     8 people</h3>
                <h3>Minimum   HP2x90HP</h3>
                <h3>Maximum   HP2x150HP</h3>   
          </div>    
        </div>     
       </div>
        
<hr>
<br>
<br>
  <BR>
<!--  -->
			
          
<?php $sql = "SELECT * from tbltourpackages";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>


      <div class="gallery">
        <a target="_blank" >
          <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="" width="900" height="600">
         </a>

         <div class="desc" style="font-size: 18px; font-family: arial; font-weight: bold;">Package Name: <?php echo htmlentities($result->PackageName);?><br><br>
                           Package Type : <?php echo htmlentities($result->PackageType);?><br><br>
                          For Persons : <?php echo htmlentities($result->PackageAccom);?><br><br>
                          Price : <?php echo htmlentities($result->PackagePrice);?> $<br><br>

                        </div>
  </div>
        

<?php }} ?>
  <!-- <div class="gallery">
    <a target="_blank" >
      <img src="2p.jpg" width="900" height="600">
    </a>
    <div class="desc">BOAT FOR TWO PERSON <br><br> PRICE: 8000<br><br>FISHING BOX: 2</div>
  </div>
  
  <div class="gallery">
    <a target="_blank" >
      <img src="5p.jpg"  width="900" height="600">
    </a>
    <div class="desc"><BR><br>BOAT FOR 4 PERSON<br><br> PRICE: 13000<br><br>FISHING BOX: 6</div>
  </div>
  
  <div class="gallery">
    <a target="_blank" >
      <img src="6p.jpg" width="900" height="600">
    </a>
    <div class="desc"><br>  BOAT FOR 6  PERSON <br><br> PRICE: 18000<br><br>FISHING BOX: 8</div>
  </div>
  
  
  
  <div class="gallery">
    <a target="_blank" >
      <img src="10p.jpg"  width="900" height="600">
    </a>
    <div class="desc">BOAT FOR 10  PERSON<br><br> PRICE: 220000<br><br>FISHING BOX: 12</div>
   
    <br>
   
  </div>
  
  
   <div class="gallery">
    <a target="_blank" >
      <img src="15p.jpg" width="900" height="600">
    </a>
    <div class="desc"><br> JUMBO BOAT FOR 15  PERSON <br><br> PRICE: 32000<br><br>FISHING BOX: 20</div>
  </div>
   
    <div class="gallery">
    <a target="_blank" >
      <img src="20p.jpg" width="900" height="600">
    </a>
    <div class="desc"> BOAT FOR 20  PERSON<br><br> PRICE: 38000<br><br>FISHING BOX: 30</div>
  </div>
   
  
  <div class="gallery">
    <a target="_blank" >
      <img src="30p.jpg" width="900" height="600">
    </a>
    <div class="desc"> BOAT FOR 30  PERSON<br><br> PRICE: 49000<br><br>FISHING BOX: 40</div>
  </div>
   
  
  <div class="gallery">
    <a target="_blank" >
      <img src="40p.jpg" width="900" height="600">
    </a>
    <div class="desc"> BOAT FOR 40  PERSON<br><br> PRICE: 62000<br><br>FISHING BOX: 50</div>
  </div>
   
  
   <div class="gallery">
    <a target="_blank" >
      <img src="45p.png" width="900" height="600">
    </a>
    <div class="desc"><br><br>  BOAT FOR 45  PERSON<br><br> PRICE: 68000<br><br>FISHING BOX: 55</div>
  </div>
   
  
  <div class="gallery">
    <a target="_blank" >
      <img src="50p.jpg" width="900" height="600">
    </a>
    <div class="desc"><br>  BOAT FOR 50  PERSON<br><br> PRICE: 75000<br><br>FISHING BOX: 65</div>
  </div>
   
  
   
    
   
   
  </div> -->
  

</body>
</html>
