<header>
    <h1>Laravel Project</h1>
    <nav>
        <ul>
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}"><li>Home</li></a>
            <a href="{{ route('cursos.index') }}" class="{{ request()->routeIs('cursos.*') ? 'active' : '' }}"><li>Cursos</li></a>
            <a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active' : '' }}"><li>Sobre nosotros</li></a>
        </ul>
    </nav>
</header>