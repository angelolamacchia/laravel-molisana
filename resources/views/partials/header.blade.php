<header>
    <img src="{{asset('img/logo.png')}}" alt="Logo Molisana">
    <ul>
        <li class="{{(Request::route()->getName() == 'pagina-home') ? 'active' : null}}">
            <a href="{{route('pagina-home')}}">HOME</a>
        </li>
        <li class="{{(Request::route()->getName() == 'pagina-prodotti') ? 'active' : null}}">
            <a href="{{route('pagina-prodotti')}}">PRODOTTI</a>
        </li>
        <li class="{{(Request::route()->getName() == 'pagina-notizie') ? 'active' : null}}">
            <a href="{{route('pagina-notizie')}}">NOTIZIE</a>
        </li>
        <li class="{{(Request::route()->getName() == 'pagina-contatti') ? 'active' : null}}">
            <a href="{{route('pagina-contatti')}}">CONTATTI</a>
        </li>
    </ul>
</header>