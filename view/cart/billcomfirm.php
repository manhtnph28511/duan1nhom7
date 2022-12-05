<div class="pro">
    <h2>Cảm ơn quý khách đã đặt hàng</h2>
    <?php
    if (isset($bill) && (is_array($bill))) {
        extract($bill);
    }
    ?>
    <h2>Thông Tin Đơn Hàng</h2>
    <div class="dat1">
        <div class="mdh">Mã đơn hàng ~<?= $bill['id']; ?> </div>
        <div class="mdh">Ngày đặt hàng ~<?= $bill['ngaydathang']; ?> </div>
        <div class="mdh">Tổng đơn hàng ~<?= $bill['total']; ?></div>
        <div class="mdh">Phương thức thanh toán ~<?= $bill['bill_pttt']; ?></div>

    </div>
    <h2>Thông Tin Đặt Hàng</h2>
    <div class="dat1">
        <table>
            <tr>
                <td>Người Đặt Hàng</td>
                <td><?= $bill['bill_name']; ?></td>
            </tr>
            <tr>
                <td>Địa Chỉ</td>
                <td><?= $bill['bill_address']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?= $bill['bill_email']; ?></td>
            </tr>
            <tr>
                <td>Điện Thoại</td>
                <td><?= $bill['bill_tel']; ?></td>
            </tr>
        </table>
    </div>
    <div class="dat">
        <h2>Chi Tiết Giỏ Hàng<h2>
                <table class="billcomfirm">
                    <?php
                    bill_chi_tiet($billct);
                    ?>
                </table>
    </div>
</div>