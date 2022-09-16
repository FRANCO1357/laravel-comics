@extends('layouts.main')

@section('main-content')
    <div class="jumbotron">
    </div>
    <div class="current-series">
        <div class="container">
            <div class="card">
                <img src="{{ $serie['thumb'] }}" alt="">
                <span class="type">{{$serie['type']}}</span>
                <a href="">VIEW GALLERY</a>
            </div>
        </div>
    </div>
    <div class="top-info">
        <div class="container">
            <div class="info">
                <h2>{{ $serie['title'] }}</h2>
                <div class="available">
                    <div class="price">
                        <p>U.S. Price: $24.99</p>
                        <p>AVAILABLE</p>
                    </div>
                    <select>
                        <option value="">Check Availability</option>
                    </select>
                </div>
                <p>{{ $serie['description'] }}</p>
            </div>
            <div class="adv">
                ADVERTISMENT
                <img src="{{ asset('images/adv.jpg') }}" alt="">
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