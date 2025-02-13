<div class="breadcrumbs-fixed panel-action">
    <div class="row">
        <div class="customer-act act">
            <div class="col-md-4 col-md-offset-2">
                <div class="left-action text-left clearfix">
                    <h2>Thông tin khu vực</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-action text-right">
                    <div class="btn-groups">
                        <button type="button" class="btn btn-primary btn-hide-edit"
                                onclick="cms_edit_cusitem('customer')"><i class="fa fa-pencil-square-o"></i> sửa
                        </button>
                        <button type="button" class="btn btn-default btn-hide-edit"
                                onclick="cms_javascript_redirect( cms_javascrip_fullURL() )"><i
                                class="fa fa-arrow-left"></i> Trở về
                        </button>
                        <button type="button" class="btn btn-primary btn-show-edit" style="display:none;"
                                onclick="cms_save_edit_customer()"><i class="fa fa-check"></i> Lưu
                        </button>
                        <button type="button" class="btn btn-primary btn-show-edit" style="display:none;"
                                onclick="cms_undo_cusitem('customer')"><i class="fa fa-undo"></i> Hủy
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-space customer"></div>

<div class="customer-info col-md-12">
    <?php if (isset($_list_cus) && count($_list_cus)) : ?>
        <div class="customer-inner tr-item-customer" id="item-<?php echo $_list_cus['ID']; ?>">
            <div class="col-md-12" style="margin-bottom: 10px;">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 padd-0">Tên khu vực:</label>

                        <div class="col-md-8">
                            <?php echo $_list_cus['customer_name']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 padd-0">Mã khu:</label>

                        <div class="col-md-8">
                            <?php echo $_list_cus['customer_code']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="margin-bottom: 10px;">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 padd-0">Điện thoại:</label>

                        <div class="col-md-8">
                            <?php echo ($_list_cus['customer_phone'] != '') ? $_list_cus['customer_phone'] : '(chưa có)'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 padd-0">Email</label>

                        <div class="col-md-8">
                            <?php echo ($_list_cus['customer_email'] != '') ? $_list_cus['customer_email'] : '(chưa có)'; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="margin-bottom: 10px;">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 padd-0">Tên trưởng khu:</label>
                        <div class="col-md-8">
                            <?php echo ($_list_cus['customer_gender'] != '') ? $_list_cus['customer_gender'] : '(chưa có)'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 padd-0">Tổng số nhà:</label>
                        <div class="col-md-8">
                            <?php echo ($_list_cus['customer_birthday'] != '') ? $_list_cus['customer_birthday'] : '(chưa có)'; ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-12" style="margin-bottom: 10px;">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 padd-0">Địa chỉ</label>

                        <div class="col-md-8">
                            <?php echo ($_list_cus['customer_addr'] != '') ? $_list_cus['customer_addr'] : '(chưa có)'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 padd-0">Ghi chú</label>

                        <div class="col-md-8">
                            <?php echo ($_list_cus['notes'] != '') ? $_list_cus['notes'] : '(chưa có)'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="customer-inner tr-edit-item-customer" style="display: none;">
            <div class="col-md-12" style="margin-bottom: 10px;">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 padd-0">Tên khu vực:</label>

                        <div class="col-md-8">
                            <input type="text" id="customer_name" class="form-control"
                                   value="<?php echo cms_common_input(isset($_list_cus) ? $_list_cus : [], 'customer_name'); ?>">
                            <span style="color: red;" class="error error-customer_name"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 padd-0">Mã khu vực:</label>

                        <div class="col-md-8">
                            <?php echo $_list_cus['customer_code']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="margin-bottom: 10px;">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 padd-0">Điện thoại:</label>

                        <div class="col-md-8">
                            <input type="text" id="customer_phone" class="form-control"
                                   value="<?php echo cms_common_input(isset($_list_cus) ? $_list_cus : [], 'customer_phone'); ?>">
                            <span style="color: red;" class="error error-customer_phone"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 padd-0">Email:</label>

                        <div class="col-md-8">
                            <input type="text" id="customer_email" class="form-control"
                                   value="<?php echo cms_common_input(isset($_list_cus) ? $_list_cus : [], 'customer_email'); ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="margin-bottom: 10px;">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 padd-0">Tên trưởng khu:</label>
                        <div class="col-md-8">
                            <?php echo ($_list_cus['customer_gender'] != '') ? $_list_cus['customer_gender'] : '(chưa có)'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 padd-0">Tổng số nhà:</label>
                        <div class="col-md-8">
                            <?php echo ($_list_cus['customer_birthday'] != '') ? $_list_cus['customer_birthday'] : '(chưa có)'; ?>
                        </div>
                        <script>
                            $('.customer_birthday').datetimepicker({
                                timepicker:false,
                                autoclose: true,
                                format:'Y/m/d',
                                formatDate:'Y/m/d'
                            });</script>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="margin-bottom: 10px;">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 padd-0">Địa chỉ:</label>

                        <div class="col-md-8">
                            <textarea id="customer_addr"
                                      class="form-control"><?php echo cms_common_input(isset($_list_cus) ? $_list_cus : [], 'customer_addr'); ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 padd-0">Ghi chú</label>

                        <div class="col-md-8">
                            <textarea id="notes"
                                      class="form-control"><?php echo cms_common_input(isset($_list_cus) ? $_list_cus : [], 'notes'); ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else:
    endif;
    ?>
</div>
<div><h2 id="order_info"></h2>
</div>
<div class="orders-main-body">
</div>
<script>cms_paging_order_by_customer_id(1);</script>