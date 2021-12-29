@extends('admin.base')

@section('partial')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-right">
                <a class="" href="{{ route('perfil-form', ['id' => 'new']) }}">
                    @include('components.input-forms.btn', [
                        'type' => 'button',
                        'texto' => 'Novo',
                        'class' => 'btn-success btn-filtro'
                    ])
                </a>
            </div>
            <div class="card-body">
                <div class="m-2">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-bordered table-striped"  style="border: 1px solid #dee2e6;">
                            <thead>
                                <tr>
                                    <td>Nome</td>
                                    <td>Administrativo</td>
                                    <td>Leads</td>

                                    <td style="width: 10%;">Ação</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($registros as $reg)
                                    <tr>
                                        <td>{{ $reg->nome }}</td>
                                        <td class="text-center">
                                            <i class="fas {{ !!$reg->administrativo ? 'fa-check text-success' : 'fa-ban text-danger' }} "></i>
                                        </td>
                                        <td class="text-center">
                                            <i class="fas {{ !!$reg->leads ? 'fa-check text-success' : 'fa-ban text-danger' }} "></i>
                                        </td>
                                        <td>
                                            <div class="btn-group dropleft">
                                                <button type="button"
                                                        class="btn btn-info dropdown-toggle dropdown-hover dropdown-icon"
                                                        data-toggle="dropdown">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                    <div class="dropdown-menu" role="menu">
                                                        <a class="dropdown-item"
                                                           href="{{ route('perfil-deletar', ['id' => $reg->id]) }}">Remover</a>
                                                    </div>

                                                <a class="btn btn-info" href="{{ route('perfil-form', ['id'=> $reg->id]) }}">Editar</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td COLSPAN="20">Nenhum registro encontrado</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Nome</td>
                                    <td>Administrativo</td>
                                    <td>Leads</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6 col-12">
                        @include('components.paginacao.component-show-text-per-page', [
                            'result' => $registros
                        ])
                    </div>
                    <div class="col-md-6 col-12 float-right-pagination">
                        {{ $registros->onEachSide(5)->links() }}
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
            toastr.success('Perfil deletado!')
            @elseif(request()->get('cad')=='error')
            toastr.error('{{request()->get('mensagem')}}')
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
    </script>
@endsection

@section('custom_css')
    @parent
@endsection
