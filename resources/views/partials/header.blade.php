<header>
    <div class="container-header">
        {{-- logo --}}
        <div class="logo">
            <a href="{{route ('p-home')}}">
                <img src="{{asset('images/dc-logo.png')}}" alt="dc-logo">
            </a>
        </div>

        {{-- navbar --}}
        <nav>
            <ul>
                <li><a href="{{route('p-characters')}}">CHARACTERS</a></li>
                <li><a href="{{route('p-comics')}}">COMICS</a></li>
                <li><a href="{{route('p-movies')}}">MOVIES</a></li>
                <li><a href="{{route('p-tvseries')}}">TV</a></li>
                <li><a href="{{route('p-games')}}">GAMES</a></li>
                <li><a href="{{route('p-collector')}}">COLLECTABLES</a></li>
                <li><a href="{{route('p-video')}}">VIDEOS</a></li>
                <li><a href="{{route('p-fans')}}">FANS</a></li>
                <li><a href="{{route('p-news')}}">NEWS</a></li>
                <li>SHOP</li>
                <li class="search-bar"><input type="text" placeholder="Search"><i class="fas fa-search"></i></i></li>
            </ul>
        </nav>
    </div>
</header>