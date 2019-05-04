<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" 			content="width=device-width, initial-scale=1">
	{{-- SEO BEGIN --}}
	<meta name="description" 		content="@yield('description')">
    <meta name="keywords" 			content="@yield('keywords')">
    <meta name="author" 			content="Code: WWStudio, Design: VIOagency">
    {{-- SEO END --}}
    {{-- OG BEGIN --}}
	<meta property="og:site_name" 	content="{{ CRUDBooster::getSetting('appname') }}" />
	<meta property="og:title" 		content="@yield('title')" />
	<meta property="og:type" 		content="website" />
	<meta property="og:description" content="@yield('description')" />
	<meta property="og:image"       content="{{ config('app.url') }}/@yield('image')" />
    {{-- OG END --}}

	<title>{{ CRUDBooster::getSetting('appname') }} - @yield('title')</title>

	<link rel="stylesheet" href="{{ asset('/css/fontawesome.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/slick-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/jquery.formstyler.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/jquery.formstyler.theme.css') }}">
  <!-- <link rel="stylesheet" href="{{ asset('/css/videohero.css') }}"> -->
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<article></article>
<body>
	@if(Request::is('/'))
	<header class="home-header-wrap home-menu">
	@else
	<header class="home-header-wrap">
	@endif
		<div class="home-header">
			<div class="container">
				<div class="header-content">
					<div class="header-logotipe">
						<a href="/">
							<img src="/{{ CRUDBooster::getSetting('logo') }}" alt="">
						</a>
					</div>
					<div class="menu-mini">
						<i class="fas fa-bars">
						<div class="count-loved-round"></div>
					</i>
					</div>
					<div class="menu-search-favorite-cabinet">
						<div class="header-search-favorite-cabinet">
							<form action="search" method="POST" id="header-search">
								<input id="autocomplete" type="type" placeholder="Я шукаю: кондиціонер">
								<button></button>
								<div class="clear"></div>
								<div class="open-search-list" stail = "opacity: 0; display: none;">
									<ul></ul>
								</div>
								<div class="header-empty-search" style = "opacity: 0">
									<div class="image-block">
										<div class="search-blue"></div>
									</div>
									<div class="text">По вашому запиту нічого не знайдено</div>
								</div> 
							</form>
							<div class="favorite-cabinet">
								<div class="cabinet">
									<a href="#" data-text="Кабінет">
										<i class="fas fa-user"></i>
									</a>
								</div>
								<div class="favorite">
									<div data-text="Улюблені"> <!--<a  href="/goods/favorite" -->
										<div class="far fa-heart far-icon">
											<div class="count-loved-round"></div>
											<div class="drop-down-favorite" id = "show-favorite">
												<div class="triangle"></div>
												<div class="list-block">
													<div class="none-products show">
														<i class = "like-icon"></i><span>Немає збережених товарів</span>
													</div>
													<div class="drop-down-list-favorite hidden">
														<div class="top-text">
															<span>Додано в улюблені</span>
														</div>
														<ul></ul>
														<div class="bootm-text">
															<span>Додано в улюблені</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<ul class="main-menu">
							<li @if(Request::is('our_services/*') || Request::is('our_services'))class="active"@endif>
								<a href="/our_services">Наші послуги</a>
							</li>
							<li @if(Request::is('goods/*') || Request::is('goods'))class="active"@endif>
								<a href="/goods">Товари</a>
								<ul class="minor-main">
									@foreach(App\Helpers\Menu::goods_list() as $item)
									<li><a href="/goods/{{ $item->slug }}">{{ $item->title }}</a></li>
									@endforeach
								</ul>
								<a class="pointer-down-white mean-expand" href="#"></a>
							</li>
							<li @if(Request::is('gallery/*') || Request::is('gallery'))class="active"@endif>
								<a href="/gallery/">Галарея</a>
								<ul class="minor-main">
									@foreach(App\Helpers\Menu::gallery_list() as $item)
									<li><a href="/gallery/{{ $item->slug }}">{{ $item->title }}</a></li>
									@endforeach
								</ul>
							</li>
							<li @if(Request::is('about_us'))class="active"@endif>
								<a href="/about_us">Про нас</a>
							</li>
							<li @if(Request::is('news/*') || Request::is('news'))class="active"@endif>
								<a href="/news">Новини</a>
							</li>
							<li @if(Request::is('contacts'))class="active"@endif>
								<a href="/contacts">Контакти</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	@yield('content')
	<footer class="footer-wrap">
		<div class="container">
			<div class="footer">
				<div class="left">
					<p>Інженерно-монтажна організація Аероплюс. Всі права захищені</p>
				</div>
				<div class="right">
					<span>Розроблено <a class="hover-line" href="http://vioagency.com.ua/" target="_blanck">VIOagency</a></span>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://maps.googleapis.com/maps/api/js?key={{ CRUDBooster::getSetting('google_api_key') }}"></script>
	<!-- <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script> -->
	<script src="{{ asset('/js/jquery-2.1.3.js') }}"></script>
	<script src="{{ asset('/js/slick.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.fancybox.min.js') }}"></script>
	<script src="{{ asset('/js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.formstyler.min.js') }}"></script>
	<!-- <script src="{{ asset('/js/videohero.js') }}"></script> -->
	<script src="{{ asset('/js/main.js') }}"></script>
</body>