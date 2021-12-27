@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12"></div>
    </div>
@endsection

@section('custom_js')
    @parent
    <script>
        @if(request()->get('cad','')=='ok')
        toastr.success('Produto deletado!')
        @elseif(request()->get('cad')=='error')
        toastr.error('Erro ao deletar!')
        @endif
    </script>
@endsection

@section('custom_css')
    @parent
@endsection
