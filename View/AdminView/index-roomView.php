<div class="box-body">
        <div class="body-middle-top">
            <h4>Quản Lý Phòng</h4>
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
                                                    <option>Số Phòng</option>
                                                    <option>Loại Phòng</option>
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
                                            <th scope="col">Phòng</th>
                                            <th scope="col">Loại Phòng</th>
                                            <th scope="col">Tiện Nghi</th>
                                            <th scope="col">Thông Tin Phòng</th>
                                            <th scope="col">Số Giường</th>
                                            <th scope="col">Số Người</th>
                                            <th class="setting" scope="col">Công Cụ</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        foreach($room as $k=>$v){ 
                                            //for($i=1; $i<=count($room); $i++){

                                    ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $v["MaPhong"]; ?></th>
                                            <td><?php echo $v["TenPhong"]; ?></td>
                                            <td><?php echo $v["TenLoaiPhong"]; ?></td>
                                            <td><?php echo $v["TienNghi"]; ?></td>
                                            <td>
                                                <?php 
                                                    if($v["TrangThai"]==0) echo"Phòng dòn trống";
                                                    if($v["TrangThai"]==1) echo"Đang được sử dụng";
                                                    if($v["TrangThai"]==2) echo"Đã được đặt trước";
                                                    if($v["TrangThai"]==3) echo"Đang được sửa hoặc không thể sử dụng";
                                                ?>
                                            </td>
                                            <td><?php echo $v["SoGiuong"]; ?> Giường</td>
                                            <td><?php echo $v["SoNguoi"]; ?> Người</td>
                                            <td class="setting">
                                                <ul>
                                                    <li data-toggle="modal" data-target="#editRoom"><button type="button" class="btn btn-warning">Sửa</button></li>
                                                    <li data-toggle="modal" data-target="#deleteMember"><button type="button" class="btn btn-danger">Xóa</button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                            //} 
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
                        <h5 class="modal-title" id="exampleModalCenterTitle">Tạo Mới Phòng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Loại Phòng :</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>VIP</option>
                                        <option>Deluxe</option>
                                        <option>Superior</option>
                                    </select>
                                    <small id="helpId" class="form-text text-muted">Type Room</small>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Số Phòng* :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Number Room ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Thông Tin Phòng :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Info Room ...">
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="form-group">
                                    <label for="">Tiện Nghi :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Convenient ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Số Giường :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Number of Beds ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Số Người :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Amount of people  ...">
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
    <!-- Modal Edit Room -->
    <form>
        <div class="modal fade" id="editRoom" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Sửa Phòng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Loại Phòng :</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                                <option>VIP</option>
                                                <option>Deluxe</option>
                                                <option>Superior</option>
                                            </select>
                                    <small id="helpId" class="form-text text-muted">Type Room</small>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Số Phòng* :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Number Room ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Thông Tin Phòng :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Info Room ...">
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="form-group">
                                    <label for="">Tiện Nghi :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Convenient ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Số Giường :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Number of Beds ...">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="">Số Người :</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Amount of people  ...">
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
    <!-- Modal Delete Room -->
    <form>
        <div class="modal fade" id="deleteMember" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Xóa Phòng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Bạn Có Muốn Xóa Phòng Này Không</label>
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