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
                        <button type="button" id="btn_submit" class="btn btn-warning">Instalação</button>
                    </a>
                    <button type="submit" id="btn_submit" class="btn btn-success">Gravar</button>
                    <a href="{{ route('instalacoes-imagens-backup', ['id' => $id]) }}" style="text-decoration: none">
                        <button type="button" id="btn_submit" class="btn btn-primary">Backup</button>
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
                        <div class="col-12">
                            <label>Para <strong>adicionar</strong> uma nova iamgem basta arrastar a imagem ou clickar no botão procurar</label>
                            <div class="file-loading">
                                <input type="file"  id="input_imagens_antes" name="input_imagens_antes[]" multiple>
                            </div>
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
                        <div class="col-12">
                            <label>Para <strong>adicionar</strong> uma nova iamgem basta arrastar a imagem ou clickar no botão procurar</label>
                            <div class="file-loading">
                                <input id="input_imagens_depois" name="input_imagens_depois[]" type="file" multiple>
                            </div>
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
    function apagarProd() {

    }
    $(document).ready(function () {
        var krajeeGetCount = function(id) {
            var cnt = $('#' + id).fileinput('getFilesCount');
            return cnt === 0 ? 'You have no files remaining.' :
                'You have ' +  cnt + ' file' + (cnt > 1 ? 's' : '') + ' remaining.';
        };
        $("#input_imagens_antes").fileinput({
                language: 'pt-BR',
                ajaxSettings : {
                    'headers': { 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                },
                ajaxDeleteSettings : {
                    'headers': { 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                },
                uploadUrl: "{{route('enviar_imagens', ['id'=>$id, 'tipo'=> 1])}}",

                deleteUrl: "{{route('apagar_imagens', ['id'=>$id,'tipo'=> 1])}}",
                maxFilePreviewSize: 10240,
                upload_name: "Enviar imagens",
                showUpload: true,
                showCaption: true,
                uploadLabel:"Enviar Imagens",
                uploadMultiple: true,
                browseClass: "btn btn-primary btn-sm",
                uploadClass:"btn btn-success btn-sm",
                removeClass:"btn btn-danger btn-sm",
                showRemove:true,
                fileType: "any",
                overwriteInitial: false,
                initialPreviewAsData: true,
                initialPreview: [
                    @foreach($imagens_antes??[] as $imagens_ant)
                    "{{  asset($imagens_ant->caminhoFoto.$imagens_ant->nomeFoto) }}",
                    @endforeach
                ],
                initialPreviewConfig: [
                    @foreach($imagens_antes??[] as $imagens_an)
                    {caption: "{{ $imagens_an->nomeFoto }}", size: 329892, width: "120px", key: '{{ $imagens_an->idFoto }}'},
                    @endforeach

                ],

                layoutTemplates: {main2: '{preview}  {remove} {browse}'},
            }).on('filebeforedelete', function() {
            return new Promise(function(resolve, reject) {
                swalWithBootstrapButtons.fire({
                    title: 'Tem certeza que deseja deletar esse item?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sim',
                    cancelButtonText: 'Cancelar',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        resolve();
                    } else if (result.dismiss === Swal.DismissReason.cancel) {

                        swalWithBootstrapButtons.fire(
                            'Cancelado',
                            '',
                            'error'
                        )
                        return;
                    }
                })

            });
        }).on('filedeleted', function() {
            setTimeout(function() {
                swalWithBootstrapButtons.fire(
                    'Deletado Com Sucesso!',
                    '',
                    'success'
                );
            }, 900);
        }).on('filesorted', function(event, id, index, key) {
            // return new Promise(function(resolve, reject) {
            //     swalWithBootstrapButtons.fire({
            //         title: 'Tem certeza que deseja alterar a ordem?',
            //         icon: 'warning',
            //         showCancelButton: true,
            //         confirmButtonText: 'Sim',
            //         cancelButtonText: 'Cancelar',
            //         reverseButtons: true
            //     }).then((result) => {
            //         if (result.isConfirmed) {
            //             resolve();
            //         } else if (result.dismiss === Swal.DismissReason.cancel) {
            //
            //             swalWithBootstrapButtons.fire(
            //                 'Cancelado',
            //                 '',
            //                 'error'
            //             )
            //             return;
            //         }
            //     })
            //
            // });
            $.ajax({
                url: '{{ route('instalacoes-imagens-ordem', ['id' => $id]) }}',
                type: 'POST',
                data: {imagens:id.stack},
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

        });



        $("#input_imagens_depois").fileinput({
            language: 'pt-BR',
            ajaxSettings : {
                'headers': { 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            },
            ajaxDeleteSettings : {
                'headers': { 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            },
            uploadUrl: "{{route('enviar_imagens', ['id'=>$id, 'tipo'=> 2])}}",

            deleteUrl: "{{route('apagar_imagens', ['id'=>$id,'tipo'=> 2])}}",
            maxFilePreviewSize: 10240,
            upload_name: "Enviar imagens",
            showUpload: true,
            showCaption: true,
            uploadLabel:"Enviar Imagens",
            uploadMultiple: true,
            browseClass: "btn btn-primary btn-sm",
            uploadClass:"btn btn-success btn-sm",
            removeClass:"btn btn-danger btn-sm",
            showRemove:true,
            fileType: "any",
            overwriteInitial: false,
            initialPreviewAsData: true,
            initialPreview: [
                @foreach($imagens_depois??[] as $imagens_depo)
                    "{{  asset($imagens_depo->caminhoFoto.$imagens_depo->nomeFoto) }}",
                @endforeach
            ],
            initialPreviewConfig: [
                @foreach($imagens_depois??[] as $imagens_dep)
                    {caption: "{{ $imagens_dep->nomeFoto }}", size: 329892, width: "120px", key: '{{ $imagens_dep->idFoto }}'},
                @endforeach

            ],

            layoutTemplates: {main2: '{preview}  {remove} {browse}'},
        }).on('filebeforedelete', function() {
            return new Promise(function(resolve, reject) {
                swalWithBootstrapButtons.fire({
                    title: 'Tem certeza que deseja deletar esse item?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sim',
                    cancelButtonText: 'Cancelar',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        resolve();
                    } else if (result.dismiss === Swal.DismissReason.cancel) {

                        swalWithBootstrapButtons.fire(
                            'Cancelado',
                            '',
                            'error'
                        )
                        return;
                    }
                })

            });
        }).on('filedeleted', function() {
            setTimeout(function() {
                swalWithBootstrapButtons.fire(
                    'Deletado Com Sucesso!',
                    '',
                    'success'
                );
            }, 900);
        }).on('filesorted', function(event, id, index, key) {
            $.ajax({
                url: '{{ route('instalacoes-imagens-ordem', ['id' => $id]) }}',
                type: 'POST',
                data: {imagens:id.stack},
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

        });


    });

    // $(".apaga_imagem_seis").on("click", function() {
    //     console.log('se');
    //     $("#6").fileinput('delete');
    // });
</script>
@endsection
