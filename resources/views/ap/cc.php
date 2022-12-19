<div class="modal-body">
                        <div id="frm-upload">
                            {{-- <div class="row form-group">
                                <div class="col-sm-12 col-xs-12">
                                    <strong class="input-label text-dark-gray">Tải lên CV từ máy tính</strong><br>
                                    <span class="text-gray text-small">File doc, docx, pdf. Tối đa 5MB.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="jFiler jFiler-theme-dragdropbox"><input type="file" name="cv_file" id="filer_input" style="display: none; position: absolute; left: -9999px; top: -9999px; z-index: -9999;" accept="doc, docx, pdf">
                                    <div class="jFiler-input-dragDrop">
                                        <div class="jFiler-input-inner">
                                            <div class="jFiler-input-icon"><i class="fa fa-upload"></i></div><input type="file" id="filecv" name="filecv">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label>Họ và tên<span class="text-danger">*</span> :</label>
                                <input disabled type="text" value="{{ Session::get('sessionAccount')[0]->name }}" placeholder="Họ tên hiển thị với Nhà tuyển dụng" name="fullname" class="form-control input-sm" style="font-size: 12px">
                                <p class="text-small text-danger italic" id="fullnameErrorMessage" style="margin-top: 5px; display: none"></p>
                            </div>
                            <div class="row">

                                <input hidden type="text" value="{{ $detail[0]->id }}" placeholder="" name="jobid" class="form-control input-sm" style="font-size: 12px">
                                <input hidden type="text" value="{{ $detailbusiness[0]->id }}" placeholder="" name="businessid" class="form-control input-sm" style="font-size: 12px">

                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Email<span class="text-danger">*</span> :</label>
                                        <input required disabled type="text" value="{{ Session::get('sessionAccount')[0]->email }}" placeholder="Email hiển thị với Nhà tuyển dụng" name="email" class="form-control input-sm" style="font-size: 12px">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Số điện thoại<span class="text-danger">*</span> :</label>
                                        <input required type="text" value="" placeholder="Số điện thoại hiển thị với Nhà tuyển dụng" name="phone" class="form-control input-sm" style="font-size: 12px">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Học vấn<span class="text-danger">*</span> :</label>
                                        <textarea required type="text" value="" placeholder="Học vấn" name="edu" class="form-control input-sm" style="font-size: 12px"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Kinh nghiệm<span class="text-danger">*</span> :</label>
                                        <textarea required type="text" value="" placeholder="Kinh nghiệm làm việc của bạn" name="exp" class="form-control input-sm" style="font-size: 12px"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Kỹ năng<span class="text-danger">*</span> :</label>
                                        <textarea required type="text" value="" placeholder="Kỹ năng" name="skill" class="form-control input-sm" style="font-size: 12px"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Mục tiêu nghề nghiệp<span class="text-danger">*</span> :</label>
                                        <textarea required type="text" value="" placeholder="Mục tiêu nghề nghiệp của bạn" name="obj" class="form-control input-sm" style="font-size: 12px"></textarea>
                                    </div>
                                </div>
                                @csrf
                            </div>

                        </div>
                    </div>