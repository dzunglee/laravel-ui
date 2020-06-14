<header id="main-header">
    <div id="particles-js"></div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Site Logo -->
            <a id="logo" class="navbar-brand" href="{{route('home')}}">
                <img class="img-fluid logo "
                     src="{{asset('images/logo2x.png')}}"
                     alt="site logo">
            </a>
            <!-- Dropdown Button -->
            <button id="hamburger" class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="http://hocdang.com#about" class="nav-link" id="menu-item-0">
                            GIỚI THIỆU
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="http://hocdang.com#games" class="nav-link" id="menu-item-1">
                            DỊCH VỤ
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="http://hocdang.com#team" class="nav-link" id="menu-item-2">
                            DỰ ÁN
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="http://hocdang.com#careers" class="nav-link" id="menu-item-3">
                            BLOG
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="http://hocdang.com#contact" class="nav-link" id="menu-item-4">
                            LIÊN HỆ
                        </a>
                    </li>
                </ul>
            </div>
            <div class="d-none d-lg-block ml-auto">
                <p class="mb-0 pl-4">0909310318 - 077 355 1900<br>
                    binbrandgroup@gmail.com</p>
            </div>
        </div>
    </nav>
    <div id="menu_m">
        <div class="section">
            <div class="menu-block">
                <nav class="menu-nav">
                    <ul>
                        <li><a class="menu-nav__link" href="{{route('home')}}">Giới thiệu</a></li>
                        <li><a class="menu-nav__link" href="{{route('home')}}">Dịch vụ</a></li>
                        <li><a class="menu-nav__link" href="{{route('home')}}">Blog</a></li>
                        <li><a class="menu-nav__link" id="contact" href="{{route('home')}}">Liên hệ</a></li>
                    </ul>
                </nav>
                <div class="menu-btn">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex flex-column justify-content-center">
        <h1>BRANDING</h1>
        <h2>
            Chúng tôi là công ty thiết kế chuyên nghiệp <br>
            <div class="text0">Chúng tôi mang đến cho bạn</div>
            <section class="pen">
                <div class="text">
                    <span
                            class="txt-rotate"
                            data-period="1000"
                            data-rotate='[ "Thiết Kế Logo."," Nhận Diện Thương Hiệu."," Profile."," Brochure."," Bao Bì Sản Phẩm."," Thiết Kế & Lập Trình Website.","" ]'>
                    </span>
                </div>
            </section>
            <div class="clearfix"></div>
        </h2>
    </div>
{{--    <div class="social-network">--}}
{{--        <div class="connect">Kết nối</div>--}}
{{--        <div class="line-bar"></div>--}}
{{--        <a href="https://www.facebook.com/BinBrandCreation/" rel="nofollow" target="_blank"><img src="https://binbrand.vn/images/icon-06.png" alt="Facebook" /></a>--}}
{{--        <a href="https://zalo.me/0913413997" rel="nofollow" target="_blank"><img src="https://binbrand.vn/images/icon-05.png" id="icon_zalo" class="icon_zalo" alt="Zalo" width="13" /></a>--}}
{{--        <a href="tel:0913413997" rel="nofollow" target="_blank"><img src="https://binbrand.vn/images/icon-04.png" alt="Zalo" /></a>--}}
{{--    </div>--}}
</header>