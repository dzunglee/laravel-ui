@extends('layouts.master')

@section('content')
    @include('partials.projects')
    <section class="bin-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <p>
                        BinBrand là đội ngũ chuyên nghiệp trong việc thiết kế sáng tạo nét riêng thương hiệu, chúng tôi mang đến giá trị thật và ấn tượng nhất cho bạn.
                    </p>
                    <a href="#!" class="underline see-more">See more</a>
                </div>
            </div>
        </div>
    </section>
    <section class="team-section">
        <div class="container">
            <h3 class="section-title mb-5">Main team</h3>
            <div class="row small">
                <div class="col-md-3">
                    <div class="team-item">
                        <div class="wrap-image">
                            <img src="{{asset('images/team@2x.jpg')}}">
                        </div>
                        <div class="hover"></div>
                        <div class="content">
                            <h4>Phan Thanh Chuong</h4>
                            <p>Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-item">
                        <div class="wrap-image">
                            <img src="{{asset('images/team@2x.jpg')}}">
                        </div>
                        <div class="hover"></div>
                        <div class="content">
                            <h4>Phan Thanh Chuong</h4>
                            <p>Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-item">
                        <div class="wrap-image">
                            <img src="{{asset('images/team@2x.jpg')}}">
                        </div>
                        <div class="hover"></div>
                        <div class="content">
                            <h4>Phan Thanh Chuong</h4>
                            <p>Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-item">
                        <div class="wrap-image">
                            <img src="{{asset('images/team@2x.jpg')}}">
                        </div>
                        <div class="hover"></div>
                        <div class="content">
                            <h4>Phan Thanh Chuong</h4>
                            <p>Founder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="client-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="section-title">Clients</h3>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-6 col-md-2">
                            <div class="client-item">
                                <img src="{{asset('images/BW.png')}}">
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="client-item">
                                <img src="{{asset('images/BW.png')}}">
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="client-item">
                                <img src="{{asset('images/BW.png')}}">
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="client-item">
                                <img src="{{asset('images/BW.png')}}">
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="client-item">
                                <img src="{{asset('images/BW.png')}}">
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="client-item">
                                <img src="{{asset('images/BW.png')}}">
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="client-item">
                                <img src="{{asset('images/BW.png')}}">
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="client-item">
                                <img src="{{asset('images/BW.png')}}">
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="client-item">
                                <img src="{{asset('images/BW.png')}}">
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="client-item">
                                <img src="{{asset('images/BW.png')}}">
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="client-item">
                                <img src="{{asset('images/BW.png')}}">
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="client-item">
                                <img src="{{asset('images/BW.png')}}">
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="client-item">
                                <img src="{{asset('images/BW.png')}}">
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="client-item">
                                <img src="{{asset('images/BW.png')}}">
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="client-item">
                                <img src="{{asset('images/BW.png')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h3 class="section-title mb-4">New Blog</h3>
            <div class="row no-padding">
                <div class="col-md-3">
                    <div class="blog-item">
                        <div class="wrap-image">
                            <img src="{{asset('images/blog@2x.jpg')}}">
                        </div>
                        <div class="content d-flex flex-column justify-content-end">
                            <h4>10+ LOGOVUI
                                NHÔN THU HÚT</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut .</p>
                        </div>
                        <div class="hover">
                            Xem thêm
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-item">
                        <div class="wrap-image">
                            <img src="{{asset('images/blog@2x.jpg')}}">
                        </div>
                        <div class="content d-flex flex-column justify-content-end">
                            <h4>10+ LOGOVUI
                                NHÔN THU HÚT</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut .</p>
                        </div>
                        <div class="hover">
                            Xem thêm
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-item">
                        <div class="wrap-image">
                            <img src="{{asset('images/blog@2x.jpg')}}">
                        </div>
                        <div class="content d-flex flex-column justify-content-end">
                            <h4>10+ LOGOVUI
                                NHÔN THU HÚT</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut .</p>
                        </div>
                        <div class="hover">
                            Xem thêm
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-item">
                        <div class="wrap-image">
                            <img src="{{asset('images/blog@2x.jpg')}}">
                        </div>
                        <div class="content d-flex flex-column justify-content-end">
                            <h4>10+ LOGOVUI
                                NHÔN THU HÚT</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut .</p>
                        </div>
                        <div class="hover">
                            Xem thêm
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
