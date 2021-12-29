@extends('admin.base')

@section('partial')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('perfil-form-post', ['id' => $registro->id??'new']) }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <div class="col-12 text-right sticky-top">
                    <div class="callout callout-info">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                    <a href="{{ route('perfil-listagem') }}" style="text-decoration: none">
                                        <button type="button" id="btn_submit" class="btn btn-warning">Voltar</button>
                                    </a>
                                    @if ($id != 'new')
                                        <button type="submit" id="btn_submit" class="btn btn-success">Editar</button>
                                    @else
                                        <button type="submit" id="btn_submit" class="btn btn-success">Gravar</button>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Perfil de acesso</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                                class="fas fa-expand"></i></button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">


                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="col-12 mb-3">
                                                    @include('components.input-forms.input-text', ['id' => 'nome', 'label' => 'Nome', 'name' => 'nome', 'placeholder' => 'Nome', 'value' => $registro->nome??''])
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <strong class="d-block mb-1">Áreas de acesso</strong>
                                            <div class="form-group">
                                                @include('components.input-forms.input-checkbox', ['id' => 'administrativo', 'label' => 'Administrativo', 'name' => 'administrativo', 'placeholder' => '', 'value' => '1', 'checked'=> (($registro->administrativo??'')=='1')])
                                                @include('components.input-forms.input-checkbox', ['id' => 'instalacoes', 'label' => 'Instalações', 'name' => 'instalacoes', 'placeholder' => '', 'value' => '1', 'checked'=> (($registro->instalacoes??'')=='1')])
                                                @include('components.input-forms.input-checkbox', ['id' => 'leads', 'label' => 'Leads', 'name' => 'leads', 'placeholder' => '', 'value' => '1', 'checked'=> (($registro->financeiro??'')=='1')])
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('javaScript')
    @parent
    <script>
        $(function () {
            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });
        });
    </script>
@endsection

@section('custom_css')
    @parent
@endsection
