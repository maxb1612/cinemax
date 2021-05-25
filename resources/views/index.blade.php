@extends('layouts.main')

@section('title')
    Головна
@endsection

@section('carousel')
    <section class="carousel" aria-label="Gallery">
        <ul class="carousel-viewport">
            <li id="carousel-slide1"
                tabindex="0"
                class="carousel-slide">
                <div class="carousel-snapper">
                    <a  href="{{route('movie', 4)}}" class="carousel-link">
                        <img src="static/img/banner_wrath_of_man.jpg" alt="pic1">
                    </a>
                    <a href="#carousel-slide4"
                       class="carousel-prev">Go to last slide</a>
                    <a href="#carousel-slide2"
                       class="carousel-next">Go to next slide</a>
                </div>
            </li>
            <li id="carousel-slide2"
                tabindex="0"
                class="carousel-slide">
                <div class="carousel-snapper"></div>
                <a  href="{{route('movie', 1)}}" class="carousel-link">
                    <img src="static/img/banner_avengers.jpg" alt="pic2">
                </a>
                <a href="#carousel-slide1"
                   class="carousel-prev">Go to previous slide</a>
                <a href="#carousel-slide3"
                   class="carousel-next">Go to next slide</a>
            </li>
            <li id="carousel-slide3"
                tabindex="0"
                class="carousel-slide">
                <div class="carousel-snapper"></div>
                <a  href="{{route('movie', 2)}}" class="carousel-link">
                    <img src="static/img/banner_mortal_kombat.jfif" alt="pic3">
                </a>
                <a href="#carousel-slide2"
                   class="carousel-prev">Go to previous slide</a>
                <a href="#carousel-slide4"
                   class="carousel-next">Go to next slide</a>
            </li>
            <li id="carousel-slide4"
                tabindex="0"
                class="carousel-slide">
                <div class="carousel-snapper"></div>
                <a  href="{{route('movie', 3)}}" class="carousel-link">
                    <img src="static/img/banner_tenet.jpg" alt="pic4">
                </a>
                <a href="#carousel-slide3"
                   class="carousel-prev">Go to previous slide</a>
                <a href="#carousel-slide1"
                   class="carousel-next">Go to first slide</a>
            </li>
        </ul>
        <aside class="carousel-navigation">
            <ul class="carousel-navigation-list">
                <li class="carousel-navigation-item">
                    <a href="#carousel-slide1"
                       class="carousel-navigation-button">Go to slide 1</a>
                </li>
                <li class="carousel-navigation-item">
                    <a href="#carousel-slide2"
                       class="carousel-navigation-button">Go to slide 2</a>
                </li>
                <li class="carousel-navigation-item">
                    <a href="#carousel-slide3"
                       class="carousel-navigation-button">Go to slide 3</a>
                </li>
                <li class="carousel-navigation-item">
                    <a href="#carousel-slide4"
                       class="carousel-navigation-button">Go to slide 4</a>
                </li>
            </ul>
        </aside>
    </section>
@endsection

@section('main')
    <h1>У прокаті</h1>
    <div class="row row-cols-4">
        <div class="col-xxl-3 col-sm-6 col-12">
            <div class="movie-plate">
                <a href="{{route('movie', 1)}}">
                    <img src="{{$movies[0]->img}}" alt="poster_1">
                    <div class="overlay">
                        <div class="text">{{$movies[0]->name}}</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 col-12">
            <div class="movie-plate">
                <a href="{{route('movie', 2)}}">
                    <img src="{{$movies[1]->img}}" alt="poster_2">
                    <div class="overlay">
                        <div class="text">{{$movies[1]->name}}</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 col-12">
            <div class="movie-plate">
                <a href="{{route('movie', 3)}}">
                    <img src="{{$movies[2]->img}}" alt="poster_3">
                    <div class="overlay">
                        <div class="text">{{$movies[2]->name}}</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 col-12">
            <div class="movie-plate">
                <a href="{{route('movie', 4)}}">
                    <img src="{{$movies[3]->img}}" alt="poster_4">
                    <div class="overlay">
                        <div class="text">{{$movies[3]->name}}</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <h1>Скоро в кіно</h1>
    <div class="row row-cols-4">
        <div class="col-xxl-3 col-sm-6 col-12">
            <div class="movie-plate">
                <a href="{{route('movie', 5)}}">
                    <img src="{{$movies[4]->img}}" alt="poster_5">
                    <div class="overlay">
                        <div class="text">{{$movies[4]->name}}</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 col-12">
            <div class="movie-plate">
                <a href="{{route('movie', 6)}}">
                    <img src="{{$movies[5]->img}}" alt="poster_6">
                    <div class="overlay">
                        <div class="text">{{$movies[5]->name}}</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 col-12">
            <div class="movie-plate">
                <a href="{{route('movie', 7)}}">
                    <img src="{{$movies[6]->img}}" alt="poster_7">
                    <div class="overlay">
                        <div class="text">{{$movies[6]->name}}</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 col-12">
            <div class="movie-plate">
                <a href="{{route('movie', 8)}}">
                    <img src="{{$movies[7]->img}}" alt="poster_8">
                    <div class="overlay">
                        <div class="text">{{$movies[7]->name}}</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
