@extends('layout.app')
@section('title', 'Контакты') {{-- SEO --}}
@section('keywords', CRUDBooster::getSetting('keywords'))
@section('description', CRUDBooster::getSetting('keywords'))
@section('image', CRUDBooster::getSetting('description'))
@section('content')
<div class="wrapper contacts">
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