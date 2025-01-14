@extends('layouts.master')

@section('title') Data Tables @endsection

@section('content')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center; background: #088CFF; color: white;">Cadastro inicial</h4>
                    <hr>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm">
                                <form action="{{route('cadastroinicial.index')}}" class="form-horizontal mt-4" method="GET" >
                                <label for="" class="form-label">Início</label>
                                <input type="date" name="data_inicio" value="{{$data_inicio}}">
                            </div>
                            <div class="col-sm">
                                <label for="" class="form-label">Final</label>
                                <input type="date" name="data_fim" value="{{$data_fim}}">
                            </div>
                            {{--<div class="col-sm">
                                <select class="form-control"><option>Selecione a Categoria</option>
                                @Foreach($result as $results)
                                <option value="{{$result->id}}">{{$result->nome}}</option>
                                @endForeach
                                </select>
                            </div>
                            <div class="col-sm">
                                <select class="form-control"><option>Selecione a Situação</option>
                                @Foreach($result as $results)
                                <option value="{{$result->id}}">{{$result->nome}}</option>
                                @endForeach
                                </select>
                            </div>--}}
                            <div class="col-1">
                                Doado<br><input type="checkbox" id="switch3" switch="bool" checked/>
                                <label for="switch3" data-on-label="Sim" data-off-label="Não"></label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <input class="form-control" type="text" name="material" placeholder="Nome do material">
                            </div>
                            <div class="col-md-2 text-center">
                                <input class="btn btn-primary" type="submit" value="Pesquisar">
                            </div>
                            <div class="col-1">
                                <a href="/gerenciar-cadastro-inicial">
                                    <input class="btn btn-danger" type="button" value="Limpar">
                                </a>
                            </div>
                            </form>
                            <div class="col-2">
                                <a href="/gerenciar-cadastro-inicial/incluir"><input class="btn btn-success" type="button" value="Novo Cadastro +"></a>
                            </div>
                            <div class="col-3">
                                <a href="/barcode">
                                <input class="btn btn-info" type="button" value="Cód Barras da pesquisa">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead >
                                        <tr align="center">
                                            <th>CÓDIGO</th>
                                            <th>NOME</th>
                                            <th>DATA</th>
                                            <th>MARCA</th>
                                            <th>TAMANHO</th>
                                            <th>COR</th>
                                            <th>VALOR</th>
                                            <th>AÇÕES</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($result as $results)
                                        <tr>
                                            <td>{{$results->id}}</td>
                                            <td>{{$results->n1}}</td>
                                            <td>{{date( 'd/m/Y' , strtotime($results->data_cadastro))}}</td>
                                            <td>{{$results->n2}}</td>
                                            <td>{{$results->n3}}</td>
                                            <td>{{$results->n4}}</td>
                                            <td>{{number_format($results->valor_venda,2,',','.')}}</td>
                                            <td>
                                                <a href="/editar-cadastro-inicial/{{$results->id}}">
                                                <input class="btn btn-warning" type="button" value="Alterar">
                                                </a>
                                                <a href="/gerenciar-cadastro-inicial/excluir/{{$results->id}}">
                                                    <input class="btn btn-danger" type="button" value="Excluir">
                                                </a>
                                                <a href="/item_material/{{$results->id}}">
                                                    <input class="btn btn-info" type="button" value="Cód Barras">
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footerScript')
 <!-- Required datatable js -->

            <script src="{{ URL::asset('/libs/jszip/jszip.min.js')}}"></script>
            <script src="{{ URL::asset('/libs/pdfmake/pdfmake.min.js')}}"></script>

            <!-- Datatable init js -->
            <script src="{{ URL::asset('/js/pages/cad-tipo-material.init.js')}}"></script>
            <script src="{{ URL::asset('/js/pages/datatables.init.js')}}"></script>

            @endsection

