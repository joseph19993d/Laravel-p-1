<header>
    <h1> Codeersfree </h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home')? 'active': ''}}" > Home</a></li>

            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.index')? 'active': ''}}" > Cursos</a></li>

            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros')? 'active': ''}}" > Nosotros</a></li>
            <li>
                <a href="{{route('contactanos.index')}}"> Contactanos</a>
            </li>



        </ul>
    </nav>
</header>
