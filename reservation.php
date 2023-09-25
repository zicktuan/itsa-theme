<?php
    global $myplugin;
    $optionTheme  = $myplugin->themeSettings->getSettings();
?>
<div class="awe-res-popup-reservation scrollbar-measure">
    <div class="awe-res-popup-reservation-content">

        <div class="restbeef_block restbeef_js_margin restbeef_intro_block">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 align_center awe-desc-wrap-css">
                    <?php echo !empty($optionTheme['awe_reservation_st_desc']) ? $optionTheme['awe_reservation_st_desc'] : ''?>
                </div>
                <div class="col-3"></div>
            </div>
        </div>

        <div class="restbeef_block restbeef_js_margin" data-margin="0 0 90px 0">
            <div class="restbeef_block_inner awe-form-reservation-wrap">
                <form name="reservation" class="restbeef_reservation_form" id="reservation_form" method="post">
                    <div class="row">
                        <div class="col-4">
                            <input type="date" data-placeholder="Ngày đặt bàn" class="awe-reservation-date" name="awe-reservation-date"/>
                        </div>

                        <div class="col-4">
                            <div class="row">
                                <div class="col-6">
                                    <select class="awe-reservation-time awe-time-js" name="awe-reservation-time">
                                        <option value="0">Sáng</option>
                                        <option value="1">Tối</option>
                                    </select>
                                </div>
                                <div class="col-6 awe-hour-ge" id="awe-hour-s">
                                    <select class="awe-reservation-hour-s" name="awe-reservation-hour">
                                        <?php foreach ($optionTheme['awe_reservation_st_hour_s'] as $hour):?>
                                            <option value="<?php echo $hour['title'] ?>"><?php echo $hour['title'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-6 awe-hour-ge" id="awe-hour-t" style="display:none;">
                                    <select class="awe-reservation-hour-t" name="awe-reservation-hour">
                                        <?php foreach ($optionTheme['awe_reservation_st_hour_t'] as $hour):?>
                                            <option value="<?php echo $hour['title'] ?>"><?php echo $hour['title'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="row">
                                <div class="col-6">
                                    <input type="number" min="1" class="awe-reservation-adult" name="awe-reservation-adult" placeholder="Số người lớn">
                                </div>
                                <div class="col-6">
                                    <input type="number" min="0" class="awe-reservation-child" name="awe-reservation-child" placeholder="Số trẻ em">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <input type="text" placeholder="Họ và tên" class="awe-reservation-name" name="awe-reservation-name"/>
                        </div>
                        <div class="col-4">
                            <input type="email" placeholder="Địa chỉ email" class="awe-reservation-email" name="awe-reservation-email"/>
                        </div>
                        <div class="col-4">
                            <input type="tel" placeholder="Số điện thoại" class="awe-reservation-phone" name="awe-reservation-phone"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <select class="awe-reservation-cs" name="awe-reservation-cs">
                                <option value=" " hidden="hidden">Chọn cơ sở</option>
                                <?php foreach($optionTheme['awe_reservation_st_branch'] as $branch): ?>
                                    <option value="<?php echo $branch['title'] ?>"><?php echo $branch['title'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <textarea placeholder="Yêu cầu thêm" class="awe-reservation-desc" name="awe-reservation-desc"></textarea>
                    <input type="submit" class="awn-btn-submit-form-reservation" style="background: #ec7b03;;" value="Đặt Bàn Ngay"/>
                </form>
            </div>
        </div>

        <a href="#" class="close awe-close-popup"></a>
    </div>
</div>