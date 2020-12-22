@extends('navs.index')

@section('contentnya')
<div class="bg-light">
    <img
        src="../img/3.png"
        alt="" style="opacity:0.2 ;position: absolute; width: 100%;" class="position-fixed">
</div>ss
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-end">
                <div class="banner-content col-lg-7 col-md-12">
                    <h4 class="text-uppercase">Platform edukasi</h4>
                    <h1>
                        SIFOGA
                    </h1>
                    <p>
                      <h6>Sistem Informasi untuk membantu para pemilik kebun buah naga mengenai cara mengelola yang baik agar dapat meningkatkan hasil panen yang maksimal dan pencegahan gagal panen.<h6>
                    </p>
                    <a href="{{empty(Auth::user()->name) ? "/materi" : "/buka-materi"}}" class="primary-btn header-btn text-uppercase">Pelajari sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start feature Area -->
    <section class="feature-area section-gap" id="feature">
        <div class="container">
            <div class="row">
                <!-- <div class="single-feature col-lg-4">
                    <img class="img-fluid" src="img/f1.png" alt="">
                    <h4>Online Support</h4>
                    <p>Lorem ipsum dolor sit amet, consecteturadipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div> -->
                <div class="single-feature col-lg-4">
                    <img class="img-fluid" src="img/f2.png" alt="">
                    <h4>24/7 Round the Clock</h4>
                    <p>Website SIFOGA Mampu untuk aktif selama 24 Jam dalam 1 Minggu</p>
                </div>
                <div class="single-feature col-lg-4">
                    <img class="img-fluid" src="img/f3.png" alt="">
                    <h4>Handling All Issues</h4>
                    <p>SIFOGA Tersedia untuk mengedukasi penanganan gagal panen pada buah naga</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4 class="text-black">About Us</h4>
                        <p>
                            <h5>PPL Kelompok B<h5> 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4 class="text-black">Contact Us</h4>
                        <p>
                            <h5>SIFOGA (Admin)<h5>
                        </p>
                        <p class="number">
                            <h5>+62 856-4833-3664 <h5> <br>
                        </p>
                    </div>
                </div>
                <!-- <div class="col-lg-5  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4 class="text-white">Newsletter</h4>
                        <p>You can trust us. we only send  offers, not a single spam.</p>
                        <div class="d-flex flex-row" id="mc_embed_signup">


                            <form class="navbar-form" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                                <div class="input-group add-on">
                                    <input class="form-control" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>
                                    <div class="input-group-btn">
                                        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
                                    </div>
                                </div>
                                <div class="info mt-20"></div>
                            </form>

                        </div>
                    </div>
                </div> -->
            </div>
            <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> By Sifoga.com</p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer-social d-flex align-items-center">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->
@endsection
