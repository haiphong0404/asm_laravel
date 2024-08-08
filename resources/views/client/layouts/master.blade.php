<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title', 'Trang chủ - Tin tuc')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>


    @include('client.layouts.partials.css')

</head>

<body>

	<div class="site-wrap">
		<header class="site-navbar" role="banner">
			@include('client.layouts.partials.header-top')

			@include('client.layouts.partials.header-nav')
		</header>

		@yield('content')

		<footer class="site-footer border-top">
			@include('client.layouts.partials.footer')
		</footer>
	</div>

	@include('client.layouts.partials.js')

</body>

</html>
