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
</main>
@endsection