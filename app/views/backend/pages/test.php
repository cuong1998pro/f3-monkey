<?php checklogin() ?>
<?php require_once(HEADER); ?>
<div class="modal" id="modalCapNhatNCC" style="display:block">
    <div class="modal-content">
        <div class="form-header">Test</div>
        <form class="myform" action="<?php echo URLROOT ?>/mytest/test" method="post">
            <div class="form-group ">
                <label class="mylabel">Địa chỉ <sup>*</sup></label>
                <textarea id="my-textarea" name="diachi" rows="2" placeholder="Nhập địa chỉ"><?php echo $data->motasanpham?></textarea>
                <script>
                    CKEDITOR.replace('diachi');
                </script>
            </div>
            <div class="form-group ">
                <label class="mylabel" style="margin-top:0px">Email</label>
                <input type="text" name="email" placeholder="Nhập email" >
            </div>
            <button>gửi</button>
        </form>
    </div>
</div>
<?php require_once(FOOTER); ?>