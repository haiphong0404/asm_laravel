@extends('client.layouts.master')
@section('title')
    dashboard Member
@endsection
@section('content')
    <div class="position-fixed top-0 end-0 m-3 bg-light border rounded p-3 shadow-sm">
        <h6 class="mb-3">Hi, {{ Auth::user()->name }}</h6>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Logout</button>
        </form>
    </div>


    <div class="site-blocks-cover"
         style="background-image: url('https://vixs.vn/wp-content/uploads/2024/01/Banner-trang-tin-tuc-Su-kien.webp');"
         data-aos="fade">
        <div class="container h-100">
            <div class="row h-100 align-items-start align-items-md-center justify-content-end">
                <div class="col-md-5 text-right pt-5 pt-md-0 d-flex flex-column justify-content-center">
                    <h1 class="mb-2">Finding Your Perfect News</h1>
                    <div class="intro-text">
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis
                            quam. Integer accumsan tincidunt fringilla.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section site-section-sm site-blocks-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-truck"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Tin tuc moi</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer
                            accumsan tincidunt fringilla.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-refresh2"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Free Returns</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer
                            accumsan tincidunt fringilla.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-help"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Customer Support</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer
                            accumsan tincidunt fringilla.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section site-blocks-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="#">
                        <figure class="image">
                            <img src="/client/images/women.jpg" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <span class="text-uppercase">Tin tức kinh tế</span>
                            <h3>Kinh tế - Chính trị </h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="#">
                        <figure class="image">
                            <img src="/client/images/children.jpg" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <span class="text-uppercase">Giáo dục </span>
                            <h3>Giáo dục và đào tạo </h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="#">
                        <figure class="image">
                            <img src="/client/images/men.jpg" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <span class="text-uppercase">Công nghệ - Ứng dụng </span>
                            <h3>Điện thoại - Laptop </h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>Tin tức nổi bật </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="nonloop-block-3 owl-carousel">
                        <div class="item">
                            <div class="block-4 text-center">
                                <figure class="block-4-image">
                                    <img
                                        src="https://swinburne-vn.edu.vn/wp-content/uploads/2021/07/gia%CC%81o-tri%CC%80nh-co%CC%82ng-nghe%CC%A3%CC%82-tho%CC%82ng-tin-scaled.jpeg"
                                        alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="#">10 smartphone bán chạy nhất thế giới
                                        </a></h3>
                                    <p class="mb-0">Thế hệ iPhone 15 chiếm ba vị trí đầu trong danh sách 10 smartphone
                                        bán chạy nhất thế giới quý II/2024</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-4 text-center">
                                <figure class="block-4-image">
                                    <img src="https://img.lovepik.com/photo/40028/3771.jpg_wh860.jpg"
                                         alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="#">Chọn trường nào để học ngành Kỹ thuật hàng không?
                                        </a></h3>
                                    <p class="mb-0">Bỏ Đại học Luật Hà Nội sau năm đầu để thi vào ngành Dinh dưỡng của
                                        Đại học Y Hà Nội, Hồng Ngọc ẵm danh hiệu thủ khoa tốt nghiệp hệ cử nhân. </p>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-4 text-center">
                                <figure class="block-4-image">
                                    <img
                                        src="https://png.pngtree.com/png-vector/20220519/ourlarge/pngtree-understanding-the-basics-of-economy-inflation-money-value-recession-and-economic-growth-vector-png-image_46273792.jpg"
                                        alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="#">Giá vàng được dự báo tăng mạnh tuần này</a></h3>
                                    <p class="mb-0">21 cổ đông, gồm 16 cá nhân và 5 doanh nghiệp sở hữu 70% vốn
                                        KienlongBank, bao gồm người có liên quan của "bầu" Thắng và Sunshine Group.Ngân
                                        sách hụt thu gần 20.000 tỷ đồng do giảm thuế môi trường xăng dầu
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-4 text-center">
                                <figure class="block-4-image">
                                    <img src="/client/images/cloth_3.jpg" alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="#">T-Shirt Mockup</a></h3>
                                    <p class="mb-0">Finding perfect products</p>
                                    <p class="text-primary font-weight-bold">$50</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-4 text-center">
                                <figure class="block-4-image">
                                    <img src="/client/images/shoe_1.jpg" alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="#">Corater</a></h3>
                                    <p class="mb-0">Finding perfect products</p>
                                    <p class="text-primary font-weight-bold">$50</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section block-8">
        <div class="container">
            <div class="row justify-content-center  mb-5">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>Tin nóng!</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-7 mb-5">
                    <a href="#"><img
                            src="https://lh5.googleusercontent.com/proxy/Gzf6UQgB6NmJewfSwuDcDxac4OznUiR7XBNKIyVeNkstWayLY4Lmdo73SwnTgFTShiIgyQAD5TYLoAqCPrxmY5GJkF4DijFmBWt925_e"
                            alt="Image placeholder" class="img-fluid rounded"></a>
                </div>
                <div class="col-md-12 col-lg-5 text-center pl-md-5">
                    <h2><a href="#">Khởi động dự án Mảnh Đất Vàng</a></h2>
                    <p class="post-meta mb-4">Đồng hành  <a href="#">VinGroup</a> <span class="block-8-sep">&bullet;</span>
                        September 3, 2018</p>
                    <p>Sáng ngày 19/5 Liên danh Công ty Cổ phần Đông Á Golden Square và Công ty Cổ phần Foodinco Quy Nhơn đã động thổ và khoan cọc thí nghiệm dự án Nhà ở xã hội (NOXH) Golden Square Lào Cai tại lô đất dự án - khu dân cư giáp đường B6 kéo dài, phường Bắc Lệnh, TP.Lào Cai, tỉnh Lào Cai.</p>
                    <p><a href="#" class="btn btn-primary btn-sm">Đọc ngay </a></p>
                </div>
            </div>
        </div>
    </div>

@endsection
