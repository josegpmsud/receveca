<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contrato PDF</title>
    <style>
        h6{ text-align: center;  }
        .salto{ height: 2.5cm;}
        .carnet tr td, em{font-size: 12px;}
        .carnet tr td{border: 1px solid;
        border-color: black;}

    </style>
    @php
        $base = round($contrato->plan->valor/ 1.16,2);
        $iva = round($contrato->plan->valor-$base,2);
        $total = $iva+$base;

        $cobertura = $contrato->plan->ter_muerte+$contrato->plan->ter_invalidez+$contrato->plan->ter_medicos+$contrato->plan->ocu_muerte+$contrato->plan->ocu_invalidez+$contrato->plan->ocu_medicos+$contrato->plan->danos+$contrato->plan->materiales+$contrato->plan->legal+$contrato->plan->limites+$contrato->plan->funerarios+$contrato->plan->grua+$contrato->plan->indem+$contrato->plan->extra;

        $originalDate = $contrato->fecha_ini;
        $newDate = date("d/m/Y", strtotime($originalDate));
        //echo $newDate;
        $originalDate2 = $contrato->fecha_fin;
        $newDate2 = date("d/m/Y", strtotime($originalDate2));
        //echo $newDate2;
    @endphp
  </head>
  <body>

    {{-- <h1>{{ $title }}</h1>
    <p>{{ $date }}</p> --}}
    <div class="salto">

    </div>

    <h6>CONTRATO DE GARANTIAS DE DAÑOS A TERCEROS</h6>

    Nro: {{$contrato->codigo}} <br>
    Vigencia: desde
    @php
        echo $newDate;
    @endphp
    hasta
    @php
        echo $newDate2;
    @endphp <br>
    <hr>
    <h6>DATOS DEL AFILIADO</h6>

    Nombre y Apellido: {{$contrato->vehiculo->cliente->nombre}} {{$contrato->vehiculo->cliente->apellido}} <br>
    Cédula/RIF: {{$contrato->vehiculo->cliente->nac}} {{$contrato->vehiculo->cliente->cedula_rif}} <br>
    Teléfono: {{$contrato->vehiculo->cliente->telefono}}  <br>
    Dirección: {{$contrato->vehiculo->cliente->direccion}}  <br>

    Beneficiario: {{$contrato->vehiculo->cliente->b_nombre}} {{$contrato->vehiculo->cliente->b_apellido}} <br>
    Cédula/RIF: {{$contrato->vehiculo->cliente->b_nac}} {{$contrato->vehiculo->cliente->b_cedula}} <br>

    <hr>
    <h6>DATOS DEL VEHICULO</h6>
    <table>
        <tr>
            <td>
                Marca: {{$contrato->vehiculo->marca->descripcion}} <br>
                Modelo: {{$contrato->vehiculo->modelo}} <br>
                Clase: {{$contrato->vehiculo->clase->descripcion}} <br>
                Color: {{$contrato->vehiculo->color->descripcion}} <br>
                Tipo: {{$contrato->vehiculo->tipo->descripcion}} <br>
                Uso: {{$contrato->vehiculo->uso->descripcion}} <br>
            </td>


            <td>
                Placa: {{$contrato->vehiculo->placa}} <br>
                Año: {{$contrato->vehiculo->ano}} <br>
                Peso: {{$contrato->vehiculo->peso}} <br>
                Serial Motor: {{$contrato->vehiculo->serial_motor}} <br>
                Puestos: {{$contrato->vehiculo->puestos}} <br>
                Serial NIV: {{$contrato->vehiculo->serial_niv}} <br>
            </td>
        </tr>
    </table>
    <hr>
    <h6>MONTO DE RESPONSABILIDAD</h6>
    <table>
        <tr>

            <td>
                Terceros: <br>
                Muerte {{$contrato->plan->ter_muerte}} Bs <br>
                Invalidez {{$contrato->plan->ter_invalidez}} Bs <br>
                Medicos {{$contrato->plan->ter_medicos}} Bs <br>
            </td>
            <td>
                Ocupantes: <br>
                Muerte {{$contrato->plan->ocu_muerte}} Bs <br>
                Invalidez {{$contrato->plan->ocu_invalidez}} Bs <br>
                Medicos {{$contrato->plan->ocu_medicos}} Bs <br>
            </td>
            <td>
                Otros: <br>
                Daños {{$contrato->plan->danos}} Bs <br>
                Materiales {{$contrato->plan->materiales}} Bs <br>
                Legal {{$contrato->plan->legal}} Bs <br>
                Limites {{$contrato->plan->limites}} Bs <br>
            </td>
            <td>
                Funerarios {{$contrato->plan->funerarios}} Bs <br>
                Grua {{$contrato->plan->grua}} Bs <br>
                Indemnizacion {{$contrato->plan->indem}} Bs <br>
                Extraterritorial {{$contrato->plan->extra}} Bs <br>
            </td>

        </tr>
    </table>

    <strong>Monto Maximo de Cobertura:</strong>
    @php
        echo    round($cobertura,2). " Bs";
    @endphp
    <br>
    <hr>
    <table>
        <tr>
            <td>
                <strong>Monto Total de la base imponible al valor agregado:

                </strong>
            </td>
            <td>
                @php
                    echo $base . " Bs <br>";
                @endphp
            </td>
        </tr>
        <tr>
            <td>
                <strong>Monto Total del Impuesto al valor agregado 16%:</strong>
            </td>
            <td>
                @php
                    echo $iva . " Bs <br>";
                @endphp
            </td>
        </tr>
        <tr>
            <td>
                <strong>Valor Total de la Venta:</strong>
            </td>
            <td>
                <strong>{{$contrato->plan->valor}} Bs</strong>
            </td>
        </tr>
    </table>
    <hr>
    <p>
        <em>Para la validez de este contrato se require la firma y sello de la persona autorizada por la empresa
        </em>
    </p>

    <div class="salto">

    </div>

    {{-- <h6>Fecha {{$contrato->fecha_ini}}</h6> --}}
    <table>
        <tr>
            <td>
                <tr><td>Fecha:</td><td>
                    @php
                        echo $newDate;
                    @endphp
                </td></tr>
                <tr><td>Apellidos y nombres:</td><td>{{$contrato->vehiculo->cliente->apellido}} {{$contrato->vehiculo->cliente->nombre}}</td></tr>
                <tr><td>C.I/R.I.F:</td><td>{{$contrato->vehiculo->cliente->nac}} {{$contrato->vehiculo->cliente->cedula_rif}}</td></tr>
                <tr><td>Descripción:</td><td>Pago del contrato Nro: {{$contrato->codigo}} </td></tr>
                <tr><td>Teléfono:</td><td>{{$contrato->vehiculo->cliente->telefono}}</td></tr>
                <tr><td>Placa:</td><td>{{$contrato->vehiculo->placa}}</td></tr>
            </td>

        </tr>


    </table>
    <hr>
    <table>
        <tr>
            <td>
                <strong>Monto Total de la base imponible al valor agregado:</strong>
            </td>
            <td>
                @php
                    echo $base . " Bs <br>";
                @endphp
            </td>
        </tr>
        <tr>
            <td>
                <strong>Monto Total del Impuesto al valor agregado 16%:</strong>
            </td>
            <td>
                @php
                    echo $iva . " Bs <br>";
                @endphp
            </td>
        </tr>
        <tr>
            <td>
                <strong>Valor Total de la Venta:</strong>
            </td>
            <td>
                <strong>{{$contrato->plan->valor}} Bs</strong>
            </td>
        </tr>
    </table>
    <hr>
    <div class="salto"></div>
    <hr>



    {{-- <h6>Copia Factura</h6> --}}
    <table>
        <tr>
            <td>
                <tr><td>Fecha:</td><td>
                    @php
                        echo $newDate;
                    @endphp
                    </td></tr>
                <tr><td>Apellidos y nombres:</td><td>{{$contrato->vehiculo->cliente->apellido}} {{$contrato->vehiculo->cliente->nombre}}</td></tr>
                <tr><td>C.I/R.I.F:</td><td>{{$contrato->vehiculo->cliente->nac}} {{$contrato->vehiculo->cliente->cedula_rif}}</td></tr>
                <tr><td>Descripción:</td><td>Pago del contrato Nro: {{$contrato->codigo}} </td></tr>
                <tr><td>Teléfono:</td><td>{{$contrato->vehiculo->cliente->telefono}}</td></tr>
                <tr><td>Placa:</td><td>{{$contrato->vehiculo->placa}}</td></tr>
            </td>

        </tr>
    </table>
    <hr>
    <table>
        <tr>
            <td>
                <strong>Monto Total de la base imponible al valor agregado:</strong>
            </td>
            <td>
                @php
                    echo $base . " Bs <br>";
                @endphp
            </td>
        </tr>
        <tr>
            <td>
                <strong>Monto Total del Impuesto al valor agregado 16%:</strong>
            </td>
            <td>
                @php
                    echo $iva . " Bs <br>";
                @endphp
            </td>
        </tr>
        <tr>
            <td>
                <strong>Valor Total de la Venta:</strong>
            </td>
            <td>
                <strong>{{$contrato->plan->valor}}</strong> Bs
            </td>
        </tr>
    </table>
    <hr>
    {{-- <h6>Carnet</h6> --}}
    <hr>
    <table class="carnet">

        <tr>
            <td colspan="2">Afiliado: {{$contrato->vehiculo->cliente->apellido}} {{$contrato->vehiculo->cliente->nombre}}</td>
        </tr>
        <tr>
            <td>C:I/RIF: {{$contrato->vehiculo->cliente->nac}} {{$contrato->vehiculo->cliente->cedula_rif}}</td>
            <td>Placa: {{$contrato->vehiculo->placa}}</td>
        </tr>
        <tr>
            <td>Modelo: {{$contrato->vehiculo->modelo}} <br></td>
            <td>Marca: {{$contrato->vehiculo->marca->descripcion}}</td>
        </tr>
        <tr>
            <td>Color: {{$contrato->vehiculo->color->descripcion}}</td>
            <td>Año: {{$contrato->vehiculo->ano}}</td>
        </tr>
        <tr>
            <td colspan="2">Serial: {{$contrato->vehiculo->serial_motor}}</td>
        </tr>
        <tr>
            <td>Vigencia:
            @php
                echo $newDate;
            @endphp</td>
            <td>Hasta:
            @php
                echo $newDate2;
            @endphp</td>
        </tr>
        <tr>
            <td colspan="2">Nro de Contrato: {{$contrato->codigo}}</td>
        </tr>

        {{-- <td>

                <td>Esta credencial certifica que el vehiculo <br>
                    aqui descrito tiene poliza de RCV que <br>
                    cubre daños causados a personas y cosas <br>
                    a nivel nacional. <br>
                    Agradecemos a las autoridades civiles, militares <br>
                    yde transito prestar la cooperación.
                    <br>
                    <br>
                    <p>Firma Autorizada</p></td>



        </td> --}}

    </table>
  </body>
</html>
















