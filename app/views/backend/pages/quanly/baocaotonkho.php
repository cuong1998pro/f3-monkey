<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div class="container">
    <h1>Trang tổng quan</h1>
   
    <div class="sale-graph">
        <div class="sale-graph-header">
            <i class="fa fa-th"></i>Biểu đồ doanh thu
        </div>
        <div id="chart_div" style="width: 100%; height: 500px;"></div>
    </div>
   
    <h2 style="margin-bottom:0">Danh sách sản phẩm</h2>
    <div class="table-show">
        <div class="mytable">
            <table>
                <thead>
                    <tr>
                        <th class="gray">Mã số</th>
                        <th class="gray">Tên sản phẩm</th>
                        <th class="gray">Giá</th>
                        <th class="gray">Số lượng kho</th>
                        <th class="gray">Lượt mua</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Điện thoại Samsung Galaxy Note 9</td>
                        <td>200.000.000 đ</td>
                        <td>10 chiếc</td>
                        <td>69</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Điện thoại Samsung Galaxy Note 9</td>
                        <td>200.000.000 đ</td>
                        <td>10 chiếc</td>
                        <td>69</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Điện thoại Samsung Galaxy Note 9</td>
                        <td>200.000.000 đ</td>
                        <td>10 chiếc</td>
                        <td>69</td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</div>

<?php require_once(FOOTER); ?>