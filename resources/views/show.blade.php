@extends('layouts.main')

@section('main-content')
    <div class="jumbotron">
    </div>
    <div class="current-series">
        <div class="card"></div>
    </div>
    <div class="container">
        <div class="series">
            <div class="row">
                @foreach ($series as $serie)
                    <div class="card">
                        <img src="{{ $serie['thumb']}}" alt="">
                        <p>{{ $serie['series']}}</p>
                    </div>
                @endforeach
            </div>
            <a href="#">LOAD MORE</a>
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