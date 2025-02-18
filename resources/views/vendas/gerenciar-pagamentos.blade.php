@extends('layouts.master')

@section('title') Gerenciar Pagamento @endsection

@section('headerCss')
    <link href="{{ URL::asset('/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" class="card-title" style="text-align: center; background: #088CFF; color: white;">Registrar Pagamento</h4>
                <hr>
                <div class="container">
                    <div class="row align-items-center">
                    </table>
                    <table class="table table-bordered">
                        <thead class="table-success">
                            <tr>
                                <th class="text-center">ID VENDA</th>
                                <th class="text-center">DATA DA VENDA</th>
                                <th class="text-center">CPF DO CLIENTE</th>
                                <th class="text-center">NOME DO CLIENTE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vendas as $v)
                            <tr>
                                <td class="text-center">{{$v->idv}}</td>
                                <td class="text-center">{{ date( 'd/m/Y' , strtotime ($v->data))}}</td>
                                <td class="text-center">{{$v->cpf}}</td>
                                <td class="text-center">{{$v->nomepes}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-6">
                        <h6 class="font-weight-bold" style="color: blue;">LISTA DE COMPRAS</h6>
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr style="background-color: #f1f1f1; text-align:center; ">
                                    <td style=text-align:right>QUANTIDADE</td>
                                    <td style=font-size:18px;>{{$total_itens}}</td>
                                    <td style=text-align:right>VALOR TOTAL</td>
                                    <td style=font-size:18px;>{{number_format($total_preco,2,',','.')}}</td>
                                    </tr>
                                </thead>
                            </table>
                            <table class="table table-bordered">
                                <thead class="table-success" style= "text-align:center; background-color:#f1f1f1;">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">PRODUTO</th>
                                        <th scope="col">DESCONTO</th>
                                        <th scope="col">VALOR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($itens_compra as $ic)
                                    <tr>
                                        <td>{{$ic->id_item_material}}</td>
                                        <td>{{$ic->nomemat}}</td>
                                        <td></td>
                                        <td>{{number_format($ic->valor_venda,2,',','.')}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col col-lg-6">
                        <h6 class="font-weight-bold" style="color: blue;">REGISTRAR PAGAMENTOS</h6>
                        @foreach($vendas as $v)
                        <form class="form-horizontal mt-4" method="POST" action="/gerenciar-pagamentos/{{$v->idv}}">
                        @csrf
                        @endforeach
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #ffb40a; font-size:18px;" type="text">Forma de pagamento</button>
                            </div>
                            <select class="form-control" id="forma" name="forma" required="required" style="font-size:18px;">
                                <option>Escolher...</option>
                                @foreach($tipos_pagamento as $tp)
                                <option value="{{$tp->id}}">"{{$tp->nome}}"</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" style="font-size:18px;" step="any" min="0" class="form-control" id="valor" name="valor" placeholder="Valor">
                                <div class="input-group-append">
                                <button type="submit"  style="background-color: #ffb40a; font-size:18px;" class="btn btn-outline-secundary" id="button-addon2">>>Confirmar Valor</button>
                        </form>
                                </div>
                        </div>
                            <div class="input-group mb-3">
                                <table class="table table-bordered">
                                <h6 class="font-weight-bold" style="color: blue;">PAGAMENTOS REALIZADOS</h6>
                                    <thead class="table-success" style="text-align:center;vertical-align:middle; background: #f1f1f1";>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">ESPECIFICAÇÃO</th>
                                            <th scope="col">VALOR</th>
                                            <th scope="col">AÇÕES</th>
                                        </tr>
                                    </thead>
                                    <tbody style='text-align:center;vertical-align:middle'>
                                    @foreach($pagamentos as $pg)
                                    <form action="/gerenciar-pagamentos/{{$pg->pid}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <tr>
                                            <td>{{$pg->pid}}</td>
                                            <td>{{$pg->nome}}</td>
                                            <td>{{number_format($pg->valor,2,',','.')}}</td>
                                            <td>
                                            <button type="submit" class="btn btn-danger btn-sm" font-size= 50px><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </form> @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="input-group mb-3">
                                <table class="table table-bordered">
                                    <button type="button" value="{{--$results->id--}}" id="btnAlterarEmbalagem" class="btn btn-warning waves-effect waves-light classBtnAlterar" data-toggle="modal" data-target=".bs-example-modal-lg">Calcular troco</button>
                                    <tbody style='text-align:center;vertical-align:middle; font-size:15px;'>
                                        <tr>
                                        <td style="text-align:left;">Descontos:</td><td style="text-align:left;">R$</td></tr>
                                        <tr style="text-align:left;"><td>Pagamentos:</td><td style="text-align:left;">{{number_format($total_pago,2,',','.')}}</td></tr>
                                        </tr>
                                        <tr style="background-color: #FFFF00; text-align:right;font-weight:bold;"><td>Total da venda:</td><td style="text-align:left;font-size:18px;">{{number_format($total_preco,2,',','.')}}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-12 mt-3" style="text-align: right;">
                        @foreach($vendas as $vd)
                            <a href="/gerenciar-vendas"  type="button" class="btn btn-danger">Cancelar</a>
                            <a href="/demonstrativo/{{$vd->idv}}"  type="button" class="btn btn-info">Exportar</a>
                            <a href="/gerenciar-vendas/finalizar/{{$vd->idv}}" type="button" class="btn btn-success">Concluir Pagamento</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footerScript')
            <script src="{{ URL::asset('/js/pages/mascaras.init.js')}}"></script>
            <script src="{{ URL::asset('/js/pages/busca-cep.init.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
            <script src="{{ URL::asset('/libs/select2/select2.min.js')}}"></script>
            <script src="{{ URL::asset('/js/pages/form-advanced.init.js')}}"></script>
@endsection
