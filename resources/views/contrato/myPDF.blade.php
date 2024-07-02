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
        .salto{ height: 3cm;}
    </style>
  </head>
  <body>

    {{-- <h1>{{ $title }}</h1>
    <p>{{ $date }}</p> --}}
    <div class="salto">

    </div>

    <h6>CONTRATO DE GARANTIAS DE DAÑOS A TERCEROS</h6>

    Nro: {{$contrato->codigo}} <br>
    Vigencia: desde {{$contrato->fecha_ini}} hasta {{$contrato->fecha_fin}} <br>
    <hr>
    <h6>DATOS DEL AFILIADO</h6>

    Cedula: {{$contrato->vehiculo->cliente->nac}} {{$contrato->vehiculo->cliente->cedula_rif}} <br>
    Nombre: {{$contrato->vehiculo->cliente->nombre}} {{$contrato->vehiculo->cliente->apellido}} <br>

    Dirección: {{$contrato->vehiculo->cliente->direccion}} <br>
    <hr>
    <h6>DATOS DEL VEHICULO</h6>
    <table>
        <tr>
            <td>
                Marca: {{$contrato->vehiculo->marca->descripcion}} <br>
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

    Monto Maximo de Cobertura: <br>
    <hr>
    <table>
        <tr>
            <td>
                <strong>Monto Total de la base imponible al valor agregado:</strong>
            </td>
            <td>
                Bs
            </td>
        </tr>
        <tr>
            <td>
                <strong>Monto Total del Impuesto al valor agregado 16%:</strong>
            </td>
            <td>
                Bs
            </td>
        </tr>
        <tr>
            <td>
                <strong>Valor Total de la Venta:</strong>
            </td>
            <td>
                Bs
            </td>
        </tr>
    </table>
    <hr>
    <p>
        <em>Para la validez de este contrato se require la firma y sello de la persona autorizada por la empresa
        </em>
    </p>



    <h6>Factura</h6>

    <h6>Copia Factura</h6>

    <h6>Carnet</h6>

  </body>
</html>














