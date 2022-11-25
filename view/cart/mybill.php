<div class="pro">
            <h2>Đơn hàng của tôi</h2>
            <div class="pron">
                <table>
                    <tr>
                        <td>STT</td>
                        <td>Mã đơn hàng</td>
                        <td>Số lượng mặt hàng</td>
                        <td>Tổng giá trị đơn hàng</td>
                        <td>tình trạng đơn hàng</td>
                    </tr>
                    <?php
                    if(is_array($listbill)){
                        foreach ($listbill as $bill){
                            extract($bill);
                            $ttdh=get_ttdh($bill['bill_status']);
                            $countsp=loadall_cart_count($bill['id']);
                            echo '<tr>
                            <td>'.$bill['id'].'</td>
                            <td>'.$bill['ngaydathang'].'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$bill['total'].'</td>
                            <td>'.$ttdh.'</td>
                        </tr>';
                        }
                    }
                    ?>
                </table>
            </div>   
     </div>