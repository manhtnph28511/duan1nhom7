<div class="list-ad">
    <h1>Danh Sách Đơn Hàng</h1>
</div>
<div class="content">
    <form class="list-search select" action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
        <input class="list-search__btn" type="submit" name="listok" value="OK">
    </form>
    <table class="tb-listpro">
        <tr>
            <th>#</th>
            <th>Mã đơn hàng</th>
            <th>Khách hàng</th>
            <th>Số lượng hàng</th>
            <th>Giá trị đơn hàng</th>
            <th>tình trạng đơn hàng</th>
            <th>Ngày đặt hàng</th>
            <th>Action</th>
        </tr>
        <?php
        foreach ($listbill as $bill) {
            extract($bill);
            $suadh = "index.php?act=suadh&id=" . $id;
            $xoadh = "index.php?act=xoadh&id=" . $id;
            $kh = $bill["bill_name"] . '
                  <br> ' . $bill["bill_email"] . '
                  <br> ' . $bill["bill_address"] . '
                  <br> ' . $bill["bill_tel"];
            $countsp = loadall_cart_count($bill["id"]);
            $ttdh = get_ttdh($bill["bill_status"]);
            echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>DAM-' . $bill['id'] . '</td>
                <td>' . $kh . '</td>
                <td>' . $countsp . '</td>
                <td><strong>' . $bill["total"] . '</strong>VND</td>
                <td>' . $ttdh . '</td>
                <td>' . $bill["bill_tel"] . '</td>
                <td class="action-listpro">
                    <a href="' . $suadh . '"><input class="listpro-up" type="button" value="Sửa"></a> 
                    <a href="' . $xoadh . '"><input class="listpro-del" type="button" value="Xóa"></a>
                </td>
            </tr>';
        }
        ?>
    </table>
</div>
<div class="chon">
    <input type="button" value="chọn Tất Cả">
    <input type="button" value="Bỏ chọn Tất Cả">
    <input type="button" value="Xóa Tất Cả">
    <a href="index.php?act=addsp"><input type="button" value="Nhập Thêm"></a>
</div>
</div>