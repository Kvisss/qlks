<div class="box-body">
    <div class="box-middle">
        <div class="middle-top">
            <div class="container">
                <div class="row">
                    <div class="col-6 middle-top-left">
                        <h2>Danh Sách Phòng</h2>
                    </div>
                    <div class="col-6 middle-top-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/home">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="/room">Phòng</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-middle-img"></div>
    </div>
    <div class="box-middle-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="middle-2-left">
                                <div class="card">
                                    <?php
                                    foreach ($room as $key => $phong) {
                                        if ($phong['MaLoaiPhong'] == 1) {
                                            ?>
                                            <div class="row no-gutters">
                                                <div class="col-12 col-lg-4 card-left">
                                                    <img src="img/img-rooms/room-10.jpg" class="card-img" alt="...">
                                                </div>
                                                <div class="col-12 col-lg-5 card-middle">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><a href="#"><?php echo $phong['TenLoaiPhong']; ?></a></h5>
                                                        <ul>
                                                            <li><i class="far fa-user"></i><?php echo $phong['SoNguoi']; ?> Người lớn</li>

                                                        </ul>
                                                        <p class="card-text">Làm cho bạn thoải mái trong bất kỳ phòng khách thanh thản của chúng tôi và phòng rộng rãi. Cách âm từ sàn đến trần ...</p>
                                                        <ul class="list-icon-service">
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="wifi">
                                                                    <i class="fas fa-wifi"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Television">
                                                                    <i class="fas fa-tv"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Bathtub">
                                                                    <i class="fas fa-bath"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Local Newspaper">
                                                                    <i class="far fa-newspaper"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Room Breakfast ">
                                                                    <i class="fas fa-utensils"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Spa ">
                                                                    <i class="fa fa-bed"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Wake Up Call">
                                                                    <i class="fa fa-phone"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Mini Bar">
                                                                    <i class="fa fa-beer"></i>
                                                                </button>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-3 card-right">
                                                    <div class="card-body">
                                                        <div class="card-title">
                                                            <p>
                                                                Giá phòng
                                                            </p>
                                                            <h5><?php echo "$".$phong['DonGia'];
                                                                ?></h5>
                                                            <a name="" id="" class="btn btn-primary" href="/room/vip" role="button">Xem Phòng</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="card">
                                    <?php
                                    foreach ($room as $key => $phong) {
                                        if ($phong['MaLoaiPhong'] == 2) {
                                            ?>
                                            <div class="row no-gutters">
                                                <div class="col-12 col-lg-4 card-left">
                                                    <img src="img/img-rooms/room-9.jpg" class="card-img" alt="...">
                                                </div>
                                                <div class="col-12 col-lg-5 card-middle">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><a href="#"><?php echo $phong['TenLoaiPhong']; ?></a></h5>
                                                        <ul>
                                                            <li><i class="far fa-user"></i><?php echo $phong['SoNguoi']; ?> Người lớn</li>

                                                        </ul>
                                                        <p class="card-text">Làm cho bạn thoải mái trong bất kỳ phòng khách thanh thản của chúng tôi và phòng rộng rãi. Cách âm từ sàn đến trần ...</p>
                                                        <ul class="list-icon-service">
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="wifi">
                                                                    <i class="fas fa-wifi"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Television">
                                                                    <i class="fas fa-tv"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Bathtub">
                                                                    <i class="fas fa-bath"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Local Newspaper">
                                                                    <i class="far fa-newspaper"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Room Breakfast ">
                                                                    <i class="fas fa-utensils"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Spa ">
                                                                    <i class="fa fa-bed"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Wake Up Call">
                                                                    <i class="fa fa-phone"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Mini Bar">
                                                                    <i class="fa fa-beer"></i>
                                                                </button>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-3 card-right">
                                                    <div class="card-body">
                                                        <div class="card-title">
                                                            <p>
                                                                Giá phòng
                                                            </p>
                                                            <h5><?php echo "$".$phong['DonGia'];
                                                                ?></h5>
                                                            <a name="" id="" class="btn btn-primary" href="/room/superior" role="button">Xem Phòng</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="card">
                                    <?php
                                    foreach ($room as $key => $phong) {
                                        if ($phong['MaLoaiPhong'] == 3) {
                                            ?>
                                            <div class="row no-gutters">
                                                <div class="col-12 col-lg-4 card-left">
                                                    <img src="img/img-rooms/room-8.jpg" class="card-img" alt="...">
                                                </div>
                                                <div class="col-12 col-lg-5 card-middle">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><a href="#"><?php echo $phong['TenLoaiPhong']; ?></a></h5>
                                                        <ul>
                                                            <li><i class="far fa-user"></i><?php echo $phong['SoNguoi']; ?> Người lớn</li>

                                                        </ul>
                                                        <p class="card-text">Làm cho bạn thoải mái trong bất kỳ phòng khách thanh thản của chúng tôi và phòng rộng rãi. Cách âm từ sàn đến trần ...</p>
                                                        <ul class="list-icon-service">
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="wifi">
                                                                    <i class="fas fa-wifi"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Television">
                                                                    <i class="fas fa-tv"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Bathtub">
                                                                    <i class="fas fa-bath"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Local Newspaper">
                                                                    <i class="far fa-newspaper"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Room Breakfast ">
                                                                    <i class="fas fa-utensils"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Spa ">
                                                                    <i class="fa fa-bed"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Wake Up Call">
                                                                    <i class="fa fa-phone"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Mini Bar">
                                                                    <i class="fa fa-beer"></i>
                                                                </button>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-3 card-right">
                                                    <div class="card-body">
                                                        <div class="card-title">
                                                            <p>
                                                                Giá phòng
                                                            </p>
                                                            <h5><?php echo "$".$phong['DonGia'];
                                                                ?></h5>
                                                            <a name="" id="" class="btn btn-primary" href="/room/deluxe" role="button">Xem Phòng</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="middle-2-right">
                                        <h5>
                                            Đặt phòng của bạn
                                        </h5>
                                        <div class="dropdown-divider " style="margin: 0 "></div>
                                        <div class="row">
                                            <form action="" method="post" style="width:100%">
                                                <div class="col-12 middle-2-right-input">
                                                    <div class="form-group">
                                                        <label for="">Ngày tới</label>
                                                        <input type="date" class="form-control" name="ngayden" id="" aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-12 middle-2-right-input">
                                                    <div class="form-group">
                                                        <label for="">Ngày đi</label>
                                                        <input type="date" class="form-control" name="ngaydi" id="" aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-12 middle-2-right-input">
                                                    <div class="form-group">
                                                        <label for="">Người lớn</label>
                                                        <select class="custom-select">
                                                            <option selected>Người lớn</option>
                                                            <option value="1">2</option>
                                                            <option value="2">4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 middle-2-right-input">
                                                    <button type="button" class="btn btn-default">Kiểm Tra</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end box-body -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>