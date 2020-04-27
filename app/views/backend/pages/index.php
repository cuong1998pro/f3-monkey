<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div class="container">
    <h1>Trang tổng quan</h1>
    <div class="row box">
        <div class="col-3">
            <div class="box-info" style="background:#17a2b8">
                <div class="box-info-content">
                    <h3>150</h3>
                    <p>Đơn hàng mới</p>
                    <i class="fa fa-shopping-cart fa-3x"></i>
                </div>
                <div class="link-view-full">
                    <a href="">Xem thêm <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="box-info" style="background:#28a745 ">
                <div class="box-info-content">
                    <h3>50%</h3>
                    <p>Doanh thu tăng</p>
                    <i class="fa fa-shopping-cart fa-3x"></i>
                </div>
                <div class="link-view-full">
                    <a href="">Xem thêm <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="box-info" style="background:#ffc107 ">
                <div class="box-info-content">
                    <h3>50</h3>
                    <p>Khách hàng</p>
                    <i class="fa fa-shopping-cart fa-3x"></i>
                </div>
                <div class="link-view-full">
                    <a href="">Xem thêm <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="box-info" style="background:#dc3545 ">
                <div class="box-info-content">
                    <h3>110</h3>
                    <p>Hàng tồn kho</p>
                    <i class="fa fa-shopping-cart fa-3x"></i>
                </div>
                <div class="link-view-full">
                    <a href="">Xem thêm <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="sale-graph">
        <div class="sale-graph-header">
            <i class="fa fa-th"></i>Biểu đồ doanh thu
        </div>
        <div id="chart_div" style="width: 100%; height: 500px;"></div>
    </div>
    <h2 style="margin-bottom:0">Đơn hàng gần đây</h2>
    <div class="table-show">
        <div class="mytable">
            <table>
                <thead>
                    <tr>
                        <th class="gray">Mã số</th>
                        <th class="gray">Tên khách hàng</th>
                        <th class="gray">Danh sách sản phẩm</th>
                        <th class="gray">Trạng thái</th>
                        <th class="gray">Thời gian cập nhật</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nguyễn Văn Linh</td>
                        <td>1 x Điện thoại Galaxy Note 9 </br>
                            2 x Tai nghe blutooth
                        </td>
                        <td>Sẵn sàng giao</td>
                        <td>20:00 19/06/2020</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Nguyễn Văn Linh</td>
                        <td>1 x Điện thoại Galaxy Note 9 </br>
                            2 x Tai nghe blutooth
                        </td>
                        <td>Sẵn sàng giao</td>
                        <td>20:00 19/06/2020</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Nguyễn Văn Linh</td>
                        <td>1 x Điện thoại Galaxy Note 9 </br>
                            2 x Tai nghe blutooth
                        </td>
                        <td>Sẵn sàng giao</td>
                        <td>20:00 19/06/2020</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Nguyễn Văn Linh</td>
                        <td>1 x Điện thoại Galaxy Note 9 </br>
                            2 x Tai nghe blutooth
                        </td>
                        <td>Sẵn sàng giao</td>
                        <td>20:00 19/06/2020</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Nguyễn Văn Linh</td>
                        <td>1 x Điện thoại Galaxy Note 9 </br>
                            2 x Tai nghe blutooth
                        </td>
                        <td>Sẵn sàng giao</td>
                        <td>20:00 19/06/2020</td>
                    </tr>
                </tbody>
            </table>

        </div>
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