<header>
    <h1>Laravel Project</h1>
    <nav>
        <ul>
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}"><li>Home</li></a>
            <a href="{{ route('cursos.index') }}" class="{{ request()->routeIs('cursos.*') ? 'active' : '' }}"><li>Cursos</li></a>
            <a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active' : '' }}"><li>Sobre nosotros</li></a>
            <a href="{{ route('contacto.index') }}" class="{{ request()->routeIs('contacto.index') ? 'active' : '' }}"><li>Contacto</li></a>
        </ul>
    </nav>
</header>