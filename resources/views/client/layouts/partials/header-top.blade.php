<div class="site-navbar-top">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                <form action="{{ route('tins.search') }}" method="GET" class="mb-4">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Tìm kiếm theo tiêu đề" value="{{ request()->input('search') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                <div class="site-logo">
                    <a href="index.html" class="js-logo-clone">NEWS 24H</a>
                </div>
            </div>
            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                <div class="site-top-icons">
                    <ul>
                        <li><a href="{{ route('login') }}"><span class="icon icon-login"></span> Login</a></li>
                        <li><a href="{{ route('register') }}"><span class="icon icon-register"></span> Register</a></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</div>
