<div class="box-body">
        <div class="box-middle">
            <div class="middle-top">
                <div class="container">
                    <div class="row">
                        <div class="col-6 middle-top-left">
                            <h2>Phòng Deluxe</h2>
                            <p>
                                Dành thời gian để thưởng thức và thư giãn
                            </p>
                        </div>
                        <div class="col-6 middle-top-right">
                            <p>Giá mỗi đêm</p>
                            <?php
                                foreach ($room as $key => $loaiphong) {
                                    if ($loaiphong['MaLoaiPhong'] == 3) {
                            ?>
                            <h2>$<?php echo $loaiphong['DonGia'];}} ?>.0</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background-middle-img"></div>
        </div>
        <div class="box-middle-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="middle-2-left">
                            <div class="row">
                                <div class="col-12">
                                    <div class="middle-2-left-1">
                                        <h5>
                                            Mô tả Deluxe
                                        </h5>
                                        <div class="dropdown-divider " style="margin: 0 "></div>
                                        <p>Nếu quý khách muốn một nơi thực sự đặc biệt, phòng VIP với thiết kế ấn tượng trong không gian rộng rãi khoáng đạt, phòng ngủ rộng rãi, ban công thoáng mát được trang bị đầy đủ tiện nghi cao cấp sẽ làm quý khách
                                            tuyệt đối hài lòng. Nếu cần một nơi yên tĩnh và thực sự riêng biệt để nghỉ ngơi, Phòng VIP chính là lựa chọn dành cho Quý khách. </p>
                                    </div>
                                    <div class="middle-2-left-2 middle-2-left-1">
                                        <h5>
                                            Không gian tiện nghi sang trọng
                                        </h5>
                                        <div class="dropdown-divider " style="margin: 0 "></div>
                                        <!-- Container for the image gallery -->
                                        <div class="middle-2-left-2-img">

                                            <!-- Full-width images with number text -->
                                            <div class="mySlides">
                                                <div class="numbertext">1 / 6</div>
                                                <img src="../img/img-rooms/room-3/room-1.jpg" style="width:100%">
                                            </div>

                                            <div class="mySlides">
                                                <div class="numbertext">2 / 6</div>
                                                <img src="../img/img-rooms/room-3/room-2.jpg" style="width:100%">
                                            </div>

                                            <div class="mySlides">
                                                <div class="numbertext">3 / 6</div>
                                                <img src="../img/img-rooms/room-3/room-3.jpg" style="width:100%">
                                            </div>

                                            <div class="mySlides">
                                                <div class="numbertext">4 / 6</div>
                                                <img src="../img/img-rooms/room-3/room-4.jpg" style="width:100%">
                                            </div>

                                            <div class="mySlides">
                                                <div class="numbertext">5 / 6</div>
                                                <img src="../img/img-rooms/room-3/room-5.jpg" style="width:100%">
                                            </div>

                                            <div class="mySlides">
                                                <div class="numbertext">6 / 6</div>
                                                <img src="../img/img-rooms/room-3/room-6.jpg" style="width:100%">
                                            </div>

                                            <!-- Next and previous buttons -->
                                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                            <!-- Thumbnail images -->
                                            <div class="row">
                                                <div class="column">
                                                    <img class="demo cursor" src="../img/img-rooms/room-3/room-1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                                                </div>
                                                <div class="column">
                                                    <img class="demo cursor" src="../img/img-rooms/room-3/room-2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                                                </div>
                                                <div class="column">
                                                    <img class="demo cursor" src="../img/img-rooms/room-3/room-3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                                </div>
                                                <div class="column">
                                                    <img class="demo cursor" src="../img/img-rooms/room-3/room-4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                                                </div>
                                                <div class="column">
                                                    <img class="demo cursor" src="../img/img-rooms/room-3/room-5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                                                </div>
                                                <div class="column">
                                                    <img class="demo cursor" src="../img/img-rooms/room-3/room-6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="middle-2-left-3">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tổng Quan</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Các Tính Năng</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <div class="left-3-overview">
                                                            <p>Kích Cỡ Phòng: <span> 41 – 45 sq m / 441 – 484 sq ft</span></p>
                                                            <p>Giới Hạn: <span> Tối đa 3 người lớn</span></p>
                                                            <p>Tầm Nhìn: <span>  Nhìn ra đồi núi, Hồ</span></p>
                                                            <p>Hút Thuốc: <span> Có ban công hút thuốc riêng</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="left-3-overview">
                                                            <p>Kích Cỡ Giường: <span> 41 – 45 sq m / 441 – 484 sq ft</span></p>
                                                            <p>Vị Trí: <span> Tối đa 3 người lớn</span></p>
                                                            <p>Tầm Nhìn: <span>  Nhìn ra đồi núi, Hồ</span></p>
                                                            <p>Dịch Vụ: <span> Có</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <div class="left-3-features">
                                                            <p><i class="fas fa-check"></i> Indoor living room</p>
                                                            <p><i class="fas fa-check"></i> Open garden with a swing</p>
                                                            <p><i class="fas fa-check"></i> Bonfire Facility</p>
                                                            <p><i class="fas fa-check"></i> Working Table</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="left-3-features">
                                                            <p><i class="fas fa-check"></i> Wooden veranda</p>
                                                            <p><i class="fas fa-check"></i> Private BBQ area</p>
                                                            <p><i class="fas fa-check"></i> Hammock</p>
                                                            <p><i class="fas fa-check"></i> A/C (Surfer Dude)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="middle-2-left-4">
                                        <a name="" id="" class="btn btn-default" href="/contact" role="button">Đặt phòng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="middle-2-right">
                            <div class="row">
                                <div class="col-12">
                                    <div class="middle-2-right-1">
                                        <h5>
                                            Đặt phòng của bạn
                                        </h5>
                                        <div class="dropdown-divider " style="margin: 0 "></div>
                                        <div class="row">
                                            <form action="" method="post" style="width:100%">
                                                <div class="col-12 middle-2-right-input">
                                                    <div class="form-group">
                                                        <label for="">Ngày tới</label>
                                                        <input type="date" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-12 middle-2-right-input">
                                                    <div class="form-group">
                                                        <label for="">Ngày đi</label>
                                                        <input type="date" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
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


    <!-- end box-body -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../styles/js/app-infor.js"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>