@extends('layout.app')
@section('title', 'Про нас') {{-- SEO --}}
@section('keywords', CRUDBooster::getSetting('keywords'))
@section('description', CRUDBooster::getSetting('description'))
@section('image', CRUDBooster::getSetting('logo'))
@section('content')
	<div class="wrapper about-us">
		<sectiotn class="section-about-us">
			<div class="container">
				<div class="about-us-wrap">
					<div class="about-us-left-wrap">
						<div class="about-us-title-text">
							<div class="about-us-title">
								<h2>Про нас</h2>
							</div>
							<div class="about-us-text">
								{!! CRUDBooster::getSetting('about_us') !!}
							</div>
						</div>
						<div class="about-us-title-text">
							<div class="about-us-title">
								<h2>Співпраця з виробниками обладнання</h2>
							</div>
							<div class="about-us-text" style="max-width: 500px; word-break: break-word;">
								{!! CRUDBooster::getSetting('cooperation') !!}
							</div>
						</div>
						<div class="about-us-title-text">
							<div class="about-us-title">
								<h2>Серед багатьох наших клієнтів</h2>
							</div>
							<ul class="about-us-list">
								@foreach(explode("\n", CRUDBooster::getSetting('clients')) as $item)
								<li>{{ $item }}</li>
								@endforeach
							</ul>
						</div>
						<div class="about-us-contacts">
							<div class="contacts-address-work-time">
								<div class="contacts-address">
									<h2>Адреса</h2>
									<p>{!! str_replace("\n", '<br>', CRUDBooster::getSetting('address')) !!}</p>
								</div>
								<div class="work-time">
									<h2>Графік роботи</h2>
									<p>{!! str_replace("\n", '<br>', CRUDBooster::getSetting('work_schedule')) !!}</p>
								</div>
							</div>
						</div>
						<div class="about-us-contacts">
							<div class="contacts-phone-email">
								<div class="contacts-phone">
									<h2>Телефони</h2>
									<p>
										@foreach(explode("\n", CRUDBooster::getSetting('phones')) as $item)
											<a href="tell:{{$item}}" class="hover-line">{{$item}}</a> 
										@endforeach
									</p>
								</div>
								<div class="contacts-email">
									<h2>E-mail</h2>
									<p>
										<a href="mailto:{{ CRUDBooster::getSetting('email') }}" class="hover-line">
											{{ CRUDBooster::getSetting('email') }}
										</a>
									</p>
								</div>
								<ul class="soc-wrap">
									<li>
										<div class="round">
											<a href="{{ CRUDBooster::getSetting('facebook') }}"><i class="fab fa-facebook-f"></i></a>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="about-us-contacts">
							<ul class="soc-wrap">
								<li>
									<div class="round">
										<a href="{{ CRUDBooster::getSetting('facebook') }}"><i class="fab fa-facebook-f"></i></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="about-us-right-images">
						<div class="about-us-photo-list">
							<div class="photo-list">
								@foreach($About_us as $item)
								<div class="liblock">
									<div class="photo-signature">
										<div class="photo" style="background-image: url('/{{ $item->image }}')"></div>
										<div class="signature">
											<h3>{{ $item->foi }}</h3>
											<p>{{ $item->position }}</p>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</sectiotn>
	</div>
@endsection