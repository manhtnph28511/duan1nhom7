<div class="pro">
    <h2 class="bill-name">Đơn Hàng Của Tôi</h2>
    <table>
        <tr>
            <th>STT</th>
            <th>Mã Đơn Hàng</th>
            <th>Số Lượng Mặt Hàng</th>
            <th>Tổng Giá Trị Đơn Hàng</th>
            <th>Tình Trạng Đơn Hàng</th>
        </tr>
        <?php
        if (is_array($listbill)) {
            foreach ($listbill as $bill) {
                extract($bill);
                $ttdh = get_ttdh($bill['bill_status']);
                $countsp = loadall_cart_count($bill['id']);
                echo '<tr>
                            <td>' . $bill['id'] . '</td>
                            <td>' . $bill['ngaydathang'] . '</td>
                            <td>' . $countsp . '</td>
                            <td>' . $bill['total'] . '</td>
                            <td>' . $ttdh . '</td>
                        </tr>';
            }
        }
        ?>
    </table>
</div>