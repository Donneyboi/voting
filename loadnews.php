



<?php session_start();
include "db.php";
 $select=mysqli_query($conn,"select * from post ORDER BY time DESC");
 while ($row=mysqli_fetch_array($select)) {
    $post=$row['message'];
    $idx=$row['id'];
    $time=$row['time'];

$selec=mysqli_query($conn,"select * from admin");
$arr=mysqli_fetch_array($selec);
$name=$arr['name'];
  ?>

 

  <div class="newsbody">
                 <div class="newshead">
                     <img src="img/47491243011404887691875309824istockphoto-1201144328-170667a.jpg">
                     <div class="adname"><h3><?php  echo $name; ?></h3>
                              <p><?php  echo $time; ?></p></div>

                 </div>
                 <div class="fortextandimage">
                     <div class="fortext"><?php  echo $post; ?></div>
                     <div class="forimage">
                          <?php
                 $selimage=mysqli_query($conn, "select * from adminimage where postid='$idx'");
            while($fetchimage=mysqli_fetch_array($selimage)){
                 $postfile=$fetchimage['imagename'];

                    echo "<img src='img/$postfile' />";
                        }



                     ?>
                       
                     </div>
                 </div>
                 

             </div>
             <?php } ?>