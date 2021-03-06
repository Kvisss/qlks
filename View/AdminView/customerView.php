<div class="box-body">
        <div class="body-middle-top">
            <h4>Quản Lý Khách Hàng</h4>
        </div>
        <div class="body-middle-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group btn-create-member">
                            <div class="row justify-content-end">
                                <div class="col-12 col-lg-6 ">
                                    <form action="" method="post">
                                        <div class="input-group search-member">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Text input with segmented dropdown button">
                                            <div class="input-group-append">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Lựa Chọn</option>
                                                    <option>CMTND</option>
                                                    <option>SỐ ĐTH</option>
                                                </select>
                                                <button type="button" class="btn  btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <form action="" method="post">
                                        <button type="button" data-toggle="modal" data-target="#createCustomer" class="btn btn-info"> Thêm Khách Hàng +</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-middle-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group middle-3-top">
                            <label for="">Danh Sách Khách Hàng</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="middle-3">
                            <div class="table-responsive">
                                <table class="table table-striped table-light table-bordered middle-3-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Họ Tên</th>
                                            <th scope="col">CMTND</th>
                                            <th scope="col">Địa Chỉ</th>
                                            <th scope="col">Số Điện Thoại</th>
                                            <th scope="col">Sinh Nhật</th>
                                            <th scope="col">Email</th>
                                            <th class="setting" scope="col">Công Cụ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Nguyễn Thanh Tùng</td>
                                            <td>0201546022</td>
                                            <td>hihih</td>
                                            <td>011011022033</td>
                                            <td>05-07-98</td>
                                            <td>adthanh57@gmail.com</td>
                                            <td class="setting">
                                                <ul>
                                                    <li data-toggle="modal" data-target="#editCustomer"><button type="button" class="btn btn-warning">Sửa</button></li>
                                                    <li data-toggle="modal" data-target="#deleteCustomer"><button type="button" class="btn btn-danger">Xóa</button></li>
                                                    <li data-toggle="modal" data-target="#setroom"><button type="button" class="btn btn-success">Đặt Phòng</button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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


    <!-- Modal createCustomer -->
    <form>
        <div class="modal fade" id="createCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Tạo Mới Khách Hàng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Họ Tên* :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Name ...">
                                </div>

                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Số Điện Thoại* :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Phone number ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">CMTND* :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Username ...">
                                </div>

                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Địa Chỉ :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="City ...">
                                </div>

                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Email :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Email ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Sinh Nhật :</label>
                                    <input type="date" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Birthday ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label for="">Ghi Chú :</label>
                                    <textarea class="form-control" name="" id="" rows="3" placeholder="Note ..."></textarea>
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
        </div>
    </form>
    <!-- Modal EditCustomer -->
    <form>
        <div class="modal fade" id="editCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Sửa Khách Hàng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Họ Tên* :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Name ...">
                                </div>

                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Số Điện Thoại* :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Phone number ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">CMTND* :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Username ...">
                                </div>

                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Địa Chỉ :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="City ...">
                                </div>

                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Email :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Email ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Sinh Nhật :</label>
                                    <input type="date" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Birthday ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label for="">Ghi Chú :</label>
                                    <textarea class="form-control" name="" id="" rows="3" placeholder="Note ..."></textarea>
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
        </div>
    </form>
    <!-- Modal Delete Member -->
    <form>
        <div class="modal fade" id="deleteCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Xóa Khách hàng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Bạn Có Muốn Xóa Khách Hàng Không</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="button" class="btn btn-danger">Có</button>
                        </div>
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