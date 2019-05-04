@extends('layout.app')
@section('title', 'Головна сторінка') {{-- SEO --}}
@section('keywords', CRUDBooster::getSetting('keywords'))
@section('description', CRUDBooster::getSetting('description'))
@section('image', CRUDBooster::getSetting('logo'))
@section('content')
<div class="wrapper home">
	<section class="section-video-wrap">
		<div class="video-wrap">
			<div class="imag-baner">
				<!-- <img class="delayedLoad" src="/video/buner-video.jpg" id = "delayedLoad"/> -->
				 <video loop muted autoplay poster="/video/buner-video.jpg" id="videobaner">  <!-- muted loop autoplay loop autoplay muted --> <!-- muted loop autoplay  -->
					<!-- <source src="/video/videoplayback.ogg" type='video/ogg;'> -->
					<source src="/video/videoplayback.mp4" type='video/mp4;'>
					<source src="/video/videoplayback.webm" type='video/webm;'>
				</video> 
			</div>
			<div class="button-video">
				<div class="container">
					<div class="sound">
						<div class="button-sound active" id = "volume">
							<i class="fas fa-volume-up">
								<span class="soundless"></span>
							</i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-text-buttn">
			<div class="container">
				<div class="text-buttn">
					<div class="left-text">
						<p>Інженерно-монтажна організація, яка здійснює проектування, монтаж та сервісне обслуговування <a href="#">систем вентиляції, кондиціювання, опалення</a> для всіх типів приміщення.</p>
					</div>
					<div class="right-button">
						<div class="button">
							<a href="/our_services/">Наші послуги</a>
						</div>
						<div class="button">
							<a href="/about_us">Більше про нас</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="section-signature-two-block desktop">
		<div class="container">
			<div class="section-signature">
				<div class="left">
					<span>Наші послуги</span>
				</div>
				<div class="right">
					<a class = "hover-line" href="#">Сервісне та гарантійне обслуговування</a>
				</div>
			</div>
		</div>
	</section>
	<section class="section-two-col-list">
		<div class="container">
			<ul class="two-col-list">
				<li>
					<div class="block" style="background-image: url('{{ asset('/images/home_bg_1.png') }}');">
						<div class="title">
							<h2>Кондиціонування</h2>
						</div>
						<div class="button-line-blue">
							<a href="/our_services/">Детальніше</a>
						</div>
					</div>
				</li>
				<li>
					<div class="block" style="background-image: url('{{ asset('/images/home_bg_2.png') }}');">
						<div class="title">
							<h2>Вентиляція</h2>
						</div>
						<div class="button-line-blue">
							<a href="/our_services/ventilation">Детальніше</a>
						</div>
					</div>
				</li>
				<li>
					<div class="block" style="background-image: url('{{ asset('/images/home_bg_3.png') }}');">
						<div class="title">
							<h2>Опалення</h2>
						</div>
						<div class="button-line-blue">
							<a href="/our_services/heating">Детальніше</a>
						</div>
					</div>
				</li>
				<li>
					<div class="block" style="background-image: url('{{ asset('/images/home_bg_4.png') }}');">
						<div class="title">
							<h2>Алмазне <br> свердління</h2>
						</div>
						<div class="button-line-blue">
							<a href="/our_services/diamond_drilling">Детальніше</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="section-signature-two-block mobile">
		<div class="container">
			<div class="section-signature">
				<div class="right">
					<a class = "hover-line" href="#">Сервісне та гарантійне обслуговування</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section-signature-one-block">
		<div class="container">
			<div class="signature-one">
				<div class="title">
					<span>Популярні товари</span>
				</div>
			</div>
		</div>
	</section>
	<section class="section-col-4-list">
		<div class="container">
			<div class="col-4-list-wrap">
				<div class="col-4-row-wrap">
					<ul class="list-col-4">
						@foreach($Goods_items as $item)
						<li>
							<div class="li-block">
								<div class="block">
									<div class="top-li-block">
										<span class="span-left">Код: {{ $item->artikle }}</span>
										<span class="span-right laved" data-id="{{ $item->id }}">
											<i class="far fa-heart"></i>
										</span>
									</div>
									<a href="/goods/{{ $item->slug }}/{{ $item->id }}">
										<div class="li-image">
											@if(!$item->getimage())

											@else
												<img src="{{ $item->getimage()->image }}" alt="">
											@endif
										</div>
										<div class="li-title">
											<h2>{{ $item->title }}</h2>
										</div>
										<div class="li-price">
											<span>{{ $item->price }} грн</span>
										</div>
									</a>
								</div>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
		<div class="button-border-blue-wrap" data-count="3">
			<div class="container">
				<div class="button-border-blue">
					<span>Показати ще</span>
				</div>
			</div>
		</div>
	</section>

	<section class="section-title-slider-logos">
		<div class="container">
			<div class="title-slider-logos">
				<div class="title">
					<span>Наші клієнти</span>
				</div>
				<div class="slider-logos-wrap">
					<div class="slider-logos">
						@foreach($Our_customers as $item)
						<div class="logo">
							<div class="image-wrap">
								<img src="{{ $item->image }}" alt="">
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section-text-one-gallery">
		<div class="container">
			<div class="text-one-gallery">
				<div class="title-linck">
					<span class="title">Галарея</span>
					<a href="#" class="hover-line">Більше фото</a>
				</div>
				<div class="one-gallery" data-speed="5000" dir="rtl">
					@if($Gallery_images)
						@foreach($Gallery_images as $item)
						<div class="image">
							<img src="{{ $item->image }}" alt="{{ $item->title }}">
						</div>
						@endforeach
					@endif
				</div>
				<div class="one-gallery-settings">
						<div class="count">
							<span class="current">01</span> / 
							<span class="total-number">00</span> 
						</div>
						<div class="position">
							<span class="line" style = "width: 0%"></span>
						</div>
						<div class="control">
							<span class="prev-icon"></span>
							<span class="next-icon"></span>
						</div>
				</div>
				<div class="name-image-active">
					@if($Gallery_images)
					<span>{{ $Gallery_images[0]->title }}</span>
					@endif
				</div>
			</div>
		</div>
	</section>

	<section class="section-col-3-list">
		<div class="signature-two-block">
			<div class="container">
				<div class="section-signature">
					<div class="left">
						<span>Новини</span>
					</div>
					<div class="right">
						<a class="hover-line" href="/news">Більше новин</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<ul class="col-3-list-wrap">
				@foreach($News as $item)
				<li>
					<a href="/news/{{ $item->slug }}">
						<div class="li-block">
							<div class="image-block">
								<img src="{{ $item->image }}" alt="">
							</div>
							<div class="li-title-text">
								<div class="li-title">
									<h2>{{ $item->title }}</h2>
								</div>
								<div class="li-text">
									<p>{{ $item->description }}</p>
								</div>
							</div>
						</div>
					</a>
				</li>
				@endforeach
			</ul>
		</div>
		<div class="button-border-blue-wrap">
			<div class="container">
				<div class="button-border-blue">
					<span>Більше новин</span>
				</div>
			</div>
		</div>
	</section>
	<section class="section-contact-text">
		<div class="container">
			<div class="contact-title-social-text">
				<div class="signature-one-block">
					<div class="title">
						<span>Контакти</span>
					</div>
				</div>
				<div class="contact-text-block">

					<div class="title-social-wrap">
						<div class="title">
							<h1>{!! str_replace("\n", '<br>', CRUDBooster::getSetting('the_company_name')) !!}</h1>
						</div>
						<ul class="soc-wrap">
							<li class="round">
								<a href="{{ CRUDBooster::getSetting('facebook') }}"><i class="fab fa-facebook-f"></i></a>
							</li>
						</ul>
					</div>

					<div class="contact-text">
						<div class="text-row">
							<div class="col-block">
								<div class="title">Директор</div>
								<div class="name">{!! CRUDBooster::getSetting('director') !!}</div>
							</div>
							<div class="col-block">
								<div class="title">Технічний директор</div>
								<div class="name">{!! CRUDBooster::getSetting('technical_director') !!}</div>
							</div>
							<div class="col-last-block">
									<div class="title">E-mail</div>
									<div class="name">
										<a href="mailto:{{ CRUDBooster::getSetting('email') }}" class="hover-line">
											{{ CRUDBooster::getSetting('email') }}
										</a>
									</div>
							</div>
						</div>
						<div class="text-row">
							<div class="col-block">
								<div class="title">Адреса</div>
								<div class="name">{!! str_replace("\n", '<br>', CRUDBooster::getSetting('address')) !!}</div>
							</div>
							<div class="col-block">
								<div class="title">Графік роботи</div>
								<div class="name">{!! str_replace("\n", '<br>', CRUDBooster::getSetting('work_schedule')) !!}</div>
							</div>
							<div class="col-last-block">
								<div class="title">Телефони</div>
									<ul class="name">
										@foreach(explode("\n", CRUDBooster::getSetting('phones')) as $item)
										<li>
											<a href="tell:{{$item}}" class="hover-line">{{$item}}</a>
										</li>
										@endforeach
									</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section-feedback-map">
		<div class="container">
			<div class="feedback-map">
				<div class="map" id="home-map"
				data-adress="{{ CRUDBooster::getSetting('google_address') }}"
				data-lat="{{ CRUDBooster::getSetting('google_lat') }}"
				data-lng="{{ CRUDBooster::getSetting('google_lng') }}"
				></div>
				<form action="/message" method="POST" class="feedback" id="feedback">
					@if(session()->has('success'))
						<div class="alert alert-success">
							{{ session()->get('success') }}
						</div>
					@endif
					{{ csrf_field() }}
					<label for="" class = "label-block">
						<input id="username" name="username" type="text" placeholder="Ваше ім'я" >
						<label class="error" for="username"></label>
					</label>
					<label for="" class = "label-block">
						<input id="email" name="email" type="email" placeholder="E-mail">
						<label for="email"></label>
					</label>
						<textarea name="text" id="" placeholder="Повідомлення"></textarea>
						<div class="button-line-blue">
							<button>Відправити</button>
						</div>
				</form>
			</div>
		</div>
	</section>
</div>

<div class="shipped_order" id="shipped_order" style="display: none;">
	<div class="order-top-title">Ваше повідомлення відправлено.</div>
	<div class="order-container">
		<div class="order-container-title">
			<span>Дякуємо що звирнулись до нас.</span>
		</div>
	</div>
</div>

@endsection