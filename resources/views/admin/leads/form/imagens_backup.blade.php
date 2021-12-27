@extends('base')

@section('partial')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="col-12 text-right sticky-top" style="z-index: 500 !important;">
                <div class="callout callout-info">
                    <div class="row">
                        <div class="col-12 text-right align-self-center">
                            <a href="{{ route('instalacoes-form', ['id' => $id]) }}" style="text-decoration: none">
                                <button type="button" id="btn_submit" class="btn btn-success">Instalação</button>
                            </a>
                            <a href="{{ route('instalacoes-imagens-form', ['id' => $id]) }}" style="text-decoration: none">
                                <button type="button" id="btn_submit" class="btn btn-info">Imagens</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Imagens Antes</h3>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    @foreach($imagens_antes??[] as $imagens_ant)
                                        <div class="col-md-12 col-lg-6 col-xl-4">
                                            <div class="card mb-2 bg-gradient-dark h-100">
                                                <img class="card-img-top mt-1 mb-5" src="{{ asset(str_replace( "\\", '/', strstr($imagens_ant,"fotosbackup")))  }}" style="margin-left: auto;margin-right: auto;width: 155px;" alt="Dist Photo 1">
                                                <button type="button" class="btn btn-sm btn-success" style="position: absolute;bottom: 3px;width: 100%;" onclick="restaurarImagem('Antes', '{{ str_replace( "\\", '/', strstr($imagens_ant,"fotosbackup")) }}')">Restaurar</button>
                                            </div>
                                            {{--                                            <div class="card-img-overlay d-flex flex-column justify-content-end align-items-end">--}}

                                            {{--                                            </div>--}}
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Imagens Depois</h3>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    @foreach($imagens_depois??[] as $imagens_dep)
                                        <div class="col-md-12 col-lg-6 col-xl-4">
                                            <div class="card mb-2 bg-gradient-dark h-100">
                                                    <img class="card-img-top mt-1 mb-5" src="{{ asset(str_replace( "\\", '/', strstr($imagens_dep,"fotosbackup")))  }}" style="margin-left: auto;margin-right: auto;width: 155px;" alt="Dist Photo 1">
                                                    <button type="button" class="btn btn-sm btn-success" style="position: absolute;bottom: 3px;width: 100%;" onclick="restaurarImagem('Depois', '{{ str_replace( "\\", '/', strstr($imagens_dep,"fotosbackup")) }}')">Restaurar</button>
                                            </div>
                                            {{--                                            <div class="card-img-overlay d-flex flex-column justify-content-end align-items-end">--}}

                                            {{--                                            </div>--}}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('javaScript')
    <script>
        @if(request()->get('cad','')=='ok')
        toastr.success('Produto Inserido!')
        @elseif(request()->get('cad')=='error')
        toastr.error('Erro ao deletar!')
        @endif
        function restaurarImagem(tempo, img){
            swalWithBootstrapButtons.fire({
                title: 'Tem certeza que deseja restaurar esse Item?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim',
                cancelButtonText: 'Cancelar',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: '{{ route('instalacoes-restaurar-backup', ['id' => $id]) }}',
                        type: 'POST',
                        data: {tempo:tempo, img:img},
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function(data){
                            if (data.status == 'sucesso'){
                                swalWithBootstrapButtons.fire(
                                    data.mensagem,
                                   '',
                                    'success'
                                );
                            }else{
                                swalWithBootstrapButtons.fire(
                                    data.mensagem,
                                    '',
                                    'error'
                                );
                            }

                        }
                    });

                } else if (
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelado',
                        '',
                        'error'
                    )
                }
            })
        }
    </script>
@endsection
