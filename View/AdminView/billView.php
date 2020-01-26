
<div class="box-body">
        <div class="body-middle-top">
            <h4>Thống kê hóa đơn</h4>
        </div>
        <form action="" method="post">
            <div class="body-middle-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 middle-3-top">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-5">
                                    <div class="form-group">
                                        <label for="">Tìm Kiếm Theo</label>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-7">
                                                    <input type="text" name="" id="" class="form-control" placeholder="Search ..." aria-describedby="helpId">
                                                </div>
                                                <div class="col-12 col-lg-5 middle-3-list-item">
                                                    <div class="input-group-append">
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>Lựa Chọn</option>
                                                            <option>Số Phòng</option>
                                                            <option>Loại Phòng</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2">
                                    <label for="">Ngày Đến :</label>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="date" name="" id="" class="form-control" placeholder="Search ..." aria-describedby="helpId">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2">
                                    <label for="">Ngày Đi :</label>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="date" name="" id="" class="form-control" placeholder="Search ..." aria-describedby="helpId">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <label for="">Tìm Kiếm :</label>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-light">Tìm Kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="body-middle-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group middle-3-top">
                            <label for="">Danh Sách Hóa Đơn</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="middle-3">
                            <div class="table-responsive">
                                <table class="table table-striped table-light table-bordered middle-3-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Mã HD</th>
                                            <th scope="col">Tên Khách Hàng</th>
                                            <th scope="col">Phòng</th>
                                            <th scope="col">Ngày Lập</th>
                                            <th scope="col">Tiền Phòng</th>
                                            <th scope="col">Người Tính Tiền</th>
                                            <th scope="col">Phải Thanh Toán</th>
                                            <th scope="col">Trạng Thái</th>
                                            <th class="setting" scope="col">Công Cụ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Nguyễn Thanh Tùng</td>
                                            <td>001</td>
                                            <td>22/6/2019</td>
                                            <td>$1000</td>
                                            <td>Nuis</td>
                                            <td>$1000</td>
                                            <td style="color: green">Đã Thanh Toán</td>
                                            <td class="setting">
                                                <ul>
                                                    <li data-toggle="modal" data-target="#seenBill"><button type="button" class="btn btn-success">Xem</button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Nguyễn Sỹ Quý</td>
                                            <td>002</td>
                                            <td>22/6/2019</td>
                                            <td>$1000</td>
                                            <td>Nuis</td>
                                            <td>$1000</td>
                                            <td style="color: tomato">Chưa Thanh Toán</td>
                                            <td class="setting">
                                                <ul>
                                                    <li data-toggle="modal" data-target="#seenBill"><button type="button" class="btn btn-success">Xem</button></li>
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


    <!-- Modal seenBill -->

    <form>
        <div class="modal fade" id="seenBill" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">Tiền Phòng :<span>$1000</span> Ngày/Đêm</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">Nhân Viên :<span>Nuis</span></label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">Ghi Chú : <span>Không</span></label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <!-- Javascript -->