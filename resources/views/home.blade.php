@extends('layout.app')

@section('title')
Dc Comics | Homepage
@endsection

@section('main_content')
<main>
    <div class="jumbotron">
        <img src="{{ asset('images/jumbotron.jpg') }}" alt="Jumbotron" />
    </div>
    <div class="card-section">
        <div class="container-card">
               @foreach ($comics as $card)
            <div class="card">
                <img src="{{$card['thumb']}}" alt="" />
                <h4>{{ $card['series'] }}</h4>
            </div>          
                @endforeach
        </div>

    </div>
    <div class="nav-merchandise">
        <div class="merchandise-object">
            <a href="#" class="merchandise-link">
              <img src="{{asset('/images/buy-comics-digital-comics.png')}}" alt="" />
              <span>Digital comics</span>
            </a>
            <a href="#" class="merchandise-link">
              <img src="{{asset('/images/buy-comics-merchandise.png')}}" alt="" />
              <span>DC merchandise</span>
            </a>
            <a href="#" class="merchandise-link">
              <img src="{{asset('/images/buy-comics-subscriptions.png')}}" alt="" />
              <span>Subscription</span>
            </a>
            <a href="#" class="merchandise-link">
              <img src="{{asset('/images/buy-comics-shop-locator.png')}}" alt="" />
              <span>Comic shop locator</span>
            </a>
            <a href="#" class="merchandise-link">
              <img src="{{asset('/images/buy-dc-power-visa.svg')}}" alt="" />
              <span>DC power Visa</span>
            </a>
          </div>
    </div>
</main>
@endsection