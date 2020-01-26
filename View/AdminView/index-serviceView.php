<div class="box-body">
        <div class="body-middle-top">
            <h4>Quản Lý Dịch Vụ</h4>
        </div>
        <div class="body-middle-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group btn-create-member">
                            <div class="row justify-content-end">
                                <div class="col-12 col-lg-6">
                                    <form action="" method="post">
                                        <div class="input-group search-member">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Text input with segmented dropdown button">
                                            <div class="input-group-append">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Lựa Chọn</option>
                                                    <option>Tên Dịch Vụ</option>
                                                    <option>Loại Dịch Vụ</option>
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
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#createService"> Thêm Dịch Vụ +</button>
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
                            <label for="">Danh Sách Dịch Vụ</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="middle-3">
                            <div class="table-responsive">
                                <table class="table table-striped table-light table-bordered middle-3-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Mã</th>
                                            <th scope="col">Tên Dịch Vụ</th>
                                            <th scope="col">Loại Dịch Vụ</th>
                                            <th scope="col">Đơn Vị</th>
                                            <th scope="col">Giá Bán</th>
                                            <th class="setting" scope="col">Công Cụ</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        foreach($service as $k=>$v){   
                                    ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $v["MaDichVu"];?></th>
                                            <td><?php echo $v["TenDichVu"];?></td>
                                            <td><?php echo $v["NhomDichVu"];?></td>
                                            <td><?php echo $v["DonVi"];?></td>
                                            <td><?php echo $v["DonGia"];?></td>
                                            <td class="setting">
                                                <ul>
                                                    <li data-toggle="modal" data-target="#editService"><button type="button" class="btn btn-warning">Sửa</button></li>
                                                    <li data-toggle="modal" data-target="#deleteService"><button type="button" class="btn btn-danger">Xóa</button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal createMember -->
    <form>
        <div class="modal fade" id="createService" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Tạo Mới Dịch Vụ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Loại Dịch Vụ :</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Sử Dụng Nhiều</option>
                                                <option>Đồ Uống</option>
                                                <option>Đồ Dùng</option>
                                                <option>Giải Trí</option>
                                            </select>
                                    <small id="helpId" class="form-text text-muted">Service Room</small>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Tên Dịch Vụ* :</label>
                                    <input type="text" class="form-control" name="TenDichVu" id="" aria-describedby="helpId" placeholder="Name ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Giá Dịch Vụ* :</label>
                                    <input type="text" class="form-control" name="GiaDichVu" id="" aria-describedby="helpId" placeholder="Service prices ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Đơn Vị* :</label>
                                    <input type="text" class="form-control" name="DonVi" id="" aria-describedby="helpId" placeholder="Dram ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label for="">Ghi Chú :</label>
                                    <textarea class="form-control" name="GhiChu" id="" rows="3" placeholder="Note ..."></textarea>
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
    <!-- Modal Edit Service -->
    <form>
        <div class="modal fade" id="editService" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Sửa Thông Tin Dịch Vụ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Loại Dịch Vụ :</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>Sử Dụng Nhiều</option>
                                                        <option>Đồ Uống</option>
                                                        <option>Đồ Dùng</option>
                                                        <option>Giải Trí</option>
                                                    </select>
                                    <small id="helpId" class="form-text text-muted">Service Room</small>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Tên Dịch Vụ* :</label>
                                    <input type="text" class="form-control" name="TenDichVu" id="" aria-describedby="helpId" placeholder="Name ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Giá Dịch Vụ* :</label>
                                    <input type="text" class="form-control" name="GiaDichVu" id="" aria-describedby="helpId" placeholder="Service prices ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Đơn Vị* :</label>
                                    <input type="text" class="form-control" name="DonVi" id="" aria-describedby="helpId" placeholder="Dram ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label for="">Ghi Chú :</label>
                                    <textarea class="form-control" name="GhiChu" id="" rows="3" placeholder="Note ..."></textarea>
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
    <!-- Modal Delete Service -->
    <form>
        <div class="modal fade" id="deleteService" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Xóa Dịch Vụ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Bạn Có Muốn Xóa Dịch Vụ Không</label>
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