<header>
    <img src="https://www.lamolisana.it/wp-content/uploads/2020/07/marchio-sito-mobile.jpg" alt="laMolisana-logo">
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{url()->current() == route('home') ? 'active' : ''}}">Home</a></li>
            <li><a href="{{route('prodotti')}}" class="{{url()->current() == route('prodotti') ? 'active' : ''}}">Prodotti</a></li>
            <li><a href="{{route('contatti')}}" class="{{url()->current() == route('contatti') ? 'active' : ''}}">Contatti</a></li>
        </ul>
    </nav>
</header>
