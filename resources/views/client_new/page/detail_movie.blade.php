@extends('client_new.share.masterpage')
@section('content')
<!-- Shop Detail Section -->

<div id="movie_detail">
    <section class="shop-detail-section" style="padding-top: 70px">
        <div class="auto-container">
            <!-- Upper Box -->
            <div class="upper-box">
                <div class="row clearfix">
                    <!-- Gallery Column -->
                    <div class="gallery-column col-md-4">
                        <div class="inner-column">
                            <div class="col-md-12 d-flex">
                                <img v-bind:src="'/' + dataMovie.hinh_anh" alt class="img-thumbnail" width="350px;">
                            </div>
                        </div>
                    </div>
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h3><b style="font-size: 2.5rem; font-weight: 500;"><b class="text-warning">@{{
                                        getFirst(dataMovie.ten_phim) }} </b>
                                    <b class="text-danger">@{{
                                        getWords(dataMovie.ten_phim) }}</b> </b></h3>

                            <div class="d-flex flex-wrap mt-4">
                                <!-- Model -->
                                <!-- Select Size -->
                                <div class="select-size-box clearfix">
                                    <div class="select-box"><input type="radio" disabled name="payment-group"
                                            id="radio-two"><label for="radio-two"
                                            style="background-color: #557a7b !important; color: #fff;">4k
                                            -
                                            hdr</label></div>
                                    <div class="select-box"><input type="radio" disabled name="payment-group"
                                            id="radio-one"><label for="radio-one">t18</label></div>

                                </div>
                                <div>
                                    <h5><span class="text-danger ms-2">@{{
                                            dataMovie.the_loai
                                            }}</span></h5>
                                </div>
                                <div class="d-flex align-middle mt-1 ms-3">
                                    <i class="fa-solid fa-calendar text-warning mt-1 me-2" style="font-size:1.1rem"></i>
                                    <b class="text-warning" style="font-size:1.1rem">2023</b>
                                </div>
                            </div>
                            <!-- Price -->

                            <div class="text mt-2" style="color: #fff; font-size: 1.1rem;">@{{
                                dataMovie.mo_ta }}</div>
                            <div class="d-flex flex-wrap">
                                <!-- Model -->
                                <div class="model">
                                    <span class="model-title text-danger"><b>Đạo
                                            Diễn: </b> </span>
                                </div>
                                <!-- Select Size -->
                                <div class="model">
                                    <span class="model-title text-warning"><b>@{{
                                            dataMovie.dao_dien }}</b></span>
                                </div>

                            </div>
                            <div class="d-flex flex-wrap">
                                <!-- Model -->
                                <div class="model">
                                    <span class="model-title text-danger"><b>Diễn
                                            Viên: </b></span>
                                </div>
                                <!-- Select Size -->
                                <div class="model">
                                    <span class="model-title text-warning"><b>@{{
                                            dataMovie.dien_vien }}</b></span>
                                </div>

                            </div>
                            <div class="d-flex flex-wrap">
                                <!-- Model -->
                                <div class="model">
                                    <span class="model-title text-danger"><b>Ngôn
                                            Ngữ: </b></span>
                                </div>
                                <!-- Select Size -->
                                <div class="model">
                                    <span class="model-title text-warning"><b>@{{
                                            dataMovie.ngon_ngu }}</b></span>
                                </div>

                            </div>

                            <!-- Categories -->

                            <div class="d-flex align-items-center flex-wrap mt-2">

                                <!-- Button Box -->
                                <div class="button-box">
                                    <button class="theme-btn btn-style-one button-primary" style>
                                        <b>Trailer</b>
                                    </button>
                                </div>
                                <div class="button-box">
                                    <a data-bs-toggle="modal" data-bs-target="#ticketModal"
                                        class="theme-btn btn-style-one button-secondary" style>
                                        <b>Đặt Vé Ngay</b>
                                    </a>
                                </div>

                                <!-- Quantity Box -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Upper Box -->

        </div>
    </section>
    <!-- End Shop Page Section -->
    <!-- Products Section Six -->
    <section class="products-section-six">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <h4><strong style="font-size: 2rem;"><b class="text-warning">PHIM</b><b class="text-danger">
                            SẮP
                            CHIẾU</b></strong></h4>
            </div>
            <div class="row clearfix">
                <template v-for="(v,k) in list_rcm">
                    <div class="shop-item col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a v-bind:href="'/movie-detail/'+ v.slug_phim">
                                    <div style>
                                        <img v-bind:src="'/' + v.hinh_anh" alt style="object-fit: cover;" />
                                    </div>
                                </a>
                                <div class="cart-box text-center mb-1">
                                    <a class="cart" href="#">Trailer</a>
                                    <a class="cart" href="#">Đặt vé </a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h6><a v-bind:href="'/movie-detail/'+ v.slug_phim"><b>@{{ v.ten_phim }}</b></a></h6>
                            </div>
                        </div>
                    </div>
                </template>
                <!-- Shop Item Two -->



            </div>
        </div>
    </section>
    <div class="modal fade" id="ticketModal" tabindex="-1" aria-labelledby aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="background-color: #0e1317;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b class=" text-danger">LỊCH CHIẾU CỦA PHIM </b>
                        <b class="text-warning">@{{ dataMovie.ten_phim }}</b></h1>
                </div>
                <div class="modal-body" style="padding-bottom: 20px;">
                    <template v-if="dateTime.length == 0">
                        <b class="text-warning">PHIM HIỆN CHƯA CÓ LỊCH CHIẾU</b>
                    </template>
                    <template v-for="(v,k) in dateTime">
                        <template v-if="(k) == v.check">
                            <h6><b class="text-warning">Ngày : @{{ v.ngay_chieu
                                    }}</b></h6>
                            <template v-for="(v1, k1)  in dateTime">
                                <template v-if="v.check == v1.check">
                                    <button v-on:click="generateHref(v1.id_lich_chieu)"
                                        class="btn btn-danger me-2 mt-2">@{{
                                      v1.gio_chieu }}</button>
                                </template>
                            </template>
                            <hr class="text-white">
                        </template>
                    </template>

                </div>
            </div>
        </div>
    </div>
    <!-- End Products Section Six -->

</div>
<section class="news-section">
    <div class="auto-container">
        <div class="news-carousel owl-carousel owl-theme">
            <div class="news-block">
                <div class="inner-box">
                    <div class="image">
                        <div class="tag text-bg-danger">BLOG</div>
                        <a href="blog-detail.html"><img src="/assets_client/images/resource/news-1.jpg" alt /></a>
                    </div>
                    <div class="lower-content">
                        <div class="author">
                            <img src="/assets_client/images/resource/author-1.png" alt />
                        </div>
                        <h5><a href="blog-detail.html" style="text-decoration: none;">Mắt
                                Biếc:
                                Câu chuyện tình yêu và nỗi
                                buồn đến từ sự bỏ lỡ</a></h5>
                        <div class="info">By: <span>Lan Hương</span>
                            <i>January 23,2022</i></div>
                    </div>
                </div>
            </div>
            <div class="news-block">
                <div class="inner-box">
                    <div class="image">
                        <div class="tag text-bg-danger">BLOG</div>
                        <a href="blog-detail.html"><img src="/assets_client/images/resource/news-2.jpg" alt /></a>
                    </div>
                    <div class="lower-content">
                        <div class="author">
                            <img src="/assets_client/images/resource/author-11.png" alt />
                        </div>
                        <h5><a href="blog-detail.html" style="text-decoration: none;">Mắt
                                Biếc”
                                - Một Tác Phẩm Phải Dùng Cả Quãng
                                Thời Gian Thanh Xuân Để Cảm Nhận
                            </a></h5>
                        <div class="info">By: <span>Anh Nguyễn</span>
                            <i>September 11,2022</i></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="testimonial-section">
    <div class="pattern-layer" style="background-image: url(/assets_client/images/background/pattern-3.png)"></div>
    <div class="auto-container">
        <div class="inner-container">
            <div class="pattern-layer-two"
                style="background-image: url(/assets_client/images/background/pattern-4.png)"></div>
            <div class="vector-layer" style="background-image: url(/assets_client/images/background/pattern-2.png)">
            </div>
            <div class="single-item-carousel owl-carousel owl-theme">
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-lg-4 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="arrow-layer"
                                        style="background-image: url(/assets_client/images/icons/arrow-2.png)"></div>
                                    <div class="image">
                                        <img src="/assets_client/images/resource/author-2.png" alt />
                                        <ul class="social-box">
                                            <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                                            <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                                            <li><a href="https://dribbble.com/" class="fa fa-dribbble"></a></li>
                                            <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="text">“Tôi gửi tình
                                        yêu cho mùa hè, nhưng mùa hè
                                        không
                                        giữ nổi. Mùa hè chỉ biết ra
                                        hoa, phượng đỏ sân trường và
                                        tiếng ve
                                        nỉ non trong lá. Mùa hè ngây
                                        ngô, giống như tôi vậy. Nó
                                        chẳng làm
                                        được những điều tôi kí thác.
                                        Nó để Hà Lan đốt tôi, đốt
                                        rụi. Trái
                                        tim tôi cháy thành tro, rơi
                                        vãi trên đường về.”</div>
                                    <div class="quote-icon flaticon-quote"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-lg-4 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="arrow-layer"
                                        style="background-image: url(/assets_client/images/icons/arrow-2.png)"></div>
                                    <div class="image">
                                        <img src="/assets_client/images/resource/author-21.png" alt />
                                        <ul class="social-box">
                                            <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                                            <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                                            <li><a href="https://dribbble.com/" class="fa fa-dribbble"></a></li>
                                            <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="text">“Trà Long,
                                        làng mình bao giờ cũng đẹp.
                                        Cháu hiểu
                                        rõ điều đó hơn mẹ cháu. Làng
                                        mình đẹp, nhưng buồn. Hồi
                                        chú còn nhỏ,
                                        làng vui hơn. Cũng có thể
                                        làng vẫn thế thôi, nhưng bây
                                        giờ chú thấy
                                        khác. Khi lớn lên, người ta
                                        thường thấy mọi thứ khác đi,
                                        cháu ạ!
                                        Chúng ít rực rỡ hơn và ít
                                        trong suốt hơn. Nhưng dù sao
                                        chí vẫn tin
                                        trong mắt cháu, thế giới vẫn
                                        còn nguyên vẹn, dù ngày mai
                                        khi cháu
                                        đến đây thì chú đã đi
                                        rồi...”</div>
                                    <div class="quote-icon flaticon-quote"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="/JS_Client/detailsMovie.js"></script>
@endsection
