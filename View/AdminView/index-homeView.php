<div class="box-body">
        <div class="body-middle-top">
            <h4>Danh Sách Phòng</h4>
        </div>
        <div class="body-middle-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="" method="post" style="width: 100%">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Từ Ngày</label>
                                        <input type="date" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Đến Ngày</label>
                                        <input type="date" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Tìm Kiếm</label>
                                        <div class="btn-search-room">
                                            <button type="button" class="btn btn-danger">Xem Chi Tiết <i class="fas fa-angle-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-middle-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="middle-3">
                            <h4>Tình Trạng Phòng</h4>
                            <ul>
                                <li>
                                    <a href="#"><label class="type-room-1" for=""></label> Phòng Trống (<span>8</span>)</a>
                                </li>
                                <li><a href="#"><label class="type-room-2" for=""></label>Đang Ở (<span>3</span>)</a></li>
                                <li><a href="#"><label class="type-room-3" for=""></label>Đặt Trước (<span>5</span>)</a></li>
                                <li><a href="#"><label class="type-room-4" for=""></label>Không Hoạt Động (<span>1</span>)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-middle-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="middle-4-icon-room" id="room-empty" data-toggle="modal" data-target="#setroom">
                            <i class="fas fa-bed"></i>
                            <p>000</p>
                            <div class="middle-4-icon-info-room">
                                <h6>Trống</h6>
                                <p>Đặt phòng ngay</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="middle-4-icon-room" id="room-not-empty" data-toggle="modal" data-target="#payroom">
                            <i class="fas fa-bed"></i>
                            <p>001</p>
                            <div class="middle-4-icon-info-room">
                                <h6>Thanh Tùng</h6>
                                <p>Số ĐT: <span>000112277</span></p>
                                <p>Ngày Vào: <span>20/8/2019</span></p>
                                <p>Giá Tiền: <span>$1000</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="middle-4-icon-room" id="set-room" data-toggle="modal" data-target="#checkin">
                            <i class="fas fa-bed"></i>
                            <p>002</p>
                            <div class="middle-4-icon-info-room">
                                <h6>Trường</h6>
                                <p>Số ĐT: <span>000112277</span></p>
                                <p>Ngày Vào: <span>20/8/2019</span></p>
                                <p>Giá Tiền: <span>$1000</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3">
                        <div class="middle-4-icon-room" id="room-fix" data-toggle="modal" data-target="#fixroom">
                            <i class="fas fa-bed"></i>
                            <p>007</p>
                            <div class="middle-4-icon-info-room">
                                <h6>Không hoạt động</h6>
                                <p>Xin lỗi vì sự việc này</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal set room -->
    <form>
        <div class="modal fade" id="setroom" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Đặt Phòng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Họ và Tên :</label>
                                    <input type="text" class="form-control" id="recipient-name" placeholder="Name ...">
                                </div>
                                <div class="form-group">
                                    <label for="">Số Điện Thoại :</label>
                                    <input type="text" class="form-control" id="recipient-name" placeholder="Phone ...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Số Phòng :</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                              <option>001</option>
                                              <option>002</option>
                                              <option>003</option>
                                              <option>004</option>
                                              <option>005</option>
                                              <option>006</option>
                                              <option>007</option>
                                              <option>008</option>
                                              <option>009</option>
                                              <option>010</option>
                                            </select>
                                    <small id="helpId" class="form-text text-muted">Number Room</small>
                                </div>
                                <div class="form-group">
                                    <label for="">Ngày Vào :</label>
                                    <input type="date" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Check in</small>
                                </div>
                                <div class="form-group">
                                    <label for="">Ngày Ra :</label>
                                    <input type="date" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Check out</small>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Lựa Chọn</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Nhận Phòng
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Đặt Phòng
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Thông tin thêm :</label>
                                    <textarea class="form-control" id="message-text" placeholder="Note ..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button type="button" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!-- Modal pay room -->

    <form>
        <div class="modal fade" id="payroom" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Thanh Toán Phòng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Họ và Tên: <span>Nuis Nguyen</span></label>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Hóa Đơn <span>#2216</span></label>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Số Điện Thoại :<span> 0989098767</span></label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">Ngày Vào :<span>30/7/2019</span></label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">Ngày Ra :<span>2/8/2019</span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Tiền Phòng :<span>$1000</span> Ngày/Đêm</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="" id="" rows="3" placeholder="Note ..."></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="">Phải Thanh Toán : <span>$1000</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button type="button" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Modal Checkin-->
    <form>
        <div class="modal fade" id="checkin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Đặt Phòng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Họ và Tên :</label>
                                    <input type="text" class="form-control" id="recipient-name" placeholder="Name ...">
                                </div>
                                <div class="form-group">
                                    <label for="">Số Điện Thoại :</label>
                                    <input type="text" class="form-control" id="recipient-name" placeholder="Phone ...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Số Phòng :</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                                  <option>001</option>
                                                  <option>002</option>
                                                  <option>003</option>
                                                  <option>004</option>
                                                  <option>005</option>
                                                  <option>006</option>
                                                  <option>007</option>
                                                  <option>008</option>
                                                  <option>009</option>
                                                  <option>010</option>
                                                </select>
                                    <small id="helpId" class="form-text text-muted">Number Room</small>
                                </div>
                                <div class="form-group">
                                    <label for="">Ngày Vào :</label>
                                    <input type="date" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Check in</small>
                                </div>
                                <div class="form-group">
                                    <label for="">Ngày Ra :</label>
                                    <input type="date" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Check out</small>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Lựa Chọn</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                                Nhận Phòng
                                            </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                                Đặt Phòng
                                            </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Thông tin thêm :</label>
                                    <textarea class="form-control" id="message-text" placeholder="Note ..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button type="button" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Modal Fix Room -->
    <form>
        <div class="modal fade" id="fixroom" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Hiện Trạng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Hoạt Động Lại Bình Thường</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button type="button" class="btn btn-primary">Có</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <!-- Javascript -->