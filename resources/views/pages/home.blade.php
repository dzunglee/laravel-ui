@extends('layouts.master')

@section('content')
    <section class="container-fluid">
        <img width="100%" src="{{asset('images/1571211179VbwryC6BF6G3d1l.jpg')}}">
        <div class="d-flex filters filter-button-group w-100 justify-content-md-around">
            <div  class="active" data-filter="*">Tất cả</div>
            <div data-filter=".iso-1">Thiết kế Logo</div>
            <div data-filter=".iso-2">Nhận diện thương hiệu</div>
            <div data-filter=".iso-3">Ấn phẩm Marketing</div>
            <div data-filter=".iso-4">Bao bì sản phẩm</div>
            <div  data-filter=".iso-5">Thiết kế & Lập trình Website</div>
        </div>
        <div class="row grid isotope-grid">
            <div class="col-md-4 iso-1 iso-2 iso-3 grid-item">
                <img class="p2" src="{{asset('images/isotope@2x.jpg')}}">
            </div>
            <div class="col-md-4 iso-2 iso-3 iso-4 grid-item">
                <img class="p2" src="{{asset('images/isotope@2x.jpg')}}">
            </div>
            <div class="col-md-4 iso-3 iso-4 iso-5 grid-item">
                <img class="p2" src="{{asset('images/isotope@2x.jpg')}}">
            </div>
            <div class="col-md-4 iso-4 iso-5 iso-1 grid-item">
                <img class="p2" src="{{asset('images/isotope@2x.jpg')}}">
            </div>
            <div class="col-md-4 iso-1 iso-2 iso-3 grid-item">
                <img class="p2" src="{{asset('images/isotope@2x.jpg')}}">
            </div>
            <div class="col-md-4 iso-2 iso-3 iso-4 grid-item">
                <img class="p2" src="{{asset('images/isotope@2x.jpg')}}">
            </div>
            <div class="col-md-4 iso-3 iso-4 iso-5 grid-item">
                <img class="p2" src="{{asset('images/isotope@2x.jpg')}}">
            </div>
            <div class="col-md-4 iso-4 iso-5 iso-1 grid-item">
                <img class="p2" src="{{asset('images/isotope@2x.jpg')}}">
            </div>
            <div class="col-md-4 iso-1 iso-2 iso-3 grid-item">
                <img class="p2" src="{{asset('images/isotope@2x.jpg')}}">
            </div>
        </div>
        <div class="container text-right">
            <a href="#!" class="underline">See more</a>
        </div>
    </section>
    <section class="bin-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{asset('images/logo-bin.png')}}">
                </div>
                <div class="col-md-10">
                    <p>
                        BinBrand là đội ngũ chuyên nghiệp trong việc thiết kế sáng tạo nét riêng thương hiệu, chúng tôi mang đến giá trị thật và ấn tượng nhất cho bạn.
                    </p>
                    <a href="#!" class="underline">See more</a>
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
                <div class="col-md-2">
                    <h3 class="section-title">Clients</h3>
                </div>
                <div class="col-md-10">
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
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="section-title mb-4">Contact</h3>
                </div>
                <div class="col-md-8">
                    <form>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Họ tên*" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="tel" placeholder="Số điện thoai*" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email*" required>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Dịch vụ</option>
                                        <option value="1">Dịch vụ 1</option>
                                        <option value="2">Dịch vụ 2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Ghi chú"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn-block btn btn-dark btn-lg">Gửi yêu cầu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
