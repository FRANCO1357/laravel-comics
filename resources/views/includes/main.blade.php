<main>
    <div class="jumbotron">
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
        </div>
    </div>
    
</main>