<div>
    <table class="table table-bordered" style="display: none;">
        <thead class="thead-light">
            <tr style="background-color: #FFFFE0">
            <td >Qtd</td>
            <td >Valor Unit.</td>
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
        <h6 style="color: red;">LISTA DE COMPRAS 2</h6>
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
            <?php $tot = floatval("0"); $qtde = 0 ?>
            @foreach($listaItemVenda as $listaItemVendas)
            <tr>
                <td class="id_item_material" scope="row">{{$listaItemVendas->id}}</td>
                <td>{{$listaItemVendas->nome}}</td>
                <!-- <td>0</td> -->
                <td>{{$listaItemVendas->qtd}}</td>
                @if (floatval($listaItemVendas->valor_venda_promocional)>0)
                    <?php $tot += floatval($listaItemVendas->valor_venda_promocional); $qtde++; ?>
                    <td>{{$listaItemVendas->valor_venda_promocional}}</td>
                @else
                    <?php $tot += floatval($listaItemVendas->valor_venda); $qtde++; ?>
                    <td>R$ {{$listaItemVendas->valor_venda}}</td>
                @endif
                <td>
                    <button type="button" value="{{$listaItemVendas->id}}"  class="btn btn-danger btn-custom btnRemoveItem"><i class="far fa-trash-alt"></i></button>
                </td>

            </tr>
            @endforeach
        </tbody>
        <tfooter>
            <td colspan="2">TOTAL:</td>
            <td>{{$qtde}}</td>
            <td>R$ <span id="vlrTotalVenda">{{number_format($tot,2,'.','.')}}</span></td>
            <td>&nbsp;</td>
        </tfooter>
    </table>
</div>
