<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light gap-4">
    <div class="container-fluid">
        <a class="navbar-brand d-flex gap-2 align-items-center" href="{{ route('index') }}">
            <img src="{{URL::asset('/img/univesp_icon.png')}}" alt="" height="24" class="d-inline-block align-text-top">
            <span>Portaria</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cadastros
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('user.index') }}">Usuários</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>