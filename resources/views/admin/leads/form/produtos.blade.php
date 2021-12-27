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
    <form
        action="{{ route('instalacoes-produtos-form-post', ['id' => $id]) }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="col-12 ">
           <div class="card card-primary">
               <div class="card-body">
                   <div class="row">

                       <div class="col-4">
                           <label for="tipo_produto" >{{ __('Tipo Produtos') }}</label>
                           <select class="form-control selectpicker" data-live-search="true"
                                   name="tipo_produto" id="tipo_produto" onchange="buscaProdutos()">
                               <option value="">Selecione...</option>
                               @foreach($tipo_produtos??[] as $tipo_produto)
                                   <option value="{{ $tipo_produto->idTipoProduto }}">{{ $tipo_produto->nomeTipoProduto }}</option>
                               @endforeach
                           </select>
                       </div>
                       <div class="col-4">
                           <label for="produto" >{{ __('Produtos') }}</label>
                           <select class="form-control selectpicker" data-live-search="true"
                                   name="produto" id="produto" title="Selecione...">
                           </select>
                       </div>

                       <div class="col-4 text-right align-self-center mt-4">
                           @if (isset($id) && $id != 'new')
                               <a href="{{ route('instalacoes-form', ['id' => $id]) }}" style="text-decoration: none">
                                   <button type="button" id="btn_submit" class="btn btn-warning">Instalação</button>
                               </a>
                           @else
                               <a href="{{ route('instalacoes-listagem') }}" style="text-decoration: none">
                                   <button type="button" id="btn_submit" class="btn btn-warning">Voltar</button>
                               </a>
                           @endif
                           <button type="submit" id="btn_submit" class="btn btn-success">Gravar</button>
                       </div>

                   </div>

               </div>
           </div>
        </div>

        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Produtos</h3>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Nome</th>

                                    <th>Excluir</th>
                                </tr>
                                </thead>
                                <tbody class="listprod">
                                @forelse($registros as $registro)
                                    <tr id="id_prod_{{$registro->idProduto}}">
                                        <td>{{ $registro->nomeTipoProduto }}</td>
                                        <td>{{ $registro->nomeModeloProduto }}</td>
                                        <td><button type="button" class="btn btn-sm btn-danger" onclick="removerProduto(this, '{{$registro->idProduto}}')">Excluir</button></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="produtovazio">Nenhum produto encontrado</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
    function removerProduto(obj, prd) {
        var trPai = $(obj).parent().parent();
        swalWithBootstrapButtons.fire({
            title: 'Tem certeza que deseja deletar esse item?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sim',
            cancelButtonText: 'Cancelar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '{{ route('instalacoes_deletar_produtos', ['id' => $id]) }}',
                    type: 'POST',
                    data: {produto:prd},
                    dataType: 'JSON',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(data){
                        if (data.status == 'sucesso'){
                            toastr.success(data.mensagem);
                            trPai.remove();
                        }else{
                            toastr.error(data.mensagem);
                            trPai.remove();
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
    function buscaProdutos(){
        var tipo_produto = $('#tipo_produto').val();
        var html = '';
        $('#produto').html(html);
        $('#produto').selectpicker('refresh');
        $.ajax({
            url: '{{ route('busca_produtos') }}',
            type: 'GET',
            data: {tipo:tipo_produto},
            dataType: 'JSON',
            success: function(data){
                $.each(data.dados ,function(key,value) {
                        html+=`<option value="${value.idProduto}">${value.nomeModeloProduto}</option>`;
                });
                $('#produto').append(html);
                $('#produto').selectpicker('refresh');

            }
        });
    }
</script>
@endsection
