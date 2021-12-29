@extends('admin.base')

@section('partial')
    <div class="row">
        <div class="col-12">
            <form action="" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <div class="col-12 text-right sticky-top">
                    <div class="callout callout-info">
                        <div class="row">
                            <div class="col-12 col-lg-12">
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
                                    <h3 class="card-title">Perfil</h3>
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
                                        <div class="col-12 mt-3 text-center">
                                            <input id="foto_atual" name="foto_atual" type="hidden" value="{{ $registro->foto??'' }}">
                                            <div class="kv-avatar">
                                                <div class="file-loading">
                                                    <input id="foto" name="foto" type="file">
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            @include('components.input-forms.input-text', ['id' => 'nome', 'label' => 'Nome', 'name' => 'nome', 'placeholder' => 'Nome', 'value' => $registro->name??''])
                                        </div>
                                        <div class="col-6">
                                            @include('components.input-forms.input-email', ['id' => 'email', 'label' => 'Email', 'name' => 'email', 'placeholder' => '', 'value' => $registro->email??''])
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-4 mt-3">
                                        @include('components.input-forms.input-password', ['id' => 'senhaAtual', 'label' => 'Senha Atual', 'name' => 'password_atual', 'placeholder' => 'Senha Atual', 'value' => $registro->senhaAtual??''])
                                        </div>
                                        <div class="col-4 mt-3">
                                        @include('components.input-forms.input-password', ['id' => 'novaSenha', 'required' => '', 'label' => 'Nova senha', 'name' => 'password_new', 'placeholder' => 'Nova senha', 'value' => $registro->novaSenha??''])
                                        </div>

                                        <div class="col-4 mt-3">
                                            @include('components.input-forms.input-password', ['id' => 'confirmarSenha', 'required' => '', 'label' => 'Confirmar senha', 'name' => 'password_new2', 'placeholder' => 'Confirmar senha', 'value' => $registro->confirmarSenha??''])
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
        $("#foto").fileinput({
            overwriteInitial: true,
            maxFileSize: 5000,
            showClose: false,
            showCaption: false,
            showBrowse: false,
            browseOnZoneClick: true,
            removeLabel: '',
            removeIcon: '<i class="fas fa-undo-alt"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-2',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src="{{ isset($registro->foto)?'/upload/users/'.$registro->foto:'/assets/default/perfil.jpg' }}" width="140px" alt="Your Avatar"><h6 class="text-muted">Alterar</h6>',
            layoutTemplates: {main2: '{preview}  {remove} {browse}'},
            allowedFileExtensions: ["jpg", "png", "gif"]
        });

        $(document).ready(function(){
            $('#avaliacao').rating();
        });
    </script>
@endsection

@section('style')
    @parent
    <!-- some CSS styling changes and overrides -->
    <style>
        .glyphicon-star:before{content:"\f005";font-family: "Font Awesome 5 Free";}
        .glyphicon-star-empty:before{content:"\f005";font-family: "Font Awesome 5 Free";}

        .kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
            margin: 0;
            padding: 0;
            border: none;
            box-shadow: none;
            text-align: center;
        }
        .kv-avatar {
            display: inline-block;
        }
        .kv-avatar .file-input {
            display: table-cell;
            width: 213px;
        }
        .kv-reqd {
            color: red;
            font-family: monospace;
            font-weight: normal;
        }
    </style>
@endsection
