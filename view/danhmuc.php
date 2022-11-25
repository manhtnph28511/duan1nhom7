<div class="right">
        <div class="danhmuc">
            <h1>danh mục</h1>
            <div class="ngoai">
                    <?php
                    foreach($dsdm as $dm){
                        extract($dm);
                        $linkdm="index.php?act=sanpham&iddm=".$id;
                        echo '<select id="phone">
                        <a href="'.$linkdm.'">'.$name.'</a>
                        </select>';
                    }
                    ?>
                    </div>
        </div>
    </div>
        
    