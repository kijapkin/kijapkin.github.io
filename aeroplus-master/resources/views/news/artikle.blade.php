@extends('layout.app')
@section('title', $News->title) {{-- SEO --}}
@section('keywords', CRUDBooster::getSetting('keywords'))
@section('description', $News->description)
@if($News->image)
	@section('image', $News->image)
@else
	@section('image', CRUDBooster::getSetting('logo'))
@endif
@section('content')
    <div class="wrapper" id="body-top">
        <main>
        	@if($News->image)
            <article class="article">
            	<div class="container">
            @else
            <article class="article article-no-photo">
            	<div class="container-article">
            @endif
                    <section class="title-text-photo">
                        <div class="date-title-text-soc">
                            <div class="date">{{ $News->created_at }}</div>
                            <h1>{{ $News->title }}</h1>
                            <p>{{ $News->description }}</p>
                            <div class="soc-list">
                                <div class="span-wrap">
                                    <span style="opacity: 0"></span>
                                </div>
                                <ul>
                                    <li data-signature = "Поділитися на Facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li data-signature = "Поділитися на Twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li data-signature = "Поділитися на Pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li data-signature = "Поділитися на Google +"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li data-signature = "Поділитися на Linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        @if($News->image)
                        <div class="photo-wrap" style="background-image: url('/{{ $News->image }}')"></div>
                        @endif
                    </section>
                </div>

                <div class="container-article">
                    <div class="article-content">
                        {!! $News->body !!}
                    </div>
                </div>
                <div class="drop_up">
                    <a href="#body-top" class="round scrollto" id="drop_up">&#8249</a>
                </div>
            </article>
        </main>
    </div>
@endsection