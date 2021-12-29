@extends('admin.base')

@section('partial')
    <form action="{{ route('usuario-form-post', ['id' => $registro->id??'new']) }}" method="POST"
          enctype="multipart/form-data">
        @csrf
        <div class="col-12 text-right sticky-top">
            <div class="callout callout-info">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <a href="{{ route('usuario-listagem') }}">
                            @include('components.input-forms.btn', [
                                                       'type' => 'button',
                                                       'texto' => 'Voltar',
                                                       'class' => 'btn-warning'
                                                   ])
                        </a>
                        @include('components.input-forms.btn', [
                                    'type' => 'submit',
                                    'texto' => 'Gravar',
                                    'class' => 'btn-success'
                                ])
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Dados do usuário</h3>
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
                                <div class="col-6 mb-3">
                                    @include('components.input-forms.input-text', ['id' => 'name', 'label' => 'Nome', 'name' => 'name', 'placeholder' => 'Nome', 'value' => $registro->name??''])
                                </div>
                                <div class="col-6 mb-3">
                                    @include('components.input-forms.select', ['id' => 'perfil_id', 'label' => 'Perfil de acesso', 'name' => 'perfil_id', 'placeholder' => '', 'value' => $registro->perfil_id??'','options'=> $options['perfil']])
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    @include('components.input-forms.input-email', ['id' => 'email', 'label' => 'Email', 'name' => 'email', 'placeholder' => '', 'value' => $registro->email??''])
                                </div>
                                <div class="col-3 mb-3">
                                    @include('components.input-forms.input-password', ['id' => 'password', 'required' => '', 'label' => 'Senha', 'name' => 'password', 'placeholder' => 'Senha', 'value' => ''])
                                </div>
                                <div class="col-3 mb-3">
                                    @include('components.input-forms.input-password', ['id' => 'rpassword', 'required' => '', 'label' => 'Repetir senha', 'name' => 'rpassword', 'placeholder' => 'Repeteir senha', 'value' => ''])
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
