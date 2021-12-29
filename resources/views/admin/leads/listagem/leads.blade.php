@extends('admin.base')
@section('partial')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listagem Leads</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="lista_obitos" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th> Nome </th>
                            <th> Email </th>
                            <th> Plano </th>
                            <th> Status </th>
                            <th> Ação </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($leads as $lead)
                            <tr>
                                <td>{{$lead->nome}}</td>
                                <td>{{$lead->email}}</td>
                                <td> {{$lead->plano}} </td>
                                <td>
                                    @if ($lead->status_id==2)
                                        <p class="text-danger">{{ $lead->status }}</p>
                                    @else
                                        <p class="text-success">{{ $lead->status }}</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('leads-form', ['id'=>$lead->id]) }}">
                                        <button class="btn btn-sm btn-outline-primary">Editar</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
@section('javaScript')
    <script>
        $(function () {
            $("#lista_obitos").DataTable({
                "responsive": true, "lengthChange": true, "autoWidth": false,
                "bProcessing": true,
                "deferRender": true,
                "dom": '<"top"Bf>rt<"bottom"pli><"clear">',

                buttons: [
                    {
                        text: 'Cadastrar',
                        className:'btn btn-success',
                        action: function ( e, dt, node, config ) {
                            location.href='{{ route('leads-form', ['id', 'new']) }}'
                        },

                    }
                ],
                "oLanguage":{
                    "sProcessing":"Processando...",
                    "sEmptyTable":"Não há dados para serem mostrados",
                    "sLengthMenu" : "_MENU_",
                    "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sUrl":"",
                    "sSearch": "Pesquisar:",
                    "oPaginate":{
                        "sFirst": "Primeira",
                        "sPrevious" : "Anterior",
                        "sNext" : "Próxima",
                        "sLast" : "Última",
                    },
                    "pageLength": 10,
                    "sScrollX": "100%",
                    "sScrollXInner": "100%",
                    "aaSorting": [[0, "asc"]]
                },
                "language": {
                    "searchPlaceholder": "Pesquisar",
                    "search": "",
                }
            });
        });
    </script>
@endsection

