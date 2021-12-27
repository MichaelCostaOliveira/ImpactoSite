<a href="javascript:void(0)" class="dropdown-item" data-aviso="{{ $reg->id }}">
    <div class="media">
        <img src="{{ asset('assets/default/perfil.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
        <div class="media-body">
            <h3 class="dropdown-item-title">
                {{ $reg->name }}
            </h3>
            <p class="text-sm">{{ $reg->titulo ?? $reg->assunto }}</p>
            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>{{ formatDateAndTime($reg->created_at, 'Y-m-d H:i:s', 'd/m/Y') }}</p>
        </div>
    </div>
</a>
<div class="dropdown-divider"></div>
