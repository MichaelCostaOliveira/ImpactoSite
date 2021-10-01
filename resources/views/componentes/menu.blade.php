
@if(count($menu->filhos) == 0)
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
            {{ $menu->nome }}
        </p>
    </a>
</li>
@else
    @if($filho == true)
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                    {{ $menu->nome }}
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @foreach($menu->filhos as $key=> $filho)

                    @if(count($menu->filhos) == 0)
                        <li class="nav-item">
                            <a href="../examples/legacy-user-menu.html" class="nav-link">

                                <p>{{$filho->nome}}</p>
                            </a>
                        </li>
                    @else
                        @include('componentes.menu',['menu'=>$filho, 'filho'=>true])
                    @endif
                @endforeach


            </ul>
        </li>
    @else
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>
                    {{ $menu->nome }}
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @foreach($menu->filhos as $key=> $filho)
                    @if(count($menu->filhos) == 0)
                        <li class="nav-item">
                            <a href="../examples/legacy-user-menu.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$filho->nome}}</p>
                            </a>
                        </li>
                    @else
                        @include('componentes.menu',['menu'=>$filho, 'filho'=>true])
                    @endif
                @endforeach


            </ul>
        </li>
    @endif


@endif
