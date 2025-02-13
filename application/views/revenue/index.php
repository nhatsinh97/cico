<div class="orders">
    <div class="breadcrumbs-fixed col-md-offset-2 panel-action padding-left-10">
        <h5 style="float: left;">
            <label style="color: #428bca;font-size: 23px;">Báo cáo xuất vật dụng</label>
            <label style="color: #307ecc; padding-left: 10px;">
                <input type="radio" name="revenue" value="6" checked>
                <span class="lbl">Theo vật dụng</span>
            </label>
            <label style="color: #307ecc;">
                <input type="radio" name="revenue" value="2">
                <span class="lbl">Theo khu vực</span>
            </label>
            <label style="color: #307ecc;">
                <input type="radio" name="revenue" value="3">
                <span class="lbl">Theo User</span>
            </label>
            <label style="color: #307ecc;">
                <input type="radio" name="revenue" value="4">
                <span class="lbl">Theo nhân viên</span>
            </label>
            <label style="color: #307ecc;">
                <input type="radio" name="revenue" value="5">
                <span class="lbl">Theo nhà</span>
            </label>
            <label style="color: #307ecc;">
                <input type="radio" name="revenue" value="1">
                <span class="lbl">Báo cáo tổng hợp</span>
            </label>
        </h5>
    </div>
    <div class="main-space orders-space"></div>
    <div class="orders-content">
        <div class="product-sear panel-sear">
            <div class="form-group col-md-12 padd-0" style="padding-left: 5px;">
                <div class="col-md-10 padd-0">
                    <div class="col-md-9 padd-0">
                        <div class="col-md-3 padd-0">
                            <select id="search-option-1" class="form-control">
                                <option value="-1">Chọn khu</option>
                                <option value="0">Không nhập</option>
                                <?php foreach ($data['customers'] as $key => $item) : ?>
                                    <option
                                        value="<?php echo $item['ID']; ?>"><?php echo $item['customer_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3 padd-0">
                            <select id="search-option-2" class="form-control">
                                <option value="-1">Chọn User nhập</option>
                                <?php foreach ($data['users'] as $key => $item) : ?>
                                    <option value="<?php echo $item['id']; ?>"><?php echo $item['username']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3 padd-0">
                            <select id="search-option-4" class="form-control">
                                <option value="-1">Chọn nhân viên</option>
                                <option value="0">Không nhập</option>
                                <?php foreach ($data['sales'] as $key => $item) : ?>
                                    <option value="<?php echo $item['id']; ?>"><?php echo $item['username']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3 padd-0">
                            <select id="search-option-3" class="form-control">
                                <option value="-1">Chọn nhà</option>
                                <?php foreach ($data['stores'] as $key => $item) : ?>
                                    <option
                                        value="<?php echo $item['ID']; ?>"><?php echo $item['stock_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 padd-0" style="padding-left: 5px;">
                        <div class="input-daterange input-group" id="datepicker">
                            <input type="text" class="input-sm form-control" id="search-date-from" placeholder="Từ ngày"
                                   name="start"/>
                            <span class="input-group-addon">Đến</span>
                            <input type="text" class="input-sm form-control" id="search-date-to" placeholder="Đến ngày"
                                   name="end"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 padd-0">
                    <div class="btn-group uv-btn-calendar">
                        <button type="button" onclick="cms_revenue_all_week()" class="btn btn-default">Tuần</button>
                        <button type="button" onclick="cms_revenue_all_month()" class="btn btn-default">Tháng</button>
                        <button type="button" onclick="cms_revenue_all_quarter()" class="btn btn-default">Quý</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="revenue-main-body">
        </div>
    </div>
</div>