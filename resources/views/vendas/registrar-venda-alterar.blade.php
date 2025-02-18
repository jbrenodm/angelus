@extends('layouts.master')

@section('title') Form Elements @endsection

@section('headerCss')
    <link href="{{ URL::asset('/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" class="card-title" style="text-align: center; background: #088CFF; color: white;">Editar uma Venda</h4>
                    <hr>
                    <!-- <p class="card-title-desc">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p>-->
                    <div class="container">
                        <div class="row align-items-center">
                            <table class="table table-bordered">
                                <thead class="table-success">
                                    <tr>
                                        <th class="text-center">ID VENDA</th>
                                        <th class="text-center">DATA DA VENDA</th>
                                        <th class="text-center">CPF DO CLIENTE</th>
                                        <th class="text-center">NOME DO CLIENTE</th>
                                        <th style="display: none;">></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($venda as $v)
                                    <tr>
                                        <td class="text-center idv">{{$v->idv}}</td>
                                        <td class="text-center data_venda">{{ date( 'd/m/Y' , strtotime ($v->data))}}</td>
                                        <td class="text-center cpf">{{$v->cpf}}</td>
                                        <td class="text-center nomepes">{{$v->nomepes}}</td>
                                        <td style="display: none;" class="text-center id_pessoa">{{$v->id_pessoa}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm">
                            <label for="nome_usuário">Usuário/Vendedor</label>
                            <input class="form-control" value="{{session()->get('usuario.id_usuario')}}" name="id_usuario" id="id_usuario" type="hidden" >
                            <input class="form-control" value="{{session()->get('usuario.nome')}}" name="nome_usuario" id="nome_usuario" type="text" placeholder="Vendedor" readonly>
                        </div>
                    </div>
                    <hr>
                    {{--<div id="divAddItem" style="display: none;">--}}
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <button id="btnbuscaitem" type="button" class="btn btn-warning">Buscar item catálogo</button>

                                    <button id="btncodigobarra" type="button" class="btn btn-info">Buscar item Cód barras</button>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container" id="divVendaItens">
                                <div class="row">
                                    <div class="col col-lg-4 confirmaItem1" id="DivConfirmaItem">
                                        <!--
                                        <input class="form-control" type="text" placeholder="ID" readonly>
                                        <input class="form-control" type="text" placeholder="Nome item" readonly>
                                        <input class="form-control" type="text" placeholder="Categoria" readonly>
                                        <input class="form-control" type="text" placeholder="Marca" readonly>
                                        <input class="form-control" type="text" placeholder="Tamanho" readonly>
                                        <input class="form-control" type="text" placeholder="Cor" readonly>
                                        <input class="form-control" type="text" placeholder="Tipo de material" readonly>
                                        <input class="form-control" type="text" placeholder="Fase etária" readonly>
                                        <input class="form-control" type="text" placeholder="Gênero" readonly>
                                        <input class="form-control" type="text" placeholder="Tipo de embalagem" readonly>
                                        <input class="form-control" type="text" placeholder="Qtd embalagem" readonly>
                                        <input class="form-control" type="text" placeholder="Unidade de medida" readonly>
                                        <input class="form-control" type="text" placeholder="Valor da venda" readonly>
                                        -->
                                    </div>
                                    <div class="col col-lg-2">
                                        <button type="button" id="btnAddLista" class="btn btn-success">Adicionar a lista de compras</button>
                                    </div>
                                    <div id="divListaCompras" class="col col-lg-6">
                                        <div>
                                            <table class="table table-bordered" style="display: none;">
                                                <thead class="thead-light">
                                                    <tr style="background-color: #FFFFE0">
                                                    <td >Qtd</td>
                                                    <td >Valor unit.</td>
                                                    <td >Valor total</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input class="form-control" value="1" type="text" name="qtd_item" id="qtd_item" placeholder="Qtd" readonly>
                                                        </td>
                                                        <td>
                                                            <input class="form-control" value="" type="text" name="vlr_unit" id="vlr_unit" placeholder="Vlr. Unit." readonly>
                                                        </td>
                                                        <td>
                                                            <input class="form-control" value="" type="text" name="vlr_total" id="vlr_total" placeholder="Vlr. Total" readonly>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <h6 style="color: blue;">LISTA DE COMPRAS 1</h6>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Produto</th>
                                                        <!-- <th scope="col">Desconto</th> -->
                                                        <th scope="col">Qtd.</th>
                                                        <th scope="col">Valor</th>
                                                        <th scope="col">Ações</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $total = floatval("0"); $qtde = 0 ?>
                                                    @foreach($itens_compra as $ic)
                                                        <tr>
                                                            @method('DELETE')
                                                            <td class="id_item_material">{{$ic->id_item_material}}</td>
                                                            <td>{{$ic->nomemat}}</td>
                                                            @if (floatval($ic->valor_venda)>0)
                                                                <?php
                                                                    $total += floatval($ic->valor_venda);
                                                                    $qtde ++;
                                                                ?>
                                                            @endif
                                                            <td>1</td>
                                                            <td>R$ {{number_format($ic->valor_venda,2,',','.')}}</td>
                                                            <td>
                                                                <a href="#" class="btn btn-danger btn-custom btnRemoveItem">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfooter>
                                                    <td colspan="2">TOTAL:</td>
                                                    <td>{{ $qtde }}</td>
                                                    <td>R$ <span id="vlrTotalVenda">{{number_format($total,2,'.','.')}}</span></td>
                                                    <td>&nbsp;</td>
                                                </tfooter>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>

                                <div class="row">
                                    <div class="col-12 mt-3" style="text-align: right;">
                                        <button id="btnCancVenda" type="button" class="btn btn-danger">Cancelar venda</button>
                                        <!-- <button type="submit" class="btn btn-success">Salvar</button> -->
                                        <button id="btnConcVenda" type="button" class="btn btn-info">Salvar e concluir</button>

                                    </div>
                                </div>
                        </div>
                        <br>
                </div>
        </div>
    </div>
</div>
@include('vendas/popUp-buscaritem')

    <!--
    **********************************************************************************************************************************
    * MODAL
    **********************************************************************************************************************************
    -->
    <div class="modal fade" id="divModal" data-backdrop="static" >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">&nbsp;</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="/images/loading02.gif" width="50px"><span>&nbsp;Carregando...</span>
                </div>
                <div class="modal-footer">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>


@endsection

@section('footerScript')

            <script src="{{ URL::asset('/libs/select2/select2.min.js')}}"></script>
            <script src="{{ URL::asset('/js/pages/form-advanced.init.js')}}"></script>
            <!-- Required datatable js -->
            <script src="{{ URL::asset('/libs/datatables/datatables.min.js')}}"></script>
            <script src="{{ URL::asset('/libs/jszip/jszip.min.js')}}"></script>
            <script src="{{ URL::asset('/libs/pdfmake/pdfmake.min.js')}}"></script>

            <!-- Datatable init js -->
            <script src="{{ URL::asset('/js/pages/datatables.init.js')}}"></script>
            <script src="{{ URL::asset('/js/pages/registrar-venda.init.js')}}"></script>

            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

@endsection
