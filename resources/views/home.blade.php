@extends('layouts.main')

@section('main-content')
    <div class="jumbotron">
    </div>
    <div class="container">
        <div class="series">
            <div class="current-series">CURRENT SERIES</div>
            <div class="row">
                @foreach ($series as $serie)
                    <div class="card">
                        <a href="{{url('/show', ['id' => $loop->index])}}">
                            <img src="{{ $serie['thumb']}}" alt="">
                        </a>
                        <p>{{ $serie['series']}}</p>
                    </div>
                @endforeach
            </div>
            <a class="button" href="#">LOAD MORE</a>
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