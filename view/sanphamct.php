<div class="pro">
    <?php
    extract($onesp);
    
    ?>
     <h2>sản phẩm chi tiết <?php=$name?></h2>
    <div class="pron">
      <?php
      $i=1;
      if(isset($_POST['dungluong2'])&&($_POST['dungluong2'])){
        $price=$price*1.28;
      }elseif(isset($_POST['dungluong3'])&&($_POST['dungluong3'])){
           $price=$price*1.56;
      }else{

      }
        $hinh=$img_path.$img;
        echo '<div class="prosp"><img src="'.$hinh.'"></div>
        <div class="prosp">'.$price.'</div>';
        echo '<div class="prosp">'.$mota.'</div>';
        echo '<form action="index.php?act=sanphamct&&idsp='.$id.'" method="post">
        <input type="submit" name="dungluong" value="'.$dungluong.'">
        <input type="submit" name="dungluong2" value="4-128gb">
        <input type="submit" name="dungluong3" value="6-256gb">
        </form>';
       echo'<form action="index.php?act=addtocart" method="post">
        <input type="hidden" name="id" value="'.$id.'">
        <input type="hidden" name="name" value="'.$name.'">
        <input type="hidden" name="img" value="'.$img.'">
        <input type="hidden" name="dungluong" value="'.$dungluong.'">
        <input type="hidden" name="price" value="'.$price.'">
       <input type="submit" name="addtocart" value="thêm vào giỏ hàng" >
       </form>';
      $i+=1;
      ?> 
    </div>
    </div> 
   
</div>

