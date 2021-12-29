@extends('admin.base')

@section('partial')
    <div class="row">
        <div class="col-12 sticky-top box-filtro" style="display: none;">
            <div class="callout callout-info text-left">
                <form id="formFilter" action="{{ route('usuario-listagem') }}">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" placeholder="" value="{{ request()->get('nome', '') }}" class="form-control ">
                        </div>
                        <div class="col-6 col-lg-3">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="" value="{{ request()->get('email', '') }}" class="form-control ">
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-12 text-right">
                            <button type="button" id="btn_submit" class="btn btn-warning btn-reset-form">Limpar filtro</button>
                            <button type="submit" id="btn_submit" class="btn btn-info ">Filtrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-right">
                    <button type="button" id="btn_submit" class="btn btn-primary btn-filtro">Filtro</button>

                    <a class="" href="{{ route('usuario-form', ['id'=> 'new']) }}">
                        <button type="button" class="btn btn-success">Novo</button>
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>Nome</td>
                                <td>E-mail</td>
                                <td style="width: 10%;">Ação</td>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($registros as $reg)
                            <tr>
                                <td>{{ $reg->name }}</td>
                                <td>{{ $reg->email }}</td>
                                <td>
                                    <div class="btn-group dropleft">
                                        <button type="button"
                                                class="btn btn-info dropdown-toggle dropdown-hover dropdown-icon"
                                                data-toggle="dropdown">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item"
                                                   href="{{ route('usuario-deletar', ['id' => $reg->id]) }}">Remover</a>
                                            </div>

                                        <a class="btn btn-info" href="{{ route('usuario-form', ['id'=> $reg->id]) }}">Editar</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td COLSPAN="20">Nenhum registro encontrado</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            @include('components.paginacao.component-show-text-per-page', [
                                'result' => $registros
                            ])
                        </div>
                        <div class="col-md-6 col-12 float-right-pagination">
                            {{ $registros->onEachSide(5)->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('javaScript')
    @parent
    <script>

        $(document).ready(function () {

            @if(request()->get('cad','')=='ok')
            toastr.success('Usuário criado/Atualizado com sucesso!')
            @endif

            $('#tb-registros').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });

        $('.btn-reset-form').click(function () {
            window.location = '{{ route('usuario-listagem') }}'
        });
        function boscaPagina(){
            $('#formFilter').submit();
        }

        $('.btn-filtro').click(function () {
            $('.box-filtro').toggle('slow');
        });

    </script>
@endsection

@section('custom_css')
    @parent

@endsection
