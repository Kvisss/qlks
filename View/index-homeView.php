<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="box-slide-show">
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="5000">
                <img src="img/img-rooms/room-9.jpg" class="d-block w-100 box-slide-show-img" alt="...">
                <div class="carousel-caption d-none d-md-block box-slide-show-text">
                    <h5>Khu nghỉ dưỡng</h5>
                    <h3>Hiện Đại & Cao Cấp</h3>
                    <div class="box-set-calendar">
                        <ul class="nav justify-content-center set-calendar">
                            <li class="nav-item btn-set-book-now">
                                <a href="/room" class="nav-link ">
                                    <label for="">Đặt Phòng Ngay<i class="fas fa-chevron-right"></i></label>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="background-img"></div>
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="img/img-rooms/room-10.jpg" class="d-block w-100 box-slide-show-img" alt="...">
                <div class="carousel-caption d-none d-md-block box-slide-show-text">
                    <h5>Khách sạn đẹp nhất Hà Nội</h5>
                    <h3>Sang Trọng</h3>
                    <div class="box-set-calendar">
                        <ul class="nav justify-content-center set-calendar">
                            <li class="nav-item btn-set-book-now">
                                <a href="/room" class="nav-link ">
                                    <label for="">Đặt Phòng Ngay<i class="fas fa-chevron-right"></i></label>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="background-img"></div>
            </div>
            <div class="carousel-item" data-interval="1000">
                <img src="img/img-rooms/room-11.jpg" class="d-block w-100 box-slide-show-img" alt="...">
                <div class="carousel-caption d-none d-md-block box-slide-show-text">
                    <h5>Bay cao hơn và xa hơn</h5>
                    <h3>Tiện nghi và hơn thế nữa</h3>
                    <div class="box-set-calendar">
                        <ul class="nav justify-content-center set-calendar">
                            <li class="nav-item btn-set-book-now">
                                <a href="/room" class="nav-link">
                                    <label for="">Đặt Phòng Ngay<i class="fas fa-chevron-right"></i></label>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="background-img"></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- end box-slide-show -->
<div class="box-body">
    <div class="body-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <blockquote class="blockquote text-center body-top-slogan">
                                <p class="mb-0">Sang Trọng & Hiện Đại</p>
                                <footer class="blockquote-footer">Nhà nghỉ lấy cảm hứng sinh thái <cite title="Source Title">hòa hợp với môi trường</cite></footer>
                            </blockquote>
                        </div>
                        <div class="col-sm-12 body-top-type-room">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                            <a href="/room/vip">
                                                <div class="card body-top-type-room-item">
                                                    <img src="img/img-rooms/room-9.jpg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h4>Vip</h4>
                                                        <?php
                                                            foreach ($room as $key => $loaiphong) {
                                                                if ($loaiphong['MaLoaiPhong'] == 1) {
                                                        ?>
                                                        <p class="card-text">Bắt đầu từ $<?php echo $loaiphong['DonGia'];}} ?>.0/đêm.</p>
                                                    </div>
                                                </div>
                                            </a>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-4 ">
                                        <a href="/room/superior">
                                            <div class="card body-top-type-room-item">
                                                <img src="img/img-rooms/room-12.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h4>Superior</h4>
                                                    <?php
                                                            foreach ($room as $key => $loaiphong) {
                                                                if ($loaiphong['MaLoaiPhong'] == 2) {
                                                        ?>
                                                        <p class="card-text">Bắt đầu từ $<?php echo $loaiphong['DonGia'];}} ?>.0/đêm.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                        <a href="/room/deluxe">
                                            <div class="card body-top-type-room-item">
                                                <img src="img/img-rooms/room-6.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h4>Deluxe</h4>
                                                    <?php
                                                            foreach ($room as $key => $loaiphong) {
                                                                if ($loaiphong['MaLoaiPhong'] == 3) {
                                                        ?>
                                                        <p class="card-text">Bắt đầu từ $<?php echo $loaiphong['DonGia'];}} ?>.0/đêm.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end body-top -->
    <div class="body-middle">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="row no-gutters body-middle-item ">
                        <div class="col-xs-12 col-lg-6 middle-img">
                            <img src="img/img-rooms/room-4.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-xs-12 col-lg-6 middle-text">
                            <div class="card-body h-100 middle-text-item">
                                <h5 class="card-title">Tiện Nghi Và Thoải Mái</h5>
                                <p class="card-text">Trên diện tích chỉ 31m2 căn hộ nhỏ được thiết kế với không gian hoàn toàn mở, sắp xếp và bài trí nội thất thông minh mang đến bầu không khí thông thoáng và thoải mái đến không ngờ..</p>
                                <button type="button" class="btn btn-secondary btn-sm"><a href="/room">XEM NGAY</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end body-middle -->
    <div class="body-middle-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <blockquote class="blockquote text-center body-middle-2-slogan">
                                <p class="mb-0">Kì Nghỉ Dễ Dàng</p>
                                <footer class="blockquote-footer">Ưu Đãi & Truyền Cảm Hứng<cite title="Source Title"> Hot Hot</cite></footer>
                            </blockquote>
                        </div>
                        <div class="col-sm-12 body-middle-2-service ">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 col-lg-4 middle-2-service-item">
                                    <a href="/service">
                                        <div class="card middle-2-service">
                                            <img src="img/7-du-lich-pho-co-hoi-an-mytour-1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body middle-2-text-service">
                                                <img src="img/img-icon/tour-guide.png" class="img-responsive" alt="...">
                                                <h4>Hướng dẫn viên du lịch</h4>
                                                <p class="card-text">Khám phá thành phố với hướng dẫn viên du lịch trong khách sạn của chúng tôi.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-md-6 col-lg-4 middle-2-service-item">
                                    <a href="/service">
                                        <div class="card middle-2-service">
                                            <img src="img/food.jpg" class="card-img-top" alt="...">
                                            <div class="card-body middle-2-text-service">
                                                <img src="img/img-icon/breakfast.png" class="img-responsive" alt="...">
                                                <h4>Bữa sáng miễn phí</h4>
                                                <p class="card-text">Quý khách cứ tận hưởng bữa sáng một cách ngon miệng. Mọi việc đã có chúng tôi</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-md-6 col-lg-4 middle-2-service-item">
                                    <a href="/service">
                                        <div class="card middle-2-service">
                                            <img src="img/xe.jpg" class="card-img-top" alt="...">
                                            <div class="card-body middle-2-text-service">
                                                <img src="img/img-icon/plane.png" class="img-responsive" alt="...">
                                                <h4>Đưa & đón tại sân bay</h4>
                                                <p class="card-text">Chúng tôi sẽ đón từ sân bay trong khi bạn thoải mái đi xe.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end body-middle-2 -->
    <div class="body-middle-3">
        <div class="body-middle-3-slogan">
            <a target="_blank" href="https://www.youtube.com/watch?v=rYbtBXhMFAQ"><i class="fab fa-youtube"></i></a>
            <p class="mb-0">
                <small>Sang trọng, Hiện đại, Tiện nghi</small>
            </p>
            <p class="mb-0 text-middle">Nơi dừng chân tuyệt vời </p>
            <p class="mb-0 text-middle"> Bạn sẽ phải nhớ đến nơi này</p>
            <a href="/room">
                <button type="button" class="btn btn-secondary btn-sm">Đặt phòng ngay</button>
            </a>
        </div>
        <div class="background-middle-3-img"></div>
    </div>
    <!-- end body-middle-3 -->
    <div class="body-middle-4">
        <section>
            <div class="container">
                <h5 class="section-title h1">Các đánh giá</h5>
                <div class="row">
                    <!-- Team member -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center front-side-text">
                                            <p><img class=" img-fluid" src="img/img-user/tung.jpg" alt="card image"></p>
                                            <h4 class="card-title">Nguyễn Thanh Tùng</h4>
                                            <p class="card-text">"Rất hài lòng với những gì mà khách sạn Luxe đã mang đến cho tôi."</p>
                                            <img src="img/img-icon/tripadvisor.png" class="img-user" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Thông tin</h4>
                                            <p class="card-text">Thời gian ở tại khách sạn là một trải nghiệm tuyệt vời.</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                        <i class="fab fa-skype"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                        <i class="fab fa-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center front-side-text">
                                            <p><img class=" img-fluid" src="img/img-user/quy.jpg" alt="card image"></p>
                                            <h4 class="card-title">Nguyễn Sỹ Quý</h4>
                                            <p class="card-text">"Luôn luôn cố gắng hết mình vì công việc"</p>
                                            <img src="img/img-icon/booking.png" class="img-user" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Thông tin</h4>
                                            <p class="card-text">Là một người chuyên nghiệp trong công việc. Luôn đặt mục tiêu phát triển bản thân lên hàng đầu. Anh là một trong những tài năng đang được tìm kiếm</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                        <i class="fab fa-skype"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                        <i class="fab fa-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center front-side-text ">
                                            <p><img class=" img-fluid" src="img/img-user/duy.jpg" alt="card image"></p>
                                            <h4 class="card-title">Đặng Đức Duy</h4>
                                            <p class="card-text">"Lan tỏa tinh thần làm việc đết tất cả mọi người, Mong muốn được phát triển bản thân"</p>
                                            <img src="img/img-icon/booking.png" class="img-user" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Thông tin</h4>
                                            <p class="card-text">Là một người chuyên nghiệp trong công việc. Luôn đặt mục tiêu phát triển bản thân lên hàng đầu. Anh là một trong những tài năng đang được tìm kiếm</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                        <i class="fab fa-skype"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                        <i class="fab fa-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center front-side-text">
                                            <p><img class=" img-fluid" src="img/img-user/truong.jpg" alt="card image"></p>
                                            <h4 class="card-title">Ninh Giang Trường</h4>
                                            <p class="card-text">"Vui chơi có thưởng"</p>
                                            <img src="img/img-icon/tripadvisor.png" class="img-user" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Thông tin</h4>
                                            <p class="card-text">Là một người chuyên nghiệp trong công việc. Luôn đặt mục tiêu phát triển bản thân lên hàng đầu. Anh là một trong những tài năng đang được tìm kiếm</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                        <i class="fab fa-skype"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                        <i class="fab fa-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                </div>
            </div>
        </section>
    </div>
    <!-- end body-middle-4 -->
    <div class="body-middle-5">
        <div class="row">
            <div class="col-2 middle-5-item">
                <div class="middle-5-list-img">
                    <img src="img/img-footer/img-1.jpg" class="img-responsive" alt="Image">
                </div>
                <a href="https://www.instagram.com/ " target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-2 middle-5-item">
                <div class="middle-5-list-img">
                    <img src="img/img-footer/img-2.jpg" class="img-responsive" alt="Image">
                </div>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-2 middle-5-item">
                <div class="middle-5-list-img">
                    <img src="img/img-footer/img-3.jpg" class="img-responsive" alt="Image">
                </div>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-2 middle-5-item">
                <div class="middle-5-list-img">
                    <img src="img/img-footer/img-4.jpg" class="img-responsive" alt="Image">
                </div>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-2 middle-5-item">
                <div class="middle-5-list-img">
                    <img src="img/img-footer/img-5.jpg" class="img-responsive" alt="Image">
                </div>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-2 middle-5-item">
                <div class="middle-5-list-img">
                    <img src="img/img-footer/img-6.jpg" class="img-responsive" alt="Image">
                </div>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>