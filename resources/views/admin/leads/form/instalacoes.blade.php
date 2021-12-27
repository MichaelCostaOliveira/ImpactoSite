@extends('base')

@section('partial')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('instalacoes-form-post', ['id' => $id]) }}"
                  method="POST" id="formforn">
                @csrf
                <div class="col-12 text-right sticky-top" style="z-index: 500 !important;">
                    <div class="callout callout-info">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <a href="{{ route('instalacoes-listagem') }}" style="text-decoration: none">
                                    <button type="button" id="btn_submit" class="btn btn-warning btn-sm">Voltar</button>
                                </a>
                                @if ($id != 'new')
                                <button type="submit" id="btn_submit" class="btn btn-success btn-sm">Editar</button>
                                @else
                                    <button type="submit" id="btn_submit" class="btn btn-success btn-sm">Gravar</button>
                                    <button type="submit" id="btn_submit" class="btn btn-success irprod btn-sm">Gravar e ir para produtos</button>
                                @endif
                                @if ($id != 'new')
                                    <a href="{{ route('instalacoes-produtos-form', ['id' => $id]) }}" style="text-decoration: none">
                                        <button type="button" id="btn_submit" class="btn btn-primary btn-sm">Produtos</button>
                                    </a>
                                    <a href="{{ route('instalacoes-imagens-form', ['id' => $id]) }}" style="text-decoration: none">
                                        <button type="button" id="btn_submit" class="btn btn-info btn-sm">Imagens</button>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Dados Gerais</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="ordem">Ordem de Compra*</label>
                                            <input type="text" id="ordem" name="ordem" placeholder="Ordem de Compra" required value="{{ $instalacao->ordemCompra??'' }}" class="form-control ">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="crq">CRQ*</label>
                                            <input type="text" id="crq" name="crq" placeholder="CRQ" required value="{{ $instalacao->CRQ??'' }}" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="tipo_instalacao" >{{ __('Tipo Instalação*') }}</label>
                                            <select class="form-control selectpicker" data-live-search="true"
                                                    name="tipo_instalacao" id="tipo_instalacao" title="Selecione..." required>
                                                @foreach($tipo_instalacoes??[] as $tipo_instalacao)
                                                    @if($id != 'new')
                                                        @if($instalacao->tipoInstalacao_idtipoInstalacao == $tipo_instalacao->idtipoInstalacao)
                                                            <option value="{{ $tipo_instalacao->idtipoInstalacao }}" selected>{{ $tipo_instalacao->nome }}</option>
                                                        @else
                                                            <option value="{{ $tipo_instalacao->idtipoInstalacao }}">{{ $tipo_instalacao->nome }}</option>
                                                        @endif
                                                    @else
                                                        <option value="{{ $tipo_instalacao->idtipoInstalacao }}">{{ $tipo_instalacao->nome }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-6 mb-3">
                                            <label for="estado_instalacao" >{{ __('Estado Instalação*') }}</label>
                                            <select class="form-control selectpicker" data-live-search="true"
                                                    name="estado_instalacao" id="estado_instalacao" title="Selecione..." required>
                                                @foreach($estado_instalacao??[] as $estado)
                                                    @if($id != 'new')
                                                        @if($instalacao->estadoInstalacao_idestadoInstalacao == $estado->idestadoInstalacao)
                                                            <option value="{{ $estado->idestadoInstalacao }}" selected>{{ $estado->nome }}</option>
                                                        @else
                                                            <option value="{{ $estado->idestadoInstalacao }}">{{ $estado->nome }}</option>
                                                        @endif
                                                    @else
                                                        <option value="{{ $estado->idestadoInstalacao }}">{{ $estado->nome }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                            <div class="col-6 mb-3">
                                                <label  for="data_desejada">{{ __('Data e Hora desejada') }}</label>
                                                <div class="input-group date" id="data_desejada" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input"
                                                           data-target="#data_desejada" data-mask="99/99/9999 99:99"
                                                           value="{{ empty($instalacao->dataDesejada)?'':date( 'd/m/Y H:i' , strtotime($instalacao->dataDesejada)) }}"
                                                           name="data_desejada" id="data_desejada_child">
                                                    <div class="input-group-append" data-target="#data_desejada" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-6 mb-3">
                                            <label for="nome_contato">Nome do Contato</label>
                                            <input type="text" id="nome_contato" name="nome_contato" placeholder="Nome do Contato"
                                                   value="{{ $instalacao->nomeContatoOperadora??'' }}" class="form-control ">
                                        </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="local" >{{ __('Local*') }}</label>
                                            <select class="form-control selectpicker" data-live-search="true"
                                                    name="local" id="local" title="Selecione..."required>
                                                @foreach($locais??[] as $local)
                                                    @if($id != 'new')
                                                        @if($instalacao->local_idlocal == $local->idlocal)
                                                            <option value="{{ $local->idlocal }}" selected>{{ $local->site }} ({{ $local->idlocal }})</option>
                                                        @else
                                                            <option value="{{ $local->idlocal }}">{{ $local->site }} ({{ $local->idlocal }})</option>
                                                        @endif
                                                    @else
                                                        <option value="{{ $local->idlocal }}">{{ $local->site }} ({{ $local->idlocal }})</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="telefone_contato">Telefone Contato</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                </div>
                                                <input type="text" class="form-control js-mask-phone" name="telefone_contato"
                                                       id="telefone_contato" placeholder="(__) _ ____-____"
                                                       value="{{ $instalacao->foneContatoOperadora??'' }}" data-mask="" im-insert="true">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Contato operacional</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="operadora" >{{ __('Operadora*') }}</label>
                                            <select class="form-control selectpicker" data-live-search="true"
                                                    name="operadora" id="operadora" title="Selecione..." required>
                                                @foreach($operadoras??[] as $operadora)
                                                    @if($id != 'new')
                                                        @if($instalacao->operadora_idoperadora == $operadora->idoperadora)
                                                            <option value="{{ $operadora->idoperadora }}" selected>{{ $operadora->nome }}</option>
                                                        @else
                                                            <option value="{{ $operadora->idoperadora }}">{{ $operadora->nome }}</option>
                                                        @endif
                                                    @else
                                                        <option value="{{ $operadora->idoperadora }}">{{ $operadora->nome }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-6 mb-3">
                                            <label for="empresa">Empresa*</label>
                                            <select class="form-control selectpicker" data-live-search="true"
                                                    name="empresa" id="empresa" title="Selecione..." required>
                                                @foreach($fornecedores??[] as $fornecedor)
                                                    @if($id != 'new')
                                                        @if($instalacao->idfornecedor == $fornecedor->idfornecedor)
                                                            <option value="{{ $fornecedor->idfornecedor }}" selected>{{ $fornecedor->nome }}</option>
                                                        @else
                                                            <option value="{{ $fornecedor->idfornecedor }}">{{ $fornecedor->nome }}</option>
                                                        @endif
                                                    @else
                                                        <option value="{{ $fornecedor->idfornecedor }}">{{ $fornecedor->nome }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="instalador">Instalador*</label>
                                            <select class="form-control selectpicker" data-live-search="true"
                                                    name="instalador" id="instalador" title="Selecione..." required>
                                                @foreach($instaladores??[] as $instalador)
                                                    @if($id != 'new')
                                                        @if($instalacao->usuario_idusuario == $instalador->id)
                                                            <option value="{{ $instalador->id }}" selected>{{ $instalador->name }}</option>
                                                        @else
                                                            <option value="{{ $instalador->id }}">{{ $instalador->name }}</option>
                                                        @endif
                                                    @else
                                                        <option value="{{ $instalador->id }}">{{ $instalador->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-6 mb-3">
                                            <label for="auxiliar">Nome Auxiliar*</label>
                                            <input type="text" id="auxiliar" name="auxiliar" placeholder="Nome do Auxiliar"
                                                   value="{{ $instalacao->nomeAuxiliar??'' }}" required class="form-control ">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="auto">Auto</label>
                                            <input type="text" id="auto" name="auto" placeholder="Auto"
                                                   value="{{ $instalacao->auto??'' }}" class="form-control ">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="tipo_contato_operadora">Tipo do Contato na Operadora</label>
                                            <select class="form-control selectpicker" data-live-search="true"
                                                    name="tipo_contato_operadora" id="tipo_contato_operadora" >
                                                <option value="0"{{ isset($instalacao->tipoContatoOperadora)?$instalacao->tipoContatoOperadora==0?'selected':'':'' }}>T&eacute;cnico</option>
                                                <option value="1"{{ isset($instalacao->tipoContatoOperadora)?$instalacao->tipoContatoOperadora==1?'selected':'':'' }}>Coordenador</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                    <div class="row" id="lista_de_produtos_anteriores" style="display: none">

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Materiais</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="parafuso">Parafuso Para Instalação</label>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="parafuso" id="parafuso_sim" value="1"
                                                                {{ isset($instalacao)?$instalacao->parafusoInstalacao==1?'checked':'':'' }}>
                                                            <label for="parafuso_sim" class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="parafuso" id="parafuso_nao" value="0"
                                                                   {{ isset($instalacao)?$instalacao->parafusoInstalacao==0?'checked':'':'checked' }}>
                                                            <label for="parafuso_nao" class="custom-control-label">Não</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8 mb-3">
                                            <label for="quantidade_parafuso">Quantidade de Parafuso</label>
                                            <input class="form-control" type="number" min="0" id="quantidade_parafuso" name="quantidade_parafuso"
                                                   placeholder="Quantidade de Parafuso" value="{{ $instalacao->qtdeParafusoInstalacao??0 }}" >
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="caixa_protecao">Caixa Proteção esteiramento</label>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="caixa_protecao"
                                                                   id="caixa_protecao_sim" value="1"
                                                                {{ isset($instalacao)?$instalacao->caixaProtecaoEsteiramento==1?'checked':'':'' }}>
                                                            <label for="caixa_protecao_sim" class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="caixa_protecao"
                                                                   id="caixa_protecao_nao" value="0"
                                                                {{ isset($instalacao)?$instalacao->caixaProtecaoEsteiramento==0?'checked':'':'checked' }}>
                                                            <label for="caixa_protecao_nao" class="custom-control-label">Não</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8 mb-3">
                                            <label for="caixa_protecao_metros">Metros</label>
                                            <input class="form-control" type="number" min="0" id="caixa_protecao_metros"
                                                   name="caixa_protecao_metros" placeholder="Quantidade de Parafuso"
                                                   value="{{ $instalacao->caixaProtecaoEsteiramentoMT??0 }}" >
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="cadeado">Cadeado Para Instalação</label>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="cadeado" id="cadeado_sim" value="1"
                                                                {{ isset($instalacao)?$instalacao->cadeadoInstalacao==1?'checked':'':'' }}>
                                                            <label for="cadeado_sim" class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="cadeado" id="cadeado_nao" value="0"
                                                                {{ isset($instalacao)?$instalacao->cadeadoInstalacao==0?'checked':'':'checked' }}>
                                                            <label for="cadeado_nao" class="custom-control-label">Não</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 mb-3">
                                            <label for="quantidade_cadeado">Quantidade de Cadeado</label>
                                            <input class="form-control" type="number" min="0" id="quantidade_cadeado"
                                                   name="quantidade_cadeado" placeholder="Quantidade de Cadeado" value="{{ $instalacao->qtdeCadeadoInstalacao??0 }}" >
                                        </div>
                                        <div class="col-4 mb-3">
                                            <label for="num_cadeado">Numero de Cadeado</label>
                                            <input class="form-control" type="number" min="0" id="num_cadeado" name="num_cadeado" placeholder="Numero de Cadeado"
                                                   value="{{ $instalacao->numCadeadoInstalacao??0 }}" >
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="instalacao_banco_bateria">Instalação de banco de baterias</label>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="instalacao_banco_bateria" id="instalacao_banco_bateria_sim" value="1"
                                                                {{ isset($instalacao)?$instalacao->instalacaoBancoBaterias==1?'checked':'':'' }}>
                                                            <label for="instalacao_banco_bateria_sim" class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="instalacao_banco_bateria"
                                                                   id="instalacao_banco_bateria_nao" value="0" {{ isset($instalacao)?$instalacao->instalacaoBancoBaterias==0?'checked':'':'checked' }}>
                                                            <label for="instalacao_banco_bateria_nao" class="custom-control-label">Não</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label for="bateria_existe">Bateria existente no site?</label>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="bateria_existe" id="bateria_existe_sim" value="1"
                                                                {{ isset($instalacao)?$instalacao->bateriaExistente==1?'checked':'':'' }}>
                                                            <label for="bateria_existe_sim" class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="bateria_existe" id="bateria_existe_nao" value="0"
                                                                {{ isset($instalacao)?$instalacao->bateriaExistente==0?'checked':'':'checked' }}>
                                                            <label for="bateria_existe_nao" class="custom-control-label">Não</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="quantidade_baterias">Quantidade</label>
                                            <input class="form-control" type="number" min="0" id="quantidade_baterias"
                                                   name="quantidade_baterias" placeholder="Quantidade" value="{{ $instalacao->qtdeBateriaExistente??0 }}" >
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="gradil_protecao_ap">Gradil Proteção APM30H</label>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio"  name="gradil_protecao_ap" id="gradil_protecao_ap_sim" value="1"
                                                                {{ isset($instalacao)?$instalacao->gradilProtecaoAPM30H==1?'checked':'':'' }}>
                                                            <label for="gradil_protecao_ap_sim" class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="gradil_protecao_ap" id="gradil_protecao_ap_nao" value="0"
                                                                {{ isset($instalacao)?$instalacao->gradilProtecaoAPM30H==0?'checked':'':'checked' }}>
                                                            <label for="gradil_protecao_ap_nao" class="custom-control-label">Não</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="cofre_baterias">Cofre Baterias APM30H</label>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio"  name="cofre_baterias" id="cofre_baterias_sim" value="1"
                                                                {{ isset($instalacao)?$instalacao->cofreBateriasAPM30H==1?'checked':'':'' }}>
                                                            <label for="cofre_baterias_sim" class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="cofre_baterias" id="cofre_baterias_nao" value="0"
                                                                {{ isset($instalacao)?$instalacao->cofreBateriasAPM30H==0?'checked':'':'checked' }}>
                                                            <label for="cofre_baterias_nao" class="custom-control-label">Não</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="gradil_qm">Gradil Proteção QM</label>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio"  name="gradil_qm" id="gradil_qm_sim" value="1"
                                                                {{ isset($instalacao)?$instalacao->gradilProtecaoQM==1?'checked':'':'' }}>
                                                            <label for="gradil_qm_sim" class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="gradil_qm" id="gradil_qm_nao" value="0"
                                                                {{ isset($instalacao)?$instalacao->gradilProtecaoQM==0?'checked':'':'checked' }}>
                                                            <label for="gradil_qm_nao" class="custom-control-label">Não</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="gradil_protecao">Gradil Proteção</label>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio"  name="gradil_protecao" id="gradil_protecao_sim" value="1"
                                                                {{ isset($instalacao)?$instalacao->gradilProtecao==1?'checked':'':'' }}>
                                                            <label for="gradil_protecao_sim" class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="gradil_protecao" id="gradil_protecao_nao" value="0"
                                                                {{ isset($instalacao)?$instalacao->gradilProtecao==0?'checked':'':'checked' }}>
                                                            <label for="gradil_protecao_nao" class="custom-control-label">Não</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="skid_cinco_vagas">SKID 5 Vagas</label>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio"  name="skid_cinco_vagas" id="skid_cinco_vagas_sim" value="1"
                                                                {{ isset($instalacao)?$instalacao->gradilProtecaoSkid5Vagas==1?'checked':'':'' }}>
                                                            <label for="skid_cinco_vagas_sim" class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="skid_cinco_vagas" id="skid_cinco_vagas_nao" value="0"
                                                                {{ isset($instalacao)?$instalacao->gradilProtecaoSkid5Vagas==0?'checked':'':'checked' }}>
                                                            <label for="skid_cinco_vagas_nao" class="custom-control-label">Não</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="skid_tres_vagas">SKID 3 Vagas</label>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio"  name="skid_tres_vagas" id="skid_tres_vagas_sim" value="1"
                                                                {{ isset($instalacao)?$instalacao->gradilProtecaoSkid3Vagas==1?'checked':'':'' }}>
                                                            <label for="skid_tres_vagas_sim" class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="skid_tres_vagas" id="skid_tres_vagas_nao" value="0"
                                                                {{ isset($instalacao)?$instalacao->gradilProtecaoSkid3Vagas==0?'checked':'':'checked' }}>
                                                            <label for="skid_tres_vagas_nao" class="custom-control-label">Não</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="instalacao_bateria">Instalação de Bateria(s)</label>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio"  name="instalacao_bateria" id="instalacao_bateria_sim" value="1"
                                                                {{ isset($instalacao)?$instalacao->instalacaoBateria==1?'checked':'':'' }}>
                                                            <label for="instalacao_bateria_sim" class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="instalacao_bateria" id="instalacao_bateria_nao" value="0"
                                                                {{ isset($instalacao)?$instalacao->instalacaoBateria==0?'checked':'':'checked' }}>
                                                            <label for="instalacao_bateria_nao" class="custom-control-label">Não</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="cofre_eltek">Cofre Eltek</label>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio"  name="cofre_eltek" id="cofre_eltek_sim" value="1"
                                                                {{ isset($instalacao)?$instalacao->cofreEltek==1?'checked':'':'' }}>
                                                            <label for="cofre_eltek_sim" class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="cofre_eltek" id="cofre_eltek_nao" value="0"
                                                                {{ isset($instalacao)?$instalacao->cofreEltek==0?'checked':'':'checked' }}>
                                                            <label for="cofre_eltek_nao" class="custom-control-label">Não</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="cofre_g">Cofre 6102G</label>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio"  name="cofre_g" id="cofre_g_sim" value="1"
                                                                {{ isset($instalacao)?$instalacao->cofre6102G==1?'checked':'':'' }}>
                                                            <label for="cofre_g_sim" class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="cofre_g" id="cofre_g_nao" value="0"
                                                                {{ isset($instalacao)?$instalacao->cofre6102G==0?'checked':'':'checked' }}>
                                                            <label for="cofre_g_nao" class="custom-control-label">Não</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="cofre_blindado">Cofre Blindado</label>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio"  name="cofre_blindado" id="cofre_blindado_sim" value="1"
                                                                {{ isset($instalacao)?$instalacao->cofreBlindado==1?'checked':'':'' }}>
                                                            <label for="cofre_blindado_sim" class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="cofre_blindado" id="cofre_blindado_nao" value="0"
                                                                {{ isset($instalacao)?$instalacao->cofreBlindado==0?'checked':'':'checked' }}>
                                                            <label for="cofre_blindado_nao" class="custom-control-label">Não</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="com_banco"> Com Banco</label>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio"  name="com_banco" id="com_banco_sim" value="1"
                                                                {{ isset($instalacao)?$instalacao->cofreBlindadoBanco==1?'checked':'':'' }}>
                                                            <label for="com_banco_sim" class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mr-2">
                                                            <input class="custom-control-input" type="radio" name="com_banco" id="com_banco_nao" value="0"
                                                                {{ isset($instalacao)?$instalacao->cofreBlindadoBanco==0?'checked':'':'checked' }}>
                                                            <label for="com_banco_nao" class="custom-control-label">Não</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">OBSERVAÇÕES</h3>
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
                                            <label for="observacao">Observações</label>

                                            <textarea id="observacao"
                                            name="observacao"
                                                placeholder="Observações"
                                                class="form-control">{{ $instalacao->observacoes??'' }}</textarea>
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
        $(document).ready(function(){
            $('.irprod').click(function () {
                $('#formforn').attr('action', $('#formforn').attr('action') + '?irprod=true')
            });
            @if(!$id != 'new')
            $('#data_desejada').datetimepicker({
                locale: "pt-BR",
                icons: {
                    time: 'far fa-clock' },
                //startDate: '+0d'
            });
            @endif
            $('#data_desejada').datetimepicker({
                locale: "pt-BR",
                date: new Date(),
                icons: {
                    time: 'far fa-clock' },
                //startDate: '+0d'
            });

        });

        $('#local').change(function(){
            var local = $('#local').val();

            const url = '{{ route('lista-produtos-anteriores', '_local_id_') }}'.replace('_local_id_', local)

            $.ajax({
                method: 'GET',
                url: url,
                dataType: 'JSON',
                success: function (response) {
                    $('#lista_de_produtos_anteriores').html('');
                    $('#lista_de_produtos_anteriores').append(response.html);
                    $('#lista_de_produtos_anteriores').slideDown();
                },
                error: function (response) {
                    $('#lista_de_produtos_anteriores').slideUp();
                },

            })
        });

        function validaForm(){
            return true;
        }
    </script>
@endsection

@section('custom_css')
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
