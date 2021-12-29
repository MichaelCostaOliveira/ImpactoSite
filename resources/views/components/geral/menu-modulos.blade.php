@php
$permissoes = \Illuminate\Support\Facades\Cache::get('permissoes');
@endphp


@if( (\Route::has('leads-form') || \Route::has('leads-lista')) )
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-podcast"></i>
        <p> Leads <i class="right fas fa-angle-left"></i> </p>
    </a>
    <ul class="nav nav-treeview ml-3">
        @if(\Route::has('leads-form'))
        <li class="nav-item">
            <a href="{{ route('leads-form', ['id' => 'new']) }}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Novo</p>
            </a>
        </li>
        @endif
        @if(
            \Route::has('leads-lista')
        )
        <li class="nav-item">
            <a href="{{ route('leads-lista') }}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>Listagem</p>
            </a>
        </li>
        @endif
    </ul>
</li>
@endif
@if($permissoes->administrativo == 1 && (\Route::has('perfil-form') || \Route::has('perfil-listagem')))
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-id-badge"></i>
            <p> Perfil <i class="right fas fa-angle-left right"></i> </p>
        </a>
        <ul class="nav nav-treeview ml-3">

            @if(
                \Route::has('perfil-form')
            )
                <li class="nav-item">
                    <a href="{{ route('perfil-form', ['id' => 'new']) }}" class="nav-link">
                        <i class="fas fa-plus nav-icon"></i>
                        <p>Novo</p>
                    </a>
                </li>
            @endif
            @if(
                \Route::has('perfil-listagem')
            )
                <li class="nav-item">
                    <a href="{{ route('perfil-listagem') }}" class="nav-link">
                        <i class="fas fa-list nav-icon"></i>
                        <p>Listagem</p>
                    </a>
                </li>
            @endif
        </ul>
    </li>
@endif
<li class="nav-item">
    <hr style="border-color: #4b545c">
</li>
<li class="nav-item">
    <a href="{{ route('minhaconta-form') }}" class="nav-link">
        <i class="fas fa-users-cog nav-icon"></i>
        <p>Minha Conta</p>
    </a>
</li>

@if($permissoes->administrativo == 1 && \Route::has('usuario-listagem'))
<li class="nav-item">
    <a href="{{ route('usuario-listagem') }}" class="nav-link">
        <i class="fas fa-users nav-icon"></i>
        <p>Usuários</p>
    </a>
</li>
@endif
<li class="nav-item">
    <a href="{{ route('logout') }}" class="nav-link"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-power-off nav-icon"></i>
        <p>{{ __('Logout') }}</p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </a>
</li>
