<div class="box-body">
    <div class="body-middle-top">
        <h4>Quản Lý Loại Phòng</h4>
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
                                            <button type="button" class="btn  btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 col-lg-3">
                                <form action="" method="post">
                                    <button type="button" data-toggle="modal" data-target="#createRoom" class="btn btn-info"> Thêm Phòng +</button>
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
                        <label for="">Thông Tin Phòng</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="middle-3">
                        <div class="table-responsive">
                            <table class="table table-striped table-light table-bordered middle-3-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã</th>
                                        <th scope="col">Loại Phòng</th>
                                        <th scope="col">Đơn Giá</th>
                                        <th scope="col">Số Giường</th>
                                        <th scope="col">Số Người</th>
                                        <th class="setting" scope="col">Công Cụ</th>
                                    </tr>
                                </thead>
                                <?php
                                foreach ($typeRoom as $k => $v) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $v["MaLoaiPhong"]; ?></th>
                                            <td><?php echo $v["TenLoaiPhong"]; ?></td>
                                            <td><?php echo $v["DonGia"]; ?></td>
                                            <td><?php echo $v["SoGiuong"]; ?></td>
                                            <td><?php echo $v["SoNguoi"]; ?></td>
                                            <td class="setting">
                                                <ul>
                                                    <li data-toggle="modal" data-target="#editRoom"><button type="button" class="btn btn-warning">Sửa</button></li>
                                                    <li data-toggle="modal" data-target="#deleteMember"><button type="button" class="btn btn-danger">Xóa</button></li>
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

<!-- Modal createRoom -->
<form>
    <div class="modal fade" id="createRoom" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tạo Mới Loại Phòng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <div class="col-3">
                            <div class=" form-group ">
                                <label for="exampleFormControlSelect1">Tên loại phòng :</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Vip</option>
                                    <option>Superior</option>
                                    <option>Deluxe</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 col-lg-3 ">
                            <div class="form-group ">
                                <<label for="">Dơn Giá :</label>
                                <input type="text" class="form-control" name="TenDichVu" id="" aria-describedby="helpId" placeholder="Dơn Giá ...">
                            </div>
                        </div>
                        <div class="col-3 ">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Số Giường :</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 ">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Số Người :</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>2</option>
                                    <option>4</option>
                                </select>
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
<!-- Modal Edit Room -->
<form>
    <div class="modal fade" id="editRoom" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Sửa Loại Phòng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3">
                            <div class=" form-group ">
                                <label for="exampleFormControlSelect1">Tên loại phòng :</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Vip</option>
                                    <option>Superior</option>
                                    <option>Deluxe</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 col-lg-3 ">
                            <div class="form-group ">
                                <<label for="">Dơn Giá :</label>
                                <input type="text" class="form-control" name="TenDichVu" id="" aria-describedby="helpId" placeholder="Dơn Giá ...">
                            </div>
                        </div>
                        <div class="col-3 ">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Số Giường :</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 ">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Số Người :</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>2</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <button type="button " class="btn btn-secondary " data-dismiss="modal ">Hủy</button>
                        <button type="button " class="btn btn-primary ">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Modal Delete Room -->
<form>
    <div class="modal fade " id="deleteMember " tabindex="-1 " role="dialog " aria-labelledby="exampleModalCenterTitle " aria-hidden="true ">
        <div class="modal-dialog modal-dialog-centered " role="document ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h5 class="modal-title " id="exampleModalCenterTitle ">Xóa Loại Phòng</h5>
                    <button type="button " class="close " data-dismiss="modal " aria-label="Close ">
                        <span aria-hidden="true ">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="row ">
                        <div class="col-12 ">
                            <div class="form-group ">
                                <label for=" ">Bạn Có Muốn Xóa Loại Phòng Này Không</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <button type="button " class="btn btn-secondary " data-dismiss="modal ">Hủy</button>
                        <button type="button " class="btn btn-danger ">Có</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>



<!-- Javascript -->