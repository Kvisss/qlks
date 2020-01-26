<div class="box-body">
    <div class="body-middle-top">
        <h4>Quản Lý Nhân Viên</h4>
    </div>
    <div class="body-middle-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="form-group btn-create-member" data-toggle="modal" data-target="#createMember">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#createMember"> Thêm Nhân viên +</button>
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
                        <label for="">Danh Sách Nhân Viên</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="middle-3">
                        <div class="table-responsive">
                            <table class="table table-striped table-light table-bordered middle-3-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã</th>
                                        <th scope="col">Họ Tên</th>
                                        <th scope="col">Tên Đăng Nhập</th>
                                        <th scope="col">Chức Vụ</th>
                                        <th scope="col">Số Điện Thoại</th>
                                        <th scope="col">Địa Chỉ</th>
                                        <th class="setting" scope="col">Công Cụ</th>
                                    </tr>
                                </thead>
                                <?php
                                foreach ($employ as $k => $v) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $v["MaNhanVien"]; ?></th>
                                            <td><?php echo $v["HoTen"]; ?></td>
                                            <td><?php echo $v["username"]; ?></td>
                                            <td>
                                                <?php
                                                if ($v["Quyen"] == 0) echo"Admin";
                                                if ($v["Quyen"] == 1) echo"User";
                                                ?>
                                            </td>
                                            <td><?php echo $v["DienThoai"]; ?></td>
                                            <td><?php echo $v["DiaChi"]; ?></td>
                                            <td class="setting">
                                                <ul>
                                                    <li data-toggle="modal" data-target="#editMember"><button type="button" class="btn btn-warning">Sửa</button></li>
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

<!-- Modal createMember -->
<form>
    <div class="modal fade" id="createMember" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tạo Mới Nhân Viên</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Họ Tên* :</label>
                                <input type="text" class="form-control" name="HoTen" id="" aria-describedby="helpId" placeholder="Name ...">
                            </div>

                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Số Điện Thoại* :</label>
                                <input type="text" class="form-control" name="sdt" id="" aria-describedby="helpId" placeholder="Phone number ...">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Tên Đăng Nhập* :</label>
                                <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="Username ...">
                            </div>

                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Mật Khẩu* :</label>
                                <input type="text" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Password ...">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Địa Chỉ :</label>
                                <input type="text" class="form-control" name="DiaChi" id="" aria-describedby="helpId" placeholder="City ...">
                            </div>

                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Email :</label>
                                <input type="text" class="form-control" name="Email" id="" aria-describedby="helpId" placeholder="Email ...">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Sinh Nhật :</label>
                                <input type="date" class="form-control" name="NgaySinh" id="" aria-describedby="helpId" placeholder="Birthday ...">
                            </div>

                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Tạm Trú :</label>
                                <input type="text" class="form-control" name="TamTru" id="" aria-describedby="helpId" placeholder="Temporary accommodation ...">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Thường Trú :</label>
                                <input type="text" class="form-control" name="ThuongTru" id="" aria-describedby="helpId" placeholder="Current accommodation ...">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Ngày Vào Làm :</label>
                                <input type="date" class="form-control" name="NgayVaoLam" id="" aria-describedby="helpId" placeholder="The day began to do ...">
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
<!-- Modal Edit member -->
<form>
    <div class="modal fade" id="editMember" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Sửa Nhân Viên</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Họ Tên* :</label>
                                <input type="text" class="form-control" name="HoTen" id="" aria-describedby="helpId" placeholder="Name ...">
                            </div>

                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Số Điện Thoại* :</label>
                                <input type="text" class="form-control" name="sdt" id="" aria-describedby="helpId" placeholder="Phone number ...">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Tên Đăng Nhập* :</label>
                                <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="Username ...">
                            </div>

                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Mật Khẩu* :</label>
                                <input type="text" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Password ...">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Địa Chỉ :</label>
                                <input type="text" class="form-control" name="DiaChi" id="" aria-describedby="helpId" placeholder="City ...">
                            </div>

                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Email :</label>
                                <input type="text" class="form-control" name="Email" id="" aria-describedby="helpId" placeholder="Email ...">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Sinh Nhật :</label>
                                <input type="date" class="form-control" name="NgaySinh" id="" aria-describedby="helpId" placeholder="Birthday ...">
                            </div>

                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Tạm Trú :</label>
                                <input type="text" class="form-control" name="TamTru" id="" aria-describedby="helpId" placeholder="Temporary accommodation ...">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Thường Trú :</label>
                                <input type="text" class="form-control" name="ThuongTru" id="" aria-describedby="helpId" placeholder="Current accommodation ...">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Ngày Vào Làm :</label>
                                <input type="date" class="form-control" name="NgayVaoLam" id="" aria-describedby="helpId" placeholder="The day began to do ...">
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
<!-- Modal Delete Member -->
<form>
    <div class="modal fade" id="deleteMember" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Xóa Nhân Viên</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Bạn Có Muốn Xóa Nhân Viên Không</label>
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