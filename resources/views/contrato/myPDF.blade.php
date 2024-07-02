<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contrato PDF</title>
  </head>
  <body>

    {{-- <h1>{{ $title }}</h1>
    <p>{{ $date }}</p> --}}

    <h2>Contrato</h2>

    Nro: {{$contrato->codigo}} <br>
    Vigencia: desde {{$contrato->fecha_ini}} hasta {{$contrato->fecha_fin}} <br>

    <h2>Cliente</h2>

    Cedula: {{$contrato->vehiculo->cliente->nac}} {{$contrato->vehiculo->cliente->cedula_rif}} <br>
    Nombre: {{$contrato->vehiculo->cliente->nombre}} {{$contrato->vehiculo->cliente->apellido}} <br>

    Dirección: {{$contrato->vehiculo->cliente->direccion}} <br>

    <h2>Vehiculo</h2>
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

    <h3>Poliza contratada</h3>


    <table class="table table-bordered table-striped">

        <tbody>
                <tr>

                  <tr>
                    <td colspan="3">Terceros</td>
                  </tr>
                  <tr>
                    <td>Muerte<br> {{$contrato->plan->ter_muerte}} Bs</td>
                    <td>Invalidez<br> {{$contrato->plan->ter_invalidez}} Bs</td>
                    <td>Medicos<br> {{$contrato->plan->ter_medicos}} Bs</td>
                  </tr>
                  <tr>
                    <td>Ocupantes</td>
                  </tr>
                  <tr>
                    <td>Muerte<br> {{$contrato->plan->ocu_muerte}} Bs</td>
                    <td>Invalidez<br> {{$contrato->plan->ocu_invalidez}} Bs</td>
                    <td>Medicos<br> {{$contrato->plan->ocu_medicos}} Bs</td>
                  </tr>
                  <tr>
                    <td>Otros</td>
                  </tr>
                  <tr>
                    <td>Daños<br> {{$contrato->plan->danos}} Bs</td>
                    <td>Materiales<br> {{$contrato->plan->materiales}} Bs</td>
                    <td>Legal<br> {{$contrato->plan->legal}} Bs</td>
                    <td>Limites<br> {{$contrato->plan->limites}} Bs</td>
                  </tr>
                  <tr>
                    <td>Funerarios<br> {{$contrato->plan->funerarios}} Bs</td>
                    <td>Grua<br> {{$contrato->plan->grua}} Bs</td>
                    <td>Indemnizacion<br> {{$contrato->plan->indem}} Bs</td>
                    <td>Extraterritoria<br> {{$contrato->plan->extra}} Bs</td>
                  </tr>

                </tr>

        </tbody>

    </table>

    <h2>Factura</h2>

    <h2>Copia Factura</h2>

    <h2>Carnet</h2>

  </body>
</html>














