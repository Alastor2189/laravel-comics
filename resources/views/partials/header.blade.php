@php
$navbar = config('navbar-header');
@endphp

<header>
    <div class="header-top">
        <div class="container">
            <a href="">DC power visa &reg;</a>
            <a href="">Additional DC sites <i class="fas fa-sort-down"></i></a>
        </div>
    </div>
    <div class="header-bottom">
        <div class="logo">
            <img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo" />
        </div>
        <nav>
            <ul>
                @foreach($navbar as $key => $item)
                <li><a href=""> {{$item}} </a></li>
                @endforeach
            </ul>

        </nav>
        <div class="searchbar">
            <input type="text" placeholder="Search">
            <i class="fas fa-search"></i>
        </div>
    </div>
</header>