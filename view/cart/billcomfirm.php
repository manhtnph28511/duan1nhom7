<div class="pro">
    <h2>Cảm ơn quý khách đã đặt hàng</h2>
    <?php
    if (isset($bill) && (is_array($bill))) {
        extract($bill);
    }
    ?>
    <h2>Thông tin đơn hàng</h2>
    <div class="dat1">
        <div class="mdh">Mã đơn hàng ~<?= $bill['id']; ?> </div>
        <div class="mdh">Ngày đặt hàng ~<?= $bill['ngaydathang']; ?> </div>
        <div class="mdh">Tổng đơn hàng ~<?= $bill['total']; ?></div>
        <div class="mdh">Phương thức thanh toán ~<?= $bill['bill_pttt']; ?></div>

    </div>
    <h2>Thông tin đặt hàng</h2>
    <div class="dat1">
        <table>
            <tr>
                <td>Người đặt hàng</td>
                <td><?= $bill['bill_name']; ?></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><?= $bill['bill_address']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?= $bill['bill_email']; ?></td>
            </tr>
            <tr>
                <td>Điện thoại</td>
                <td><?= $bill['bill_tel']; ?></td>
            </tr>
        </table>
    </div>
    <div class="dat">
        <h2>Chi tiết giỏ hàng<h2>
                <table>
                    <?php
                    viewcart(0);
                    ?>
                </table>
    </div>
</div>