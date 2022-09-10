<?php session_start();
include "db.php";
$select=mysqli_query($conn,"select * from name ORDER BY time DESC");
while ($row=mysqli_fetch_array($select)) {
    $name=$row['name'];
    $idx=$row['id'];



 ?>

 
              <div class="vote2small">
                    <div class="voteimage">                       <?php
                 $selimage=mysqli_query($conn, "select * from image where postid='$idx'");
            while($fetchimage=mysqli_fetch_array($selimage)){
                 $postfile=$fetchimage['imagename'];

                    echo "<img src='img/$postfile' />";
                        }



                     ?></div>
                <h3><?php echo  $name; ?></h3>
                <div class="vbt">
                    <span><?php  
                                                    $selS=mysqli_query($conn,"select * from vote where postid='$idx'");
                                                    $numss=mysqli_num_rows($selS);
                                                    if ($numss<1) {
                                                    
                                                    }
                                                    else{
                                                    echo $numss." "."vote";
                                                    }
                                                    ?>
                        <p>total vote</p></span>



                <script type="text/javascript">
                $(document).ready(function () {
                $('.flike<?php  echo $idx;?>').on('submit',function (para) {
                    para.preventDefault();
                    $.ajax({
                url:"processlike.php",
                 type:"post",
                 data:new FormData(this),
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(){
                  $('.likeshow').html("wait");
                 },
                 success:function(para2){
                    $('.likeshow<?php echo $idx; ?>').html(para2);
                    swall();
                 },
                 error:function(){
                    alert('error typing to processData');
                 }

                    })
                });
                })
            </script>
                                
<div class="likeshow<?php echo $idx; ?>"></div>

                    <form   class="votefrom  flike<?php echo $idx; ?>" action="processlike.php" method="post">
                     <input type="hidden" name="like" value="<?php echo $idx ?>">
                        <button type="submit">vote</button>
                    </form>
                </div>
                </div>



                <?php } ?>