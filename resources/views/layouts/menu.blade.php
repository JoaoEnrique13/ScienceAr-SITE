<header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="width: 100%">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="/">Science AR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                </ul>
                <div class="nav-bar d-flex" role="search">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/augmented-reality">RA</a>
                        </li>

                        {{-- Caso esteja logado, verifica se é admin --}}
                        @if(auth()->check())
                            {{-- veririca se é admin --}}
                            @php
                                $user_controller = app(App\Http\Controllers\UserController::class);
                                $isAdmin = $user_controller->isAdmin(auth()->user()->id);
                            @endphp
                        @endif


                        {{-- Material --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Material
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/material/temperature">Temperatura</a></li>
                            </ul>
                        </li>
                        
                        {{-- Se for admin,  mostra criar quiz --}}
                        @if(auth()->check() && $isAdmin)
                            @if ($isAdmin)
                                <li class="nav-item">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Quiz
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="/quiz/create">Criar Quiz</a></li>
                                            <li><a class="dropdown-item" href="/quiz">Responder Quiz</a></li>
                                        </ul>
                                    </li>
                                </li>
                            @endif

                        {{-- Caso seja aluno ou não esteja logado ele mostra o quiz --}}
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/quiz">Quiz</a>
                            </li>
                        @endif


                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="/about">Sobre nós</a>
                        </li>
                        
                        {{-- Se o usuário não for logado --}}
                        @if(!auth()->check())
                            <li class="nav-item">
                                <a href="/login" class="button">Entrar</a>
                            </li>

                        {{-- Se o usuário for logado --}}
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link button dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Minha Conta
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/account">Conta</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    {{-- Sai da conta --}}
                                    <li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                                            @csrf
                                        </form>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Sair') }}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

