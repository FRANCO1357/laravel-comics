@extends('layouts.main')

@section('main-content')
    <div class="jumbotron">
    </div>
    <div class="current-series">
        <div class="container">
            <div class="card">
                <img src="{{ $comic['thumb'] }}" alt="">
                <span class="type">{{$comic['type']}}</span>
                <a href="">VIEW GALLERY</a>
            </div>
            <nav>
                @isset($prev)
                    <a class="prev" href="{{url('/show', ['id' => $prev])}}">PREVIOUS</a>
                @endisset
                @isset($next)
                    <a class="next" href="{{url('/show', ['id' => $next])}}">NEXT</a>
                @endisset
            </nav>
        </div>
    </div>
    <div class="top-info">
        <div class="container">
            <div class="info">
                <h2>{{ $comic['title'] }}</h2>
                <div class="available">
                    <div class="price">
                        <p>U.S. Price: $24.99</p>
                        <p>AVAILABLE</p>
                    </div>
                    <select>
                        <option value="">Check Availability</option>
                    </select>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="adv">
                ADVERTISMENT
                <img src="{{ asset('images/adv.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="bottom-info">
        <div class="container">
            <div class="talent">
                <h3>Talent</h3>
                <div class="artists row">
                    <h4>Art by:</h4>
                    <div class="data">
                        @foreach ($comic['artists'] as $artist)
                        <a href="#">{{ $artist }}</a>
                        @if( !$loop->last) , @else . @endif
                        @endforeach
                    </div>
                </div>
                <div class="writers row">
                    <h4>Written by:</h4>
                    <div class="data">
                        @foreach ($comic['writers'] as $writer)
                        <a href="#">{{ $writer }}</a>
                        @if( !$loop->last), @else. @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="specs">
                <h3>Specs</h3>
                <div class="series row">
                    <h4>Series:</h4>
                    <a href="">{{ $comic['series']}}</a>
                </div>
                <div class="price row">
                    <h4>U.S. Price:</h4>
                    <p>{{ $comic['price']}}</p>
                </div>
                <div class="sale-date row">
                    <h4>On Sale Date:</h4>
                    <p>{{ date('M d Y', strtotime($comic['sale_date'])) }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="buy-comics">
        <div class="container">
            <div class="card">
                <img src="{{ asset('images/buy-comics-digital-comics.png')}}" alt="">
                <p>DIGITAL COMICS</p>
            </div>
            <div class="card">
                <img src="{{ asset('images/buy-comics-merchandise.png')}}" alt="">
                <p>DC MERCHANDISE</p>
            </div>
            <div class="card">
                <img src="{{ asset('images/buy-comics-subscriptions.png')}}" alt="">      
                <p>SUBSCRIPTION</p>
            </div>
            <div class="card">
                <img src="{{ asset('images/buy-comics-shop-locator.png')}}" alt="">
                <p>COMIC SHOP LOCATOR</p>
            </div>
            <div class="card">
                <img src="{{ asset('images/buy-dc-power-visa.svg')}}" alt="">
                <p>DC POWER VISA</p>
            </div>
        </div>
    </div>
@endsection