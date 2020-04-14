<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">
    <nav aria-label="breadcrumb" sty>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Nhập hàng / Nhà cung cấp</li>
        </ol>
    </nav>
    <a class="btn btn-info" href="<?php echo URLROOT . '/nhacungcap/them' ?>"><i class="fas fa-plus"></i> Thêm</a>
    <a class="btn btn-info" href="<?php echo URLROOT . '/nhacungcap/in' ?>"><i class="fas fa-print"></i> In</a>
    <div class="float-right">
        <form class="form-inline" action="">
            <div class="form-group">
                <input id="search-box" class="form-control" type="text" name="search" placeholder="Tìm kiếm">
                <button class="btn btn-info">Tìm kiếm</button>
            </div>
        </form>
    </div>
    <div class="mytable">
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên NCC</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Hưng Thịnh Company</td>
                    <td>0333212341</td>
                    <td>Số 69, Móng Cái, Quảng Ninh</td>
                    <td><a href="" class="edit-button"><i class="fas fa-pencil-alt"></i></a>
                        <a href="" class="edit-button"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Hưng Thịnh Company</td>
                    <td>0333212341</td>
                    <td>Số 69, Móng Cái, Quảng Ninh</td>
                    <td><a href="" class="edit-button"><i class="fas fa-pencil-alt"></i></a>
                        <a href="" class="edit-button"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Hưng Thịnh Company</td>
                    <td>0333212341</td>
                    <td>Số 69, Móng Cái, Quảng Ninh</td>
                    <td><a href="" class="edit-button"><i class="fas fa-pencil-alt"></i></a>
                        <a href="" class="edit-button"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Hưng Thịnh Company</td>
                    <td>0333212341</td>
                    <td>Số 69, Móng Cái, Quảng Ninh</td>
                    <td><a href="" class="edit-button"><i class="fas fa-pencil-alt"></i></a>
                        <a href="" class="edit-button"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Hưng Thịnh Company</td>
                    <td>0333212341</td>
                    <td>Số 69, Móng Cái, Quảng Ninh</td>
                    <td><a href="" class="edit-button"><i class="fas fa-pencil-alt"></i></a>
                        <a href="" class="edit-button"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Hưng Thịnh Company</td>
                    <td>0333212341</td>
                    <td>Số 69, Móng Cái, Quảng Ninh</td>
                    <td><a href="" class="edit-button"><i class="fas fa-pencil-alt"></i></a>
                        <a href="" class="edit-button"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Hưng Thịnh Company</td>
                    <td>0333212341</td>
                    <td>Số 69, Móng Cái, Quảng Ninh</td>
                    <td><a href="" class="edit-button"><i class="fas fa-pencil-alt"></i></a>
                        <a href="" class="edit-button"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Hưng Thịnh Company</td>
                    <td>0333212341</td>
                    <td>Số 69, Móng Cái, Quảng Ninh</td>
                    <td><a href="" class="edit-button"><i class="fas fa-pencil-alt"></i></a>
                        <a href="" class="edit-button"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Hưng Thịnh Company</td>
                    <td>0333212341</td>
                    <td>Số 69, Móng Cái, Quảng Ninh</td>
                    <td><a href="" class="edit-button"><i class="fas fa-pencil-alt"></i></a>
                        <a href="" class="edit-button"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
    <div class="right">
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </div>
</div>
<?php require_once(FOOTER); ?>