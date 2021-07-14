    
    <header>
        <h1>Coders Free</h1>
        <nav>
            <ul>
                <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ""}}">Home</a>
                </li>
                <li><a href="{{route('sectores.index')}}" class="{{request()->routeIs('sectores.*') ? 'active' : ""}}">Sectores</a>
                </li>
                <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ""}}">Nosotros</a>
                </li>

                <li>
                    <a href="{{route('contactanos.index')}}"  class="{{request()->routeIs('contactanos.index') ? 'active' : ""}}">Contactanos</a>
                </li>
            </ul>
        </nav>
    </header>